@extends('admin.layouts.admin-app')
@section('page_title', 'Users')

@section('main_headeing', 'Update User')
@section('sub_headeing', 'Update User')

@section('content_section')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
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
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update User</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-primary pull-right">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-pane fade active show" id="pills-basic" role="tabpanel">
                        <div class="basic-content">
                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" placeholder="Name" class="form-control"
                                                value="{{ $user->name }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Email<span class="text-danger">*</span></label>
                                            <input type="email" name="email" placeholder="Email" class="form-control"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Password</label>
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Confirm Password</label>
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
                                                <option value="{{ $value }}"
                                                    {{ isset($userRole[$value]) ? 'selected' : ''}}>
                                                    {{ $label }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="lbl-text">Status<span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ ($user->status==1)?'selected':'' }}>Active</option>
                                                <option value="0" {{ ($user->status==0)?'selected':'' }}>Pending</option>
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