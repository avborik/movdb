@extends('layouts.admin')
@section('content')

<div class="col-sm-11">

    @component('admin.includes.title')
      Add post
    @endcomponent
    <form action="/admin/posts" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="file">Movie pic</label>
                    <div>
                    <img src="{{url('images/no_movie_ph.png')}}" id="profile-img-tag" alt="Movie picture" width="295px">
                    </div>
                    <input type="file" name="file" id="profile-img">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                     <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter a post title">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" class="form-control">
                            <option disabled selected>Select a category</option>
                            @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="review">Review</label>
                        <textarea id="article-ckeditor" class="form-control" rows="5" name="review">

                        </textarea>
                    </div>
                       <button class="btn btn-primary">Add Post</button>
                </div>
               
            </div>

        </div>
        
        @component('admin.includes.formErrors')

        @endcomponent
    </form>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection