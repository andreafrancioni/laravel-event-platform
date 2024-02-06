@extends('layouts.app')

@section('content')

<section class="show">
    <div class="container">
        <div class="row">
            <h2>{{$event->title}}</h2>
            <div class="row">
                <img src="{{$event->thumb}}" alt="">
                <p>{{$event->description}}</p>
                <span>{{$event->creation_date}}</span>
                <span>{{$event->type}}</span>
                <div class="buttons d-flex">
                    <a type="button" class="btn btn-primary" href="{{route('admin.events.index')}}">Back</a>
                    <a type="button" class="btn btn-success" href="{{route('admin.events.edit', $event->id)}}">Edit</a>
                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>

    .show{

        margin-bottom: 100px;

        img{
            width:200px;
        }

        .buttons{
        padding: 10px
    }
    form{
        margin-block-end: 0!important;
    }
    }

</style>