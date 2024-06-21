@extends('layout')
@section('content')


@if (session()->has('message'))
<div class="alert alert-success" role="alert">
    {{session()->get('message')}}
  </div>
 
@endif
  




 <div class="container m-auto text-center pt-5 pb-3 ">
    <h1 class="fw-bold ">{{$post['title']}}</h1>
    <div class="mt-2">
        by : <span class="fs-6 font-italic">{{$post->user->name}}</span>
        /  On : <span class="fs-6 font-italic">{{ date( 'd-m-y', strtotime($post['updated_at']) ) }}</span>
    </div>
 </div>

 <div class="container m-auto  pt-5 pb-3 ">
    <div class=" d-flex">
        <img height="400" class="w-100 " src="/images/{{$post['image']}}" alt="">
    </div>
    <div class="py-3  mb-5 lead">
        {{$post['description']}}
    </div>
    @if(Auth::user() && Auth::user()->id == $post['user_id'])
    <a href="{{route('blog.edit',$post['slug'])}}" 
       class="fw-bold text-white bg-success py-4 px-5 mt-3 fs-5  
       rounded text-uppercase align-self-start" >edit Post</a>
       
       <form action="{{route('blog.destroy',$post['slug'])}}" method="post" class="d-inline-block">
           @csrf
           @method('delete')
           <button type="submit"  
           class="fw-bold text-white bg-danger py-4 px-5 mt-3  
           rounded text-uppercase align-self-start" >delete Post</button>
       </form>
      
    @endif
   
    
 </div>
@endsection