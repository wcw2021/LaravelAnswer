@extends('template')

@section('content')
  <div class="container">
    <h1>{{ $user->name }}'s Profile</h1>
    <p>
      See what {{ $user->name }} has been up to on LaravelAnswers.
    </p>
    <hr />
    <div class="row">
      <div class="col-md-6">
        <h3>Questions:</h3>
        <!-- display all quesitons the user has submitted -->
        @foreach ($user->questions as $question)
          <div class="card">
            <div class="card-body">
              <h4>{{ $question->title }}</h4>
              <p>
                {{ $question->description }}
              </p>
            </div>
            <div class="card-footer">
              <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
            </div>
          </div>
        @endforeach
      </div>

      <div class="col-md-6">
        <h3>Answers:</h3>
        <!-- display all answers the user has submitted -->
        @foreach ($user->answers as $answer)
          <div class="card">
            <div class="card-header bg-white">
              {{ $answer->question->title }}
            </div>
            <div class="card-body">
              <p>
                <small>{{ $user->name }}'s answer:</small><br />
                {{ $answer->content }}
              </p>
              <a href="{{ route('questions.show', $answer->question->id) }}" class="btn btn-link btn-sm">View All Answers for this Question</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
