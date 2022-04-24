<template>
  <div :style="{ '--shadow': shadow }" class="intro-banner">
    <div
      class="background-image-container"
      :style="
        'background-image: url(' +
        (background ? '/storage/' + background : '/assets/images/banner.jpg') +
        ')'
      "
    ></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-headline">
            <h3>
              <strong></strong>
              <br />
              <div v-html="description || ''"></div>
            </h3>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="intro-banner-search-form margin-top-95">
            <!-- Search Field -->
            <div class="intro-search-field">
              <label for="intro-keywords" class="field-title ripple-effect"
                >عن ماذا تبحث ؟</label
              >
              <input
                id="intro-keywords"
                type="text"
                placeholder="اسم المادة و ماشابه"
              />
            </div>

            <!-- Button -->
            <div class="intro-search-button">
              <button
                class="button ripple-effect"
                onclick="window.location.href='jobs-list-layout-full-page-map.html'"
              >
                بحث
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats -->
      <div class="row">
        <div class="col-md-12">
          <ul class="intro-stats margin-top-45 hide-under-992px">
            <li>
              <strong class="counter">541521</strong>
              <span>عدد الكورسات</span>
            </li>
            <li>
              <strong class="counter">{{ teachers }}</strong>
              <span>المعلمين</span>
            </li>
            <li>
              <strong class="counter">{{ subscriber }}</strong>
              <span>المسجلين</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="section margin-top-65">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-headline centered margin-bottom-15">
            <h3>الصفوف</h3>
          </div>

