@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Music</h1>
        <a href="{{ route('music.create') }}" class="btn btn-primary">Add Music</a>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Playlist</th>
                <th>Creator</th>
                <th>Release Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($musics->count() > 0)
            @foreach($musics as $music)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $music->playlist }}</td>
                    <td class="align-middle">{{ $music->creator }}</td>
                    <td class="align-middle">{{ $music->release year }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Detail</button>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td>Music not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection