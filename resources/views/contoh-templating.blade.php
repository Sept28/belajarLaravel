@extends('layouts.app')

@section('title')

  <h1>Title</h1>

@endsection

@section('subtitle')

  <h2>Subtitle</h2>

  @php
    $test = true;
  @endphp

  @if ($test == false)
    <h2> test true </h2>
  @else
    <h2> Tidak Hadir <h2
  @endif
@endsection