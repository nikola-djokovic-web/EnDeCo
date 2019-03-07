<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('templates.frontend.partials.head')

	<!-- BEGIN: LAYOUT/HEADERS/HEADER-ONEPAGE -->
<!-- BEGIN: HEADER -->
@include('templates.frontend.partials.header')
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-ONEPAGE -->


	<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-6 -->
		<section id="home">
@include('templates.frontend.partials.slider')
</section>

@if(session()->has('message'))
	<div id='flash-message' class="alert alert-success" role='alert'>
		{{ session('message') }}
	</div>
@endif

<section id="about">
<!-- BEGIN: CONTENT/MISC/ABOUT-1 -->
<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 wow animated fadeInLeft">
				<!-- Begin: Title 1 component -->
				<div class="c-content-title-1">
					<h3 class="c-font-uppercase c-font-bold">@lang('front.who-we-are')</h3>
					<div class="c-line-left c-theme-bg"></div>
				</div>
				<!-- End-->
				<p class="text-justify">
					@lang('front.who-we-are-description')
				</p>
			</div>

			</div>
		</div>
	</div>
</div><!-- END: CONTENT/MISC/ABOUT-1 -->
</section>



<section id="services">
<!-- BEGIN: CONTENT/FEATURES/FEATURES-11 -->
@include('templates.frontend.partials.services')
<!-- END: CONTENT/FEATURES/FEATURES-11 -->
</section>

<section id="industries">
<!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
@include('templates.frontend.partials.industries')
<!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
</section>

<section id="contact">
<!-- BEGIN: CONTENT/TILES/TILE-2 -->
@include('templates.frontend.partials.contact')
</section>

<!-- <section id="pricing">
<!-- BEGIN: CONTENT/PRICING/PRICING-5 -->
<!-- END: CONTENT/PRICING/PRICING-5 -->
<!-- </section> -->

		<!-- END: PAGE CONTENT -->


	</div>
	<!-- END: PAGE CONTAINER -->

	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-2 -->
<a name="footer"></a>
@include("templates.frontend.partials.footer")
		<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>
