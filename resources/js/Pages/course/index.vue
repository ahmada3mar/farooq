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
	<div class="radio">
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
  <div
    :style="'background:url(/storage/' + course.cover + ')'"
    class="jumbotron jumbotron-fluid py-5"
  >
    <div class="container mt-5">
      <h1 class="display-4 text-capitalize">{{ course.name }}</h1>
      <p class="lead">المدرس : محمد علي</p>
      <div class="col-2 course-image">
        <img class="img-thumbnail" :src="'/storage/' + course.image" />
      </div>
    </div>
  </div>

  <div class="d-flex col-12 mt-4 text-right">
    <div class="col-3">
      <div class="sidebar-container">
        <div class="accordion js-accordion margin-bottom-30">
          <div class="accordion__item js-accordion-item">
            <div class="accordion-header js-accordion-header">الوصف</div>
            <div class="accordion-body js-accordion-body">
              <div>
                {{ course.description }}
              </div>
            </div>
          </div>

          <div
            class="accordion__item js-accordion-item"
            :key="unit.id"
            v-for="unit in course.units"
          >
            <div class="accordion-header js-accordion-header">
              {{ unit.name }}
            </div>

            <!-- Accordtion Body -->
            <div class="accordion-body js-accordion-body">
              <!-- Accordion Content -->
              <div
                :key="lectur.id"
                v-for="lectur in unit.lectures"
                @click="changeVid(lectur)"
                class="accordion-body__contents link"
              >
                {{ lectur.name }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="sidebar-container">
        <div v-if="lectur.name">
          <div v-if="lectur.type == 1">
            <div class="card">
              <h3 class="card-header py-3">{{ lectur.question.name }}</h3>
              <div class="card-body">
                <div :key="an.id" v-for="an in lectur.question.answers">
                  <div
                    class="
                      d-flex
                      flex-row-reverse
                      align-items-center
                      position-relative
                    "
                  >
                    <label class="radio">
                      <input
                        class="my-0 mx-2"
                        name="answer"
                        :id="an.id"
                        type="radio"
                      />
                      <span class="checkmark"></span>
                      {{ an.name }}
                    </label>
                    <br />
                  </div>
                </div>

                <button href="#" class="button ripple-effect mt-5 px-5">
                  تحقق
                </button>
              </div>
            </div>
          </div>
          <div v-else>
            <h1 class="col-12">{{ lectur.name }}</h1>
            <iframe
              class="col-12"
              height="350"
              :src="'https://www.youtube.com/embed/' + lectur.url"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <div class="col-12">
              <div class="sidebar-container">
                <div class="accordion js-accordion margin-bottom-30 rounded-0">
                  <div class="accordion__item js-accordion-item">
                    <div class="accordion-header js-accordion-header">
                      الوصف
                    </div>
                    <div class="accordion-body js-accordion-body">
                      <div v-html="lectur.description"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section margin-top-65 margin-bottom-65 text-right">
    <div class="container">
      <div class="row">
        <!-- Section Headline -->
        <div class="col-xl-12">
          <div class="section-headline centered margin-top-0 margin-bottom-45">
            <h3>مساقات مشابهة</h3>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-list-layout-1.html"
            class="photo-box"
            data-background-image="/storage/erth.jpg"
          >
            <div class="photo-box-content">
              <h3>علوم ارض</h3>
              <span>376 مشترك</span>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-list-layout-full-page-map.html"
            class="photo-box"
            data-background-image="/storage/ar.jpg"
          >
            <div class="photo-box-content">
              <h3>مهارات اتصال</h3>
              <span>645 مشترك</span>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-grid-layout-full-page.html"
            class="photo-box"
            data-background-image="/storage/math.jpg"
          >
            <div class="photo-box-content">
              <h3>رياضيات</h3>
              <span>832 مشترك</span>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-list-layout-2.html"
            class="photo-box"
            data-background-image="/storage/ph.jpg"
          >
            <div class="photo-box-content">
              <h3>فيزياء</h3>
              <span>513 مشترك</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    course: Object,
  },
  data() {
    return {
      lectur: this.course?.units[0]?.lectures[0],
    };
  },
  methods: {
    changeVid(lectur) {
      this.lectur = lectur;
    },
  },
  mounted() {
    accordion().init({
      speed: 300,
      oneOpen: true,
    });
  },
  updated() {
    /*----------------------------------------------------*/
    /*	Accordion @Lewis Briffa
        /*----------------------------------------------------*/
  },
};
</script>

<style scoped>
.course-image {
  position: absolute;
  right: 5%;
  top: 30%;
  z-index: 100;
}

</style>
