@extends('layouts.menu')

@push('css')
    <!--<link href="{{ asset('css/〇〇.css') }}" rel="stylesheet">-->
    <style>
    	#booking_header {
			  display:flex; 
    		  justify-content:space-between;
    		  border-bottom: 1px solid black;
    		  margin-bottom: 20px;
    	}
    	
    	#booking_overview{
    		display:flex;
    		justify-content:space-around;
    	}
    	
    	
    	
    	.element_details{
    		text-align:right;
    	}
    	
    	.booking_price{
    		background-color: #fff0c1;
    		<!--color:white;-->
    		text-align:center;
    		padding:5px;
    		display:flex;
    		flex-direction:row;
    		justify-content:center;
    	}
    	
    	#submit_button	 {
    		text-align:right;
    		margin-top:15px;
    	}
    	.cursor {
    		cursor: pointer !important;
    	}
    	
    </style>
@endpush

@section('content')
<!-- Content
================================================== -->
<div class="container">
	<div id="booking_header">
		<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar" style="display:flex; flex-direction:row; justify-content:space-between; max-width:50%;">
				<div class="listing-titlebar-title">
					<h2>{{$gym_title}} 
						<div id=gym_tags></div>
					</h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{$addr}}
						</a>
					</span>
				</div>
			</div>
			
			<!-- Book Now -->
			<div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-35" style="width:50%; margin-bottom:10px;">
				<h3><i class="fa fa-calendar-check-o "></i>現在の予約内容</h3>
				<form method=post action="/booking_confirm">
				@csrf
					<div id="booking_overview">
						<div id="time" class="booking_elements" style="width:25%;">
							<h4>時間：60分</h4>
							<h5 class="element_details">10:00 〜 11:00</h5>
						</div>
						<div id="guest" class="booking_elements" style="width:20%;">
							<h4>人数：2名</h4>
							<h5 class="element_details">男性 1名</h5>
							<h5 class="element_details">女性 1名</h5>
							<h5 class="element_details">その他 1名</h5>
						</div>
						<div id="price" class="booking_elements" style="width:30%;">
							<h4>総計(目安)：726円</h4>
							<h5 class="element_details">ジム使用料 600円</h5>
							<h5 class="element_details">サービス料 60円</h5>
							<h5 class="element_details">消費税 66円</h5>
						</div>
						
					</div>
					
					<!-- Book Now -->
					<div id="submit_button">
						<input type="submit" class="button book-now fullwidth margin-top-5" value="予約内容の確認" style="background-color:#dcdcdc; color:white;" disabled>
					</div>
				</form>
			</div>
			<!-- Book Now / End -->
	</div>
			
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">
		
			
			
			<!--booking_information-->
			<h3 class="listing-desc-headline margin-top-0 margin-bottom-30">予約をする</h3>
			
			<div style="display:flex; justify-content:space-between; align-items:middle ;">
    			<div>
    			    <h4 class="listing-desc-headline margin-top-0 margin-bottom-30">人数</h4>
			    </div>
    			<div class="main-search-input-item" style="display:flex; justify-content:flex-start; border-right:none; ">
        			<div class="panel-dropdown" style="width:50%;">
        				<a href="#"  style="width:100%; text-align:center; font-size:20px;">合計 <span class="qtyTotal" name="qtyTotal" style="background-color:#f91942; font-size:20px">1</span></a>
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
    			
    		</div>
			<h4 class="listing-desc-headline margin-top-0 margin-bottom-30">日程</h4>
			<div class="row with-forms  margin-top-0">
					<!-- Date Range Picker - docs: https://www.daterangepicker.com/ -->
					<div class="col-lg-4">
						<h4 style="text-align:center;">日付を選択</h4>
						<input type="text" id="date-picker" placeholder="Date" readonly="readonly">
					</div>
					<!-- Panel Dropdown -->
					<div class="col-lg-8">
						<h4 style="text-align:center;">カレンダー表示時間を選択</h4>
						<div class="row" style="display:flex; justify-content:center; align-items:middle;">
							<div class="col-md-3">
								<select type="text" id="start_time" data-placeholder="Opening Time">
									
									<!--<option>Closed</option>-->
									<option value="00:00">00:00</option>
									<option value="01:00">01:00</option>
									<option value="02:00">02:00</option>
									<option value="03:00">03:00</option>
									<option value="04:00">04:00</option>
									<option value="05:00">05:00</option>
									<option value="06:00">06:00</option>
									<option value="07:00">07:00</option>
									<option value="08:00">08:00</option>
									<option value="09:00">09:00</option>
									<option value="10:00" selected>10:00</option>
									<option value="11:00">11:00</option>
									<option value="12:00">12:00</option>	
									<option value="13:00">13:00</option>
									<option value="14:00">14:00</option>
									<option value="15:00">15:00</option>
									<option value="16:00">16:00</option>
									<option value="17:00">17:00</option>
									<option value="18:00">18:00</option>
									<option value="19:00">19:00</option>
									<option value="20:00">20:00</option>
									<option value="21:00">21:00</option>
									<option value="22:00">22:00</option>
									<option value="23:00">23:00</option>
									<option value="24:00">24:00</option>
								</select>
							</div>
							<div class="col-md-2" style="text-align:center;"><h5> 〜 </h5></div>
							<div class="col-md-3">
								<select id="end_time" data-placeholder="Closing Time">
									
									<!--<option>Closed</option>-->
									<option value="00:00">00:00</option>
									<option value="01:00">01:00</option>
									<option value="02:00">02:00</option>
									<option value="03:00">03:00</option>
									<option value="04:00">04:00</option>
									<option value="05:00">05:00</option>
									<option value="06:00">06:00</option>
									<option value="07:00">07:00</option>
									<option value="08:00">08:00</option>
									<option value="09:00">09:00</option>
									<option value="10:00">10:00</option>
									<option value="11:00">11:00</option>
									<option value="12:00">12:00</option>	
									<option value="13:00">13:00</option>
									<option value="14:00">14:00</option>
									<option value="15:00">15:00</option>
									<option value="16:00">16:00</option>
									<option value="17:00">17:00</option>
									<option value="18:00" selected>18:00</option>
									<option value="19:00">19:00</option>
									<option value="20:00">20:00</option>
									<option value="21:00">21:00</option>
									<option value="22:00">22:00</option>
									<option value="23:00">23:00</option>
									<option value="24:00">24:00</option>
								</select>
							</div>
						</div>
						<div class="row" style="display:flex; justify-content:center; align-items:middle;">
							
							<div class="col-lg-4">
								<h4 style="text-align:center;">スロット</h4>
								<div id="time-slots">
									
								</div>
							</div>
							<div class="col-lg-4">
								<h4 style="text-align:center;">開始</h4>
								<div id="start-time-slot">
									
								</div>
							</div>
							<div class="col-lg-4">
								<h4 style="text-align:center;">終了</h4>
								<div id="end-time-slot"></div>
							</div>
						</div>	
					</div>
				</div>

		</div>


		<!-- Sidebar-->
		<!--================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-75 sticky">

				
			


			<!-- Contact -->
			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Hosted by</span> {{$host_name}}</h4>
					<a href="pages-user-profile.html" class="hosted-by-avatar"><img src="images/dashboard-avatar.jpg" alt=""></a>
				</div>
				<!--<ul class="listing-details-sidebar">-->
				<!--	<li><i class="sl sl-icon-phone"></i> (123) 123-456</li>-->
					<!-- <li><i class="sl sl-icon-globe"></i> <a href="#">https://example.com</a></li> -->
				<!--	<li><i class="fa fa-envelope-o"></i> <a href="#">tom@example.com</a></li>-->
				<!--</ul>-->

				<!--<ul class="listing-details-sidebar social-profiles">-->
				<!--	<li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>-->
				<!--	<li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>-->
					<!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->
				<!--</ul>-->

				<!-- Reply to review popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<div class="small-dialog-header">
						<h3>Send Message</h3>
					</div>
					<div class="message-reply margin-top-0">
						<textarea cols="40" rows="3" placeholder="Your message to Tom"></textarea>
						<button class="button">Send Message</button>
					</div>
				</div>

				<a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>
			</div>
			<!-- Contact / End-->


			<!-- Share / Like -->
			<div class="listing-share margin-top-40 margin-bottom-40 no-border">
				<button class="like-button"><span class="like-icon"></span> Bookmark this listing</button> 
				<span>159 people bookmarked this place</span>

					<!-- Share Buttons -->
					<!--<ul class="share-buttons margin-top-40 margin-bottom-0">-->
					<!--	<li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>-->
					<!--	<li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>-->
					<!--	<li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>-->
						<!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
					<!--</ul>-->
					<div class="clearfix"></div>
			</div>

		</div>
		<!-- Sidebar / End -->

	</div>
