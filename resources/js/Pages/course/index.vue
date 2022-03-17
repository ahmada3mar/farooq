<template>
    <Head>
        <title>course</title>
        <meta name="description" content="404" head-key="description" />
        <meta name="keywords" content="404" />
    </Head>

    <!-- Titlebar
================================================== -->
    <!-- 
<div class="single-page-header " data-background-image="/assets/images/logo.png">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image "><img src="/assets/images/logo.png" alt="Name"></div>
						<div class="header-details">
							<h1>Name</h1>
							<p>Ename</p>
						</div>
					</div>
					<div class="right-side">
					</div>

				</div>
			</div>
		</div>
	</div>
</div> -->

    <!-- Page Content
================================================== -->
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">
                <!-- Category Boxes -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <iframe
                                    width="560"
                                    height="315"
                                    src="https://www.youtube.com/embed/teuVq-yG_cQ?rel=0&amp;controls=0&amp;showinfo=0"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-pictu	re"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Boxes / End -->

                <div class="single-page-section">
                    <h3 class="">About name</h3>
                    About
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">
                    <!-- Accordion -->
                    <div class="accordion js-accordion margin-bottom-30">
                        <!-- sectors -->
                        <div class="accordion__item js-accordion-item" :key='num' v-for="num in nums"  >
                            <div class="accordion-header js-accordion-header">
                                الوحدة {{num}}
                            </div>

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">
                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    sectors
                                </div>
                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- sectors / End -->
                    </div>
                    <!-- Accordion / End -->

                    <!-- Copy URL -->
                    <p
                        class="arabic"
                        style="font-size: 1.2rem; font-weight: bold"
                    >
                        مشاركة
                    </p>
                    <div class="copy-url">
                        <input
                            id="copy-url"
                            type="text"
                            value=""
                            class="with-border"
                        />
                        <button
                            class="copy-url-button ripple-effect"
                            data-clipboard-target="#copy-url"
                            title="Copy to Clipboard"
                            data-tippy-placement="top"
                        >
                            <i class="icon-material-outline-file-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        video: String,
		nums: Array,
	},
	mounted() {
		        /*----------------------------------------------------*/
        /*	Accordion @Lewis Briffa
        /*----------------------------------------------------*/
        var accordion = (function () {

            var $accordion = $('.js-accordion');
            var $accordion_header = $accordion.find('.js-accordion-header');

            // default settings 
            var settings = {
                // animation speed
                speed: 400,

                // close all other accordion items if true
                oneOpen: false
            };

            return {
                // pass configurable object literal
                init: function ($settings) {
                    $accordion_header.on('click', function () {
                        console.log('clicked');
                        accordion.toggle($(this));
                    });

                    $.extend(settings, $settings);

                    // ensure only one accordion is active if oneOpen is true
                    if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                        $('.js-accordion-item.active:not(:first)').removeClass('active');
                    }

                    // reveal the active accordion bodies
                    $('.js-accordion-item.active').find('> .js-accordion-body').show();
                },
                toggle: function ($this) {

                    if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                        $this.closest('.js-accordion')
                            .find('> .js-accordion-item')
                            .removeClass('active')
                            .find('.js-accordion-body')
                            .slideUp();
                    }

                    // show/hide the clicked accordion item
                    $this.closest('.js-accordion-item').toggleClass('active');
                    $this.next().stop().slideToggle(settings.speed);
                }
            };
        })();

        $(document).ready(function () {
            accordion.init({
                speed: 300,
                oneOpen: true
            });
        });


	}
	
};

</script>
