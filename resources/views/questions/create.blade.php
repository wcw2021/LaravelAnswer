@extends('template')

@section('content')
    <div class="container mt-5">
        <h1>Ask a Question</h1>
        <hr>
        <form action="{{ route('questions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Question:</label>
                <input type="text" name="title" id="title" class="form-control" />
            </div>
            <div class="form-group">
                <label for="description">More Information:</label>
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit Question" />
        </form>
    </div>
@endsection








