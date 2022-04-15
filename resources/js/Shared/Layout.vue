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
                  <Link href="/">من نحن</Link>
                </li>
                <li>
                  <Link href="/">المعلمين</Link>
                </li>

                <li>
                  <a class="arow" href="#">التوجيهي</a>
                  <ul class="dropdown-nav">
                    <li><a href="/">علمي</a></li>
                    <li><a href="/contact">أدبي</a></li>
                    <li><a href="/404">صناعي</a></li>
                    <li><a href="/403">فندقي</a></li>
                    <li><a href="/test">زراعي</a></li>
                    <li><a href="/course">تمريض</a></li>
                  </ul>
                </li>
                <li>
                  <Link class="arow" href="/">الكورسات</Link>
                  <ul class="dropdown-nav">
                    <li><a href="/">الصفوف الأساسية</a></li>
                    <li>
                      <a href="/contact">الصفوف الأعدادية</a>
                    </li>
                    <li>
                      <a href="/404">الصفوف الثانوية</a>
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
            <Slide class="navigation mobile" :disableEsc="true" right>
              <ul class="responsiveMobile">
                <li>
                  <Link href="/course2/1">من نحن</Link>
                </li>
                <li>
                  <Link href="/">المعلمين</Link>
                </li>

                <li>
                  <a class="arow" href="#">التوجيهي</a>
                  <ul class="dropdown-nav">
                    <li><a href="/">علمي</a></li>
                    <li><a href="/contact">أدبي</a></li>
                    <li><a href="/404">صناعي</a></li>
                    <li><a href="/403">فندقي</a></li>
                    <li><a href="/test">زراعي</a></li>
                    <li><a href="/course">تمريض</a></li>
                  </ul>
                </li>
                <li>
                  <Link class="arow" href="/">الكورسات</Link>
                  <ul class="dropdown-nav">
                    <li><a href="/">الصفوف الأساسية</a></li>
                    <li>
                      <a href="/contact">الصفوف الأعدادية</a>
                    </li>
                    <li>
                      <a href="/404">الصفوف الثانوية</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <Link href="/">الصفحة الرئيسية</Link>
                </li>
              </ul>
            </Slide>
          </div>
          <!-- Left Side Content / End -->

          <!-- Right Side Content / End -->
          <div class="right-side flexCenter">
            <div v-if="auth">
              <!--  User Notifications -->
              <div class="header-widget hide-on-mobile">
                <!-- Notifications -->
                <div class="header-notifications">
                  <!-- Trigger -->
                  <div class="header-notifications-trigger">
                    <Link class="logout" href="/logout">
                      تسجيل خروج
                      </Link
                    >
                  </div>

                  <!-- <div class="header-notifications-dropdown">
                    <div class="header-notifications-headline">
                      <h4>Notifications</h4>
                                Your job listing
                                <span class="color"
                                  >Full Stack PHP Developer</span
                                >
                      <button
                        class="mark-as-read ripple-effect-dark"
                        title="Mark all as read"
                        data-tippy-placement="left"
                      >
                        <i class="icon-feather-check-square"></i>
                      </button>
                    </div>

                    <div class="header-notifications-content">
                      <div class="header-notifications-scroll" data-simplebar>
                        <ul>
                          <li class="notifications-not-read">
                            <a href="dashboard-manage-candidates.html">
                              <span class="notification-icon"
                                ><i class="icon-material-outline-group"></i
                              ></span>
                              <span class="notification-text">
                                <strong>Michael Shannah</strong>
                                applied for a job
                                <span class="color"
                                  >Full Stack Software Engineer</span
                                >
                              </span>
                            </a>
                          </li>

                          <li>
                            <a href="dashboard-manage-bidders.html">
                              <span class="notification-icon"
                                ><i class="icon-material-outline-gavel"></i
                              ></span>
                              <span class="notification-text">
                                <strong>Gilbert Allanis</strong>
                                placed a bid on your
                                <span class="color">iOS App Development</span>
                                project
                              </span>
                            </a>
                          </li>

                          <li>
                            <a href="dashboard-manage-jobs.html">
                              <span class="notification-icon"
                                ><i class="icon-material-outline-autorenew"></i
                              ></span>
                              <span class="notification-text">
                                is expiring.
                              </span>
                            </a>
                          </li>

                          <li>
                            <a href="dashboard-manage-candidates.html">
                              <span class="notification-icon"
                                ><i class="icon-material-outline-group"></i
                              ></span>
                              <span class="notification-text">
                                <strong>Sindy Forrest</strong>
                                applied for a job
                                <span class="color"
                                  >Full Stack Software Engineer</span
                                >
                              </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> -->
                </div>

                <!-- Messages -->

              </div>
              <!--  User Notifications / End -->

              <!-- User Menu -->
              <div class="header-widget">
                <!-- Messages -->
                <div class="header-notifications user-menu">
                  <div class="header-notifications-trigger">
                    <a href="#"
                      ><div class="user-avatar status-online">
                        <img
                          :src="`/storage/${auth.avatar}`"
                          alt=""
                        /></div
                    ></a>
                  </div>

                  <!-- Dropdown -->
                  <div class="header-notifications-dropdown">
                    <!-- User Status -->
                    <div class="user-status">
                      <!-- User Name / Avatar -->
                      <div class="user-details">
                        <div class="user-avatar status-online">
                          <img
                            :src="`/storage/${auth.avatar}`"
                            alt=""
                          />
                        </div>
                        <div class="user-name">
                          {{ auth.name }}
                          <span>Freelancer</span>
                        </div>
                      </div>

                      <!-- User Status Switcher -->
                      <div class="status-switch" id="snackbar-user-status">
                        <label class="user-online current-status">Online</label>
                        <label class="user-invisible">Invisible</label>
                        <!-- Status Indicator -->
                        <span
                          class="status-indicator"
                          aria-hidden="true"
                        ></span>
                      </div>
                    </div>

                    <ul class="user-menu-small-nav">
                      <li>
                        <a href="dashboard.html"
                          ><i class="icon-material-outline-dashboard"></i>
                          Dashboard</a
                        >
                      </li>
                      <li>
                        <a href="dashboard-settings.html"
                          ><i class="icon-material-outline-settings"></i>
                          Settings</a
                        >
                      </li>
                      <li>
                        <a href="index-logged-out.html"
                          ><i
                            class="icon-material-outline-power-settings-new"
                          ></i>
                          Logout</a
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
                    <Link href="/Register">{{ __("register") }}</Link>
                  </li>
                  <li>
                    <Link href="/login">{{ __("signin") }} </Link>
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

    <!-- Footer
