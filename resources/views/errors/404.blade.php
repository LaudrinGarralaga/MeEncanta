@extends('principal')

@section('conteudo')

<div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Pagina não encontrada</li>
              </ol>
            </nav>
            <div id="error-page" class="row">
              <div class="col-md-6 mx-auto">
                <div class="box text-center py-5">
                  <p class="text-center"><img src="img/logo.png" alt="Obaju template"></p>
                  <h3>Lamentamos - esta página não está mais aqui</h3>
                  <h4 class="text-muted">Error 404 - Página não encontrada</h4>
                  <p class="text-center">Para continuar use o <strong>Formulario de pesquisa</strong> ou o <strong>Menu</strong> acima.</p>
                  <p class="buttons"><a href="/" class="btn btn-primary"><i class="fa fa-home"></i> Voltar para página principal</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection