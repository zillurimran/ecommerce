@extends('admin.master')
@section('title')
    Update User
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Update User</h3></div>
                        <div class="card-body">
                            <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <div class="form-floating mb-3">
                                    <input class="form-control"  type="text" placeholder="user name" value="{{$user->name}}" name="name" />
                                    <label>User Name</label>
                                </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control"  type="text" placeholder="email" value="{{$user->email}}" name="email" />
                                            <label>Email</label>
                                        </div>

                                @if(Auth::user()->id == $user->id)
                                    <div class="form-floating mb-3">
                                        <input class="form-control"  type="text" placeholder="password"  name="password" />
                                        <label>Password</label>
                                    </div>

                                @endif

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


