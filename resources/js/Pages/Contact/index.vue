<template>

<Head>
	<title>الفاروق</title>
	<meta name="description" content="الفاروق" head-key="description">
	<meta name="keywords" content="الفاروق">
</Head>

<!-- Titlebar
================================================== -->
  <div class="intro-banner">
    <div
      class="background-image-container"
      :style="
        'background-image: url(' +
        (background ? '/storage/' + background : '/assets/images/banner.jpg') +
        ')'
      "
    ></div>
  </div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-xl-12">
			<div class="contact-location-info margin-bottom-50">
				<div class="contact-address center">
					<template v-if="about">
					<div class="contact-section">
					<h3>حول الفاروق</h3>
					<div  v-html="about" ></div>
					</div>
					</template>
					<template v-if="message">
					<div class="contact-section">
					<h3> رسالة الفاروق</h3>
					<div  v-html="message" ></div>
					</div>
					</template>
					<template v-if="vision">
					<div class="contact-section">
					<h3>رؤية الفاروق</h3>
					<div  v-html="vision" ></div>
					</div>
					</template>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Container / End -->

</template>

<script>
export default {
    props:{
        name:String,
		settings:Object,
    },
	  data() {
    return {
      background: this.settings.find((s) => s.key == "about_alfarouq_image")?.value,
      about: this.settings.find((s) => s.key == "about_alfarouq")?.value,
      message: this.settings.find((s) => s.key == "about_alfarouq_message")?.value,
      vision: this.settings.find((s) => s.key == "about_alfarouq_vision")?.value,

    };
  },
}
</script>



