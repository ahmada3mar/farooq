<template>
  <Head>
    <title>courses</title>
    <meta name="description" content="courses" head-key="description" />
    <meta name="keywords" content="courses" />
  </Head>

  <div class="full-page-container">
    <div class="full-page-content-container" data-simplebar>
      <div class="full-page-content-inner">
        <div class="notify-box margin-top-15">
          <h3 class="page-title arabic">المساقات</h3>
        </div>

        <!-- Tasks Container -->
        <div class="tasks-list-container tasks-grid-layout margin-top-35">
          <Link :href="`/course/${ course.id }`" v-for="course in courses.data" :key="course.id" class="task-listing arabic">
            <!-- Job Listing Details -->
            <div class="task-listing-details">
              <div class="course-image">
            <img class="col-12 col-md-4" :src="`/storage/${course.image}`" alt="">
              </div>
              <!-- Details -->
              <div class="task-listing-description">
                <h3 class="task-listing-title">{{course.name}}</h3>
                <ul class="task-icons">
                  <li class="m-0 padding-left-5">
                    <i class="icon-material-outline-access-time"></i>
                     عدد الدروس : {{ course.lectures_count }}
                  </li>
                  <li class="m-0 padding-left-5">
                    <i class="icon-feather-user"></i>
                      المدرس : {{course.user.name}}
                  </li>
                </ul>
              </div>
            </div>

            <div class="task-listing-bid">
              <div class="task-listing-bid-inner">
                <Link
                  :href="`/${registerd_courses_ids.includes(course.id)?'course':'purchase'}/${ course.id }`"
                  class="button button-sliding-icon ripple-effect"
                  ><i class="icon-material-outline-arrow-back"></i>{{ registerd_courses_ids.includes(course.id) ? 'عرض' : " سجل الآن " }}</Link
                >
              </div>
            </div>
          </Link>
        </div>

        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="pagination-container margin-top-20 margin-bottom-20">
          <pagination :links="courses.links" />
        </div>
        <div class="clearfix"></div>
        <!-- Pagination / End -->

      </div>
    </div>

    <div class="full-page-sidebar arabic">
      <div class="full-page-sidebar-inner" data-simplebar>
        <div class="sidebar-container arabic">


          <!-- Tags -->
             	<Link href="/courses" class="button gray ripple-effect button-sliding-icon sidebar-button">  الكل <i class="icon-feather-arrow-left"></i></Link>
             	<Link v-for="section in sections" :key="section?.id" :href="`/courses?section=${section?.id}`" class="button gray ripple-effect button-sliding-icon sidebar-button">  {{section.name}} <i class="icon-feather-arrow-left"></i></Link>
          <div class="clearfix"></div>

          <div class="margin-bottom-40"></div>
        </div>
        <!-- Sidebar Container / End -->
      </div>
    </div>
  </div>
</template>


<script>
import pagination from "../../Shared/Pagination.vue";

export default {
  props: {
    courses: Object,
    auth: Object,
    sections: Array,
    isCoursesPage : Boolean,
  },
  components: {
    pagination,
  },
  data(){
    return{
        registerd_courses_ids : this.auth ? this.auth.registerd_courses.map(i=>i.id) : []
    }
  },
  mounted() {
    // console.log("co" ,this.courses)
  }
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
</style>
