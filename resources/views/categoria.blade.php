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
                <li aria-current="page" class="breadcrumb-item active">Mulher</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
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
          <div class="col-lg-9">
            <div class="box">
              <h1>Mulher</h1>
              <p> No nosso departamento de mulher, oferecemos uma ampla seleção dos melhores produtos que encontramos e cuidadosamente selecionados em todo o mundo.</p>
            </div>
            <div class="box info-bar">
              <div class="row">
                <div class="col-md-12 col-lg-4 products-showing">Mostrando <strong>12</strong> de <strong>25</strong> produtos</div>
                <div class="col-md-12 col-lg-7 products-number-sort">
                  <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                    <div class="products-number"><strong>Mostrando</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">Todos</a><span>produtos</span></div>
                    <div class="products-sort-by mt-2 mt-lg-0"><strong>Ordenar</strong>
                      <select name="sort-by" class="form-control">
                        <option>Preço</option>
                        <option>Nome</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row products">
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detalhes"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detalhes"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detalhes" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detalhes">Fur coat with very but very very long name</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                    <p class="buttons"><a href="detalhes" class="btn btn-outline-secondary">Ver Detalhes</a></p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detalhes"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detalhes"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detalhes" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detalhes">White Blouse Armani</a></h3>
                    <p class="price"> 
                      <del>$280</del>$143.00
                    </p>
                    <p class="buttons"><a href="detalhes" class="btn btn-outline-secondary">Ver detalhes</a></p>
                  </div>
                  <!-- /.text-->
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
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detalhes"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detalhes"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detalhes" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detalhes">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                    <p class="buttons"><a href="detalhes" class="btn btn-outline-secondary">Ver detalhes</a></p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detalhes"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detalhes"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detalhes" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detalhes">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                    <p class="buttons"><a href="detalhes" class="btn btn-outline-secondary">Ver detalhes</a></p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detalhes"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detalhes"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detalhes" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detalhes">White Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                    <p class="buttons"><a href="detalhes" class="btn btn-outline-secondary">Ver detalhes</a></p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detalhes"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detalhes"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detalhes" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detalhes">Fur coat</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                    <p class="buttons"><a href="detalhes" class="btn btn-outline-secondary">Ver detalhes</a></p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product            -->
              </div>
              <!-- /.products-->
            </div>
            <div class="pages">
              <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Mostrar mais</a></p>
              <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                <ul class="pagination">
                  <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" class="page-link">5</a></li>
                  <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /.col-lg-9-->
        </div>
      </div>
    </div>
  </div>

@endsection