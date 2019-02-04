@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-3">

      <faq-categories category_name="Dúvidas Gerais">
      </faq-categories>
      <faq-categories category_name="Compra">
      </faq-categories>
      <faq-categories category_name="Licença">
      </faq-categories>

    </div>
    <div class="col-9">

      <faq-component titulo="Dúvidas Gerais" subtitulo="Tudo que você precisa saber sobre as dúvidas mais gerais dos nossos produtos.">
        <p class="question">Lorem ipsum dolor?</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </faq-component>
      <faq-component titulo="Compra" subtitulo="Subtitulo">
        <p class="question">Lorem ipsum dolor?</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </faq-component>
      <faq-component titulo="Licença" subtitulo="Subtitulo">
        <p class="question">Lorem ipsum dolor?</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </faq-component>
      
    </div>
  </div>

@endsection

@push('scripts')
    {{-- this script will only render in this view --}}
    <script src="js/app.js"></script>
@endpush