</div>


<!-- Footer
================================================== -->
<div id="footer" class="margin-top-15">
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

<!-- Booking Sticky Footer -->
<div class="booking-sticky-footer">
	<div class="container">
		<div class="bsf-left">
			<h4>Starting from $29</h4>
			<div class="star-rating" data-rating="5">
				<div class="rating-counter"></div>
			</div>
		</div>
		<div class="bsf-right">
			<a href="#booking-widget-anchor" class="button">Book Now</a>
		</div>
	</div>
</div>

</div>
<!-- Wrapper / End -->






<!-- Content / End -->
@push('js')
<!--<script src="{{ asset('js/〇〇.js') }}"></script>-->

<!-- Booking Widget - Quantity Buttons -->
<script src="{{ asset('js/quantityButtons.js')}}"></script>


<script>
// Calendar Init
$(function() {
	$('#date-picker').daterangepicker({
		"opens": "left",
		singleDatePicker: true,

		// Disabling Date Ranges
		isInvalidDate: function(date) {
		// Disabling Date Range
		var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
		var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
		return date.isAfter(disabled_start) && date.isBefore(disabled_end);

		// Disabling Single Day
		// if (date.format('MM/DD/YYYY') == '08/08/2018') {
		//     return true; 
		// }
		}
	});
});

