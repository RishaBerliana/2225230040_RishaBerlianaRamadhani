@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Music</h1>
    <hr />
    <form action="{{ route('music.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="playlist" class="form-control" placeholder="Music Playlist">
        </div>
        <div class="col">
            <input type="text" name="creator" class="form-control" placeholder="Creator">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="release year" class="form-control" placeholder="Release Year">
        </div>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="Description"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection