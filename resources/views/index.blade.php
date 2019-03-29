    
@extends('principal')

@section('conteudo')

<div id="all">
        <div id="hot">
            <div class="box py-4">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-0"><strong>OFERTAS</strong> EM DESTAQUE</h2>
                  </div>
                </div>
              </div>
            </div>
        </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><a href="register.html"><img src="img/main-slider1.jpg" alt="" class="img-fluid"></a></div>
                <div class="item"><a href="register.html"><img src="img/main-slider2.jpg" alt="" class="img-fluid"></a></div>
                <div class="item"><a href="register.html"><img src="img/main-slider3.jpg" alt="" class="img-fluid"></a></div>
                <div class="item"><a href="register.html"><img src="img/main-slider4.jpg" alt="" class="img-fluid"></a></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <!--<div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
             /.row
          </div>
           /.container
        </div>-->
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">NOVIDADES</h2>
                </div>
              </div>
            </div>
          </div>
              <div class="container">
                  <div class="product-slider owl-carousel owl-theme">
                    <div class="item">
                      <div class="product">
                        <div class="flip-container">
                          <div class="flipper">
                            <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                            <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                          </div>
                        </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                        <div class="text">
                          <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                          <p class="price"> 
                            <del></del>$143.00
                          </p>
                        </div>
                        <!-- /.text-->
                        <!-- /.ribbon-->
                        <div class="ribbon new">
                          <div class="theribbon">NOVIDADE</div>
                          <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                      </div>
                      <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                          <div class="flip-container">
                            <div class="flipper">
                              <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                              <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                            </div>
                          </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                          <div class="text">
                            <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                            <p class="price"> 
                              <del></del>$143.00
                            </p>
                          </div>
                          <div class="ribbon new">
                            <div class="theribbon">NOVIDADE</div>
                            <div class="ribbon-background"></div>
                          </div>
                        </div>
                        <!-- /.product-->
                      </div>
                      <div class="item">
                          <div class="product">
                            <div class="flip-container">
                              <div class="flipper">
                                <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                              </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                            <div class="text">
                              <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                              <p class="price"> 
                                <del></del>$143.00
                              </p>
                            </div>
                            <div class="ribbon new">
                                <div class="theribbon">NOVIDADE</div>
                                <div class="ribbon-background"></div>
                              </div>
                          </div>
                          <!-- /.product-->
                        </div>
                        <div class="item">
                            <div class="product">
                              <div class="flip-container">
                                <div class="flipper">
                                  <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                  <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                              </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                              <div class="text">
                                <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                                <p class="price"> 
                                  <del></del>$143.00
                                </p>
                              </div>
                              <div class="ribbon new">
                                  <div class="theribbon">NOVIDADE</div>
                                  <div class="ribbon-background"></div>
                                </div>
                            </div>
                            <!-- /.product-->
                          </div>
                          <div class="item">
                              <div class="product">
                                <div class="flip-container">
                                  <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                  </div>
                                </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                                <div class="text">
                                  <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                                  <p class="price"> 
                                    <del></del>$143.00
                                  </p>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NOVIDADE</div>
                                    <div class="ribbon-background"></div>
                                  </div>
                              </div>
                              <!-- /.product-->
                            </div>
                            <div class="item">
                                <div class="product">
                                  <div class="flip-container">
                                    <div class="flipper">
                                      <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                      <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                    </div>
                                  </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                                  <div class="text">
                                    <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                                    <p class="price"> 
                                      <del></del>$143.00
                                    </p>
                                  </div>
                                  <div class="ribbon new">
                                      <div class="theribbon">NOVIDADE</div>
                                      <div class="ribbon-background"></div>
                                    </div>
                                </div>
                                <!-- /.product-->
                              </div>
                              <div class="item">
                                  <div class="product">
                                    <div class="flip-container">
                                      <div class="flipper">
                                        <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                        <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                      </div>
                                    </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                      <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                                      <p class="price"> 
                                        <del></del>$143.00
                                      </p>
                                    </div>
                                    <div class="ribbon new">
                                        <div class="theribbon">NOVIDADE</div>
                                        <div class="ribbon-background"></div>
                                      </div>
                                  </div>
                                  <!-- /.product-->
                                </div>
                  </div>
          </div>
        
          <!-- /#hot-->
          <!-- *** HOT END ***-->
          <div class="box py-3">
              <div class="container">
                <div class="row">
                  <div class="col-md-12" >
                    <h2 class="mb-0">CONFIRA NOSSOS PRODUTOS</h2>
                  </div>
                </div>
              </div>
            </div>
          <section class="details-card">
              <div class="container">
                  <div class="row" >
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://boticario.vteximg.com.br/arquivos/ids/195614-500-500/RESPEITO-AOS-CACHOS-CONDICIONADOR.jpg?v=636735618438630000C" alt="">
                                  <span><h4>Cabelo</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h5>Condicionador Monange Boticário Verde</h5>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais </a>   
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/animals" alt="">
                                  <span><h4>heading2</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading2</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais</a>   
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/tech" alt="">
                                  <span><h4>heading3</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading3</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais </a>   
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/tech" alt="">
                                  <span><h4>heading3</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading3</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais</a>   
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/tech" alt="">
                                  <span><h4>heading3</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading3</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais </a>   
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/tech" alt="">
                                  <span><h4>heading3</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading3</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais </a>   
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/tech" alt="">
                                  <span><h4>heading3</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading3</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card-content">
                              <div class="card-img">
                                  <img src="https://placeimg.com/380/230/tech" alt="">
                                  <span><h4>heading3</h4></span>
                              </div>
                              <div class="card-desc">
                                  <h3>Heading3</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                      voluptas totam</p>
                                      <a href="#" class="btn-card">Mais</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
        </div>
    </div>

@endsection
