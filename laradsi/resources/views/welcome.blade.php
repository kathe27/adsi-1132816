@extends('layout-app/welcome')

@section('title','LARADSI - Artículos ADSI 2017')

@section('content')
    <div class="row">
        <div class="col-md-12">
        @foreach($arts as $art)
            <div class="row well">
                
                <div class="col-md-4">
                    @if($art->image)
                        <img src="{{asset($art->image)}}" width="100%" alt="">
                    @else
                        <img src="{{asser('imgs/no-image.png')}}" width="100%" alt="">
                    @endif
                </div>
                <div class="col-md-8">
                    <h4 class="lead">{{$art->name}}</h4>
                    <small class="badge">{{$art->category->name}}</small>
                    <small class="label label-success">{{$art->created_at}}</small>
                    <hr>
                    <p>{{$art->content}}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection