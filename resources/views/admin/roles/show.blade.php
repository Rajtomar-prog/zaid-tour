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
            <br>
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Details</h3>
                    <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">Name</th>
                                    <td width="70%">{{ $role->name }}</td>
                                </tr>
                                <tr>
                                    <th>Permissions</th>
                                    <td>
                                        @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                        <label class="badge badge-success">{{ $v->name }}</label>
                                        @endforeach
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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