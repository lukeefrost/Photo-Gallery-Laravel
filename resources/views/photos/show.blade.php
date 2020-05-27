@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">{{ $album->name }}</h1>
    <p class="lead text-muted">{{ $album->description }}</p>
    <p>
      <a href="{{ route('photo-create', $album->id) }}" class="btn btn-primary my-2">Upload Photo</a>
      <a href="/" class="btn btn-secondary my-2">SGo Back</a>
    </p>
  </div>
</section>

@if (count($album->photos) > 0)
<div class="container">
<div class="row">
  @foreach ($album->photos as $photo)
  <div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <img src="/storage/albums/{{ $album->id }}/{{ $photo->photo}}" alt="{{ $photo->cover_image }}" height="200px">
      <div class="card-body">
        <p class="card-text">{{ $photo->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="{{ route('photo-show', $photo->id) }}" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">{{ $photo->name }}</small>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  @else
    <h3>No photos yet</h3>
  @endif
</div>
@endsection


@endsection
