@extends('template')

@section('content')
    <div class="container mt-5">
        <h1>{{ $question->title }}</h1>
        <p class="lead">
            {{ $question->description }}
        </p>
        <p>
            Submitted By: {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}
        </p>

        @if (Auth::id())
            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>

            <form class="" style="display: inline" action="/questions/{{ $question->id }}" method="post">
                @csrf
                @method("DELETE")
                <input class="btn btn-outline-danger btn-sm ml-2" type="submit" value="Delete">
            </form>
        @endif

        <hr /> 

        <!-- display all of the answers for this question -->
        @if ($question->answers->count() > 0)
        @foreach ($question->answers as $answer)
            <div class="card mb-3">
            <div class="card-body">
                <p class="lead"> 
                {{ $answer->content }}
                </p>
                <h6>Answered By {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}</h6>
            </div>
            </div>
        @endforeach
        @else
        <p>
            There are no answers for this question yet. Please consider submitting one below!
        </p>
        @endif

        <hr />

        <!-- display the form, to submit a new answer -->
        <form action="{{ route('answers.store') }}" method="POST">
            @csrf

            <h4>Submit Your Own Answer: <small class="text-muted">(Please login in order to submit)</small></h4>
            <div class="form-group">
                <textarea class="form-control" name="content" rows="4"></textarea>
                <input type="hidden" value="{{ $question->id }}" name="question_id" />
            </div>
            <button class="btn btn-primary">Submit Answer</button>

        </form>

    </div>
@endsection




