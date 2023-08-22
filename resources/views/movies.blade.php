@extends('layouts.main')
@section('cards')
@foreach (movies as movie)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{movie->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">original name {{movie->original_title}}</h6>
    <p class="card-link">{{movie->date}}</p>
    <p class="card-link">{{movie->vote}}</p>
  </div>
</div>
@endforeach
@endsection