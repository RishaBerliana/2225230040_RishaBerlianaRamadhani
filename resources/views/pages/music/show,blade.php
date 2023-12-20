@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Music</h1>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="playlist" class="form-control" placeholder="Music Playlist" value="{{ $music->playlist }}" readonly>
        </div>
        <div class="col">
            <input type="text" name="creator" class="form-control" placeholder="Creator" value="{{ $music->creator }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="release year" class="form-control" placeholder="Release Year" value="{{ $music->release year }}" readonly>
        </div>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="Description" value="{{ $music->description }}" readonly></textarea>
        </div>
    </div>
@endsection