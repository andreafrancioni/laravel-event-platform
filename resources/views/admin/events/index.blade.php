@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($events as $event)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $event->name }}</div>
                        <div class="card-subtitle">{{$event->type?->name}}</div>
                        <div class="card-body">Data evento {{ $event->date }}</div>
                        <div class="card-body">Ticket disponibili: {{ $event->available_tickets }}</div>
                        <div class="buttons d-flex">
                            <a type="button" class="btn btn-primary" href="{{ route('admin.events.show', $event->id) }}">Details</a>
                            <a type="button" class="btn btn-success" href="{{ route('admin.events.edit', $event->id) }}">Edit</a>
                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection