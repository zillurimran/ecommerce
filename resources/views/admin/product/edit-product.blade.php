@extends('admin.master')
@section('title')
    Update Product
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Product</h3></div>
                        <div class="card-body">
                            <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="form-floating mb-3">
                                    <input class="form-control"  type="text" placeholder="product name" value="{{$product->product_name}}" name="product_name" />
                                    <label>Product Name</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control"  type="text" placeholder="category name" value="{{$product->category_name}}" name="category_name" />
                                            <label>Category Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control"  type="text" placeholder="brand name" value="{{$product->brand_name}}" name="brand_name" />
                                            <label>Brand Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control"  type="text" placeholder="product name" value="{{$product->price}}"  name="price" />
                                    <label>Product Price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="description" class="form-control">{{$product->description}}</textarea>
                                    <label>Description</label>
                                </div>
                                <div class="mb-3">
                                    <input  type="file"  name="image" class="form-control" />

                                </div>
                                <div class="mb-3">
                                    <label>Previous Image</label>
                                    <img src="{{asset($product->image)}}" alt="" height="50px" width="50px">

                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block mb-lg-5">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

