<template>
  <Head>
    <title>الحساب الشخصي</title>
    <meta name="description" content="profile" head-key="description" />
    <meta name="keywords" content="profile" />
  </Head>
  <div
    class="single-page-header freelancer-header"
    :style="
      'background-image: url(' +
      (user.cover ? '/storage/' + user.cover : settings?.User_Defualt_Cover) +
      ')'
    "
  >
    <div class="container arabic">
      <div class="row">
        <div class="col-md-12">
          <div class="single-page-header-inner flexRight">
            <div class="right-side">
              <div class="header-details flexCenter">
                <h3 class="text-capitalize">
                  {{ user?.name }}
                  <span class="profile-title"> {{ user.section?.name || user.title }}</span>
                </h3>
                <!-- <ul>

                  <li>
                    <div class="verified-badge-with-title">تم التحقق</div>
                  </li>
                </ul> -->
              </div>
              <div class="header-image freelancer-avatar">
                <img :src="user.avatar? `/storage/${user.avatar}` : settings?.User_Defualt_Image" :alt="`${user?.name}`" />
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
        <div v-if="user.description" class="single-page-section arabic">
          <h2 class="margin-bottom-25">حول</h2>

          <div v-html="user.description"></div>
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
          <div class="pagination-container margin-top-5 margin-bottom-10">
            <div class="single-page-section">
              <!-- Listings Container -->
              <div class="listings-container grid-layout">
                <Link
                  v-for="course in (user?.courses.length > 0 ?  user?.courses : user.registerd_courses)"
                  :key="course.id"
                  :href="`/course/${course.id}`"
                  class="job-listing"
                >
                  <div class="job-listing-details">
                    <div class="job-listing-company-logo">
                      <img :src="`/storage/${course.image}`" alt="" />
                    </div>
                    <div class="job-listing-description">
                      <h4 class="job-listing-company">
                        الصف {{ __(course.class) }}
                      </h4>
                      <h3 class="job-listing-title">
                        {{ course?.name }}
                      </h3>
                    </div>
                  </div>

                  <!-- Job Listing Footer -->
                  <div class="job-listing-footer">
                    <ul>
                      <li>
                        <i class="icon-line-awesome-graduation-cap"> </i>
                        الصف
                        {{ __(course.class) }}
                      </li>
                      <li>
                        <i class="icon-material-outline-access-time"> </i>
                        عدد الدروس
                        {{ course.lectures_count }}
                      </li>
                    </ul>
                  </div>
                </Link>
                <div class="listings-container grid-layout" v-if="user.courses.length == 0 && user.registerd_courses.length == 0">
                  <div style="background:#f9f9f9" class="job-listing-details">
                    <div style="padding:5" class="job-listing-company-logo">
                      <img width="150" src="/assets/images/no-course.svg" alt="" />
                    </div>
                      <h3 class="no-data">
                        لا توجد مساقات مسجلة بعد
                      </h3>
                  </div>
                </div>
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
              <!-- <div v-if="user.description" class="job-overview-headline">ملخص</div> -->
              <div class="job-overview-inner">
                <ul>
                  <!-- <li>
                    <i class="icon-material-outline-business-center"></i>
                    <div class="margin-right-30">
                      <span>الوضيفة</span>
                      <h5>{{ user.title || "طالب" }}</h5>
                    </div>
                  </li> -->
                  <li v-if="user.city || user.area">
                    <i class="icon-material-outline-location-on"></i>
                    <div class="margin-right-30">
                      <span>الموقع</span>
                      <h5>{{ user?.city }} {{ user?.area }}</h5>
                    </div>
                  </li>

                  <li v-if="user.title">
                    <i class="icon-material-outline-business-center"></i>
                    <div class="margin-right-30">
                      <span>الوضيفة</span>
                      <h5>{{ user.title || "طالب" }}</h5>
                    </div>
                  </li>

                  <li v-if="user.experience">
                    <i class="icon-material-outline-access-time"></i>
                    <div class="margin-right-30">
                      <span>الخبرة</span>
                      <h5>{{ user.experience }}</h5>
                    </div>
                  </li>
                  <li v-if="user.mobile">
                    <i class="icon-brand-whatsapp"></i>
                    <div class="margin-right-30">
                      <span>رقم الهاتف</span>
                      <h5>{{ user.mobile }}</h5>
                    </div>
                  </li>
                  <li v-if="user.email">
                    <i class="icon-material-outline-email"></i>
                    <div class="margin-right-30">
                      <span>الإيميل </span>
                      <h5>{{ user.email }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Widget -->
          <div
            v-if="user.facebook || user.twitter || user.telegram"
            class="sidebar-widget arabic"
          >
            <h3>التواصل</h3>
            <div class="freelancer-socials margin-top-25">
              <ul>
                <li v-if="user.facebook">
                  <a
                    :href="`${user.facebook}`"
                    title="icon-brand-facebook"
                    data-tippy-placement="top"
                    target="_blank"
                    ><i class="icon-brand-facebook"></i
                  ></a>
                </li>
                <li v-if="user.twitter">
                  <a
                    :href="`${user.twitter}`"
                    title="Twitter"
                    data-tippy-placement="top"
                    target="_blank"
                    ><i class="icon-brand-twitter"></i
                  ></a>
                </li>
                <li v-if="user.telegram">
                  <a
                    :href="`${user.telegram}`"
                    title="Telegram"
                    data-tippy-placement="top"
                    target="_blank"
                    ><i class="icon-brand-telegram"></i
                  ></a>
                </li>
              </ul>
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
    settings: Object,
  },
  mounted() {
    // console.log(this.user);
    // console.log(this.section.name);
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
.job-overview .job-overview-inner ul li i {
  left: unset;
  right: 0;
}
.single-page-section {
  overflow: hidden;
}

.add-balance {
  cursor: pointer;
}
.add-balance i {
  right: unset !important;
}
.profile-title {
  color: aliceblue !important;
  text-shadow: 0 0 3px #444;
}


.no-data{
    font-weight: 500;
    color: #666;
    font-size: 30px;
    margin: 0;
    padding: 0;
    line-height: 20px;
    flex:1 ;
     text-align: center;
}
</style>
