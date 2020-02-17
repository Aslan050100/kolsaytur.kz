<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kolsaytur.kz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('index')}}">Kolsaytur</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Домой</a></li>
	        	
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap d-flex js-fullheight">
    	<div class="forth js-fullheight d-flex align-items-center">
    		<div class="text">
    			<h2>Добро пожаловать в Кольсай</h2>
    			<h1 class="mb-5">Идеальное место для отдыха</h1>
    			<p><a href="#" class="btn-custom py-3 pr-2">Сделать заказ</a></p>
    		</div>
    	</div>
    	<div class="third js-fullheight">
    		<section class="home-slider owl-carousel js-fullheight">
		      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
		      	<div class="overlay"></div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
		      	<div class="overlay"></div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
		      	<div class="overlay"></div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image: url(images/bg_4.jpg);">
		      	<div class="overlay"></div>
		      </div>
		    </section>

    	</div>
    </section>

    
		
	

		<section class="ftco-section ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Находить</span>
            <h2 class="mb-4">НАЙДИТЕ ЖИЛЬЕ В Kolsay ВМЕСТЕ С KOLSAYTUR.KZ</h2>
            <form action="{{route('search')}}" method="post"  enctype="multipart/form-data">
              {{ csrf_field() }}
                <p>Цена</p>
                 <input type="text" name="first_price" placeholder="от (тг)" required>
                 <input type="text" name="second_price" placeholder="до (тг)" required>

                 <input type="submit" name="submit" value="Найти жилье">

                
            </form>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Последние добавленные</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Популярные</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Часто посещаемые</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <h4>Последние добавленные</h4>
		              	<div class="row">
                      @if($products  != null)
                            @foreach($products as $product)
		              		      <div class="item">
                                <div class="room-wrap">
                                    <a href="room.html" class="img" style="background-image: url(images/room-5.jpg);"></a>
                                    <div class="text pt-4 pl-lg-5">
                                        <h2><a href="{{route('details',[$product->id])}}">{{$product->name}}</a></h2>
                                        <p></p>
                                        <p class="d-flex price-details align-items-center pt-3">
                                            ot {{$product->rooms->min('price')}} - do {{$product->rooms->max('price')}}
                                        </p>
                                        <p class="rate">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star-half-full"></span>
                                         <span>{{$product->rating}}</span>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                      @else
                      <h1>Нету такой продукт</h1>
                      @endif
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <h4>Популярные</h4>
		                <div class="row">
		              		<div class="row">
                      @if($products  != null)
                           @foreach($products as $product)
                            <div class="item">
                                <div class="room-wrap">
                                    <a href="room.html" class="img" style="background-image: url(images/room-5.jpg);"></a>
                                    <div class="text pt-4 pl-lg-5">
                                        <h2><a href="{{route('details',[$product->id])}}">{{$product->name}}</a></h2>
                                        <p></p>
                                        <p class="d-flex price-details align-items-center pt-3">
                                            ot {{$product->rooms->min('price')}} - do {{$product->rooms->max('price')}}
                                        </p>
                                        <p class="rate">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star-half-full"></span>
                                         <span>{{$product->rating}}</span>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                      @else
                      <h1>Нету такой продукт</h1>
                      @endif
                    </div>
		              		
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <h4>Часто посещаемые</h4>
		                <div class="row">
		              		<div class="row">
                      @if($products  != null)
                            @foreach($products as $product)
                            <div class="item">
                                <div class="room-wrap">
                                    <a href="room.html" class="img" style="background-image: url(images/room-5.jpg);"></a>
                                    <div class="text pt-4 pl-lg-5">
                                        <h2><a href="{{route('details',[$product->id])}}">{{$product->name}}</a></h2>
                                        <p></p>
                                        <p class="d-flex price-details align-items-center pt-3">
                                            ot {{$product->rooms->min('price')}} - do {{$product->rooms->max('price')}}
                                        </p>
                                        <p class="rate">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star-half-full"></span>
                                         <span>{{$product->rating}}</span>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                      @else
                      <h1>Нету такой продукт</h1>
                      @endif
                    </div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Авторское право &copy;<script>document.write(new Date().getFullYear());</script>  Все права защищены | Этот сайт сделал <i class="icon-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Onmonday</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/aos.js')}}"></script>
  <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets/js/google-map.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
    
  </body>
</html>