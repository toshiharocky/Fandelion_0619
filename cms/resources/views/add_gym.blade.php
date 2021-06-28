@extends('layouts.menu')

@section('content')
<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Listing</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">
					<form method='POST' action={{ 'gym_register' }} enctype="multipart/form-data">
            			@csrf
						<!-- Section -->
						<div class="add-listing-section">
							
	
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
							</div>
	
							<!-- Title -->
							<div class="row with-forms">
								<div class="col-md-12">
									<h5>ジムタイトル <i class="tip" data-tip-content="Name of your gym"></i></h5>
									<input name="gym_title" class="search-field" type="text"  required/>
								</div>
							</div>
	
							<!-- Row -->
							<div class="row with-forms">
	
								<!-- Status -->
								<div class="col-md-6">
									<h5>ジムタイプ</h5>
									<select name="gymType_id" class="chosen-select-no-single" value="選択してください"   required>
										<option value="" style="display:none;">ジムの利用タイプを選んでください</option>	
										<option value="1" >個室</option>
										<option value="2" >住宅全体</option>
										<option value="3" >シェアスペース</option>
									</select>
								</div>
								<div class="col-md-6">
									<h5>広さ</h5>
									<select  name="area" class="chosen-select-no-single" value="選択してください"   required>
										<option value="" style="display:none;">使用可能なエリアの面積を選んでください</option>	
										<option value="1" >〜10㎡</option>
										<option value="2" >10〜20㎡</option>
										<option value="3" >30〜40㎡</option>
										<option value="4" >40〜50㎡</option>
										<option value="5" >50㎡以上</option>
									</select>
								</div>
								<div class="col-md-6">
									<h5>定員</h5>
									<div style="display:flex; flex-direction:row;">
										<input name="guest_limit" placeholder="定員数を記入してください" required>
										<span style="margin:auto; margin-left:10px;">
											名
										</span>
										</input>
									</div>
								</div>
								<div class="col-md-6">
									<h5>ゲストの性別</h5>
									<select  type="integer"name="guest_gender" class="chosen-select-no-single" value="選択してください"   required>
										<option value="" style="display:none;">ゲストの性別に関する要望を記入してください</option>	
										<option value="1" >特になし</option>
										<option value="2" >女性限定</option>
										<option value="3" >男性限定</option>
										<option value="4" >女性限定(女性同伴の場合は男性も可)</option>
										<option value="5" >男性限定(男性同伴の場合は可)</option>
									</select>
								</div>
							</div>
							<div class="row with-forms">
	
								<!-- Type -->
								<!--<div class="col-md-12">-->
								<!--	<h5>ジムの説明 <i class="tip" data-tip-content="400字以内でジムのアピールポイントを説明してください"></i></h5>-->
								<!--	<input id="gym_desc" type="text" placeholder="">-->
								<!--</div>-->
	
							</div>
							<!-- Row / End -->
	
						</div>
						<!-- Section / End -->
	
						<!-- Section -->
						<div class="add-listing-section margin-top-45">
	
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="sl sl-icon-location"></i> Location</h3>
							</div>
	
							<div class="submit-section">
	
								<!-- Row -->
								<div class="row with-forms">
	
									<!-- City -->
									<!--<div class="col-md-6">-->
									<!--	<h5>City</h5>-->
									<!--	<select class="chosen-select-no-single" >-->
									<!--		<option label="blank">Select City</option>	-->
									<!--		<option>New York</option>-->
									<!--		<option>Los Angeles</option>-->
									<!--		<option>Chicago</option>-->
									<!--		<option>Houston</option>-->
									<!--		<option>Phoenix</option>-->
									<!--		<option>San Diego</option>-->
									<!--		<option>Austin</option>-->
									<!--	</select>-->
									<!--</div>-->
	
									<!-- Address -->
									<!--<div class="col-md-6">-->
									<!--	<h5>Address</h5>-->
									<!--	<input type="text" placeholder="e.g. 964 School Street">-->
									<!--</div>-->
	
									<!-- City -->
									<!--<div class="col-md-6">-->
									<!--	<h5>State</h5>-->
									<!--	<input type="text">-->
									<!--</div>-->
	
									<!-- Zip-Code -->
									<div class="col-md-6 add_gym_map">
										<div class="add_gym_map_parts" >
											<!--<h5>Zip-Code</h5>-->
											〒<input class="col-md-3" type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');"><br>
											<input class="col-md-3" type="text" name="pref01" size="20"><br>
											<input class="col-md-6" id="address" type="text" name="addr01" size="60">
    										<input id="mapbutton" type="button" value="Encode" onclick="codeAddress()">
										</div>
										<div class="add_gym_map_parts">
											<h5>ジムの所在地へドラッグしてください <i class="tip" ></i></h5>
											<div id="map"  style="width:100%; height:300px;"></div>
											<div id="map_place"></div>
										</div>
									</div>
	
								</div>
								<!-- Row / End -->
	
							</div>
						</div>
						<!-- Section / End -->
	
	
						<!-- Section -->
						<div class="add-listing-section margin-top-45">
	
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="sl sl-icon-picture"></i> Gallery</h3>
							</div>
	
							<!-- Dropzone -->
							<div class="submit-section">
								<input type="file" class="dropzone" name="images[]" multiple>
							</div>
	
						</div>
						<!-- Section / End -->
	
	
						<!-- Section -->
						<div class="add-listing-section margin-top-45">
	
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="sl sl-icon-docs"></i> Details</h3>
							</div>
	
							<!-- Description -->
							<div class="form">
								<h5>ジムの説明</h5>
								<textarea name="gym_desc" class="WYSIWYG" name="summary" cols="40" rows="3" spellcheck="true"></textarea>
								<h5>キャンセルポリシー</h5>
								<input type="radio" name="cancel_policy_id" value="1" checked>柔軟
								<p>チェックイン（確認メールに記載の日時）の1時間前までは無料でキャンセルできます。</p>
								<input type="radio" name="cancel_policy_id" value="2">普通
								<p>チェックイン（確認メールに記載の日時）の24時間前までは無料でキャンセルできます。</p>
								<input type="radio" name="cancel_policy_id" value="3">厳格
								<p>チェックイン（確認メールに記載の日時）の3日前までは無料でキャンセルできます。</p>
								<input type="radio" name="cancel_policy_id" value="4">かなり厳格
								<p>チェックイン（確認メールに記載の日時）の7日前までは無料でキャンセルできます。</p>
							</div>
	
							<!-- Row -->
							<!--<div class="row with-forms">-->
	
								<!-- Phone -->
							<!--	<div class="col-md-4">-->
							<!--		<h5>Phone <span>(optional)</span></h5>-->
							<!--		<input type="text">-->
							<!--	</div>-->
	
								<!-- Website -->
							<!--	<div class="col-md-4">-->
							<!--		<h5>Website <span>(optional)</span></h5>-->
							<!--		<input type="text">-->
							<!--	</div>-->
	
								<!-- Email Address -->
							<!--	<div class="col-md-4">-->
							<!--		<h5>E-mail <span>(optional)</span></h5>-->
							<!--		<input type="text">-->
							<!--	</div>-->
	
							<!--</div>-->
							<!-- Row / End -->
	
	
							<!-- Row -->
							<!--<div class="row with-forms">-->
	
								<!-- Phone -->
							<!--	<div class="col-md-4">-->
							<!--		<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>-->
							<!--		<input type="text" placeholder="https://www.facebook.com/">-->
							<!--	</div>-->
	
								<!-- Website -->
							<!--	<div class="col-md-4">-->
							<!--		<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></h5>-->
							<!--		<input type="text" placeholder="https://www.twitter.com/">-->
							<!--	</div>-->
	
								<!-- Email Address -->
							<!--	<div class="col-md-4">-->
							<!--		<h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optional)</span></h5>-->
							<!--		<input type="text" placeholder="https://plus.google.com">-->
							<!--	</div>-->
	
							<!--</div>-->
							<!-- Row / End -->
	
	
							<!-- Checkboxes -->
							<!--<h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>-->
							<!--<div class="checkboxes in-row margin-bottom-20">-->
						
							<!--	<input id="check-a" type="checkbox" name="check">-->
							<!--	<label for="check-a">Elevator in building</label>-->
	
							<!--	<input id="check-b" type="checkbox" name="check">-->
							<!--	<label for="check-b">Friendly workspace</label>-->
	
							<!--	<input id="check-c" type="checkbox" name="check">-->
							<!--	<label for="check-c">Instant Book</label>-->
	
							<!--	<input id="check-d" type="checkbox" name="check">-->
							<!--	<label for="check-d">Wireless Internet</label>-->
	
							<!--	<input id="check-e" type="checkbox" name="check" >-->
							<!--	<label for="check-e">Free parking on premises</label>-->
	
							<!--	<input id="check-f" type="checkbox" name="check" >-->
							<!--	<label for="check-f">Free parking on street</label>-->
	
							<!--	<input id="check-g" type="checkbox" name="check">-->
							<!--	<label for="check-g">Smoking allowed</label>	-->
	
							<!--	<input id="check-h" type="checkbox" name="check">-->
							<!--	<label for="check-h">Events</label>-->
						
							<!--</div>-->
							<!-- Checkboxes / End -->
	
						</div>
						<!-- Section / End -->
						
						<!-- Section -->
						<div class="add-listing-section margin-top-45">
							
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="sl sl-icon-book-open"></i> Equipments</h3>
								<!-- Switcher -->
								<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
							</div>
	
							<!-- Switcher ON-OFF Content -->
							<div class="switcher-content">
	
								<div class="row">
									<div class="col-md-12">
										<table id="pricing-list-container">
											<tr class="pricing-list-item pattern">
												<td>
													<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
													<div class="fm-close"><a class="delete" ><i class="fa fa-remove"></i></a></div>
													<div class="fm-input ">
														<input list="equipment-list" name="equipment_name[]" type="text" placeholder="選択肢にない場合は直接入力してください" />
														<datalist id="equipment-list">
															<option value="ダンベル">ダンベル</option>
															<option value="バーベル">バーベル</option>
															<option value="ベンチプレス">ベンチプレス</option>
															<option value="スクワットラック">スクワットラック</option>
															<option value="スミスマシン">スミスマシン</option>
															<option value="トレッドミル">トレッドミル</option>
															<option value="エアロバイク">エアロバイク</option>
														</datalist>
													</div>
													<div class="fm-input "><input name="min_weight[]" placeholder="Min Weight"/></div>
													<p style="display: inline-block; vertical-align: bottom; margin:auto;">kg ~</p>
													<div class="fm-input "><input name="max_weight[]" placeholder="Max Weight"/></div>
													<p style="display: inline-block; vertical-align: bottom; margin:auto;">kg</p>
													<!--<div class="fm-input "><input type="text" placeholder="Price" data-unit="USD" /></div>-->
												</td>
												<td>
													<div class="fm-input "><input name="note[]" type="text" placeholder="備考"/></div>
												</td>
											</tr>
										</table>
										<a href="#" class="button add-pricing-list-item">Add Item</a>
										<!--<a href="#" class="button add-pricing-submenu">Add Category</a>-->
									</div>
								</div>
	
							</div>
							<!-- Switcher ON-OFF Content / End -->
	
						</div>
						<!-- Section / End -->
	
	
						<!-- Section -->
						<div class="add-listing-section margin-top-45">
							
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="fa fa-calendar-check-o"></i> Availability</h3>
								<!-- Switcher -->
								<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
							</div>
							
							<!-- Switcher ON-OFF Content -->
							<div class="switcher-content">
									
									<!-- Availablity Slots -->
									<!-- Set data-clock-type="24hr" to enable 24 hours clock type -->
									<div class="availability-slots" data-clock-type="24hr">
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Monday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Tuesday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Wednesday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Thursday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Friday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">8:30 <i class="am-pm">am</i> - 9:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:00 <i class="am-pm">am</i> - 9:30 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
	
												<!-- Single Slot -->
												<div class="single-slot">
													<div class="single-slot-left">
														<div class="single-slot-time">9:30 <i class="am-pm">am</i> - 10:00 <i class="am-pm">am</i></div>
														<button class="remove-slot"><i class="fa fa-close"></i></button>
													</div>
	
													<div class="single-slot-right">
														<strong>Slots:</strong>
														<div class="plusminus horiz">
															<button></button>
															<input type="number" name="slot-qty" value="1" min="1" max="99">
															<button></button> 
														</div>
													</div>
												</div>
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Saturday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
										<!-- Single Day Slots -->
										<div class="day-slots">
											<div class="day-slot-headline">
												Sunday
											</div>
											
											<!-- Slot For Cloning / Do NOT Remove-->
											<div class="single-slot cloned">
												<div class="single-slot-left">
													<div class="single-slot-time"></div>
													<button class="remove-slot"><i class="fa fa-close"></i></button>
												</div>
	
												<div class="single-slot-right">
													<strong>Slots:</strong>
													<div class="plusminus horiz">
														<button></button>
														<input type="number" name="slot-qty" value="1" min="1" max="99">
														<button></button> 
													</div>
												</div>
											</div>		
											<!-- Slot For Cloning / Do NOT Remove-->
	
	
											<!-- No slots -->
											<div class="no-slots">No slots added</div>
	
											<!-- Slots Container -->
											<div class="slots-container">
												
											</div>
											<!-- Slots Container / End -->
	
	
											<!-- Add Slot -->
											<div class="add-slot">
												<div class="add-slot-inputs">
	        										<input type="time" class="time-slot-start" min="00:00" max="12:00"/>
													<select class="time-slot-start twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
	        										<span>-</span>
	
	   												<input type="time" class="time-slot-end" min="00:00" max="12:00"/>
													<select class="time-slot-end twelve-hr" id="">
														<option>am</option>
														<option>pm</option>
													</select>
												</div>
												<div class="add-slot-btn">
													<button>Add</button>
												</div>
											</div>
	
										</div>
										<!-- Single Day Slots / End -->
	
									</div>
									<!-- Availablity Slots / End -->
	
							</div>
							<!-- Switcher ON-OFF Content / End -->
	
						</div>
						<!-- Section / End -->
	
	
						<!-- Section -->
						<div class="add-listing-section margin-top-45">
							
							<!-- Headline -->
							<div class="add-listing-headline">
								<h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
								<!-- Switcher -->
								<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
							</div>
							
							<!-- Switcher ON-OFF Content -->
							<div class="switcher-content">
	
								<!-- Day -->
								<div class="row opening-day">
									<div class="col-md-2"><h5>Monday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<option label="Opening Time"></option>
											<option>Closed</option>
											<option>1 AM</option>
											<option>2 AM</option>
											<option>3 AM</option>
											<option>4 AM</option>
											<option>5 AM</option>
											<option>6 AM</option>
											<option>7 AM</option>
											<option>8 AM</option>
											<option>9 AM</option>
											<option>10 AM</option>
											<option>11 AM</option>
											<option>12 AM</option>	
											<option>1 PM</option>
											<option>2 PM</option>
											<option>3 PM</option>
											<option>4 PM</option>
											<option>5 PM</option>
											<option>6 PM</option>
											<option>7 PM</option>
											<option>8 PM</option>
											<option>9 PM</option>
											<option>10 PM</option>
											<option>11 PM</option>
											<option>12 PM</option>
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<option label="Closing Time"></option>
											<option>Closed</option>
											<option>1 AM</option>
											<option>2 AM</option>
											<option>3 AM</option>
											<option>4 AM</option>
											<option>5 AM</option>
											<option>6 AM</option>
											<option>7 AM</option>
											<option>8 AM</option>
											<option>9 AM</option>
											<option>10 AM</option>
											<option>11 AM</option>
											<option>12 AM</option>	
											<option>1 PM</option>
											<option>2 PM</option>
											<option>3 PM</option>
											<option>4 PM</option>
											<option>5 PM</option>
											<option>6 PM</option>
											<option>7 PM</option>
											<option>8 PM</option>
											<option>9 PM</option>
											<option>10 PM</option>
											<option>11 PM</option>
											<option>12 PM</option>
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
								<!-- Day -->
								<div class="row opening-day js-demo-hours">
									<div class="col-md-2"><h5>Tuesday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
								<!-- Day -->
								<div class="row opening-day js-demo-hours">
									<div class="col-md-2"><h5>Wednesday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
								<!-- Day -->
								<div class="row opening-day js-demo-hours">
									<div class="col-md-2"><h5>Thursday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
								<!-- Day -->
								<div class="row opening-day js-demo-hours">
									<div class="col-md-2"><h5>Friday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
								<!-- Day -->
								<div class="row opening-day js-demo-hours">
									<div class="col-md-2"><h5>Saturday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
								<!-- Day -->
								<div class="row opening-day js-demo-hours">
									<div class="col-md-2"><h5>Sunday</h5></div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Opening Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
									<div class="col-md-5">
										<select class="chosen-select" data-placeholder="Closing Time">
											<!-- Hours added via JS (this is only for demo purpose) -->
										</select>
									</div>
								</div>
								<!-- Day / End -->
	
							</div>
							<!-- Switcher ON-OFF Content / End -->
	
						</div>
						<!-- Section / End -->
	
	
						
	
	
						<input type="submit" class="button preview"> <i class="fa fa-arrow-circle-right"></i></input>
					</form>
				</div>
				
			</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2021 Listeo. All Rights Reserved.</div>
			</div>

		</div>

	</div>
	<!-- Content / End -->
