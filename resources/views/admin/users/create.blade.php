@extends('layouts.admin')
@section('content')

    @component('admin.includes.title')
      Add  Administrators / Authors
    @endcomponent
    <form action="/admin/users" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter a user name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Create a password</label>
            <input type="password" class="form-control" name="password" placeholder="Add a password">
        </div>

        <div class="form-group">
            <label for="role_id">Role</label>
            <select name="role_id" class="form-control">
                <option>Select a role</option>
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option> 
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="active">Active</label>
            <select name="active" class="form-control">
                <option>Select a status</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </div>
        <button class="btn btn-primary">Add user</button>
    </form>
@endsection