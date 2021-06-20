@extends('layouts.menu')

@section('content')
	<!-- Banner
	================================================== -->
	<div class="main-search-container dark-overlay">
		<div class="main-search-inner">
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Find Nearby Attractions</h2>
						<h4>Expolore top-rated attractions, activities and more</h4>
	
						<div class="main-search-input">
	
							<!-- <div class="main-search-input-item">
								<input type="text" placeholder="What are you looking for?" value=""/>
							</div> -->
	
							<div class="main-search-input-item location">
								<div id="autocomplete-container">
									<input id="autocomplete-input" type="text" placeholder="Location">
								</div>
								<a href="#"><i class="fa fa-map-marker"></i></a>
							</div>
	
							<div class="main-search-input-item">
								<div class="panel-dropdown">
									<a href="#"  style="width:100%; text-align:center;">Guests <span class="qtyTotal" name="qtyTotal" style="background-color:#f91942">1</span></a>
									<div class="panel-dropdown-content">
	
										<!-- Quantity Buttons -->
										<div class="qtyButtons">
											<div class="qtyTitle">Men</div>
											<input type="text" name="qtyInput" value="1">
										</div>
	
										<div class="qtyButtons">
											<div class="qtyTitle">Women</div>
											<input type="text" name="qtyInput" value="0">
										</div>
	
										<div class="qtyButtons">
											<div class="qtyTitle">Others</div>
											<input type="text" name="qtyInput" value="0">
										</div>
									</div>
								</div>
							</div>
	
							<button class="button search-button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>
	
						</div>
					</div>
				</div>
			</div>
	
		</div>
		
		<!-- Video -->
		<div class="video-container">
			<video poster="images/main-search-video-poster.jpg" loop autoplay muted>
				<source src="images/main-search-video.mp4" type="video/mp4">
			</video>
		</div>
	
	</div>
	
	
	
	<!-- Content
	================================================== -->
	<!-- <div class="container">
		<div class="row">
	
			<div class="col-md-12">
				<h3 class="headline centered margin-top-75">
					Browse Categories
				</h3>
			</div>
	
		</div>
	</div> -->
	
	
	<!-- Category Boxes -->
	<!-- <div class="container">
	<!--	<div class="row">-->
	<!--		<div class="col-md-12">-->
	<!--			<div class="categories-boxes-container margin-top-5 margin-bottom-30"> -->-->
					
					<!-- Box -->
					<!-- <a href="listings-list-with-sidebar.html" class="category-small-box">
	<!--					<i class="im im-icon-Hamburger"></i>-->
	<!--					<h4>Eat & Drink</h4>-->
	<!--					<span class="category-box-counter">12</span>-->
	<!--				</a> -->-->
	
					<!-- Box -->
					<!-- <a href="listings-list-with-sidebar.html" class="category-small-box">
	<!--					<i class="im  im-icon-Sleeping"></i>-->
	<!--					<h4>Hotels</h4>-->
	<!--					<span class="category-box-counter">32</span>-->
	<!--				</a> -->-->
	
					<!-- Box -->
					<!-- <a href="listings-list-with-sidebar.html" class="category-small-box">
	<!--					<i class="im im-icon-Shopping-Bag"></i>-->
	<!--					<h4>Shops</h4>-->
	<!--					<span class="category-box-counter">11</span>-->
	<!--				</a> -->-->
	
					<!-- Box -->
					<!-- <a href="listings-list-with-sidebar.html" class="category-small-box">
	<!--					<i class="im im-icon-Cocktail"></i>-->
	<!--					<h4>Nightlife</h4>-->
	<!--					<span class="category-box-counter">15</span>-->
	<!--				</a> -->-->
	
					<!-- Box -->
					<!-- <a href="listings-list-with-sidebar.html" class="category-small-box">
	<!--					<i class="im im-icon-Electric-Guitar"></i>-->
	<!--					<h4>Events</h4>-->
	<!--					<span class="category-box-counter">21</span>-->
	<!--				</a> -->-->
	
					<!-- Box -->
					<!-- <a href="listings-list-with-sidebar.html" class="category-small-box">
	<!--					<i class="im im-icon-Dumbbell"></i>-->
	<!--					<h4>Fitness</h4>-->
	<!--					<span class="category-box-counter">28</span>-->
	<!--				</a>-->
	
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div> -->-->
	<!-- Category Boxes / End -->
	
	
	<!-- Fullwidth Section -->
	<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">
	
		<div class="container">
			<div class="row">
	
				<div class="col-md-12">
					<h3 class="headline centered margin-bottom-45">
						Most Visited Places
						<span>Discover top-rated local businesses</span>
					</h3>
				</div>
			</div>
		</div>
	
		<!-- Carousel / Start -->
		<div class="simple-fw-slick-carousel dots-nav">
	
			<!-- Listing Item -->
			<div class="fw-carousel-item">
				<a href="listings-single-page.html" class="listing-item-container compact">
					<div class="listing-item">
						<img src="images/listing-item-01.jpg" alt="">
	
						<div class="listing-badge now-open">Now Open</div>
	
						<div class="listing-item-content">
							<div class="numerical-rating" data-rating="3.5"></div>
							<h3>Tom's Restaurant</h3>
							<span>964 School Street, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->
	
			<!-- Listing Item -->
			<div class="fw-carousel-item">
				<a href="listings-single-page.html" class="listing-item-container compact">
					<div class="listing-item">
						<img src="images/listing-item-02.jpg" alt="">
						<div class="listing-item-details">
							<ul>
								<li>Friday, August 10</li>
							</ul>
						</div>
						<div class="listing-item-content">
							<div class="numerical-rating" data-rating="5.0"></div>
							<h3>Sticky Band</h3>
							<span>Bishop Avenue, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->		
	
			<!-- Listing Item -->
			<div class="fw-carousel-item">
				<a href="listings-single-page.html" class="listing-item-container compact">
					<div class="listing-item">
						<img src="images/listing-item-03.jpg" alt="">
						<div class="listing-item-details">
							<ul>
								<li>Starting from $59 per night</li>
							</ul>
						</div>
						<div class="listing-item-content">
							<div class="numerical-rating" data-rating="2.0"></div>
							<h3>Hotel Govendor</h3>
							<span>778 Country Street, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
	
				</a>
			</div>
			<!-- Listing Item / End -->
	
			<!-- Listing Item -->
			<div class="fw-carousel-item">
				<a href="listings-single-page.html" class="listing-item-container compact">
					<div class="listing-item">
						<img src="images/listing-item-04.jpg" alt="">
	
						<div class="listing-badge now-open">Now Open</div>
	
						<div class="listing-item-content">
							<div class="numerical-rating" data-rating="5.0"></div>
							<h3>Burger House</h3>
							<span>2726 Shinn Street, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->
	
			<!-- Listing Item -->
			<div class="fw-carousel-item">
				<a href="listings-single-page.html" class="listing-item-container compact">
					<div class="listing-item">
						<img src="images/listing-item-05.jpg" alt="">
						<div class="listing-item-content">
							<div class="numerical-rating" data-rating="3.5"></div>
							<h3>Airport</h3>
							<span>1512 Duncan Avenue, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->
	
			<!-- Listing Item -->
			<div class="fw-carousel-item">
				<a href="listings-single-page.html" class="listing-item-container compact">
					<div class="listing-item">
						<img src="images/listing-item-06.jpg" alt="">
	
						<div class="listing-badge now-closed">Now Closed</div>
	
						<div class="listing-item-content">
							<div class="numerical-rating" data-rating="4.5"></div>
							<h3>Think Coffee</h3>
							<span>215 Terry Lane, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->
	
		</div>
		<!-- Carousel / End -->
	
	
	</section>
	<!-- Fullwidth Section / End -->
	
	
	<!-- Container -->
	<div class="container">
		<div class="row">
	
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-35 margin-top-70">Popular Cities <span>Browse listings in popular places</span></h3>
			</div>
			
			<div class="col-md-4">
	
				<!-- Image Box -->
				<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-01.jpg">
					<div class="img-box-content visible">
						<h4>New York </h4>
						<span>14 Listings</span>
					</div>
				</a>
	
			</div>	
				
			<div class="col-md-8">
	
				<!-- Image Box -->
				<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-02.jpg">
					<div class="img-box-content visible">
						<h4>Los Angeles</h4>
						<span>24 Listings</span>
					</div>
				</a>
	
			</div>	
	
			<div class="col-md-8">
	
				<!-- Image Box -->
				<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-03.jpg">
					<div class="img-box-content visible">
						<h4>San Francisco </h4>
						<span>12 Listings</span>
					</div>
				</a>
	
			</div>	
				
			<div class="col-md-4">
	
				<!-- Image Box -->
				<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-04.jpg">
					<div class="img-box-content visible">
						<h4>Miami</h4>
						<span>9 Listings</span>
					</div>
				</a>
	
			</div>
	
		</div>
	</div>
	<!-- Container / End -->
	
	
	<!-- Flip banner -->
	<a href="listings-half-screen-map-list.html" class="flip-banner parallax margin-top-65" data-background="images/slider-bg-02.jpg" data-color="#f91942" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
		<div class="flip-banner-content">
			<h2 class="flip-visible">Expolore top-rated attractions nearby</h2>
			<h2 class="flip-hidden">Browse Listings <i class="sl sl-icon-arrow-right"></i></h2>
		</div>
	</a>
	<!-- Flip banner / End -->
	
	
	
	
	
	<!-- Footer
	================================================== -->
	<div id="footer">
		<!-- Main -->
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6">
					<img class="footer-logo" src="images/logo.png" alt="">
					<br><br>
					<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
				</div>
	
				<div class="col-md-4 col-sm-6 ">
					<h4>Helpful Links</h4>
					<ul class="footer-links">
						<li><a href="#">Login</a></li>
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Add Listing</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
	
					<ul class="footer-links">
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Our Partners</a></li>
						<li><a href="#">How It Works</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>		
	
				<div class="col-md-3  col-sm-12">
					<h4>Contact Us</h4>
					<div class="text-widget">
						<span>12345 Little Lonsdale St, Melbourne</span> <br>
						Phone: <span>(123) 123-456 </span><br>
						E-Mail:<span> <a href="#">office@example.com</a> </span><br>
					</div>
	
					<ul class="social-icons margin-top-20">
						<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
						<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
					</ul>
	
				</div>
	
			</div>
			
			<!-- Copyright -->
			<div class="row">
				<div class="col-md-12">
					<div class="copyrights">© 2021 Listeo. All Rights Reserved.</div>
				</div>
			</div>
	
		</div>
	
	</div>
	<!-- Footer / End -->
	
	
	<!-- Back To Top Button -->
	<div id="backtotop"><a href="#"></a></div>
	
	
	</div>
	
	<!-- Mobile Navigation -->
	<nav class="mobile-nav mmenu-trigger">
		<div class="mmenu_icon">
			<a href="#" class="mmenus">
				<span class="material-icons-outlined " style="font-size: 42px; margin: auto; color: black; font-weight: bold;">
					search
				</span>
				<p class="icon-disc" style="color: black; font-weight: bold;">さがす</p>
			</a>
		</div>
		<div class="mmenu_icon">
			<a href="#" class="mmenus">
				<span class="material-icons-outlined" style="font-size: 42px; margin: auto; color: #BFBFBF;">
					favorite_border
				</span>
				<p class="icon-disc">お気に入り</p>
			</a>
		</div>
		<div class="mmenu_icon">
			<a href="#" class="mmenus">
				<span class="material-icons-outlined" style="font-size: 42px; margin: auto; color: #BFBFBF;">
					fitness_center
				</span>
				<p class="icon-disc">トレーニング</p>
			</a>
		</div>
		<div class="mmenu_icon">
			<a href="#" class="mmenus">
				<span class="material-icons-outlined" style="font-size: 42px; margin: auto; color: #BFBFBF;">
					chat_bubble_outline
				</span>
				<p class="icon-disc">メッセージ</p>
			</a>
		</div>
		<div class="mmenu_icon">
			<a href="#" class="mmenus">
				<span class="material-icons-outlined" style="font-size: 42px; margin: auto; color: #BFBFBF;">
					account_circle
				</span>
				<p class="icon-disc">プロフィール</p>
			</a>
		</div>
	</nav>
	<!-- Mobile Navigation End-->
	<!-- Wrapper / End -->