@push('js')
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBI-9n6pQ1Vqktbyg8LGjLW-NCPsa6SQ5g&language=ja"></script>
    
    <script>
		
		var geocoder;
		var map;
		geocoder = new google.maps.Geocoder();
		
		var LatLng = new google.maps.LatLng(35.6811673, 139.7670516);
		var mapOptions = {
		 zoom: 18,      //地図の縮尺値
		 center: LatLng,    //地図の中心座標
		 mapTypeId: 'roadmap'   //地図の種類
		};
	    map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
		
		function codeAddress() {
		    var address = document.getElementById('address').value;
		    var pos = "";
			var lng = "";
			var lat = "";
			
		    geocoder.geocode( { 'address': address}, function(results, status) {
		      if (status == 'OK') {
		        map.setCenter(results[0].geometry.location);
		        var marker = new google.maps.Marker({
		            map: map,
		            position: results[0].geometry.location,
	            	draggable: true,
		        });
				pos = marker.getPosition();
				lng_str = pos.lng();
				lng = parseFloat(lng_str);
				lat_str = pos.lat();
				lat = parseFloat(lat_str);
				
				console.log(lng);
				console.log(lat);
				$("#map_place").append(
					`<input name="longitude" type="hidden" value="${lng}">
					<input name="latitude" type="hidden" value="${lat}">`
				);
		        
		      } else {
		        alert('Geocode was not successful for the following reason: ' + status);
		      }
		      
	      // Event
			marker.addListener( "position_changed", function () {
				pos = marker.getPosition();
				lng_str = pos.lng();
				lng = parseFloat(lng_str)
				lat_str = pos.lat();
				lat = parseFloat(lat_str);
				console.log(lng);
				console.log(lat);
				$("#map_place").empty();
				$("#map_place").append(
					`<input name="longitude" type="hidden" value="${lng}">
					<input name="latitude" type="hidden" value="${lat}">`
				);
			})
		  })};
		  
		  
	  </script>
@endpush
@endsection
	
	
