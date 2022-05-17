<template>
  <Head>
    <title>course</title>
    <meta name="description" content="404" head-key="description" />
    <meta name="keywords" content="404" />
  </Head>

  <!-- Titlebar
================================================== -->
  <div class="container single-page-header">
    <div class="container arabic">
      <div class="row">
        <div class="col-md-12">
          <div class="single-page-header-inner">
            <div class="left-side">
              <div class="salary-box margin-left-0">
                <div class="salary-type">عدد المروس</div>
                <div class="salary-amount">14</div>
              </div>
            </div>

            <div class="header-details flexcolumn">
              <h3>{{ course?.name }}</h3>
              <h5>المدرس فلان العلنتاني</h5>
            </div>
            <div class="right-side">
              <div class="header-image margin-left-20">
                <a href="single-company-profile.html"
                  ><img :src="'/storage/' + course.image" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="background-image-container"
      :style="'background:url(/storage/' + +')'"
    ></div>
  </div>

  <!-- Page Content
================================================== -->
  <div class="container my-5 arabic">
    <div class="row">
      <!-- Content -->
      <div class="col-xl-8 col-lg-8 content-right-offset">
        <div class="single-page-section" v-if="lectur?.name">
          <div v-if="lectur.type == 1">
            <div class="card col-12 padding-0">
              <h3 class="card-header py-3">
                {{ lectur?.question?.name }}
              </h3>
              <div class="card-body">
                <div :key="an.id" v-for="an in lectur.question.answers || []">
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
                      {{ an?.name }}
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
            <iframe
              class="col-12 padding-right-0 padding-left-0"
              height="350"
              :src="'https://www.youtube.com/embed/' + lectur.url"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>

          <CourseAccordionVue :lectur="lectur" />

        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-xl-4 col-lg-4">
        <div class="sidebar-container">
          <Accordion :changeVid="changeVid" :course="course" />
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
import Accordion from "../../Shared/Accordion.vue";
import CourseAccordionVue from "../../Shared/CourseAccordion.vue";

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
  components: { Accordion, CourseAccordionVue },
};
</script>

<style scoped>
.course-image {
  position: absolute;
  right: 5%;
  top: 30%;
  z-index: 100;
}

.vid-description {
  border-radius: 0;
}

.right-side {
  display: contents;
}

.button {
  float: left;
}
.right {
  direction: rtl;
}
</style>
