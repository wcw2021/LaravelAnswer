@extends('template')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Ask a Question!</h1>
            <p class="lead">Ask any question you want to know and we will get the answers for you.</p>
            <p class="lead"><a href="{{ route('questions.create') }}" class="btn btn-primary btn-lg" role="button">Ask Now</a></p>
        </div>

        <h2>Recent Questions:</h2>
        @foreach ($questions as $question)
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h3>{{ $question->title }}  <small class="lead float-right">Posted in {{ $question->created_at->diffForHumans() }}</small></h3>
                    <p>
                    {{ $question->description }}
                    </p>
                    <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
        @endforeach
        <a href="{{ route('questions.index') }}" class="btn btn-secondary mb-5"><i class="fas fa-angle-double-right"></i> READ MORE</a>
    </div>
@endsection



