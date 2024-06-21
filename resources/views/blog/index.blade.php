@extends('layout')
@section('content')


@if (session()->has('message'))
<div class="alert alert-danger" role="alert">
    {{session()->get('message')}}
  </div>
 
@endif

<div class="container m-auto text-center pt-5 pb-3 ">
   <h1 class="fw-bold">All Posts</h1>
</div>




@foreach ($posts as $post)
    

<div  class="row container border-bottom  mx-auto py-5 px-3">
    <div class="col-6 d-flex">
        <img width="540" height="260" src="/images/{{$post['image']}}" alt="">
    </div>
    <div class="col-6 ">
        <h2 class=" ">{{$post['title']}}</h2>
        <span>
            by : <span class="fs-6 font-italic">{{$post->user->name}}</span>
        </span> |
        <span>
            On : <span class="fs-6 font-italic">{{ date( 'd-m-y', strtotime($post['updated_at']) ) }}</span>
        </span>
        <p class="py-4 lead">
            {{ substr($post['description'],0,100) }} ....
        </p>
        <a href="{{route('blog.show',$post['slug'])}}" class="fw-bold text-white bg-secondary py-4 px-5 rounded text-uppercase align-self-start" >Read More</a>
    </div>
    
</div>


@endforeach








@endsection