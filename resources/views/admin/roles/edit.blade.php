@extends('admin.layouts.admin-app')
@section('page_title', 'Users')

@section('main_headeing', 'User Show')
@section('sub_headeing', 'User Show')

@section('content_section')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Details</h3>
                    <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
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

                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" placeholder="Name" class="form-control"
                                        value="{{ $role->name }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach($permission as $value)
                                    <label><input type="checkbox" name="permission[{{$value->id}}]"
                                            value="{{$value->id}}" class="name"
                                            {{ in_array($value->id, $rolePermissions) ? 'checked' : ''}}>
                                        {{ $value->name }}</label>
                                    <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm mb-3"><i
                                        class="fa-solid fa-floppy-disk"></i>
                                    Submit</button>
                            </div>
                        </div>
                    </form>
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