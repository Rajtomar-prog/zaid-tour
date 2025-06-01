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
                    <h3 class="card-title">User List</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="30%">Name</th>
                                    <td width="70%">{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($user->status)
                                            <label class="badge badge-success">Active</label>
                                        @else
                                            <label class="badge badge-warning">Pending</label>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
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