@endsection
	
	
	
	
@push('js')
	<!-- Booking Widget - Quantity Buttons -->
	<script src="{{ asset('/js/quantityButtons.js') }}"></script>
	
	
	<!-- Google Autocomplete -->
	<script>
	  function initAutocomplete() {
	    var input = document.getElementById('autocomplete-input');
	    var autocomplete = new google.maps.places.Autocomplete(input);
	
	    autocomplete.addListener('place_changed', function() {
	      var place = autocomplete.getPlace();
	      if (!place.geometry) {
	        return;
	      }
	    });
	
		if ($('.main-search-input-item')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>
	
	<!-- Style Switcher
	================================================== -->
	<script src="{{ asset('/js/switcher.js') }}"></script>
	
	<div id="style-switcher">
		<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
		
		<div>
			<ul class="colors" id="color1">
				<li><a href="#" class="main" title="Main"></a></li>
				<li><a href="#" class="blue" title="Blue"></a></li>
				<li><a href="#" class="green" title="Green"></a></li>
				<li><a href="#" class="orange" title="Orange"></a></li>
				<li><a href="#" class="navy" title="Navy"></a></li>
				<li><a href="#" class="yellow" title="Yellow"></a></li>
				<li><a href="#" class="peach" title="Peach"></a></li>
				<li><a href="#" class="beige" title="Beige"></a></li>
				<li><a href="#" class="purple" title="Purple"></a></li>
				<li><a href="#" class="celadon" title="Celadon"></a></li>
				<li><a href="#" class="red" title="Red"></a></li>
				<li><a href="#" class="brown" title="Brown"></a></li>
				<li><a href="#" class="cherry" title="Cherry"></a></li>
				<li><a href="#" class="cyan" title="Cyan"></a></li>
				<li><a href="#" class="gray" title="Gray"></a></li>
				<li><a href="#" class="olive" title="Olive"></a></li>
			</ul>
		</div>
			
	</div>
	<!-- Style Switcher / End -->
@endpush


</body>
</html>



