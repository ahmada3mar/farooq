<template>
  <!-- Titlebar
================================================== -->
  <div class="single-page-header" data-background-image="images/single-job.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="single-page-header-inner">
            <div class="left-side">
              <div class="header-image">
                <a href="single-company-profile.html"
                  ><img src="images/company-logo-03a.png" alt=""
                /></a>
              </div>
              <div class="header-details">
                <h3>{{ course.name }}</h3>
                <h5>{{ course.user.name }}</h5>
                <ul>
                  <li>
                    <a href="single-company-profile.html">
                      {{ __(course.class) }}</a
                    >
                    <i class="icon-material-outline-business"></i>
                  </li>
                  <li>
                    {{
                      course.lectures_count
                    }}
                    حصص
                    <i class="icon-material-outline-business"></i>
                  </li>
                  <li><div class="star-rating" data-rating="4.9"> </div></li>
                </ul>
              </div>
            </div>
            <div class="right-side">
              <div class="salary-box">
                <div class="salary-type">تكلفة الكورس</div>
                <div class="salary-amount">{{ course.price }} JOD</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page Content
================================================== -->
  <div class="container">
    <div class="row">
      <!-- Content -->
      <div class="col-xl-8 col-lg-8 content-right-offset">
        <div class="single-page-section">
          <h3 class="margin-bottom-25">وصف المساق</h3>
             <div v-html="course.description"></div>
        </div>


        <div class="single-page-section">
          <h3 class="margin-bottom-25">مساقات مشابهة</h3>

          <!-- Listings Container -->
          <div class="listings-container grid-layout">
            <!-- Job Listing -->
            <a href="#" class="job-listing">
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <div class="job-listing-company-logo">
                  <img src="images/company-logo-02.png" alt="" />
                </div>

                <!-- Details -->
                <div class="job-listing-description">
                  <h4 class="job-listing-company">Coffee</h4>
                  <h3 class="job-listing-title">Barista and Cashier</h3>
                </div>
              </div>

              <!-- Job Listing Footer -->
              <div class="job-listing-footer">
                <ul>
                  <li>
                    <i class="icon-material-outline-location-on"></i> San
                    Francisco
                  </li>
                  <li>
                    <i class="icon-material-outline-business-center"></i> Full
                    Time
                  </li>
                  <li>
                    <i class="icon-material-outline-account-balance-wallet"></i>
                    $35000-$38000
                  </li>
                  <li>
                    <i class="icon-material-outline-access-time"></i> 2 days ago
                  </li>
                </ul>
              </div>
            </a>

            <!-- Job Listing -->
            <a href="#" class="job-listing">
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <div class="job-listing-company-logo">
                  <img src="images/company-logo-03.png" alt="" />
                </div>

                <!-- Details -->
                <div class="job-listing-description">
                  <h4 class="job-listing-company">
                    King
                    <span
                      class="verified-badge"
                      title="Verified Employer"
                      data-tippy-placement="top"
                    ></span>
                  </h4>
                  <h3 class="job-listing-title">Restaurant Manager</h3>
                </div>
              </div>

              <!-- Job Listing Footer -->
              <div class="job-listing-footer">
                <ul>
                  <li>
                    <i class="icon-material-outline-location-on"></i> San
                    Francisco
                  </li>
                  <li>
                    <i class="icon-material-outline-business-center"></i> Full
                    Time
                  </li>
                  <li>
                    <i class="icon-material-outline-account-balance-wallet"></i>
                    $35000-$38000
                  </li>
                  <li>
                    <i class="icon-material-outline-access-time"></i> 2 days ago
                  </li>
                </ul>
              </div>
            </a>
          </div>
          <!-- Listings Container / End -->
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-xl-4 col-lg-4">
        <div class="sidebar-container">
          <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim"
            >تأكيد عملية الشراء  <i class="icon-material-outline-arrow-right-alt"></i
          ></a>

          <!-- Sidebar Widget -->
          <div class="sidebar-widget">
            <div class="job-overview">
              <div class="job-overview-headline">معلومات المدرس</div>
              <div class="job-overview-inner">
                <ul>
                  <li>
                    <i class="icon-material-outline-location-on"></i>
                    <span>العنوان</span>
                    <h5> {{ course.user.city }} {{ course.user.area }} </h5>
                  </li>
                  <li>
                    <i class="icon-material-outline-business-center"></i>
                    <span>المساقات</span>
                    <h5>{{ course.user.courses.length }}</h5>
                  </li>
                  <li>
                    <i class="icon-material-outline-local-atm"></i>
                    <span>الخبرة العملية</span>
                    <h5>{{ course.user.experience }}</h5>
                  </li>
                  <li>
                    <i class="icon-material-outline-access-time"></i>
                    <span>تاريخ الانضمام</span>
                    <h5> {{ new Date(course.user.created_at).toISOString().split('T')[0] }} </h5>
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
  },
};
</script>