<div class="categories-container">
            <Link v-for="index in 10" :key="index" :href="`/courses?class=${index}`" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">{{index}}</div>
              <div class="category-box-content">
                <h3>الصف {{__(index)}}</h3>
              </div>
            </Link>

            <Link v-for="(section) in sections" :key="section.id" :href="`/courses?class=11&sections=${section.id}`" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">{{section.name}}</div>
              <div class="category-box-content">
                <h3>الأول ثانوي</h3>
              </div>
            </Link>

            <Link v-for="(section) in sections" :key="section.id" :href="`/courses?class=12&sections=${section.id}`" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">{{section.name}}</div>
              <div class="category-box-content">
                <h3>الثاني ثانوي</h3>
              </div>
            </Link>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <!-- Section Headline -->
          <div class="section-headline margin-top-0 margin-bottom-35">
            <Link href="/courses" class="headline-link">عرض الكل</Link>
            <h3 class="arabic">كورسات مقترحة</h3>
          </div>

          <!-- Jobs Container -->
          <div class="listings-container compact-list-layout margin-top-35">
            <Link
              v-for="course in courses"
              :key="course.id"
              :href="`/course/${course.id}`"
              class="job-listing with-apply-button"
            >
              <div class="job-listing-details">
                <span class="list-apply-button ripple-effect">عرض الكورس</span>

                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">{{ course.name }}</h3>
                  <div class="job-listing-footer">
                    <ul>
                      <li>
                        التقييم
                        <i class="icon-material-outline-star-border bottom"></i>
                        <i class="icon-material-outline-star-border bottom"></i>
                        <i class="icon-material-outline-star-border bottom"></i>

                        <i class="icon-line-awesome-star up"></i>
                        <i class="icon-line-awesome-star up"></i>
                      </li>
                      <li>
                        <i class="icon-material-outline-school"></i>
                        الصف {{ __(course.class) }}
                        <b>{{ course.section?.name }}</b>
                      </li>
                      <li>
                        <i class="icon-feather-user px-1"></i>
                        {{ course.user.name }}
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <img
                    width="50"
                    height="50"
                    :src="`/storage/${course.image}`"
                    alt=""
                  />
                </div>
              </div>
            </Link>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section margin-top-65 margin-bottom-65">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-headline centered margin-top-0 margin-bottom-45">
            <h3>الأكثر مبيعاً</h3>
          </div>
        </div>

        <div
          :key="course.id"
          v-for="course in mostSelling"
          :class="`col-xl-${
            mostSelling.length < 5 ? 12 / mostSelling.length : '3'
          } col-md-6`"
        >
        <Link
            :href="`/course/${course.id}`"
            class="photo-box"
            :data-background-image="`/storage/${course.image}`"
          >
            <div class="photo-box-content">
              <h3>{{ course.name }}</h3>
              <span>{{ course.subscriber }} مشترك</span>
            </div>
          </Link>
        </div>
      </div>
    </div>
  </div>
  <!-- Features Cities / End -->

  <!-- Highest Rated Freelancers -->
  <carousel
    snapAlign="center"
    :breakpoints="{ 1200: { itemsToShow: 3 }, 800: { itemsToShow: 2 } }"
    :wrapAround="true"
    class="container"
    :items-to-show="1"
  >
    <slide v-for="user in instructos" :key="user.id">
      <div class="col freelancer">
        <!-- Overview -->
        <div class="freelancer-overview">
          <div class="freelancer-overview-inner">
            <!-- Bookmark Icon -->
            <span class="bookmark-icon"></span>

            <!-- Avatar -->
            <div class="freelancer-avatar">
              <div class="verified-badge"></div>
              <Link :href="`/profile/${user.id}`"
                ><img :src="`/storage/${user.avatar}`" alt=""
              /></Link>
            </div>

            <!-- Name -->
            <div class="freelancer-name">
              <h4>
                <Link :href="`/profile/${user.id}`">{{ user.name }} </Link>
              </h4>
              <span class="text-primary">{{
                  [...new Set(user.courses.map(item => item.name))].reduce(
                  (previousValue, currentValue) => previousValue + " " + currentValue,
                  ""
                )
              }}</span>
            </div>

            <!-- Rating -->
            <div class="freelancer-rating">
              <div class="star-rating" data-rating="5.0"></div>
            </div>
          </div>
        </div>

        <!-- Details -->
        <div class="freelancer-details">
          <div class="freelancer-details-list">
            <ul>
              <li class="mx-4">
                المدينة
                <strong
                  ><i class="icon-material-outline-location-on  "></i>
                  {{user.city}}</strong
                >
              </li >
              <li class="mx-4">عدد الكورسات <strong>{{user.courses.length}}</strong></li>
            </ul>
          </div>
          <Link
            :href="`/profile/${user.id}`"
            class="button button-sliding-icon ripple-effect"
            >عرض الملف الشخصي
            <i class="icon-material-outline-arrow-right-alt"></i
          ></Link>
        </div>
      </div>
    </slide>

    <template #addons>
      <navigation />
      <pagination />
    </template>
  </carousel>

  <!-- Highest Rated Freelancers / End-->

  <!-- Membership Plans -->
  <div class="section padding-top-60 padding-bottom-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <!-- Section Headline -->
          <div class="section-headline centered margin-top-0 margin-bottom-35">
            <h3>البطاقات</h3>
          </div>
        </div>

        <div class="col-xl-12 py-5">
          <!-- Pricing Plans Container -->
          <div class="pricing-plans-container">
            <!-- Plan -->
            <div class="pricing-plan arabic">
              <h3>رصيد بقيمة 50 دينار</h3>
              <p class="margin-top-10">
                تدفع لمرة واحد تمكنك من شراء المساقات ذات قمة 50 دنانير او اقل
              </p>
              <div class="pricing-plan-label billed-monthly-label">
                <strong>50 JOD</strong>
              </div>
              <Link
                href="pages-checkout-page.html"
                class="button full-width margin-top-20"
                >شراء الآن</Link
              >
            </div>

            <!-- Plan -->
            <div class="pricing-plan recommended arabic">
              <div class="recommended-badge">موصى به</div>
              <h3>رصيد بقيمة 100 دينار</h3>
              <p class="margin-top-10">
                تدفع لمرة واحد تمكنك من شراء المساقات ذات قمة 100 دنانير او اقل
              </p>
              <div class="pricing-plan-label billed-monthly-label">
                <strong>100 JOD</strong>
              </div>
              <div class="pricing-plan-label billed-yearly-label">
                <strong>$529</strong>/ yearly
              </div>
              <!-- <div class="pricing-plan-features">
                <strong>Features of Standard Plan</strong>
                <ul>
                  <li>5 Listings</li>
                  <li>60 Days Visibility</li>
                  <li>Highlighted in Search Results</li>
                </ul>
              </div> -->
              <Link
                href="pages-checkout-page.html"
                class="button full-width margin-top-20"
                >شراء الآن</Link
              >
            </div>

            <!-- Plan -->
            <div class="pricing-plan arabic">
              <h3>رصيد بقيمة 10 دنانير</h3>
              <p class="margin-top-10">
                تدفع لمرة واحد تمكنك من شراء المساقات ذات قمة 10 دنانير او اقل
              </p>
              <div class="pricing-plan-label billed-monthly-label">
                <strong>10 JOD</strong>
              </div>
              <Link
                href="pages-checkout-page.html"
                class="button full-width bottom-0"
                >شراء الآن</Link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Membership Plans / End-->
</template>

<script setup>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
</script>

<script >
export default {
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  props: {
    teachers: Number,
    subscriber: Number,
    settings: Object,
    courses: Array,
    mostSelling: Array,
    instructos: Array,
    sections: Array,
  },
  data() {
    return {
      background: this.settings.find((s) => s.key == "home_cover_image")?.value,
      description: this.settings.find((s) => s.key == "home_description")
        ?.value,
      shadow: this.settings.find((s) => s.key == "home_shadow")?.value || "",
    };
  },
  mounted() {
    // this.jq()
    // console.log( this.settings.find(s=>s.key == 'home_cover_image')?.value || '/assets/images/banner.jpg' )
    ready();
  },
};
</script>

<style scoped>
.price-logo {
  width: 50;
  height: 50;
  background: teal;
  justify-content: center;
  align-items: center;
  display: flex;
  color: white;
  font-weight: bold;
}
.up {
  font-size: 15px;
}

.bottom {
  font-size: 16px;
  top: 2px !important;
}
.pricing-plan {
  display: flex;
  font-weight: bold;
  flex-direction: column;
  justify-content: space-between;
  height: 500px;
  /* color: whitesmoke; */
  /* background-image: url("/assets/images/price.png"); */
}
.intro-banner:after,
.intro-banner:before {
  background: linear-gradient(
    to left,
    var(--shadow) 20%,
    rgba(250, 250, 250, 0.1) 80%,
    rgba(250, 250, 250, 0) 100%
  );
}
</style>