================================================== -->
    <div id="footer">
      <!-- Footer Top Section -->
      <div class="footer-top-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <!-- Footer Rows Container -->
              <div class="footer-rows-container">
                <!-- Left Side -->
                <div class="footer-row borderRight">
                  <a href="/"
                    ><img
                      class="footer-row-inner footer-logo"
                      src="/assets/images/logo.png"
                      alt=""
                    />
                  </a>
                </div>

                <!-- Right Side -->
                <!-- Social Icons -->
                <div class="footer-row borderLeft">
                  <div class="footer-row-inner">
                    <ul class="footer-social-links">
                      <li>
                        <a
                          href="#"
                          title="Facebook"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          title="Twitter"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          title="Google Plus"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-google-plus-g"></i>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          title="LinkedIn"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-linkedin-in"></i>
                        </a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <!-- Footer Rows Container / End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Top Section / End -->

      <!-- Footer Middle Section -->
      <div class="footer-middle-section">
        <div class="container">
          <div class="row">
            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                <h3>For Candidates</h3>
                <ul>
                  <li>
                    <a href="#"><span>Browse Jobs</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Add Resume</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Job Alerts</span></a>
                  </li>
                  <li>
                    <a href="#"><span>My Bookmarks</span></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                <h3>For Employers</h3>
                <ul>
                  <li>
                    <a href="#"><span>Browse Candidates</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Post a Job</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Post a Task</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Plans & Pricing</span></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                <h3>Helpful Links</h3>
                <ul>
                  <li>
                    <a href="#"><span>Contact</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Privacy Policy</span></a>
                  </li>
                  <li>
                    <a href="#"><span>Terms of Use</span></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                <h3>Account</h3>
                <ul>
                  <li>
                    <a href="#"><span>Log In</span></a>
                  </li>
                  <li>
                    <a href="#"><span>My Account</span></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Newsletter -->
            <div class="col-xl-4 col-lg-4 col-md-12">
              <h3>
                <i class="icon-feather-mail"></i> Sign Up For a Newsletter
              </h3>
              <p>
                Weekly breaking news, analysis and cutting edge advices on job
                searching.
              </p>
              <form action="#" method="get" class="newsletter">
                <input
                  type="text"
                  name="fname"
                  placeholder="Enter your email address"
                />
                <button type="submit">
                  <i class="icon-feather-arrow-right"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Middle Section / End -->

      <!-- Footer Copyrights -->
      <div class="footer-bottom-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              © 2019 <strong>Hireo</strong>. All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Copyrights / End -->
    </div>
    <!-- Footer / End -->
  </div>
  <!-- Wrapper / End -->
</template>

<script>
import { Slide } from "vue3-burger-menu";

export default {
    props:{

        auth:Object,
    },
  components: {
    Slide, // Register your component
  },
};
</script>

<style scoped>
.logout::before{
    position: relative;
    content: "\e988";
    font-family: 'Feather-Icons' !important;
    transform: scale(-1, 1);
      display: inline-block;
      top: 4px;

}
</style>
