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
                <li class="breadcrumb-item"><a href="#">Mulher</a></li>
                <li class="breadcrumb-item"><a href="#">Corpo</a></li>
                <li aria-current="page" class="breadcrumb-item active">Blusa branca Armani</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3 order-2 order-lg-1">
            <!--
            *** MENUS AND FILTERS ***
            _________________________________________________________
            -->
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Categorias</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column category-menu">
                  <li><a href="categoria" class="nav-link">Homem <span class="badge badge-secondary">42</span></a>
                    <ul class="list-unstyled">
                      <li><a href="categoria" class="nav-link">Corpo</a></li>
                      <li><a href="categoria" class="nav-link">Cabelo</a></li>
                      <li><a href="categoria" class="nav-link">Barba</a></li>
                      <li><a href="categoria" class="nav-link">Acessórios</a></li>
                    </ul>
                  </li>
                  <li><a href="categoria" class="nav-link active">Mulher  <span class="badge badge-light">123</span></a>
                    <ul class="list-unstyled">
                      <li><a href="categoria" class="nav-link">Corpo</a></li>
                      <li><a href="categoria" class="nav-link">Cabelo</a></li>
                      <li><a href="categoria" class="nav-link">Pés</a></li>
                      <li><a href="categoria" class="nav-link">Acessórios</a></li>
                    </ul>
                  </li>
                  <li><a href="categoria" class="nav-link">Criança  <span class="badge badge-secondary">11</span></a>
                    <ul class="list-unstyled">
                      <li><a href="categoria" class="nav-link">Corpo</a></li>
                      <li><a href="categoria" class="nav-link">Cabelo</a></li>
                      <li><a href="categoria" class="nav-link">Banho</a></li>
                      <li><a href="categoria" class="nav-link">Acessórios</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 order-1 order-lg-2">
            <div id="productMain" class="row">
              <div class="col-md-6">
                <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                  <div class="item"> <img src="img/detailbig1.jpg" alt="" class="img-fluid"></div>
                  <div class="item"> <img src="img/detailbig2.jpg" alt="" class="img-fluid"></div>
                  <div class="item"> <img src="img/detailbig3.jpg" alt="" class="img-fluid"></div>
                </div>
                <div class="ribbon sale">
                  <div class="theribbon">SALE</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
                <div class="ribbon new">
                  <div class="theribbon">NEW</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
              </div>
              <div class="col-md-6">
                <div class="box">
                  <h1 class="text-center">Blusa branca Armani</h1>
                  <p class="goToDescription"><a href="#details" class="scroll-to">Clique para ver detalhes do produto</a></p>
                  <p class="price">$124.00</p>
                  </div>
                <div data-slider-id="1" class="owl-thumbs">
                  <button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>
                  <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
                  <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
                </div>
              </div>
            </div>
            <div id="details" class="box">
              <p></p>
              <h4>Detalhes do produto</h4>
              <p>Top de renda branca, tecido, tem um pescoço redondo, mangas curtas, tem forro de malha anexado</p>
              <h4>Material &amp; cuidados </h4>
              <ul>
                <li>Poliéster</li>
                <li>Máquina de lavar</li>
              </ul>
              <h4>Tamanho &amp; Ajuste</h4>
              <ul>
                <li>Tamanho Normal</li>
                <li>O modelo (altura 5'8 "e peito 33") está usando um tamanho S</li>
              </ul>
              <blockquote>
                <p><em>Defina o estilo nesta temporada com a nova linha de topos da Armani, trabalhada com detalhes intrincados. Criar um olhar chique declaração associando este número de rendas com jeans skinny e bombas.</em></p>
              </blockquote>
              <hr>
            </div>
            
            </div>
          </div>
          <!-- /.col-md-9-->
        </div>
      </div>
    </div>
  </div>
@endsection