// Calendar animation
$('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-animated');
});
$('#date-picker').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#date-picker').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
});
</script>

<script>
	let gym_open_times = @json($gym_open_times);
	console.log(gym_open_times);
	
	let guest_gender_flg = {{$guest_gender_flg}};
	let guest_gender = '{{$guest_gender}}';
	console.log(guest_gender_flg);
	console.log(guest_gender);
	
	
	// date-pickerが変わったらslot-changer()を発火
	$('#date-picker').on("change",function(){
		
		$("#time-slots").empty();	
		$("#start-time-slot").empty();
		$("#end-time-slot").empty();
		
	
		let date = $("#date-picker").val();
		let start_time = $("#start_time").val();
		console.log(start_time);
		let end_time = $("#end_time").val();
		console.log(end_time);
		
		let openingtimes = $.grep(gym_open_times, function(elem,index){
			return (elem.date == date);
		});
		
		
		
		$.each(openingtimes, function(index,openingtime){
			if(openingtime.from_time >= start_time && openingtime.from_time < end_time ){
				if(openingtime.status == "○"){
					
					$("#time-slots").append(
						`<div class="time-slot">
						<p id="time-slot-1" >
						<label for="time-slot-1" style="text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;">
							<strong>${openingtime.from_time} - ${openingtime.to_time}</strong>
						</label>
						</p>
					</div>`
					)
					
					$("#start-time-slot").append(
					`<div class="time-slot">
						<p id="time-slot-1" >
						<a class="start_slot">
							<label id="${openingtime.gym_schedule_id}" value="${openingtime.from_time}" for="time-slot-1" class="booking_price booking_price_start" style="background-color:#fff0c1; cursor:pointer;">
								<strong value="${openingtime.price}">${openingtime.price}円</strong>
							</label>
						</a>
						</p>
					</div>`);
				} else {
					$("#time-slots").append(
						`<div class="time-slot">
						<p id="time-slot-1" >
						<label for="time-slot-1" style="text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;">
							<strong>${openingtime.from_time} - ${openingtime.to_time}</strong>
						</label>
						</p>
					</div>`
					)
					
					$("#start-time-slot").append(
					`<div class="time-slot">
						<p id="time-slot-1" >
						<label for="time-slot-1" style="text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;">
							<strong class="booking_status" style="font-size:25px;" value="${openingtime.status}">${openingtime.status}</strong>
						</label>
						</p>
					</div>`);
				}
			}
		});
		
		$(".start_slot").on("click",function(){
			
			console.log($(this).children('label').attr('id'));
			console.log($(this).children('label').children('strong').attr('value'));
			
			// 開始時間を設定する
			let start_time_set = $(this).children('label').attr('value');
			
			// 選択した箇所のみ背景色を変える
			$(".booking_price_start").css('background-color', '#fff0c1');
			$(this).children('label').css('background-color', 'red');
			
			
			// 終了時刻のスロットを表示する
			$("#end-time-slot").empty();
			$.each(openingtimes, function(index,openingtime){
				if(openingtime.from_time >= start_time && openingtime.from_time < end_time ){
					console.log(openingtime.from_time < start_time_set);
					if(openingtime.status == "○"){
						if(openingtime.from_time < start_time_set){
						$("#end-time-slot").append(
							`<div class="time-slot">
								<p id="time-slot-1" >
								<label for="time-slot-1" style="text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;">
									<strong class="booking_status" style="font-size:25px;"> - </strong>
								</label>
								</p>
							</div>`);
							
						}else {
							$("#end-time-slot").append(
							`<div class="time-slot">
								<p id="time-slot-1" >
								<a class="end_slot">
									<label id="${openingtime.gym_schedule_id}" value="${openingtime.from_time}" for="time-slot-1" class="booking_price  booking_price_end" style="background-color:#fff0c1; cursor:pointer;">
										<strong value="${openingtime.price}">${openingtime.price}円</strong>
									</label>
								</a>
								</p>
							</div>`);
						}
					} else {
						$("#end-time-slot").append(
						`<div class="time-slot">
							<p id="time-slot-1" >
							<label for="time-slot-1" style="text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;">
								<strong class="booking_status" style="font-size:25px;" value="${openingtime.status}">${openingtime.status}</strong>
							</label>
							</p>
						</div>`);
					}
				}
			});
			
			$(".end_slot").on("click",function(){
			
				console.log($(this).children('label').attr('id'));
				console.log($(this).children('label').children('strong').attr('value'));
				
				// 開始時間を設定する
				let start_time_set = $(this).children('label').attr('value');
				
				// 選択した箇所のみ背景色を変える
				$(".booking_price_end").css('background-color', '#fff0c1');
				$(this).children('label').css('background-color', 'red');
			
			});
			
			
		});
		
		
		
		})
</script>

@endpush
@endsection
