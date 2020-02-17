<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IslaGrande - Free Bootstrap 4 Template by Colorlib</title>
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
	        <span class="oi oi-menu"></span> Меню
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

    			<h2>Добро пожаловать в {{$product->name}}</h2>
    			<h1 class="mb-5"> {{$product->name}} </h1>
    			<p>{{$product->description}}</p>
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

    <section class="ftco-booking">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-lg text-lg-right">
    				<h3 class="mb-4 mb-lg-0">Забронировать идеальный номер</h3>
    			</div>
    			<div class="col-lg-10">
	    			<form action="{{route('addOrder',[$product->id])}}" class="booking-form">
	    				{{@csrf_field()}}
	    				<div class="d-lg-flex align-items-md-end">
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
		    					<label for="#">Дата заезда</label>
		    					<input type="text" name='checkin' class="form-control checkin_date" placeholder="Check-in date" required>
		    				</div>
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
		    					<label for="#">Дата выезда</label>
		    					<input type="text" name='checkout' class="form-control checkout_date" placeholder="Check-out date" required>
		    				</div>
                            <div class="form-group mb-3 mb-lg-0 mr-4">
                            
                           
                                       
                                <input type="name" name="name" placeholder="ФИО" required>
                  
                         
                                <input type="email" name="email"  placeholder="e-mail" required>
                       
                        
                                        
                                <input type="name" name="phone"  placeholder="phone number" required>
                              
                          </div>
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
	      					<label for="#">Типы номеров</label>
	      					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="room_type" id="" class="form-control">
	                    	<option value="">Suite</option>
	                      @foreach($room_types as $room_type)
                           <option value="{{$room_type->name}}">{{$room_type->name}}</option>
                        @endforeach
	                    </select>
	                  </div>
		              </div>
	              </div>
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
	      					<label for="#">Взрослые люди</label>
	      					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="adults" id="" class="form-control">
	                    	<option value="1">1</option>
	                      <option value="2">2</option>
	                      <option value="3">3</option>
	                      <option value="4">4</option>
	                      <option value="5">5</option>
	                    </select>
	                  </div>
		              </div>
	              </div>
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
	      					<label for="#">Дети</label>
	      					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="children" id="" class="form-control">
	                    	<option value="1">1</option>
	                      <option value="2">2</option>
	                      <option value="3">3</option>
	                      <option value="4">4</option>
	                      <option value="5">5</option>
	                    </select>
	                  </div>
		              </div>
	              </div>
		            <div class="form-group">
		              <input type="submit" value="Reserve" class="btn btn-primary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-booking">
    	<h2>Комфорты</h2>
    	@foreach($comforts as $comfort)
    	<div style="border: 1px solid red;">
    		<img src="img/{{$comfort['icon']}}">
    		<h4>{{$comfort['name']}}</h4>
    		<p>{{$comfort['description']}}</p>	
    	</div>
    	@endforeach
    </section>

      <section class="ftco-booking">
    	<h2>Комнаты</h2>
    	@foreach($rooms as $room)
    	<div style="border: 1px solid red;">
    		<img src="img/{{$comfort['image']}}">	
    		Mesto:
    		<h4>{{$room['name']}}</h4>	
    		Price
    		<h4>{{$room['price']}}</h4>
    		Room type
    		<h4>{{$room->room_types->name}}</h4>
    	</div>
    	@endforeach
    </section>
		
	

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

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