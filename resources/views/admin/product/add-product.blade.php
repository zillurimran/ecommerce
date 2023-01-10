@extends('admin.master')
@section('title')
    Add Product
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                        <div class="card-body">
                            <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input class="form-control"  type="text" placeholder="product name" name="product_name" />
                                    <label>Product Name</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control"  type="text" placeholder="category name" name="category_name" />
                                            <label>Category Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control"  type="text" placeholder="brand name" name="brand_name" />
                                            <label>Brand Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control"  type="text" placeholder="product name" name="price" />
                                    <label>Product Price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="description" class="form-control"></textarea>
                                    <label>Description</label>
                                </div>
                                <div class="mb-3">
                                    <input  type="file"  name="image" class="form-control" />

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
