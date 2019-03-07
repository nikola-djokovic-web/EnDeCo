<div class="contact-wrapper">
<div class="c-content-box c-size-md c-no-padding c-bg-img-center" style="background-image:url(/templates/frontend/assets/base/img/content/backgrounds/bg_feedback_1.jpg);">
	<div class="container">
		<div class="c-content-feedback-1 c-option-2">
			<div class="c-content-title-1">
				<h3 class="c-center c-font-white c-font-bold" style="padding-left: 18px;"> EnD<span class="c-font-black">eCo</span></h3>
				<div class="c-line-center c-left"></div><div class="c-line-center c-right"></div>
				 <h4 class="hidden-xs c-center c-font-white c-font-uppercase c-font-bold  {{App::isLocale('en') ?  'margin-en' : 'margin-sr'}}">  <!-- {{App::isLocale('en') ?  'class="margin-en"' : 'class="margin-sr"'}} -->
					@lang('front.where')&nbsp;<span class="c-font-regular">&nbsp;&nbsp;@lang('front.contact')</span></h4>
			</div>
			<div class="row">
				<div class="col-md-6" style="margin-top: 35px;">
					<div class="c-container c-bg-white c-bg-img-bottom-right" style="background-image:url(/templates/frontend/assets/base/img/content/misc/feedback_box_3.png)">

						<div class="c-body">
						<div class="c-section" style="margin-bottom: 40px;">
							<h3>EnDeCo inc.</h3>
						</div>
						<div class="c-section" style="margin-bottom: 20px;">
							<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">@lang('front.address')</div>
							<p>25, Lorem Lis Street,<br>Orange C, California,<br>United States of America</p>
						</div>
						<div class="c-section" style="margin-bottom: 20px;">
							<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">@lang('front.contacts')</div>
							<p><strong>T</strong> 800 123 0000<br><strong>F</strong> 800 123 8888</p>
						</div>
						<div class="c-section" style="margin-bottom: 20px;">
							<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">@lang('front.socials')</div><br>
							<ul class="c-content-iconlist-1 c-theme" style="margin-top: 25px; margin-bottom: 25px;">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>

								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					</div>

				</div>
				<div class="col-md-6">
					<div class="c-contact">
						<div class="c-content-title-1">

							<p class="c-font-lowercase">@lang('front.helpline')
							</p>
						</div>
						<form method="post" action="/">
								@csrf


								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	                		<input type="text" name='name' value='{{old("name")}}' placeholder="@lang('front.yourname')" class="form-control c-square c-theme input-lg" required>
											@if ($errors->has('name'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('name') }}</strong>
							            </div>
							        @endif
										</div>
	                	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                		<input type="text" name='email' value='{{old("email")}}' placeholder="@lang('front.youremail')" class="form-control c-square c-theme input-lg" required>
											@if ($errors->has('email'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('email') }}</strong>
							            </div>
							        @endif
										</div>
	                	<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
	                		<input type="text" name='phone' value='{{old("phone")}}' placeholder="@lang('front.contactphone')" class="form-control c-square c-theme input-lg" required>
											@if ($errors->has('phone'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('phone') }}</strong>
							            </div>
							        @endif
										</div>
	               	<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
	                	   	<textarea rows="8" name='comment' value='{{old("comment")}}' placeholder="@lang('front.comment')" class="form-control c-theme c-square input-lg" required></textarea>
												@if ($errors->has('comment'))
								            <div class="alert alert-danger" role="alert">
								                <strong>{{ $errors->first('comment') }}</strong>
								            </div>
								        @endif
											</div>
								
	                <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">@lang('front.submit')</button>
	             	</form>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
