<template>
  <div v-if="modal" @click="modal = false" class="shadow"></div>
  <div v-if="modal" class="modal-otp">
    <div v-if="!verifed">
      <p style="color: red" class="m-0" v-if="verify_msg">
        {{ verify_msg }} <a @click="sendEmail" class="link">اعادة الإرسال </a>
      </p>
      <p v-else class="email_sent">
        ✅ {{ auth.email }} : تم ارسال رمز التحقق الى بريدك الإلكتروني
      </p>
      <p>ادخل رمز التحقق</p>
      <input v-model="otp" type="text" pattern="\d*" maxlength="6" />
    </div>
    <div v-else>
      <p style="text-align: center">تم التحقق بنجاح</p>
      <p style="text-align: center">🎊🎉</p>
    </div>
    <button
      @click="verifed ? (modal = false) : verify()"
      class="button ripple-effect px-5"
    >
      {{ verifed ? "اغلاق" : "تحقق" }}
    </button>
  </div>
  <!-- Wrapper -->
  <div v-if="auth && !verifed" class="note">
    <p>
      .لم تقم بتأكيد بريدك الإلكتروني يرجى تأكيده لتتمكن من الأستمرار بأستخدام
      كامل الميزات <a @click="togleModal">تأكيد الآن</a>
    </p>
  </div>
  <div id="wrapper">
    <!-- Header Container
