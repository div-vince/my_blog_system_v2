@extends('layouts.admin')

@section('content')


    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-12">
                <h2>Users</h2>
            </div>
            <div class="col-md-6 col-12 text-right mt-2">
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">New User</a>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-sm table-hover mb-0">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Action</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($users) && $users->count() > 0)
                    @foreach ($users as $index => $user)
                    <tr>
                      <th scope="row">{{ $index + 1}}</th>
                      <td>
                          <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-success">Edit</a>
                          <button onclick="confirmDelete({{ $user->id }})" class="btn btn-sm btn-danger">Delete</button>
                      </td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if($user->role_id == 1)
                          <span class="badge badge-danger">Administrator</span>
                        @elseif($user->role_id == 2)
                          <span class="badge badge-warning">Supervisor</span>
                        @else
                          <span class="badge badge-secondary">Trainee</span>
                        @endif
                        
                      </td>
                    </tr>
                    @endforeach
                  @else
                    <div class="alert alert-danger">No Users found</div>
                  @endif()
            </tbody>
        </table>
            @if(isset($user_name))
              <div class="alert alert-success m-2">
                <strong>Success!</strong> {{ $user_name }}'s information has been successfully updated.
              </div>
            @endif
      </div>
  </div>


@endsection