
@extends('admin.master')
@section('title')
    Manage Product
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Manage User</h3>
            <h5>{{session('message')}}</h5>


            <div class="card mb-4">

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>User email</th>

                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php $i=1 @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>


                                <td class="d-flex">
                                    <a href="{{route('edit.user',['id'=>$user->id])}}" class="btn btn-sm btn-primary">Edit</a>&nbsp;


                                    <form action="{{route('delete.product')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$user->id}}">
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
