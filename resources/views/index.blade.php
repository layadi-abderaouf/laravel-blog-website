@extends('layout')
@section('content')
<style>
    .a1{
        color:black
    }
    .hero-bg-image{
        background:url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?fit=crop&w=1470') no-repeat center center/cover;
        background-attachment: fixed;
        height: 600px;
    }
</style>


<div class="hero-bg-image align-items-center justify-content-center d-flex flex-column">
    <h3 class="text-white  h1 text-uppercase pb-5">Welcome to my blog</h3>
    <a class="a1 bg-secondary py-4 px-5 rounded fw-bold text-uppercase fs-5" href="/">Start reading</a>
</div>


<div class="container row m-3 mx-auto mb-4 py-5">
    <div class="col ">
        <img class="rounded w-100" src="https://picsum.photos/960/620" alt="">
    </div>
    <div class="col d-flex flex-column align-items-left justify-content-center">
        <h2 class="text-uppercase fw-bold fs-1">How to be an expert in 2023</h2>

        <p class="fw-bold fs-5 pt-2">you can find all subject in my blog</p>


        <p class="py-2 fs-6">you can find all subject in my blog .
             you can find all subject in my blog
             / you can find all subject in my blog
            
        </p>


        <a class="a1 bg-secondary py-4 px-5 rounded text-uppercase align-self-start" href="">Read More</a>
    </div>
</div>


<div class="text-center p-5 bg-secondary text-white">
    <h2>Blog Category</h2>
    <div class="container mx-auto pt-5 d-flex flex-row justify-content-around">
        <div class="py-2 fw-bold fs-4">Python Programming</div>
        <div class="py-2 fw-bold fs-4">Web Developer</div>
        <div class="py-2 fw-bold fs-4">Data Science</div>
        <div class="py-2 fw-bold fs-4">3D Model</div>
    </div>
</div>


<div class="container mx-auto text-center py-5">
   <h2 class="py-4 fw-bold fs-1">Recent Post</h2>
   <p class="text-secondary lead px-4">
        For more information on the new features and other changes, you can read the NEWS file or the UPGRADING file for a complete list of upgrading notes. These files can also be found in the release archive.

        The next release will be the production-ready, general availability release, planned for December 8th 2022.

        The signatures for the release can be found in the manifest or on the QA site.
   </p>
</div>

<div class="container mb-5 row mx-auto ">
   <div style="background:#ac5442" class="col-6 d-flex  text-white pt-4">
       <div class="d-block m-auto pt-5 pb-5">

           <div>
               <ul style="list-style-type: none;  " class=" d-flex gap-3">
                   <li style="color:#ac5442 " class="bg-warning p-2 rounded">
                       <a class="text-white a1" href="">PHP</a>
                   </li>
                   <li style="color:#ac5442 " class="bg-warning p-2 rounded">
                       <a class="text-white a1" href="">Design</a>
                   </li>
                   <li style="color:#ac5442 " class="bg-warning p-2 rounded">
                       <a class="a1 text-white" href="">BackEnd</a>
                   </li>
                   <li style="color:#ac5442 " class="bg-warning p-2 rounded">
                       <a class="a1 text-white" href="">FrontEnd</a>
                   </li>
               </ul>
           </div>   

           <h3 class="p-5 lead fs-4">
                For more information on the new features and other changes, you can read the NEWS file or the UPGRADING file for a complete list of upgrading notes. These files can also be found in the release archive.

                The next release will be the production-ready, general availability release, planned for December 8th 2022.

                The signatures for the release can be found in the manifest or on the QA site.
           </h3>
           <a class="a1 m-3 text-white d-inline-block py-4 px-5 rounded fw-bold border" href="">Read More</a>
       </div>
   </div>
   <div class="col-6 d-flex">
      <img class=" w-100 object-fit-cover" src="https://picsum.photos/id/242/960/620" alt="">
   </div>
  
</div>
<br>

@endsection