@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                
                    <!-- Featured blog post-->
                    @foreach($data as $data)
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{URL::to('images/'.$data->img_link.'')}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$mysqldate = date('g:i a \o\n l jS F Y', strtotime($data['created_at']))}}</div>
                            <h2 class="card-title">{{ $data['title']}}</h2>
                            <p class="card-text">{{ $data['description']}}</p>
                            
                            <a class="btn btn-primary" href="{{ route('article.show', ['id' => $data['id']]) }}">Read more →</a>

                        </div>
                     </div>
                    @endforeach


                
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
                                @foreach($data2 as $cat)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="{{ route('home.index', ['id' => $cat['id']]) }}">{{ $cat['category']}}</a></li>
                                        
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