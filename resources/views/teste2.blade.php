@extends('layouts.app')

@php
  $json = Storage::disk('local')->get('reports.json');
  $json = json_decode($json);
@endphp

@section('content')
<div class="container">
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam ducimus, quasi laborum dignissimos maiores nam fugiat sint libero. Beatae, odit nostrum rerum fuga perspiciatis odio blanditiis eveniet mollitia vitae quas?</p>
  <div>

  <h4>First Name: {{ $json[1]->first_name }}.</h4>
  <h4>Last Name: {{ $json[1]->last_name }}.</h4>

  </div>
</div>
@endsection

@push('scripts')
    {{-- this script will only render in this view --}}
    <script src="js/somelib.js"></script>
@endpush