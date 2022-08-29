@extends('layout')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Create</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('Home') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('Show') }}">List of participants</a>
        </nav>
    </div>
@section('content')
    <form method="POST" action="{{ route('Store') }}">
        @csrf
        
        @include('form')

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection