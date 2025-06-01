@extends('admin.layouts.admin-app')
@section('page_title', 'My Account')

@section('main_headeing', 'Update My Account')
@section('sub_headeing', 'Update My Account')

@section('content_section')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Account</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="col-sm-12">
                        <center>
                            <img src="{{ asset('storage/' . $user->profile->avatar) }}" class="img-circle img-thumbnail" style="width:100px;"><hr>
                        </center>
                    </div>

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success! </strong> {{ $message }}
                    </div>
                    @endif

                    <div class="tab-pane fade active show" id="pills-basic" role="tabpanel">
                        <div class="basic-content">
                            <form action="{{ route('profile_update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" placeholder="Name" class="form-control"
                                                value="{{ $user->name }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Email<span class="text-danger">*</span></label>
                                            <input type="text" name="email" placeholder="Email" class="form-control"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Bio<span class="text-danger">*</span></label>
                                            <input type="text" name="bio" placeholder="Name" class="form-control"
                                                value="{{ $user->profile->bio }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Avatar<span class="text-danger">*</span></label>
                                            <input type="file" name="avatar" placeholder="Avatar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Mobile No.<span class="text-danger">*</span></label>
                                            <input type="text" name="mobile" placeholder="Mobile" class="form-control"
                                                value="{{ $user->profile->mobile }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Address<span class="text-danger">*</span></label>
                                            <input type="text" name="address" placeholder="Address" class="form-control"
                                                value="{{ $user->profile->address }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-action-CTA">
                                    <button type="submit" class="btn btn-primary custom-btn">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection


@section('additional_js')
@endsection

@section('additional_css')
@endsection