<template>

  <Head>
    <title>الرئيسية</title>
    <meta name="description" content="الرئيسية" head-key="description" />
    <meta name="keywords" content="الرئيسية" />
  </Head>

    <div :style="{ '--shadow': shadow }" class="intro-banner">
        <div
            class="background-image-container"
            :style="
                'background-image: url(' +
                (background
                    ? '/storage/' + background
                    : '/assets/images/banner.jpg') +
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
                            <div
                                :style="{
                                    '--descriptionColor': descriptionColor,
                                }"
                                class="home_description"
                                v-html="description || ''"
                            ></div>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <!-- <div class="row">
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
      </div> -->
        </div>
    </div>

    <div class="section margin-top-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-headline centered margin-bottom-15">
                        <h3>الفروع</h3>
                    </div>

                    <div class="categories-container">
                        <Link
                            v-for="section in sections"
                            :key="section.id"
                            :href="`/courses?section=${section.id}`"
                            class="category-box"
                        >
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-graduation-cap"></i>
                            </div>
                            <div class="category-box-counter">
                                {{ section?.name }}
                            </div>
                            <div class="category-box-content">
                                <!-- <h3>الثاني ثانوي</h3> -->
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- most sellers -->
    <div class="section margin-top-65 margin-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div
                        class="section-headline centered margin-top-20 margin-bottom-45"
                    >
                        <Link href="/courses" class="headline-link"
                            >عرض الكل</Link
                        >
                        <h3>كورسات مقترحة</h3>
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
                        :style="`background-image:url(/storage/${course.image})`"
                    >
                        <div class="photo-box-content">
                            <h3>{{ course?.name }}</h3>
                            <!-- <span>{{ course.subscriber }} مشترك</span> -->
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>

    <!-- documents -->
    <div
        class="section gray margin-top-45 margin-bottom-65 padding-top-65 padding-bottom-75"
    >
        <div class="container">
                        <Link href="/documents" class=""
                            >عرض الكل</Link
                        >
            <div class="row margin-bottom-65">
                <div v-if="QA.length > 0" v-bind:class="workPapers.length > 0 ? 'document-item50' : 'document-item100'">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-20 margin-bottom-20">
                        <h3 class="arabic">أسئلة سنوات</h3>
                    </div>

                    <!-- Jobs Container -->
                    <div
                        class="listings-container compact-list-layout margin-top-20"
                    >
                    <template v-if="QA.length > 0">
                        <a
                            v-for="document in QA"
                            :key="document.id"
                            :href="`/document/download/${document.id}`"
                            class="job-listing with-apply-button"
                        >
                            <div class="job-listing-details">
                                <span class="list-apply-button ripple-effect"
                                    >تنزيل</span
                                >
                                <div class="job-listing-description arabic">
                                    <h3 class="job-listing-title">
                                        {{ document?.name }}
                                    </h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li>
                                                {{ document.downloads }}
                                                تنزيل
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-feather-book-open"
                                                ></i>
                                                المادة
                                                {{ __(document.document_course_id?.name) }}
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-material-outline-school"
                                                ></i>
                                                الصف {{ __(document.class) }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="job-listing-company-logo">
                                    <i
                                        class="icon-material-outline-attach-file font3rem"
                                    ></i>
                                </div>
                            </div>
                        </a>
                        </template>

                    </div>
                </div>
                <div v-if="workPapers.length > 0" v-bind:class="QA.length > 0 ? 'document-item50' : 'document-item100'">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-20 margin-bottom-20">

                        <h3 class="arabic">أوراق العمل</h3>
                    </div>

                    <!-- Jobs Container -->
                    <div
                        class="listings-container compact-list-layout margin-top-20"
                    >
                    <template v-if="workPapers.length > 0">
                        <a
                            v-for="document in workPapers"
                            :key="document.id"
                            :href="`/document/download/${document.id}`"
                            class="job-listing with-apply-button"
                        >
                            <div class="job-listing-details">
                                <span class="list-apply-button ripple-effect"
                                    >تنزيل</span
                                >
                                <div class="job-listing-description arabic">
                                    <h3 class="job-listing-title">
                                        {{ document?.name }}
                                    </h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li>
                                                {{ document.downloads }}
                                                تنزيل
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-feather-book-open"
                                                ></i>
                                                المادة
                                                {{ __(document.document_course_id?.name) }}
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-material-outline-school"
                                                ></i>
                                                الصف {{ __(document.class) }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="job-listing-company-logo">
                                    <i
                                        class="icon-material-outline-attach-file font3rem"
                                    ></i>
                                </div>
                            </div>
                        </a>
                        </template>

                    </div>
                </div>
                <div v-if="books.length > 0" v-bind:class="dosis.length > 0 ? 'document-item50' : 'document-item100'">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-20 margin-bottom-20">

                        <h3 class="arabic">كتب</h3>
                    </div>

                    <!-- Jobs Container -->
                    <div
                        class="listings-container compact-list-layout margin-top-20"
                    >
                    <template v-if="books.length > 0">
                        <a
                            v-for="document in books"
                            :key="document.id"
                            :href="`/document/download/${document.id}`"
                            class="job-listing with-apply-button"
                        >
                            <div class="job-listing-details">
                                <span class="list-apply-button ripple-effect"
                                    >تنزيل</span
                                >
                                <div class="job-listing-description arabic">
                                    <h3 class="job-listing-title">
                                        {{ document?.name }}
                                    </h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li>
                                                {{ document.downloads }}
                                                تنزيل
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-feather-book-open"
                                                ></i>
                                                المادة
                                                {{ __(document.document_course_id?.name) }}
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-material-outline-school"
                                                ></i>
                                                الصف {{ __(document.class) }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="job-listing-company-logo">
                                    <i
                                        class="icon-material-outline-attach-file font3rem"
                                    ></i>
                                </div>
                            </div>
                        </a>
                        </template>

                    </div>
                </div>
                <div v-if="dosis.length > 0" v-bind:class="books.length > 0 ? 'document-item50' : 'document-item100'">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-20 margin-bottom-20">

                        <h3 class="arabic">دوسيات</h3>
                    </div>

                    <!-- Jobs Container -->
                    <div
                        class="listings-container compact-list-layout margin-top-20"
                    >
                    <template v-if="dosis.length > 0">
                        <a
                            v-for="document in dosis"
                            :key="document.id"
                            :href="`/document/download/${document.id}`"
                            class="job-listing with-apply-button"
                        >
                            <div class="job-listing-details">
                                <span class="list-apply-button ripple-effect"
                                    >تنزيل</span
                                >
                                <div class="job-listing-description arabic">
                                    <h3 class="job-listing-title">
                                        {{ document?.name }}
                                    </h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li>
                                                {{ document.downloads }}
                                                تنزيل
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-feather-book-open"
                                                ></i>
                                                المادة
                                                {{ __(document.document_course_id?.name) }}
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-material-outline-school"
                                                ></i>
                                                الصف {{ __(document.class) }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="job-listing-company-logo">
                                    <i
                                        class="icon-material-outline-attach-file font3rem"
                                    ></i>
                                </div>
                            </div>
                        </a>
                        </template>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <!-- Avatar -->
                        <div class="freelancer-avatar">
                            <Link :href="`/profile/${user.id}`"
                                ><img :src="`/storage/${user.avatar}`" alt=""
                            /></Link>
                        </div>

                        <!-- Name -->
                        <div class="freelancer-name">
                            <h4>
                                <Link :href="`/profile/${user.id}`"
                                    >{{ user?.name }}
                                </Link>
                            </h4>
                            <!-- <span class="text-primary">{{
                                [
                                    ...new Set(
                                        user.courses.map((item) => item?.name)
                                    ),
                                ].reduce(
                                    (previousValue, currentValue) =>
                                        previousValue + " " + currentValue,
                                    ""
                                )
                            }}</span> -->
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
                                    ><i
                                        class="icon-material-outline-location-on"
                                    ></i>
                                    {{ user.city }}</strong
                                >
                            </li>
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

</template>

<script setup>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import { Inertia } from '@inertiajs/inertia';
</script>

<script>
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
        QA: Array,
        workPapers: Array,
        dosis: Array,
        books: Array,
        instructos: Array,
        sections: Array,
    },
    data() {
        return {
            background: this.settings.find((s) => s.key == "home_cover_image")
                ?.value,
            description: this.settings.find((s) => s.key == "home_description")
                ?.value,
            shadow:
                this.settings.find((s) => s.key == "home_shadow")?.value || "",
            descriptionColor:
                this.settings.find((s) => s.key == "home_description_color")
                    ?.value || "#777",
        };
    },
    methods:{
        download(link){
            Inertia.get(link)
        }
    },
    mounted() {
        // this.jq()
        // console.log( this.settings.find(s=>s.key == 'home_cover_image')?.value || '/assets/images/banner.jpg' )
        // ready();
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
.home_description {
    margin-bottom: 1rem;
    color: var(--descriptionColor);
}

.font3rem {
    font-size: 3rem;
}
.categories-container {
	display: flex;
  flex-direction: row-reverse;
	flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.document-item50{
    width: 50%;
}
.document-item100{
    width: 100%;
}
</style>
