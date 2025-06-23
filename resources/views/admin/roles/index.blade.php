@extends('admin.layouts.admin-app')
@section('page_title', 'Roles')

@section('main_headeing', 'Role List')
@section('sub_headeing', 'Role List')

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

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success! </strong> {{ $message }}
                </div>
                @endif

                <div class="card-header">
                    <h3 class="card-title">Roles</h3>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary custom-btn">Add New Role</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a class="btn btn-outline-info btn-sm" href="{{ route('roles.show',$role->id) }}"><i
                                            class="fa fa-eye"></i></a>
                                    @can('role-edit')
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('roles.edit',$role->id) }}"><i
                                            class="fa fa-edit"></i></a>
                                    @endcan

                                    @can('role-delete')
                                    <form method="POST" action="{{ route('roles.destroy', $role->id) }}"
                                        style="display:inline" onsubmit="return confirm_delete()">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<script>
function confirm_delete() {
    return confirm('Do you really want to delete this item?');
}
</script>
@endsection

@section('additional_css')
@endsection