@extends('admin.master')
@section('title')
    Manage Product
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Manage Product</h3>
            <h5>{{session('message')}}</h5>


            <div class="card mb-4">

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @php $i=1 @endphp
                        @foreach($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" height="50px" width="50px">
                                </td>
                                <td>{{$product->status==1? 'Published':'Unpublished'}}</td>
                                <td class="d-flex">
                                    <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-sm btn-primary">Edit</a>
                                    @if($product->status==1)
                                        <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-sm btn-warning mx-1">Unpublished</a>
                                    @else
                                        <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-sm btn-success mx-1">Published</a>
                                    @endif

                                    <form action="{{route('delete.product')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
