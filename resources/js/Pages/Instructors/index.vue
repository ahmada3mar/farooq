<template>
  <Head>
    <title>المدرسين</title>
    <meta name="description" content="المدرسين" head-key="description" />
    <meta name="keywords" content="المدرسين" />
  </Head>

  <div class="full-page-container">
    <div class="full-page-content-container" data-simplebar>
      <div class="full-page-content-inner">
        <div class="notify-box margin-top-15">
          <h3 class="page-title arabic">المدرسين</h3>
        </div>

        <!-- Tasks Container -->
        <div class="tasks-list-container tasks-grid-layout margin-top-35">
          <div  v-for="Instructor in Instructors" :key="Instructor.id" class="task-listing arabic">
            <a :href="`/profile/${Instructor.id}`">
            <!-- Job Listing Details -->
            <div class="task-listing-details">
              <div class="course-image">
              <template v-if="Instructor.avatar">

            <img class="col-12 col-md-4" :src="`/storage/${Instructor.avatar}`" alt="">
                  </template>
              </div>
              <!-- Details -->
              <div class="task-listing-description">
                <h3 class="task-listing-title">{{Instructor.name}}  </h3><span>{{Instructor.title}} </span>
                <ul class="task-icons arabic">
                  <template v-if="Instructor.	title">

                  <!-- <li class="m-0 padding-left-5 arabic">
                    <i class="icon-material-outline-location-on"></i>
                      {{ Instructor.Address }}
                  </li>
                  </template>
                  <template v-if="Instructor.city">

                  <li class="m-0 padding-left-5 arabic">
                    <i class="icon-material-outline-home"></i>
                      {{Instructor.city}}
                  </li>
                  </template>
                  <template v-if="Instructor.mobile">

                  <li class="m-0 padding-left-5 arabic">
                    <i class="icon-feather-phone"></i>
                      {{Instructor.mobile}}
                  </li> -->
                  </template>
                </ul>
              </div>
            </div>

            <div class="task-listing-bid">
              <div class="task-listing-bid-inner">
                <Link
                  :href="`/profile/${Instructor.id}`"
                  class="button button-sliding-icon ripple-effect"
                  ><i class="icon-material-outline-arrow-back"></i>الصفحة الشخصية</Link>
                <!-- <div class="task-offers">
                  <b>{{course.price}} JOD</b>
                </div> -->
              </div>
            </div>
            </a>
          </div>

        </div>

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
    Instructors: Object,
  },
  components: {
    pagination,
  },
  mounted() {
    // console.log('this.Instructors', this.Instructors);
  },
};
</script>

<style scoped>

.vid-description {
  border-radius: 0;
}

.right-side {
  display: contents;
}

.button {
  float: left;
}
.sidebar-container a.headline-link {
      position: unset;
    left: unset;
    bottom: unset;
}

a.headline-link::after {
    content: "\27F5";
    font-family: "Material-Icons";
    font-size: 21px;
    line-height: 0;
    position: relative;
    top: 0px;
    margin-right: 5px;
}
a.headline-link::before {
    content: unset;
    font-family: unset;
}
.sidebar-container{
  display:flex;
  flex-direction:column;
  direction: rtl;
}
  .sidebar-button{
    float: unset;
    width: 90%;
    font-size: 1.5rem;
    margin: 5px 0;
    text-align: center;
  }
  .full-page-container{
  min-height: 70% ;
}
.task-listing:hover {
	box-shadow: 0 0px 25px rgba(0,0,0,0.3);
	transform: translateY(-4px);
}
.task-listing-bid .button{
    width: 100% !important;
}
</style>
