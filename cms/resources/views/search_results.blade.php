@extends('layouts.menu')

@push('css')
    <!--<link href="{{ asset('css/〇〇.css') }}" rel="stylesheet">-->
@endpush

@section('content')

<!-- Content
================================================== -->
<div class="fs-container">

	<div class="fs-inner-container content">
		<div class="fs-content">

			<!-- Search -->
			<section class="search">

				<div class="row">
					<div class="col-md-12">

							<!-- Row With Forms -->
							<div class="row with-forms">

								<!-- Main Search Input -->
								<div class="col-fs-6">
									<div class="input-with-icon">
										<i class="sl sl-icon-magnifier"></i>
										<input type="text" placeholder="What are you looking for?" value=""/>
									</div>
								</div>

								<!-- Main Search Input -->
								<div class="col-fs-6">
									<div class="input-with-icon location">
							
										<div id="autocomplete-container">
											<input id="autocomplete-input" type="text" placeholder="Location">
										</div>
										<a href="#"><i class="fa fa-map-marker"></i></a>
									</div>
								</div>
						

								<!-- Filters -->
								<div class="col-fs-12">

									<!-- Panel Dropdown / End -->
									<div class="panel-dropdown">
										<a href="#">Categories</a>
										<div class="panel-dropdown-content checkboxes categories">
											
											<!-- Checkboxes -->
											<div class="row">
												<div class="col-md-6">
													<input id="check-1" type="checkbox" name="check" checked class="all">
													<label for="check-1">All Categories</label>

													<input id="check-2" type="checkbox" name="check">
													<label for="check-2">Shops</label>

													<input id="check-3" type="checkbox" name="check">
													<label for="check-3">Hotels</label>
												</div>	

												<div class="col-md-6">
													<input id="check-4" type="checkbox" name="check" >
													<label for="check-4">Eat & Drink</label>

													<input id="check-5" type="checkbox" name="check">
													<label for="check-5">Fitness</label>	

													<input id="check-6" type="checkbox" name="check">
													<label for="check-6">Events</label>
												</div>
											</div>
											
											<!-- Buttons -->
											<div class="panel-buttons">
												<button class="panel-cancel">Cancel</button>
												<button class="panel-apply">Apply</button>
											</div>

										</div>
									</div>
									<!-- Panel Dropdown / End -->

									<!-- Panel Dropdown -->
									<div class="panel-dropdown wide">
										<a href="#">More Filters</a>
										<div class="panel-dropdown-content checkboxes">

											<!-- Checkboxes -->
											<div class="row">
												<div class="col-md-6">
													<input id="check-a" type="checkbox" name="check">
													<label for="check-a">Elevator in building</label>

													<input id="check-b" type="checkbox" name="check">
													<label for="check-b">Friendly workspace</label>

													<input id="check-c" type="checkbox" name="check">
													<label for="check-c">Instant Book</label>

													<input id="check-d" type="checkbox" name="check">
													<label for="check-d">Wireless Internet</label>
												</div>	

												<div class="col-md-6">
													<input id="check-e" type="checkbox" name="check" >
													<label for="check-e">Free parking on premises</label>

													<input id="check-f" type="checkbox" name="check" >
													<label for="check-f">Free parking on street</label>

													<input id="check-g" type="checkbox" name="check">
													<label for="check-g">Smoking allowed</label>	

													<input id="check-h" type="checkbox" name="check">
													<label for="check-h">Events</label>
												</div>
											</div>
											
											<!-- Buttons -->
											<div class="panel-buttons">
												<button class="panel-cancel">Cancel</button>
												<button class="panel-apply">Apply</button>
											</div>

										</div>
									</div>
									<!-- Panel Dropdown / End -->

									<!-- Panel Dropdown -->
									<div class="panel-dropdown">
										<a href="#">Distance Radius</a>
										<div class="panel-dropdown-content">
											<input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
											<div class="panel-buttons">
												<button class="panel-cancel">Disable</button>
												<button class="panel-apply">Apply</button>
											</div>
										</div>
									</div>
									<!-- Panel Dropdown / End -->
									
								</div>
								<!-- Filters / End -->
	
							</div>
							<!-- Row With Forms / End -->

					</div>
				</div>

			</section>
			<!-- Search / End -->


		<section class="listings-container margin-top-30">
			<!-- Sorting / Layout Switcher -->
			<div class="row fs-switcher">

				<div class="col-md-6">
					<!-- Showing Results -->
					<p class="showing-results">{{$search_amount}} Results Found </p>
				</div>

			</div>


			
			@for($i=0; $i<$search_amount; $i++)
				<!-- Listings -->
				<form method="post" name="gym_select" action="gym_introduction">
				@csrf
					<div class="col-lg-6 col-md-12">
						<a onclick="document:gym_select[{{$i}}].submit(); return false;" class="listing-item-container" data-marker-id={{$i}}>
							<input type="hidden" name="gym_id" value="{{$gym_id[$i]}}">
							<div class="listing-item">
								<img src="images/gym_images/{{$gym_image_url[$i]}}" alt="">
								<div class="listing-item-content">
									<!--<div id="guest_gender_{{$i}}" value="{{$guest_gender[$i]}}"></div>-->
									<h3>{{$gym_titles[$i]}} <i class="verified-icon"></i></h3>
									<span>{{$gym_addr[$i]}}</span>
								</div>
								<!--<span class="like-icon"></span>-->
							</div>
							<div class="star-rating" data-rating="5"> 
								<div class="rating-counter">(10 reviews)</div> 
							</div>
						</a>
					</div>
				</form>
				
				
				
				<!--
				<!-- Listings Container / End -->
			@endfor


			<!-- Pagination Container -->
			<div class="row fs-listings">
				<div class="col-md-12">

					<!-- Pagination -->
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12">
							<!-- Pagination -->
							<div class="pagination-container margin-top-15 margin-bottom-40">
								<nav class="pagination">
									<ul>
										<li><a href="#" class="current-page">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- Pagination / End -->
					
					<!-- Copyrights -->
					<div class="copyrights margin-top-0">© 2021 Listeo. All Rights Reserved.</div>

				</div>
			</div>
			<!-- Pagination Container / End -->
		</section>

		</div>
	</div>
	<div class="fs-inner-container map-fixed">

		<!-- Map -->
		<div id="map-container">
		    <div id="map" data-map-zoom="9" data-map-scroll="true">
		        <!-- map goes here -->
		    </div>
		</div>

	</div>
</div>


</div>
<!-- Mobile Navigation -->
<nav class="mobile-nav mmenu-trigger">
	<div class="mmenu_icon">
		<a href="#" class="mmenus">
			<span class="material-icons-outlined" style="font-size: 42px; margin: auto; color: black; font-weight: bold;">
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



@push('js')
<!--<script src="{{ asset('js/〇〇.js') }}"></script>-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBI-9n6pQ1Vqktbyg8LGjLW-NCPsa6SQ5g&language=ja"></script>



@endpush
@endsection
