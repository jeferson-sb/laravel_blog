@php 

$records = [1,2,3]; 
$goals = 1; 
$items = [ "Foo", "Bar", "Baaz", true, false, 0];
$showView = true;

@endphp

@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      @unless (Auth::check())
        You are not signed in.
      @endunless

      @auth
        @if (count($records) === 1)
        I have one record!
        @elseif (count($records) > 1)
            I have multiple records!
        @else
            I don't have any records!
        @endif

        @isset($goals)
            <em>You do have a Goal!</em>
        @endisset
      @endauth
      

  </div>
</div>

@endsection

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
    {{-- <p>Hello, @{{name}}</p> --}}

    <div class="container">
      @component('alert', ['foo' => 'bar'])
        @slot('title')
          <h4>Component's Slot</h4>
        @endslot
        <strong>hi!</strong> Message
      @endcomponent
  
      @component('components.card')
          @slot('title')
            John Doe
          @endslot
          @slot('subtitle')
            Researcher
          @endslot
          @slot('link')
            Action
          @endslot

          The current UNIX timestamp is {{ time() }}  {{-- it's possible to use any php function --}}
      @endcomponent
    </div>

@endsection

@section('navigation')
<ul class="unstyled">
  @foreach($items as $item)
    @break($item === 0 || false)
    <li>Item - {{ $item }}</li>
  @endforeach
</ul>
@endsection

@section('footer')
  @includeWhen($showView, 'components.footer')
@endsection

