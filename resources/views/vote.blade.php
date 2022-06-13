@extends('main')

@section('title', 'Urna Eletrônica')

@section('content')

    <div class="container mt-5">
        <h4 class="title">Eleoções 2022</h4>

        <form class="row g-3 needs-validation" action="{{ route('salvar_voto') }}" method="POST" novalidate>
            @csrf
            <div class="col-12">
              <label for="validationCustom01" class="form-label">Nome Completo</label>
              <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Digite nome Completo" required>
              <div class="invalid-feedback">
                Por Favor Preencha o Campo Nome
              </div>
            </div>

            <div class="col-12">
              <label for="validationCustom05" class="form-label">Titulo</label>
              <input type="text" name="titulo" class="form-control" id="validationCustom05" placeholder="Informe N° do seu Titulo" required>
              <div class="invalid-feedback">
                Por Favor Preencha o Campo Titulo
              </div>
            </div>

            <div class="col-12">
                <label for="alidationCustom06" class="form-label">N° do Candidato</label>
                <input type="text" name="vote" class="form-control" id="alidationCustom06" placeholder="Informe o N° do Candidato escolhido" required>
                <div class="invalid-feedback">
                    Por Favor Informe seu Candidato
                </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-success">Comfirmar</button>
            </div>
          </form>

    </div>





@endsection
