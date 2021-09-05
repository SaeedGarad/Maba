@extends('admin.adminLayout')
@section('content')
        <hr />
        <div class="row">
            <div class="col-sm-10">
                <h1>Profile</h1>
            </div>
        </div>
        <hr />
        <form class="form" action="{{ route('profile.update',$user->id) }}" method="post" id="registrationForm" enctype="multipart/form-data">
            @csrf
            @method('put')
        <div class="row">
            <div class="col-sm-3">
                <!-- left col -->

                <div class="text-center">
                    <img src="/image/{{ $user->image }}"
                        class="avatar rounded-circle img-thumbnail" alt="avatar" />
                    <h6>Upload a different photo...</h6>
                    <input id="image" name="image" type="file" class="text-center center-block file-upload" />
                </div>
                <br />
            </div>
            <!-- /col-3 -->
            <div class="col-sm-9">

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="firstName">
                                <h4>First name</h4>
                            </label>
                            <input type="text" class="form-control" name="firstName" id="first_name"
                                placeholder="first name"  value="{{ $user->firstName }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="lastName">
                                <h4>Last name</h4>
                            </label>
                            <input type="text" class="form-control" name="lastName" id="last_name"
                                placeholder="last name" value="{{ $user->lastName }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="phone">
                                <h4>Phone</h4>
                            </label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone"
                            value="{{ $user->phone }}" />
                        </div>
                    </div>


                    {{--  <div class="form-group">
                        <div class="col-xs-6">
                            <label for="mobile">
                                <h4>Mobile</h4>
                            </label>
                            <input type="text" class="form-control" name="mobile" id="mobile"
                                placeholder="enter mobile number" value="{{ $user->mobile }}" />
                        </div>
                    </div>  --}}


                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com"
                            value="{{ $user->email }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="location">
                                <h4>Location</h4>
                            </label>
                            <input type="text" class="form-control" name="location" id="location" placeholder="somewhere"
                            value="{{ $user->location }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br />
                            <button class="btn btn-lg btn-success  d-flex" type="submit">
                                <i class="material-icons mr-1"> save </i> Save
                            </button>
                        </div>
                    </div>
                </form>

                <hr />
            </div>
            <!-- /tab-content -->
        </div>
        <!-- /col-9 -->
@endsection
