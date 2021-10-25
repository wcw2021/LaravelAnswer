@extends('template')

@section('content')
  <div class="container">
    <h1>Recent Questions:</h1>
    <hr class="mb-5">

    @foreach ($questions as $question)
      <div class="card bg-light mb-3">
        <div class="card-body">
            <h3>{{ $question->title }}</h3>
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




