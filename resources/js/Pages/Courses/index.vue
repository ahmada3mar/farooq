<template>
  <Head>
    <title>courses</title>
    <meta name="description" content="404" head-key="description" />
    <meta name="keywords" content="404" />
  </Head>

  <div class="full-page-container">
    <div class="full-page-content-container" data-simplebar>
      <div class="full-page-content-inner">
        <div class="notify-box margin-top-15">
          <h3 class="page-title arabic">المساقات</h3>
        </div>

        <!-- Tasks Container -->
        <div class="tasks-list-container tasks-grid-layout margin-top-35">
          <div  v-for="course in courses.data" :key="course.id" class="task-listing arabic">
            <!-- Job Listing Details -->
            <div class="task-listing-details">
            <img class="col-12 col-md-4" :src="`/storage/${course.image}`" alt="">
              <!-- Details -->
              <div class="task-listing-description">
                <h3 class="task-listing-title">{{course.name}}</h3>
                                  <span>الصف {{ __(course.class) }}</span>

                <ul class="task-icons">
                  <li >
                    <i class="icon-material-outline-access-time"></i>
                     عدد الدروس : {{ course.lectures_count }}
                  </li>
                  <li class="m-0">
                    <i class="icon-feather-user"></i>
                      المدرس : {{ course.user.name }}
                  </li>
                </ul>
              </div>
            </div>

            <div class="task-listing-bid">
              <div class="task-listing-bid-inner">
                <Link
                  href="/course/3"
                  class="button button-sliding-icon ripple-effect"
                  ><i class="icon-material-outline-arrow-back"></i>سجل
                  الآن</Link
                >
                <div class="task-offers">
                  <b>{{course.price}} JOD</b>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="pagination-container margin-top-20 margin-bottom-20">
          <pagination :links="courses.links" />
        </div>
        <div class="clearfix"></div>
        <!-- Pagination / End -->

        <!-- Footer -->
        <div class="small-footer margin-top-15">
          <ul class="footer-social-links">
            <li>
              <a href="#" title="Facebook" data-tippy-placement="top">
                <i class="icon-brand-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" title="Twitter" data-tippy-placement="top">
                <i class="icon-brand-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" title="Google Plus" data-tippy-placement="top">
                <i class="icon-brand-google-plus-g"></i>
              </a>
            </li>
            <li>
              <a href="#" title="LinkedIn" data-tippy-placement="top">
                <i class="icon-brand-linkedin-in"></i>
              </a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <!-- Footer / End -->
      </div>
    </div>

    <div class="full-page-sidebar arabic">
      <div class="full-page-sidebar-inner" data-simplebar>
        <div class="sidebar-container arabic">
          <!-- Location -->
          <div class="sidebar-widget arabic">
            <h3>Location</h3>
            <div class="input-with-icon">
              <div id="autocomplete-container">
                <input
                  id="autocomplete-input"
                  type="text"
                  placeholder="Location"
                />
              </div>
              <i class="icon-material-outline-location-on"></i>
            </div>
          </div>

          <!-- Category -->
          <div class="sidebar-widget arabic">
            <h3>Category</h3>
            <select
              class="selectpicker default arabic"
              multiple
              data-selected-text-format="count"
              data-size="7"
              title="All Categories"
            >
              <option>Admin Support</option>
              <option>Customer Service</option>
              <option>Data Analytics</option>
              <option>Design & Creative</option>
              <option>Legal</option>
              <option>Software Developing</option>
              <option>IT & Networking</option>
              <option>Writing</option>
              <option>Translation</option>
              <option>Sales & Marketing</option>
            </select>
          </div>

          <!-- Keywords -->
          <div class="sidebar-widget">
            <h3>Keywords</h3>
            <div class="keywords-container">
              <div class="keyword-input-container">
                <input
                  type="text"
                  class="keyword-input"
                  placeholder="e.g. task title"
                />
                <button class="keyword-input-button ripple-effect">
                  <i class="icon-material-outline-add"></i>
                </button>
              </div>
              <div class="keywords-list"><!-- keywords go here --></div>
              <div class="clearfix"></div>
            </div>
          </div>

          <!-- Budget -->
          <div class="sidebar-widget">
            <h3>Fixed Price</h3>
            <div class="margin-top-55"></div>

            <!-- Range Slider -->
            <input
              class="range-slider"
              type="text"
              value=""
              data-slider-currency="$"
              data-slider-min="10"
              data-slider-max="2500"
              data-slider-step="25"
              data-slider-value="[50,2500]"
            />
          </div>

          <!-- Hourly Rate -->
          <div class="sidebar-widget">
            <h3>Hourly Rate</h3>
            <div class="margin-top-55"></div>

            <!-- Range Slider -->
            <input
              class="range-slider"
              type="text"
              value=""
              data-slider-currency="$"
              data-slider-min="10"
              data-slider-max="150"
              data-slider-step="5"
              data-slider-value="[10,200]"
            />
          </div>

          <!-- Tags -->
          <div class="sidebar-widget">
            <h3>Skills</h3>

            <div class="tags-container">
              <div class="tag">
                <input type="checkbox" id="tag1" />
                <label for="tag1">front-end dev</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag2" />
                <label for="tag2">angular</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag3" />
                <label for="tag3">react</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag4" />
                <label for="tag4">vue js</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag5" />
                <label for="tag5">web apps</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag6" />
                <label for="tag6">design</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag7" />
                <label for="tag7">wordpress</label>
              </div>
            </div>
            <div class="clearfix"></div>

            <!-- More Skills -->
            <div class="keywords-container margin-top-20">
              <div class="keyword-input-container">
                <input
                  type="text"
                  class="keyword-input"
                  placeholder="add more skills"
                />
                <button class="keyword-input-button ripple-effect">
                  <i class="icon-material-outline-add"></i>
                </button>
              </div>
              <div class="keywords-list"><!-- keywords go here --></div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="margin-bottom-40"></div>
        </div>
        <!-- Sidebar Container / End -->

        <!-- Search Button -->
        <div class="sidebar-search-button-container">
          <button class="button ripple-effect">Search</button>
        </div>
        <!-- Search Button / End-->
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<script>
import pagination from "../../Shared/Pagination.vue";

export default {
  props: {
    courses: Object,
  },
  components: {
    pagination,
  },
};
</script>

<style scoped>
.course-image {
  position: absolute;
  right: 5%;
  top: 30%;
  z-index: 100;
}

.vid-description {
  border-radius: 0;
}

.right-side {
  display: contents;
}

.button {
  float: left;
}
</style>
