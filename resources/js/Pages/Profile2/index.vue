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
      (mutable_user.cover ? '/storage/' + mutable_user.cover : (settings.User_Defualt_Cover ? '/storage/' + settings.User_Defualt_Cover : '/assets/images/banner.jpg')) +
      ')'
    "
  >
  <div class="cover_edit"> <i class="icon-material-outline-add-photo-alternate"> تغير الغلاف </i> </div>
    <div class="container arabic">
      <div class="row">
        <div class="col-md-12">
          <div class="single-page-header-inner flexRight">
            <div class="right-side">
              <div class="header-details flexCenter">
                <h3 class="text-capitalize">
                  {{ mutable_user?.name }}
                  <span class="profile-title">
                    {{ mutable_user?.title || mutable_user.section?.name }}</span
                  >
                </h3>
                <!-- <ul>

                  <li>
                    <div class="verified-badge-with-title">تم التحقق</div>
                  </li>
                </ul> -->
              </div>
              <div class="header-image freelancer-avatar">
                <img
                  :src="
                    mutable_user.avatar
                      ? `/storage/${mutable_user.avatar}`
                      : (settings.User_Defualt_Image ? '/storage/' + settings.User_Defualt_Image : '/assets/images/user.png')
                  "
                  :alt="`${mutable_user?.name}`"
                />
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
        <div v-if="mutable_user.description" class="single-page-section arabic">
          <h2 class="margin-bottom-25">حول</h2>

          <div v-html="mutable_user.description"></div>
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
                  v-for="course in mutable_user?.courses.length > 0
                    ? mutable_user?.courses
                    : mutable_user.registerd_courses"
                  :key="course.id"
                  :href="`/course/${course.id}`"
                  class="job-listing"
                >
                  <div class="job-listing-details">
                    <div class="job-listing-company-logo">
                      <img :src="`/storage/${course.image}`" alt="" />
                    </div>
                    <div class="job-listing-description">
                      <h3 class="job-listing-title">
                        {{ course?.name }}
                      </h3>
                    </div>
                  </div>

                  <!-- Job Listing Footer -->
                  <div class="job-listing-footer">
                    <ul>
                      <li v-if="course.section">
                        <i class="icon-line-awesome-graduation-cap"> </i>
                        الفرع {{ course.section.name }}
                      </li>
                      <li>
                        <i class="icon-material-outline-access-time"> </i>
                        عدد الدروس
                        {{ course.lectures_count }}
                      </li>
                    </ul>
                  </div>
                </Link>
                <div
                  class="listings-container grid-layout"
                  v-if="
                    mutable_user.courses.length == 0 &&
                    mutable_user.registerd_courses.length == 0
                  "
                >
                  <div style="background: #f9f9f9" class="job-listing-details">
                    <div style="padding: 5" class="job-listing-company-logo">
                      <img
                        width="150"
                        src="/assets/images/no-course.svg"
                        alt=""
                      />
                    </div>
                    <h3 class="no-data">لا توجد مساقات مسجلة بعد</h3>
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
            <div
              v-if="!isEditing && auth?.id == mutable_user.id"
              @click="toggleEdit"
              id="pencile"
            >
              <i class="icon-feather-edit-2"></i>
            </div>
            <div class="job-overview">
              <!-- <div v-if="mutable_user.description" class="job-overview-headline">ملخص</div> -->
              <div class="job-overview-inner">
                <ul :style="'visibility:' + (isSaving ? 'hidden' : 'visibile')">
                  <li v-if="mutable_user.title || mutable_user?.section">
                    <i class="icon-material-outline-business-center"></i>
                    <div class="margin-right-30">
                      <span> {{ mutable_user?.title ? "الوظيفة" : "التخصص" }}</span>
                      <select
                        v-if="isEditing"
                        class="custom-select arabic"
                        name="section"
                        id="section"
                        required
                        v-model="form.section_id"
                      >
                        <option
                          v-for="section in sections"
                          :key="section.id"
                          :value="section.id"
                          class="select-option"
                        >
                          {{ section.name }}
                        </option>
                      </select>
                      <h5 v-else>{{ mutable_user.title ||  sections.filter(item=>item.id == mutable_user?.section_id )[0].name  }}</h5>
                    </div>
                  </li>

                  <li v-if="mutable_user.experience">
                    <i class="icon-material-outline-access-time"></i>
                    <div class="margin-right-30">
                      <span>الخبرة</span>
                      <h5>{{ mutable_user.experience }}</h5>
                    </div>
                  </li>

                  <li v-if="mutable_user.email">
                    <i class="icon-material-outline-email"></i>
                    <div class="margin-right-30">
                      <span>الإيميل </span>
                      <input
                        v-if="isEditing"
                        type="text"
                        name="email"
                        v-model="form.email"
                      />
                      <h5 v-else>{{ mutable_user.email }}</h5>
                    </div>
                  </li>

                  <li v-if="mutable_user.mobile">
                    <i class="icon-brand-whatsapp"></i>
                    <div class="margin-right-30">
                      <span>رقم الهاتف</span>
                      <input
                        v-if="isEditing"
                        type="text"
                        name="mobile"
                        v-model="form.mobile"
                      />
                      <h5 v-else>{{ mutable_user.mobile }}</h5>
                    </div>
                  </li>

                  <li v-if="mutable_user.city || mutable_user.area">
                    <i class="icon-material-outline-location-on"></i>
                    <div class="margin-right-30">
                      <span>الموقع</span>
                      <div v-if="isEditing">
                        <select
                          class="custom-select arabic"
                          name="section"
                          id="section"
                          required
                          v-model="form.city"
                        >
                          <option
                            v-for="city in cites"
                            :key="city"
                            :value="city"
                            class="select-option"
                          >
                            {{ city }}
                          </option>
                        </select>
                        <input
                          placeholder="المنطقة"
                          type="text"
                          name="area"
                          v-model="form.area"
                        />
                      </div>
                      <h5 v-else>
                        {{ mutable_user?.city }} {{ mutable_user.area ? "- " + mutable_user.area : "" }}
                      </h5>
                    </div>
                  </li>
                </ul>
                <div v-if="isSaving" class="spinner">
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
            <div v-if="isEditing" class="row mt-2">
              <div class="col-6">
                <button
                  @click="toggleEdit"
                  class="button gray list-apply-button ripple-effect col-12"
                >
                  تجاهل
                </button>
              </div>
              <div class="col-6">
                <button
                  @click="save"
                  class="button save list-apply-button ripple-effect col-12"
                >
                  حفظ
                </button>
              </div>
            </div>
          </div>

          <!-- Widget -->
          <div
            v-if="mutable_user.facebook || mutable_user.twitter || mutable_user.telegram"
            class="sidebar-widget arabic"
          >
            <h3>التواصل</h3>
            <div class="freelancer-socials margin-top-25">
              <ul>
                <li v-if="mutable_user.facebook">
                  <a
                    :href="`${mutable_user.facebook}`"
                    title="icon-brand-facebook"
                    data-tippy-placement="top"
                    target="_blank"
                    ><i class="icon-brand-facebook"></i
                  ></a>
                </li>
                <li v-if="mutable_user.twitter">
                  <a
                    :href="`${mutable_user.twitter}`"
                    title="Twitter"
                    data-tippy-placement="top"
                    target="_blank"
                    ><i class="icon-brand-twitter"></i
                  ></a>
                </li>
                <li v-if="mutable_user.telegram">
                  <a
                    :href="`${mutable_user.telegram}`"
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
import axios from "axios";
import { reactive } from "vue";
export default {
  props: {
    course: Object,
    user: Object,
    auth: Object,
    settings: Object,
    sections: Array,
  },
  mounted() {
    console.log(this.settings);
    // console.log(this.section.name);
  },
  data() {
    return {
      mutable_user: this.user,
      lectur: this.course?.units[0]?.lectures[0],
      isEditing: false,
      isSaving: false,
      form: reactive({
        section_id: this.user?.section_id || null,
        email: this.user.email,
        mobile: this.user.mobile,
        city: this.user?.city,
        area: this.user?.area,
      }),
      cites: [
        "إربد",
        "المفرق",
        "عجلون",
        "جرش",
        "عمان",
        "الزرقاء",
        "السلط",
        "مأدبا",
        "الطفيلة",
        "الكرك",
        "معان",
        "العقبة",
      ],
    };
  },
  methods: {
    changeVid(lectur) {
      this.lectur = lectur;
    },
    toggleEdit() {
      this.isEditing = !this.isEditing;
    },
    save() {
      if (this?.auth?.id != this.mutable_user.id) {
        return;
      }
      this.isSaving = true;
      axios.post("/edit-profile", this.form).then((res) => {
        console.log(res);
        this.mutable_user = res.data;
        this.toggleEdit();
        this.isSaving = false;
      });
    },
  },
};
</script>

<style scoped>
.sk-chase {
  top: -20px;
}
.job-overview-inner {
  position: relative;
}
.spinner {
  position: absolute;
  height: 10px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
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
.save:hover {
  background: #30626f !important;
}
#pencile {
  top: -15px;
  left: 0px;
  position: absolute;
  font-size: 22px;
  color: white;
  background: #1d5361;
  padding: 6px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.2s linear;
  z-index: 9999;
}

#pencile:hover {
  top: -16px;
  left: -1px;
  font-size: 24px;
  box-shadow: grey 2px 2px 10px;
}
.no-data {
  font-weight: 500;
  color: #666;
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 20px;
  flex: 1;
  text-align: center;
}

.cover_edit{
    color: white;
    padding: 10px 15px;
    background: #636363;
    position: absolute;
    top: 10px;
    z-index: 99;
    left: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.2s ease ;
}

.cover_edit:hover{
    top: 8px;
}
</style>
