@extends('template')

@section('content')
  <div class="container mt-5">
    <h1>All Questions:</h1>
    <hr class="mb-4">

    @foreach ($questions as $question)
      <div class="card bg-light mb-3">
        <div class="card-body">
            <h3>{{ $question->title }} <small class="lead float-right">Posted in {{ $question->created_at->diffForHumans() }}</small></h3>
            <p>
            {{ $question->description }}
            </p>
            <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    @endforeach

    {{ $questions->links() }}
  </div>
@endsection




