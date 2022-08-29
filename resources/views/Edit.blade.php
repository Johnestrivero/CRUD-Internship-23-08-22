@extends('layout')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Edit</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('Home') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('Show') }}">List of participants</a>
        </nav>
    </div>
@section('content')
    <form method="POST" 
          action="{{ route('Update', ['id' => $id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name</label>
            <input value = "{{ $participant->name }}" type="text" name="name" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label>Rank</label>
            <input  value = "{{ $participant->rank }}" type="number" name="rank" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label>Elo</label>
            <input  value = "{{ $participant->elo }}" type="text" name="elo" class="form-control"/>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
@endsection