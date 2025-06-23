@extends('admin.layouts.admin-app')
@section('page_title', 'Roles')

@section('main_headeing', 'Create New Role')
@section('sub_headeing', 'Create New Role')

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
                    <h3 class="card-title">Create New Role</h3>
                    <a href="{{ route('roles.index') }}" class="btn btn-primary custom-btn">Back</a>
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
                            <form method="POST" action="{{ route('roles.store') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="lbl-text">Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" placeholder="Name" class="form-control"
                                                value="{{ old('name') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="lbl-text">Permissions<span
                                                    class="text-danger">*</span></label><br>
                                            @foreach($permission as $value)
                                            <label><input type="checkbox" name="permission[{{$value->id}}]"
                                                    value="{{$value->id}}" class="name">
                                                {{ $value->name }}</label>
                                            <br />
                                            @endforeach
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