================================================== -->
    <header id="header-container" class="fullwidth">
      <!-- Header -->
      <div id="header">
        <div class="container">
          <div class="clearfix"></div>
          <!-- Main Navigation / End -->
          <!-- Left Side Content -->
          <div class="left-side flexbetween">
            <!-- Main Navigation -->

            <nav class="navigation">
              <ul class="responsive">
                <li>
                  <Link href="/contact">من نحن</Link>
                </li>
                <li>
                  <Link href="/Selling-Points">نقاط البيع</Link>
                </li>
                <li>
                  <Link href="/Instructors">المعلمين</Link>
                </li>

                <li>
                  <Link class="arow" href="/documents">الملفات</Link>
                  <ul class="dropdown-nav">
                    <li><Link href="/documents?type=1">أسئلة سنوات</Link></li>
                    <li>
                      <Link href="/documents?type=2">أوراق عمل</Link>
                    </li>
                    <li>
                      <Link href="/documents?type=3">دوسيات</Link>
                    </li>
                    <li>
                      <Link href="/documents?type=4">الكتب</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link class="arow" href="/courses">الكورسات</Link>
                  <ul class="dropdown-nav">
                    <li v-for="section in sections" :key="section?.id">
                      <Link :href="`/courses?section=${section?.id}`">{{
                        section.name
                      }}</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link href="/">الصفحة الرئيسية</Link>
                </li>
              </ul>
            </nav>

            <!-- Logo -->
            <div id="logo">
              <Link href="/"><img src="/assets/images/logo.png" alt="" /></Link>
            </div>
            <Slide class="navigation mobile rightLists" right>
              <ul class="responsiveMobile">
                <li>
                  <Link href="/contact">من نحن</Link>
                </li>
                <li>
                  <Link href="/Selling-Points">نقاط البيع</Link>
                </li>
                <li>
                  <Link href="/Instructors">المعلمين</Link>
                </li>

                <li>
                  <Link class="arow" href="/documents">الملفات</Link>
                  <ul class="dropdown-nav">
                    <li><Link href="/documents?type=1">أسئلة سنوات</Link></li>
                    <li>
                      <Link href="/documents?type=2">أوراق عمل</Link>
                    </li>
                    <li>
                      <Link href="/documents?type=3">دوسيات</Link>
                    </li>
                    <li>
                      <Link href="/documents?type=4">الكتب</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link class="arow" href="/courses">الكورسات</Link>
                  <ul class="dropdown-nav">
                    <li v-for="section in sections" :key="section?.id">
                      <Link :href="`/courses?section=${section?.id}`">{{
                        section.name
                      }}</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link href="/">الصفحة الرئيسية</Link>
                </li>
              </ul>
              <ul class="loginList">
                <li>
                  <Link class="colorWhite" href="/Register">تسجيل</Link>
                </li>
                <li>
                  <Link class="colorWhite" href="/login">تسجيل الدخول </Link>
                </li>
              </ul>
            </Slide>
          </div>
          <!-- Left Side Content / End -->

          <!-- Right Side Content / End -->
          <div class="right-side flexCenter">
            <div v-if="auth">
              <!-- User Menu -->
              <div class="header-widget navProfile">
                <!-- Messages -->
                <div
                  :class="`header-notifications user-menu ${
                    infoStatus && 'active'
                  }`"
                >
                  <div class="header-notifications-trigger">
                    <Link @click="togleInfo">
                      <div class="user-avatar">
                        <div class="navProfileImage">
                          <img
                            :src="
                              auth.avatar
                                ? `/storage/${auth.avatar}`
                                : '/assets/images/user.png'
                            "
                            alt=""
                          />
                        </div></div
                    ></Link>
                  </div>

                  <!-- Dropdown -->
                  <div :class="`header-notifications-dropdown`">
                    <!-- User Status -->
                    <Link :href="`/profile/${auth.id}`">
                      <div class="user-status">
                        <!-- User Name / Avatar -->
                        <div class="user-details">
                          <div class="user-avatar">
                            <div class="navProfileImage">
                              <img
                                :src="
                                  auth.avatar
                                    ? `/storage/${auth.avatar}`
                                    : '/assets/images/user.png'
                                "
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="user-name">
                            {{ auth.name }}
                          </div>
                        </div>
                      </div>
                    </Link>

                    <ul class="user-menu-small-nav">
                      <li>
                        <a href="/dashboard/" target="_blank">
                          لوحة التحكم
                          <i class="icon-material-outline-dashboard"></i>
                        </a>
                      </li>
                      <li>
                        <Link class="logout" href="/logout"> تسجيل خروج </Link>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- User Menu / End -->
            </div>
            <div v-else>
              <nav class="navigation">
                <ul class="responsive">
                  <li>
                    <Link href="/Register">تسجيل</Link>
                  </li>
                  <li>
                    <Link href="/login">تسجيل الدخول </Link>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- Right Side Content / End -->
        </div>
      </div>
      <!-- Header / End -->
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <slot />
    <Footer></Footer>

    <!-- Footer
================================================== -->

    <!-- Footer / End -->
  </div>
  <!-- Wrapper / End -->
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import { Slide } from "vue3-burger-menu";
import Footer from "../Shared/Footer.vue";
import axios from "axios";

export default {
  props: {
    sections: Array,
    auth: Object,
  },

  components: {
    Slide, // Register your component
    Footer,
  },
  data() {
    return {
      infoStatus: false,
      modal: false,
      otp: null,
      verifed:  this.auth?.email_verified_at,
      verify_msg: null,
    };
  },
  methods: {
    togleInfo(e) {
      this.infoStatus = !this.infoStatus;
    },
    sendEmail() {
      this.verify_msg = null;
      axios.get("/send-email").catch((err) => (this.verify_msg = err.response.data));
    },
    togleModal(e) {
      this.otp = null;
      this.modal = true;
      this.sendEmail();
    },
    verify(e) {
      // window.location.href = "/verification/" +Buffer.from((this.otp , "base64") )
      axios
        .get(
          "/verification/" + btoa(this.otp),
          {},
          { headers: { accept: "application/json" } }
        )
        .then((rees) => (this.verifed = true))
        .catch((err) => (this.verify_msg = err.response.data));
    },
    // Dropdown().init({ });
  },
};
</script>

<style scoped>
.logout::after {
  position: relative;
  content: "\e988";
  font-family: "Feather-Icons" !important;
  transform: scale(-1, 1);
  display: inline-block;
  top: 4px;
}
.user-menu .header-notifications-dropdown {
  right: -135px;
}
.navProfile {
  border-right: 1px solid #e0e0e0 !important;
  border-left: none;
  padding-right: 30px !important;
  padding-left: 5px !important;
}
#header .container {
  gap: 0;
  padding: 0;
}
.all-right-footer {
  text-decoration: rtl !important;
}
.rightLists {
  position: relative;
}
.loginList {
  position: absolute;
  bottom: 25px;
  display: flex;
  flex-direction: column;
  list-style: none;
  font-size: 1.5rem;
  gap: 5px;
}
.colorWhite {
  color: rgb(181, 179, 179) !important;
}

.note {
  background: rgb(248, 238, 159);
  position: sticky;
  top: 0;
  z-index: 99999999;
}

.note p {
  color: #4c4b4b;
  margin: 0;
  text-align: center;
}
.note a,
.link {
  font-weight: bold;
  text-decoration: underline !important;
  margin-right: 5px;
  cursor: pointer !important;
  color: #4c4b4b !important;
}

.modal-otp {
  padding: 25px 40px;
  margin-right: auto;
  margin-left: auto;
  max-width: 100%;
  width: 500px;
  background: #e9ecef;
  border-radius: 10px;
  /* direction: rtl; */
  text-align: justify;
  position: fixed;
  top: 50%;
  z-index: 99999;
  left: 50%;
  transform: translate(-50%, -50%);
}
.modal-otp p {
  text-align: right;
}

.modal-otp input {
  text-align: center;
}
.shadow {
  height: 100%;
  position: fixed;
  width: 100%;
  background: #0000004d;
  z-index: 99999;
}
.email_sent {
  font-style: italic;
  font-size: 14px;
  color: #999191;
}
</style>
