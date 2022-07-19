<template>
  <Head>
    <title>{{ course?.name }}</title>
    <meta name="description" content="course" head-key="description" />
    <meta name="keywords" content="course" />
  </Head>

  <!-- Titlebar
================================================== -->
  <div :style="`background-image:url(/storage/${course.cover})`" class="container single-page-header">
    <div class="container arabic">
      <div class="row">
        <div class="col-md-12">
          <div class="single-page-header-inner">
            <div class="left-side">
              <div class="salary-box margin-left-0">
                <div class="salary-type">عدد الدروس</div>
                <div class="salary-amount">{{ course?.lectures_count }}</div>
              </div>
            </div>

            <div class="header-details flexcolumn">
              <h3>{{ course?.name }}</h3>
              <h5>{{ course?.user?.name }}</h5>
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
            {{ getUserAnswer() }}
            <div  class="card col-12 padding-0">
              <h3 class="card-header py-3">
                {{ lectur?.question?.name }}
              </h3>
              <div v-if="!fetching && userAnserLoding" class="card-body">
                <div :key="an.id" v-for="an in lectur.question.answers || []">
                  <div
                    :class="`
                      d-flex
                      flex-row-reverse
                      align-items-center
                      position-relative
                      radio-container
                      my-1
                      ${user_answers.length > 0 && (correct_answers.includes(an.id) ? 'correct' : (user_answers.includes(an.id) && 'incorrect') ) }
                    `"
                  >
                    <label class="radio">
                      <input
                        :checked="user_answers.includes(an.id)"
                        v-model="answer_id"
                        :value="an.id"
                        class="my-0 mx-2"
                        name="answer"
                        :id="an.id"
                        type="radio"
                      />
                      <span  class="checkmark"></span>
                          {{ an?.name }}
                    </label>
                    <br />
                  </div>
                </div>
                <span v-if="submitErr" class="submitErr mt-5"
                  >الرجاء اختيار اجابة اولا</span
                >

                <button @click="check" class="button ripple-effect mt-5 px-5">
                  تحقق
                </button>
              </div>
              <div v-else class="spinner">
                <div class="sk-chase">
                  <div class="sk-chase-dot"></div>
                  <div class="sk-chase-dot"></div>
                  <div class="sk-chase-dot"></div>
                  <div class="sk-chase-dot"></div>
                  <div class="sk-chase-dot"></div>
                  <div class="sk-chase-dot"></div>
                </div>
              </div>
            </div>
          </div>
          <div v-else-if="lectur.url">
            <!-- <iframe
              class="col-12 padding-right-0 padding-left-0"
              height="350"
              :src="'https://www.youtube.com/embed/' + lectur.url"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe> -->
            <div style=" height: 480px; position: relative;">

           <iframe
           :src="'https://drive.google.com/file/d/' + lectur.url + '/preview'"
            class="col-12 padding-right-0 padding-left-0"
             height="480"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            scrolling="no" seamless="" allowfullscreen frameborder="0"  ></iframe>
            <div style="width: 80px; height: 80px; position: absolute; opacity:0; right:0; top: 0;"></div>
            </div>

          </div>
        <div v-else>
            <div class="private">
                <div>
                    <h4>هذا الفيديو خاص</h4>
                    <p>يرجى شراء الكورس لتتمكن من مشاهدة الفيديو</p>
                        <Link :href="`/purchase/${course.id}`">
                            <button class="button ripple-effect mt-5 px-5" data-v-b67a1efe=""> شراء </button>
                        </Link>
                    </div>
            </div>
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

  <div v-if="simmilerCourses.length > 0" class="section margin-top-65 margin-bottom-65">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-headline centered margin-top-0 margin-bottom-45">
            <h3>مساقات مشابهة</h3>
          </div>
        </div>

        <div
          :key="course.id"
          v-for="course in simmilerCourses"
          :class="`col-xl-${
            simmilerCourses.length < 5 ? 12 / simmilerCourses.length : '3'
          } col-md-6`"
        >
        <Link
            :href="`/course/${course.id}`"
            class="photo-box"
            :style="`background-image:url(/storage/${course.image})`"
          >
            <div class="photo-box-content">
              <h3>{{ course.name }}</h3>
            </div>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>



<script>
import Accordion from "../../Shared/Accordion.vue";
import CourseAccordionVue from "../../Shared/CourseAccordion.vue";
import axios from "axios";
export default {
  props: {
    course: Object, simmilerCourses:Array
  },
  data() {
    return {
      lectur: this.course?.units[0]?.lectures[0],
      answer_id: null,
      submitErr: false,
      correct_answers: [],
      user_answers: [],
      userAnserLoding: false,
      fetching: false,
    };
  },
      mounted() {
        // console.log('course: ' , this.course);
    },

  methods: {
    changeVid(lectur) {
      this.lectur = lectur;
    },
    check() {
      if (!this.answer_id) {
        this.submitErr = true;
      } else {
        this.fetching = true;
        axios.post(`/check-answer/${this.answer_id}`).then((res) => {
          this.correct_answers = res.data;
          this.user_answers = [this.answer_id]
          this.fetching = false;
        });
      }
    },
    getUserAnswer() {
      if (this.userAnserLoding == false)
        axios.post(`/get-answers/${this.lectur.question.id}`).then((res) => {
          this.user_answers = res.data.userAnswers;
          this.correct_answers = res.data.correctAnswers;
          this.userAnserLoding = true;
        });
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
.submitErr {
  float: right;
  color: red;
  font-weight: bold;
}
.private{
    height: 350px;
    background-image: url(/assets/images/403.svg);
    display: flex;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: left;
    justify-content: right;
    background-color: #f9f9f9;
    padding: 15;
}

.private div {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.private button{
    float: none;
}
.single-page-header .box-shadow {
    box-shadow: unset !important;
}
.box-shadow {
    box-shadow: unset !important;
}
</style>
