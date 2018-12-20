@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <painel titulo="Dashboard">
                <div class="row">
                    <div class="col-md-4">
                        <caixa></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa></caixa>
                    </div>
                </div>
            </painel>
            {{-- <faq>
              <p>Resposta</p>
            </faq> --}}
        </div>
    </div>
</div>
@endsection
