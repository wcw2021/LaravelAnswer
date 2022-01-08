@extends('template')

@section('content')
    <div class="container mt-5">
        <h1>Edit Question</h1>
        <hr>
        <form action="{{ route('questions.update', $question->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Question:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $question->title }}"/>
            </div>
            <div class="form-group">
                <label for="description">More Information:</label>
                <textarea class="form-control" name="description" id="description" rows="4">{{ $question->description }}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit Question" />
        </form>
    </div>
@endsection








