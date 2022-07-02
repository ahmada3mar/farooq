<template>

<Head>
	<title>Fail</title>
</Head>

	<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="text-align: center;color:red;">فشلت عملية التحقق من البريد الالكتروني</h2>
			</div>
		</div>
	</div>
</div>

<!-- Page Content
================================================== -->
<!-- Container -->
<div class="container">

	<div class="row">
		<div class="col-xl-12">

			<section id="not-found" class="center margin-bottom-25">
				<img height="250" src="/assets/images/fail.svg" alt="">
				<p > {{ auth.email_verified_at ? "الحساب مؤكد بالفعل" : "لم يتم التحقق من البريد الإلكتروني يرجى التأكد من الرمز المدخل" }} </p>
			</section>

			<div class="row">
				<div class="col-xl-8 offset-xl-2">
						<div class=" center  margin-bottom-50">

							<!-- Button -->
							<div class="intro-search-button">
								<a href="/"><button class="button full-width ripple-effect">الرئيسية</button></a>

							</div>
						</div>
				</div>
			</div>

		</div>
	</div>

</div>
<!-- Container / End -->


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->



</template>

<script>

export default {
    props:['auth']
}
</script>



