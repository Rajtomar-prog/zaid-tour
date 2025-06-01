@extends('admin.layouts.admin-app')
@section('page_title', 'Users')

@section('main_headeing', 'User List')
@section('sub_headeing', 'User List')

@section('content_section')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="card">

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success! </strong> {{ $message }}
                </div>
                @endif

                <div class="card-header">
                    <h3 class="card-title">Users</h3>
                    <a href="{{ route('users.create') }}" class="btn btn-primary pull-right">Add New User</a>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ ($user->status)?'Active':'Pending' }}</td>
                                <td>
                                    <a class="btn btn-outline-info btn-sm" href="{{ route('users.show',$user->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    @can('role-edit')
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('users.edit',$user->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @endcan

                                    @can('role-delete')
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}"
                                        style="display:inline" onsubmit="return confirm_delete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
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