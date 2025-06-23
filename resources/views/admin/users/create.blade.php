@extends('admin.layouts.admin-app')
@section('page_title', 'Users')

@section('main_headeing', 'Create New User')
@section('sub_headeing', 'Create New User')

@section('content_section')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Inline Charts</li>
            </ol>
            </div>
            <br>
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create New User</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-primary custom-btn">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <div class="tab-pane fade active show" id="pills-basic" role="tabpanel">
                        <div class="basic-content">
                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" placeholder="Name" class="form-control"
                                                value="{{ old('name') }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Email<span class="text-danger">*</span></label>
                                            <input type="email" name="email" placeholder="Email" class="form-control"
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Password<span class="text-danger">*</span></label>
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Confirm Password<span
                                                    class="text-danger">*</span></label>
                                            <input type="password" name="confirm-password"
                                                placeholder="Confirm Password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Roles<span class="text-danger">*</span></label>
                                            <select name="roles[]" class="form-control">
                                                @foreach ($roles as $value => $label)
                                                <option value="{{ $value }}" {{ (old('roles')==$value)?'selected':'' }}>
                                                    {{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Status<span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ (old('status')==1)?'selected':'' }}>Active</option>
                                                <option value="0" {{ (old('status')==0)?'selected':'' }}>Pending
                                                </option>
                                            </select>
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