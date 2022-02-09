@extends('layouts.app')
@section('content')
        
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$data['title'];}}</h1>
                            
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{$mysqldate = date('g:i a \o\n l jS F Y', strtotime($data['created_at']))}}</div>
                            <!-- Post categories-->
                            <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="card-img-top"  src="{{URL::to('images/'.$data->img_link.'')}}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$data['content'];}}</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->

                                <form class="mb-4" action="/a" method="post" enctype="multipart/form-data">
                                     @csrf
                                    <div>
                                        <input type="hidden" name="article_id" value="{{$data['id'];}}" >
                                        <textarea class="form-control mb-2" rows="3" name="comment" placeholder="comment here!"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </form>
                                <!-- Comment with nested comments-->
                                @foreach($data2 as $comment)
                                <div class="d-flex mb-4">
                                    <!-- Parent comment--> 
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    
                                    <div class="ms-3">

                                        <div class="fw-bold">{{ Auth::user()->name }}</div> 
                                        {{$comment['comment']}}
                                        <!-- Child comment 1--> 
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">

                            <div class="row">                            
                                @foreach($cat as $cat)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">{{ $cat['category']}}</a></li>
                                        
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
@endsection       