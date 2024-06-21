@extends('layout')
@section('content')
 <div class="container m-auto text-center pt-5 pb-3 ">
    <h1 class="fw-bold border-bottom">Edit Post</h1>
 </div>

 <div class="container m-auto  pt-5 pb-3 ">
    <form action="{{route('blog.update',$post['slug'])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
       <input placeholder="title"
              type="text" 
              name="title"
              value="{{$post['title']}}" 
              class="w-100 fs-2 rounded border shadow p-2 mb-3">


            @error('title')
            
              <div class="alert alert-danger" role="alert">
                 {{$message}}
              </div>
            @enderror
       <textarea
            name="description"
            
            placeholder="description" rows="7"
            class="w-100 fs-5 rounded border shadow p-5 mb-3">{{$post['description']}}
        </textarea>

        @error('description')
            
            <div class="alert alert-danger" role="alert">
               {{$message}}
            </div>
        @enderror
       

        <div class="mb-3 ">
            <label for="formFile" class="form-label ">post image :</label>
            <input  class="form-control shadow" name="image" type="file" id="formFile">
        </div>
       

       <input type="submit" class=" btn btn-outline-success p-3 mt-5 " value="Edit post">
    </form>
 </div>
@endsection