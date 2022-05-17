<template>
  <!-- Wrapper -->
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
                  <Link href="/">المعلمين</Link>
                </li>

                <li>
                  <Link class="arow" href="/courses?class=12">التوجيهي</Link>
                  <ul class="dropdown-nav">
                    <li v-for="section in sections" :key="section?.id">
                      <Link :href="`/courses?section=${section?.id}`">{{
                        section.name
                      }}</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link class="arow" href="/courses">الكورسات</Link>
                  <ul class="dropdown-nav">
                    <li><Link href="/courses?category=primary">الصفوف الأساسية</Link></li>
                    <li>
                      <Link href="/courses?category=secondary">الصفوف الأعدادية</Link>
                    </li>
                    <li>
                      <Link href="/courses?category=highschool">الصفوف الثانوية</Link>
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
              <a href="/"><img src="/assets/images/logo.png" alt="" /></a>
            </div>
            <Slide class="navigation mobile"   right>
              <ul class="responsiveMobile">
                <li>
                  <Link href="/">الصفحة الرئيسية</Link>
                </li>

                <li>
                  <a class="arow" href="#">التوجيهي</a>
                  <ul class="dropdown-nav">
                    <li v-for="section in sections" :key="section?.id">
                      <Link :href="`/courses?section=${section?.id}`">{{
                        section.name
                      }}</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link class="arow" href="/courses">الكورسات</Link>
                  <ul class="dropdown-nav">
                    <li><Link href="/courses?category=primary">الصفوف الأساسية</Link></li>
                    <li>
                      <Link href="/courses?category=secondary">الصفوف الأعدادية</Link>
                    </li>
                    <li>
                      <Link href="/courses?category=highschool">الصفوف الثانوية</Link>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link href="/">المعلمين</Link>
                </li>
                <li>
                  <Link href="/contact">من نحن</Link>
                </li>
                <template  v-if="auth">
                </template>
                <template  v-else>
                  <li>
                    <Link href="/Register">تسجيل</Link>
                  </li>
                  <li>
                    <Link href="/login">تسجيل الدخول </Link>
                  </li>
                </template>
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
                <div :class="`header-notifications user-menu ${infoStatus && 'active'}`">
                  <div class="header-notifications-trigger">
                    <a @click="togleInfo">
                      <div class="user-avatar ">
                        <div class="navProfileImage">
                          <img :src="`/storage/${auth.avatar}`" alt="" />
                        </div>
                        </div
                    ></a>
                  </div>

                  <!-- Dropdown -->
                  <div :class="`header-notifications-dropdown`">
                    <!-- User Status -->
                    <a :href="`/profile/${auth.id}`" >
                    <div class="user-status">
                      <!-- User Name / Avatar -->
                      <div class="user-details">
                      <div class="user-avatar ">
                        <div class="navProfileImage">
                          <img :src="`/storage/${auth.avatar}`" alt="" />
                        </div>
                        </div
                    >
                        <div class="user-name">
                          {{ auth.name }}

                        </div>
                      </div>
                    </div>
                    </a>

                    <ul class="user-menu-small-nav">
                      <li>
                        <a href="/admin" target="_blank">

                          لوحة التحكم
                          <i class="icon-material-outline-dashboard"></i>
                          </a
                        >
                      </li>
                      <li>
                        <a href="/logout"
                          >
                           <Link class="logout" href="/logout"> تسجيل خروج </Link>
                          </a
                        >
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

    <slot  />
    <Footer ></Footer>

    <!-- Footer
================================================== -->

    <!-- Footer / End -->
  </div>
  <!-- Wrapper / End -->
</template>

<script>
import { Slide } from "vue3-burger-menu";
import Footer from "../Shared/Footer.vue";


export default {
    props: {
    sections: Array,
    auth: Object,

  },

  components: {
    Slide, // Register your component
    Footer
  },
  data(){
      return{
          infoStatus : false
      }
  },
    methods :{
        togleInfo(e){
            this.infoStatus = !this.infoStatus
        }
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
.user-menu .header-notifications-dropdown{
  right: -135px;
}
.navProfile{
      border-right: 1px solid #e0e0e0 !important;
      border-left: none;
      padding-right: 30px !important;
      padding-left: 5px !important;
      }
 #header .container {
   gap: 0 ;
   padding: 0;
 }
 .all-right-footer{
   text-decoration: rtl !important;
 }

</style>
