@extends('layout')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Show</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('Home') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('Create') }}">Create</a>
        </nav>
    </div>
@section('content')
    @foreach ($participants as $participant)
        <h1>{{ $participant->name }}</h1>
        <p>{{ $participant->rank }}</p>
        <p>{{ $participant->elo }}</p> 
                <form method="POST" class="fm-inline"
                    action="{{ route('Edit', ['id' => $participant->id]) }}">
                    @csrf

                    <input type="submit" value="Edit!" class="btn btn-primary"/>
                </form>
 
        

                <form method="POST" class="fm-inline"
                    action="{{ route('Delete', ['id' => $participant->id]) }}">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete!" class="btn btn-primary"/>
                </form>

    @endforeach
    
@endsection()