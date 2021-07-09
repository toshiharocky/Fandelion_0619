@extends('layouts.menu')

@push('css')
    <!--<link href="{{ asset('css/〇〇.css') }}" rel="stylesheet">-->
@endpush

@section('content')
<div class="container">
    <div class="col-md-12" style="margin:0 auto; display:flex; flex-direction:column; align-items:center;" >
        <!-- Booking Summary -->
    	<div class="listing-item-container compact order-summary-widget">
    		<div class="listing-item">
    			<img src="images/listing-item-04.jpg" alt="">
    
    			<div class="listing-item-content">
    				<div class="numerical-rating" data-rating="5.0"></div>
    				<h3>Burger House</h3>
    				<span>2726 Shinn Street, New York</span>
    			</div>
    		</div>
    	</div>
    	<h3 class="margin-top-55 margin-bottom-30">Booking Summary</h3>
    	<div class="boxed-widget opening-hours summary margin-top-0" style="width:80%;">
    		
    		<ul>
    			<li>Date <span>10/20/2019</span></li>
    			<li>Hour <span>5:30 PM</span></li>
    			<li>Guests <span>2 Adults</span></li>
    			<li class="total-costs">Total Cost <span>$9.00</span></li>
    		</ul>
    
    	</div>
    	<!-- Booking Summary / End -->
    <!--booking_completedへ-->
    
    
        <h3 class="margin-top-55 margin-bottom-30">Payment Method</h3>
        <!-- Payment Methods Accordion -->
        <div class="payment">
        
        	<div class="payment-tab payment-tab-active">
        		<div class="payment-tab-trigger">
        			<input checked id="paypal" name="cardType" type="radio" value="paypal">
        			<label for="paypal">PayPal</label>
        			<img class="payment-logo paypal" src="https://i.imgur.com/ApBxkXU.png" alt="">
        		</div>
        
        		<div class="payment-tab-content">
        			<p>You will be redirected to PayPal to complete payment.</p>
        		</div>
        	</div>
        
        
        	<div class="payment-tab">
        		<div class="payment-tab-trigger">
        			<input type="radio" name="cardType" id="creditCart" value="creditCard">
        			<label for="creditCart">Credit / Debit Card</label>
        			<img class="payment-logo" src="https://i.imgur.com/IHEKLgm.png" alt="">
        		</div>
        
        		<div class="payment-tab-content">
        			<div class="row">
        
        				<div class="col-md-6">
        					<div class="card-label">
        						<label for="nameOnCard">Name on Card</label>
        						<input id="nameOnCard" name="nameOnCard" required type="text">
        					</div>
        				</div>
        
        				<div class="col-md-6">
        					<div class="card-label">
        						<label for="cardNumber">Card Number</label>
        						<input id="cardNumber" name="cardNumber" placeholder="1234  5678  9876  5432" required type="text">
        					</div>
        				</div>
        
        				<div class="col-md-4">
        					<div class="card-label">
        						<label for="expirynDate">Expiry Month</label>
        						<input id="expiryDate" placeholder="MM" required type="text">
        					</div>
        				</div>
        
        				<div class="col-md-4">
        					<div class="card-label">
        						<label for="expiryDate">Expiry Year</label>
        						<input id="expirynDate" placeholder="YY" required type="text">
        					</div>
        				</div>
        
        				<div class="col-md-4">
        					<div class="card-label">
        						<label for="cvv">CVV</label>
        						<input id="cvv" required type="text">
        					</div>
        				</div>
        
        			</div>
        		</div>
        	</div>
        
        </div>
        <!-- Payment Methods Accordion / End -->
    </div>
</div>

<!-- Content / End -->
@push('js')
<!--<script src="{{ asset('js/〇〇.js') }}"></script>-->

@endpush
@endsection
