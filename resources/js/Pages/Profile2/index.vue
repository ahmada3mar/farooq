<template>
    <Head>
        <title>course</title>
        <meta name="description" content="404" head-key="description" />
        <meta name="keywords" content="404" />
    </Head>
    <div
        class="single-page-header freelancer-header"
        data-background-image="/assets/images/single-freelancer.jpg"
    >
        <div class="container arabic">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner flexRight">
                        <div class="right-side">
                            <div class="header-details flexCenter">
                                <h3 class="text-capitalize">
                                    {{ user.name }} <span>مدرس عربي</span>
                                </h3>
                                <!-- <ul>
                  <li>
                    <div class="verified-badge-with-title">تم التحقق</div>
                  </li>
                </ul> -->
                            </div>
                            <div class="header-image freelancer-avatar">
                                <img :src="`/storage/${user.avatar}`" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">
                <!-- Page Content -->
                <div class="single-page-section arabic">
                    <h2 class="margin-bottom-25">حول</h2>
                    <p>
                        Leverage agile frameworks to provide a robust synopsis
                        for high level overviews. Iterative approaches to
                        corporate strategy foster collaborative thinking to
                        further the overall value proposition. Organically grow
                        the holistic world view of disruptive innovation via
                        workplace diversity and empowerment.
                    </p>

                    <p>
                        {{ user }}
                    </p>
                </div>

                <!-- Boxed List -->
                <div class="boxed-list margin-bottom-60 arabic">
                    <div class="boxed-list-headline">
                        <h3>
                            المساقات المسجلة
                            <i class="icon-feather-video mx-2"></i>
                        </h3>
                    </div>
                    <div class="clearfix"></div>
                    <div
                        class="pagination-container margin-top-40 margin-bottom-10"
                    >
                        <div class="single-page-section">
                            <!-- Listings Container -->
                            <div class="listings-container grid-layout">
                                <Link
                                    v-for="course in user.courses"
                                    :key="course.id"
                                    :href="`/course/${course.id}`"
                                    class="job-listing"
                                >
                                    <div class="job-listing-details">
                                        <div class="job-listing-company-logo">
                                            <img
                                                :src="`/storage/${course.image}`"
                                                alt=""
                                            />
                                        </div>
                                        <div class="job-listing-description">
                                            <h4 class="job-listing-company">
                                                الصف {{ __(course.class) }}
                                            </h4>
                                            <h3 class="job-listing-title">
                                                {{ course.name }}
                                            </h3>
                                        </div>
                                    </div>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li>
                                                <i
                                                    class="icon-line-awesome-graduation-cap"
                                                >
                                                </i>
                                                الصف
                                                {{ __(course.class) }}
                                            </li>
                                            <li>
                                                <i
                                                    class="icon-material-outline-access-time"
                                                >
                                                </i>
                                                عدد الدروس
                                                {{
                                                    course.units.reduce(
                                                        (
                                                            previousValue,
                                                            currentValue
                                                        ) =>
                                                            previousValue +
                                                            currentValue
                                                                .lectures
                                                                .length,
                                                        0
                                                    )
                                                }}
                                            </li>
                                        </ul>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">
                    <!-- <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim">تحديل <i class="icon-material-outline-arrow-right-alt"></i></a> -->

                    <!-- Sidebar Widget -->
                    <div class="sidebar-widget arabic">
                        <div class="job-overview">
                            <div class="job-overview-headline">ملخص</div>
                            <div class="job-overview-inner">
                                <ul>
                                    <li>
                                        <i
                                            class="icon-material-outline-business-center"
                                        ></i>
                                        <div class="margin-right-30">
                                        <span>الوضيفة</span>
                                        <h5>مدرس عربي</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <i
                                            class="icon-material-outline-location-on"
                                        ></i>
                                        <div class="margin-right-30">
                                        <span>الموقع</span>
                                        <h5>{{ user.city }} {{ user.area }}</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon-feather-book"></i>
                                        <div class="margin-right-30">
                                        <span>الكورسات</span>
                                        <h5>{{ user.courses.length }}</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <i
                                            class="icon-material-outline-access-time"
                                        ></i>
                                        <div class="margin-right-30">
                                        <span>الخبرة</span>
                                        <h5>5 سنوات</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h3>Social Profiles</h3>
                        <div class="freelancer-socials margin-top-25">
                            <ul>
                                <li>
                                    <a
                                        href="#"
                                        title="Dribbble"
                                        data-tippy-placement="top"
                                        ><i class="icon-brand-dribbble"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        title="Twitter"
                                        data-tippy-placement="top"
                                        ><i class="icon-brand-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        title="Behance"
                                        data-tippy-placement="top"
                                        ><i class="icon-brand-behance"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        title="GitHub"
                                        data-tippy-placement="top"
                                        ><i class="icon-brand-github"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h3>Skills</h3>
                        <div class="task-tags">
                            <span>iOS</span>
                            <span>Android</span>
                            <span>mobile apps</span>
                            <span>design</span>
                            <span>Python</span>
                            <span>Flask</span>
                            <span>PHP</span>
                            <span>WordPress</span>
                        </div>
                    </div>

                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h3>Attachments</h3>
                        <div class="attachments-container">
                            <a href="#" class="attachment-box ripple-effect"
                                ><span>Cover Letter</span><i>PDF</i></a
                            >
                            <a href="#" class="attachment-box ripple-effect"
                                ><span>Contract</span><i>DOCX</i></a
                            >
                        </div>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="sidebar-widget">
                        <h3>Bookmark or Share</h3>

                        <!-- Bookmark Button -->
                        <button class="bookmark-button margin-bottom-25">
                            <span class="bookmark-icon"></span>
                            <span class="bookmark-text">Bookmark</span>
                            <span class="bookmarked-text">Bookmarked</span>
                        </button>

                        <!-- Copy URL -->
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

                        <!-- Share Buttons -->
                        <div class="share-buttons margin-top-25">
                            <div class="share-buttons-trigger">
                                <i class="icon-feather-share-2"></i>
                            </div>
                            <div class="share-buttons-content">
                                <span
                                    >Interesting?
                                    <strong>Share It!</strong></span
                                >
                                <ul class="share-buttons-icons">
                                    <li>
                                        <a
                                            href="#"
                                            data-button-color="#3b5998"
                                            title="Share on Facebook"
                                            data-tippy-placement="top"
                                            ><i
                                                class="icon-brand-facebook-f"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            data-button-color="#1da1f2"
                                            title="Share on Twitter"
                                            data-tippy-placement="top"
                                            ><i class="icon-brand-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            data-button-color="#dd4b39"
                                            title="Share on Google Plus"
                                            data-tippy-placement="top"
                                            ><i
                                                class="icon-brand-google-plus-g"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            data-button-color="#0077b5"
                                            title="Share on LinkedIn"
                                            data-tippy-placement="top"
                                            ><i
                                                class="icon-brand-linkedin-in"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        course: Object,
        user: Object,
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
.single-page-header {
    background: url(/assets/images/home-background-02.jpg);
    background-size: cover;
    background-position: center;
}
.job-listing-details {
    background: var(--img);
    background-size: cover;
    background-position: center;
}
.single-page-header.freelancer-header .header-details h3 {
    margin-left: 0px;
}
.single-page-header.freelancer-header .header-image {
    justify-content: center;
}
.single-page-header .header-image {
    margin-right: 0;
    display: flex;
    justify-content: center;
}
.job-overview .job-overview-inner ul li i{
  left: unset;
  right: 0;
}
.single-page-section {
    overflow: hidden;
}
</style>
