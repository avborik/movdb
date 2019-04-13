@extends('layouts.admin')
@section('content')

<div class="col-sm-5">
    @component('admin.includes.title')
       Edit Categories
    @endcomponent
        <form method="POST" action="/admin/categories/{{$category->id}}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control" name="name"
                placeholder="Enter a category" value="{{$category->name}}">
                </div>

                <button type="submit" class="btn btn-primary">Add category</button>
                @component('admin.includes.formErrors')

                @endcomponent
            </form>
</div>
    

@endsection