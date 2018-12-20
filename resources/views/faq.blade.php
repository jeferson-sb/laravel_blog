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

      <faq-component titulo="Titulo" subtitulo="Subtitulo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </faq-component>
      <faq-component titulo="Titulo" subtitulo="Subtitulo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </faq-component>
      
    </div>
  </div>

@endsection
