@extends('layouts.app')
@section('content')
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Contact Us header-->
                            <header class="mb-8">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Edit Post</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">Express your mind!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                               <a href="#!"><img class="card-img-top" src="{{URL::to('images/'.$data2->img_link.'')}}" alt="..." /></a>
                                    
                                <form method="post" action="/edit" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$data2['id']}}">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input type="text" name="title" class="form-control mb-1" value=" {{$data2['title']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea class="form-control mb-1" name="description" id="exampleFormControlTextarea1" rows="3" value=" {{$data2['description']}}" placeholder="type the description here!"  required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea class="form-control mb-1" name="content" id="exampleFormControlTextarea1" rows="5" value=" {{$data2['content']}}" placeholder="type the content here!" required=""></textarea>
                                    </div>
                                    
                                   
                                    <button type="submit" class="btn btn-primary mt-5">edit</button>
                                </form>
                            </section>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <!-- Side widgets-->
               
            </div>
        </div>
@endsection  