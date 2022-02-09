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
                                <h1 class="fw-bolder mb-1">Create a new Post</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">Express your mind!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <form method="post" action="/p" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Image</label>
                                    <input name="img_link" class="form-control" type="file" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input type="text" name="title" class="form-control mb-1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea class="form-control mb-1" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea class="form-control mb-1" name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row">
                                            @foreach($data2 as $data)
                                            <div class="col-lg-6">

                                                <div class="form-check">
                                                    
                                                    <input class="form-check-input" name="1" type="checkbox" value="{{$data['id']}}" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                      {{$data['category']}}
                                                    </label>
                                                   
                                                </div>
                                            </div>
                                             @endforeach
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-5">Post</button>
                                </form>
                            </section>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
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
                                @foreach($data2 as $data)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">{{$data['category']}}</a></li>
                                        
                                    </ul>
                                </div>
                                @endforeach
                                <br>
                            </div>
                            <br>
                            <div>
                            <form action="/c" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                    <input type="text" name="category" class="form-control" placeholder="add new category....">
                                    <br>
                                    <button type="submit" class="btn btn-primary">ADD</button>
                                </form>
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