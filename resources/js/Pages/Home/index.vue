<template>
  <!-- Intro Banner
================================================== -->
  <!-- add class "disable-gradient" to enable consistent background overlay -->
  <div class="intro-banner">
    <div
      class="background-image-container"
      style="background-image: url('/assets/images/banner.jpg')"
    ></div>
    <div class="container">
      <!-- Intro Headline -->
      <div class="row">
        <div class="col-md-12">
          <div class="banner-headline">
            <h3>
              <strong></strong>
              <br />
              <span
                >Thousands of small businesses use
                <strong class="color">Hireo</strong> to turn their ideas into
                reality.</span
              >
            </h3>
          </div>
        </div>
      </div>

      <!-- Search Bar -->
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

  <!-- Content
================================================== -->
  <!-- Category Boxes -->
  <div class="section margin-top-65">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-headline centered margin-bottom-15">
            <h3>الصفوف</h3>
          </div>

          <!-- Category Boxes Container -->
          <div class="categories-container">
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">4</div>
              <div class="category-box-content">
                <h3>الصف الرابع</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">3</div>
              <div class="category-box-content">
                <h3>الصف الثالث</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">2</div>
              <div class="category-box-content">
                <h3>الصف الثاني</h3>
              </div>
            </Link>
            <!-- Category Box -->
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">1</div>
              <div class="category-box-content">
                <h3>الصف الأول</h3>
              </div>
            </Link>
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">8</div>
              <div class="category-box-content">
                <h3>الصف الثامن</h3>
              </div>
            </Link>
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">7</div>
              <div class="category-box-content">
                <h3>الصف السابع</h3>
              </div>
            </Link>
            <!-- Category Box -->
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">6</div>
              <div class="category-box-content">
                <h3>الصف السادس</h3>
              </div>
            </Link>
            <!-- Category Box -->
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">5</div>
              <div class="category-box-content">
                <h3>الصف الخامس</h3>
              </div>
            </Link>
            <!-- Category Box -->
            <!-- Category Box -->
            <!-- Category Box -->
            <!-- Category Box -->
            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">ادبي</div>
              <div class="category-box-content">
                <h3>الصف الأول ثانوي</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">علمي</div>
              <div class="category-box-content">
                <h3>الصف الأول ثانوي</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">10</div>
              <div class="category-box-content">
                <h3>الصف العاشر</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">9</div>
              <div class="category-box-content">
                <h3>الصف التاسع</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">مهني</div>
              <div class="category-box-content">
                <h3>الصف الثاني ثانوي</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">أدبي</div>
              <div class="category-box-content">
                <h3>الصف الثاني ثانوي</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">علمي</div>
              <div class="category-box-content">
                <h3>الصف الثاني ثانوي</h3>
              </div>
            </Link>

            <Link href="/classes/1" class="category-box">
              <div class="category-box-icon">
                <i class="icon-line-awesome-graduation-cap"></i>
              </div>
              <div class="category-box-counter">مهني</div>
              <div class="category-box-content">
                <h3>الصف الأول ثانوي</h3>
              </div>
            </Link>

            <!-- Category Box -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Category Boxes / End -->

  <!-- Features Jobs -->
  <div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <!-- Section Headline -->
          <div class="section-headline margin-top-0 margin-bottom-35">
            <Link href="/course" class="headline-link">عرض الكل</Link>
            <h3 class="arabic">كورسات مقترحة</h3>
          </div>

          <!-- Jobs Container -->
          <div class="listings-container compact-list-layout margin-top-35">
            <!-- Job Listing -->
            <Link
              href="single-job-page.html"
              class="job-listing with-apply-button"
            >
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <!-- Details -->
                <span class="list-apply-button ripple-effect">عرض الكورس</span>

                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">التربية الإسلامية</h3>

                  <!-- Job Listing Footer -->
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
                        الصف العاشر
                      </li>
                      <li>
                        <i class="icon-feather-user px-1"></i> محمد ابراهيم
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <img
                    width="50"
                    height="50"
                    src="/storage/qKkzCeUcyS2KArwpDU1jEyOjX7JjguTHyZQx2wAC.png"
                    alt=""
                  />
                </div>

                <!-- Apply Button -->
              </div>
            </Link>
            <Link
              href="single-job-page.html"
              class="job-listing with-apply-button"
            >
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <!-- Details -->
                <span class="list-apply-button ripple-effect">عرض الكورس</span>

                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">التربية الإسلامية</h3>

                  <!-- Job Listing Footer -->
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
                        الصف العاشر
                      </li>
                      <li>
                        <i class="icon-feather-user px-1"></i> محمد ابراهيم
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <img
                    width="50"
                    height="50"
                    src="/storage/qKkzCeUcyS2KArwpDU1jEyOjX7JjguTHyZQx2wAC.png"
                    alt=""
                  />
                </div>

                <!-- Apply Button -->
              </div>
            </Link>
            <Link
              href="single-job-page.html"
              class="job-listing with-apply-button"
            >
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <!-- Details -->
                <span class="list-apply-button ripple-effect">عرض الكورس</span>

                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">التربية الإسلامية</h3>

                  <!-- Job Listing Footer -->
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
                        الصف العاشر
                      </li>
                      <li>
                        <i class="icon-feather-user px-1"></i> محمد ابراهيم
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <img
                    width="50"
                    height="50"
                    src="/storage/qKkzCeUcyS2KArwpDU1jEyOjX7JjguTHyZQx2wAC.png"
                    alt=""
                  />
                </div>

                <!-- Apply Button -->
              </div>
            </Link>
            <Link
              href="single-job-page.html"
              class="job-listing with-apply-button"
            >
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <!-- Details -->
                <span class="list-apply-button ripple-effect">عرض الكورس</span>

                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">التربية الإسلامية</h3>

                  <!-- Job Listing Footer -->
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
                        الصف العاشر
                      </li>
                      <li>
                        <i class="icon-feather-user px-1"></i> محمد ابراهيم
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <img
                    width="50"
                    height="50"
                    src="/storage/qKkzCeUcyS2KArwpDU1jEyOjX7JjguTHyZQx2wAC.png"
                    alt=""
                  />
                </div>

                <!-- Apply Button -->
              </div>
            </Link>
            <Link
              href="single-job-page.html"
              class="job-listing with-apply-button"
            >
              <!-- Job Listing Details -->
              <div class="job-listing-details">
                <!-- Logo -->
                <!-- Details -->
                <span class="list-apply-button ripple-effect">عرض الكورس</span>

                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">التربية الإسلامية</h3>

                  <!-- Job Listing Footer -->
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
                        الصف العاشر
                      </li>
                      <li>
                        <i class="icon-feather-user px-1"></i> محمد ابراهيم
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <img
                    width="50"
                    height="50"
                    src="/storage/qKkzCeUcyS2KArwpDU1jEyOjX7JjguTHyZQx2wAC.png"
                    alt=""
                  />
                </div>

                <!-- Apply Button -->
              </div>
            </Link>
          </div>
          <!-- Jobs Container / End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Jobs / End -->

  <!-- Features Cities -->
  <div class="section margin-top-65 margin-bottom-65">
    <div class="container">
      <div class="row">
        <!-- Section Headline -->
        <div class="col-xl-12">
          <div class="section-headline centered margin-top-0 margin-bottom-45">
            <h3>الأكثر مبيعاً</h3>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-list-layout-1.html"
            class="photo-box"
            data-background-image="/storage/erth.jpg"
          >
            <div class="photo-box-content">
              <h3>علوم ارض</h3>
              <span>376 مشترك</span>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-list-layout-full-page-map.html"
            class="photo-box"
            data-background-image="/storage/ar.jpg"
          >
            <div class="photo-box-content">
              <h3>مهارات اتصال</h3>
              <span>645 مشترك</span>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <Link
            href="/course/1/1"
            class="photo-box"
            data-background-image="/storage/math.jpg"
          >
            <div class="photo-box-content">
              <h3>رياضيات</h3>
              <span>832 مشترك</span>
            </div>
          </Link>
        </div>

        <div class="col-xl-3 col-md-6">
          <!-- Photo Box -->
          <a
            href="jobs-list-layout-2.html"
            class="photo-box"
            data-background-image="/storage/ph.jpg"
          >
            <div class="photo-box-content">
              <h3>فيزياء</h3>
              <span>513 مشترك</span>
            </div>
          </a>
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
    <slide :key="1">
      <div class="col freelancer">
        <!-- Overview -->
        <div class="freelancer-overview">
          <div class="freelancer-overview-inner">
            <!-- Bookmark Icon -->
            <span class="bookmark-icon"></span>

            <!-- Avatar -->
            <div class="freelancer-avatar">
              <div class="verified-badge"></div>
              <a href="single-freelancer-profile.html"
                ><img src="assets/images/user-avatar-big-01.jpg" alt=""
              /></a>
            </div>

            <!-- Name -->
            <div class="freelancer-name">
              <h4>
                <a href="single-freelancer-profile.html"
                  >Tom Smith
                  <img
                    class="flag"
                    src="assets/images/flags/gb.svg"
                    alt=""
                    title="United Kingdom"
                    data-tippy-placement="top"
                /></a>
              </h4>
              <span>UI/UX Designer</span>
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
              <li>
                Location
                <strong
                  ><i class="icon-material-outline-location-on"></i>
                  London</strong
                >
              </li>
              <li>Rate <strong>$60 / hr</strong></li>
              <li>Job Success <strong>95%</strong></li>
            </ul>
          </div>
          <a
            href="single-freelancer-profile.html"
            class="button button-sliding-icon ripple-effect"
            >View Profile <i class="icon-material-outline-arrow-right-alt"></i
          ></a>
        </div>
      </div>
    </slide>
    <slide :key="2">
      <div class="freelancer">
        <!-- Overview -->
        <div class="freelancer-overview">
          <div class="freelancer-overview-inner">
            <!-- Bookmark Icon -->
            <span class="bookmark-icon"></span>

            <!-- Avatar -->
            <div class="freelancer-avatar">
              <div class="verified-badge"></div>
              <a href="single-freelancer-profile.html"
                ><img src="assets/images/user-avatar-big-01.jpg" alt=""
              /></a>
            </div>

            <!-- Name -->
            <div class="freelancer-name">
              <h4>
                <a href="single-freelancer-profile.html"
                  >Tom Smith
                  <img
                    class="flag"
                    src="assets/images/flags/gb.svg"
                    alt=""
                    title="United Kingdom"
                    data-tippy-placement="top"
                /></a>
              </h4>
              <span>UI/UX Designer</span>
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
              <li>
                Location
                <strong
                  ><i class="icon-material-outline-location-on"></i>
                  London</strong
                >
              </li>
              <li>Rate <strong>$60 / hr</strong></li>
              <li>Job Success <strong>95%</strong></li>
            </ul>
          </div>
          <a
            href="single-freelancer-profile.html"
            class="button button-sliding-icon ripple-effect"
            >View Profile <i class="icon-material-outline-arrow-right-alt"></i
          ></a>
        </div>
      </div>
    </slide>
    <slide :key="3">
      <div class="freelancer">
        <!-- Overview -->
        <div class="freelancer-overview">
          <div class="freelancer-overview-inner">
            <!-- Bookmark Icon -->
            <span class="bookmark-icon"></span>

            <!-- Avatar -->
            <div class="freelancer-avatar">
              <div class="verified-badge"></div>
              <a href="single-freelancer-profile.html"
                ><img src="assets/images/user-avatar-big-01.jpg" alt=""
              /></a>
            </div>

            <!-- Name -->
            <div class="freelancer-name">
              <h4>
                <a href="single-freelancer-profile.html"
                  >Tom Smith
                  <img
                    class="flag"
                    src="assets/images/flags/gb.svg"
                    alt=""
                    title="United Kingdom"
                    data-tippy-placement="top"
                /></a>
              </h4>
              <span>UI/UX Designer</span>
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
              <li>
                Location
                <strong
                  ><i class="icon-material-outline-location-on"></i>
                  London</strong
                >
              </li>
              <li>Rate <strong>$60 / hr</strong></li>
              <li>Job Success <strong>95%</strong></li>
            </ul>
          </div>
          <a
            href="single-freelancer-profile.html"
            class="button button-sliding-icon ripple-effect"
            >View Profile <i class="icon-material-outline-arrow-right-alt"></i
          ></a>
        </div>
      </div>
    </slide>
    <slide :key="4">
      <div class="freelancer">
        <!-- Overview -->
        <div class="freelancer-overview">
          <div class="freelancer-overview-inner">
            <!-- Bookmark Icon -->
            <span class="bookmark-icon"></span>

            <!-- Avatar -->
            <div class="freelancer-avatar">
              <div class="verified-badge"></div>
              <a href="single-freelancer-profile.html"
                ><img src="assets/images/user-avatar-big-01.jpg" alt=""
              /></a>
            </div>

            <!-- Name -->
            <div class="freelancer-name">
              <h4>
                <a href="single-freelancer-profile.html"
                  >Tom Smith
                  <img
                    class="flag"
                    src="assets/images/flags/gb.svg"
                    alt=""
                    title="United Kingdom"
                    data-tippy-placement="top"
                /></a>
              </h4>
              <span>UI/UX Designer</span>
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
              <li>
                Location
                <strong
                  ><i class="icon-material-outline-location-on"></i>
                  London</strong
                >
              </li>
              <li>Rate <strong>$60 / hr</strong></li>
              <li>Job Success <strong>95%</strong></li>
            </ul>
          </div>
          <a
            href="single-freelancer-profile.html"
            class="button button-sliding-icon ripple-effect"
            >View Profile <i class="icon-material-outline-arrow-right-alt"></i
          ></a>
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
          <div class="pricing-plans-container ">
            <!-- Plan -->
            <div  class="pricing-plan arabic">
              <h3>رصيد بقيمة 50 دينار</h3>
              <p class="margin-top-10">
    تدفع لمرة واحد
    تمكنك من شراء المساقات ذات قمة 50 دنانير او اقل
              </p>
              <div class="pricing-plan-label billed-monthly-label">
                <strong>50 JOD</strong>
              </div>
              <a
                href="pages-checkout-page.html"
                class="button full-width margin-top-20"
                >شراء الآن</a
              >
            </div>

            <!-- Plan -->
            <div class="pricing-plan recommended arabic">
              <div class="recommended-badge">موصى به</div>
              <h3>رصيد بقيمة 100 دينار</h3>
              <p class="margin-top-10">
    تدفع لمرة واحد
    تمكنك من شراء المساقات ذات قمة 100 دنانير او اقل
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
              <a
                href="pages-checkout-page.html"
                class="button full-width margin-top-20"
                >شراء الآن</a
              >
            </div>

            <!-- Plan -->
            <div class="pricing-plan arabic">
              <h3>رصيد بقيمة 10 دنانير</h3>
              <p class="margin-top-10">
    تدفع لمرة واحد
    تمكنك من شراء المساقات ذات قمة 10 دنانير او اقل

              </p>
              <div class="pricing-plan-label billed-monthly-label">
                <strong>10 JOD</strong>
              </div>
              <a
                href="pages-checkout-page.html"
                class="button full-width bottom-0"
                >شراء الآن</a
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
    courses: Number,
    teachers: Number,
    subscriber: Number,
  },
  mounted() {
    // this.jq()

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
.pricing-plan{
    display: flex;
    font-weight: bold;
    flex-direction: column;
    justify-content: space-between;
    height: 500px;
    /* color: whitesmoke; */
    /* background-image: url("/assets/images/price.png"); */
}
</style>
