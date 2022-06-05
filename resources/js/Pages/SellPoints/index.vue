<template>
  <Head>
    <title>اماكن البيع</title>
    <meta name="description" content="404" head-key="description" />
    <meta name="keywords" content="404" />
  </Head>

  <div class="full-page-container">
    <div class="full-page-content-container" data-simplebar>
      <div class="full-page-content-inner">
        <div class="notify-box margin-top-15">
          <h3 class="page-title arabic">اماكن البيع</h3>
        </div>

        <!-- Tasks Container -->
        <div class="tasks-list-container tasks-grid-layout margin-top-35">
          <div  v-for="SellPoint in sellPoints" :key="SellPoint.id" class="task-listing arabic">
            <!-- Job Listing Details -->
            <div class="task-listing-details">
              <div class="course-image">
              <template v-if="SellPoint.image">

            <img class="col-12 col-md-4" :src="`/storage/${SellPoint.image}`" alt="">
                  </template>
              </div>
              <!-- Details -->
              <div class="task-listing-description">
                <h3 class="task-listing-title">{{SellPoint.name}}</h3>
                <ul class="task-icons">
                  <template v-if="SellPoint.Address">

                  <li class="m-0 padding-left-5">
                    <i class="icon-material-outline-location-on"></i>
                      {{ SellPoint.Address }}
                  </li>
                  </template>
                  <template v-if="SellPoint.city">

                  <li class="m-0 padding-left-5">
                    <i class="icon-material-outline-home"></i>
                      {{SellPoint.city}}
                  </li>
                  </template>
                  <template v-if="SellPoint.mobile">

                  <li class="m-0 padding-left-5">
                    <i class="icon-feather-phone"></i>
                      {{SellPoint.mobile}}
                  </li>
                  </template>
                </ul>
              </div>
            </div>

                  <template v-if="SellPoint.url">

            <div class="task-listing-bid">
              <div class="task-listing-bid-inner">
                <Link
                  :href="`${ SellPoint.url }`"
                  class="button button-sliding-icon ripple-effect"
                  ><i class="icon-material-outline-arrow-back"></i>الموقع
                  </Link
                >
                <!-- <div class="task-offers">
                  <b>{{course.price}} JOD</b>
                </div> -->
              </div>
            </div>
                  </template>
          </div>
        </div>

        <!-- Pagination -->
        <!-- <div class="clearfix"></div>
        <div class="pagination-container margin-top-20 margin-bottom-20">
          <pagination :links="courses.links" />
        </div>
        <div class="clearfix"></div> -->
        <!-- Pagination / End -->

      </div>
    </div>

    <div class="full-page-sidebar arabic">
      <div class="full-page-sidebar-inner" data-simplebar>
        <div class="sidebar-container arabic">


          <!-- Tags -->
             	<Link href="/Selling-Points" class="button gray ripple-effect button-sliding-icon sidebar-button">  الكل <i class="icon-feather-arrow-left"></i></Link>
             	<Link v-for="city in Object.keys(cities)" :key="city" :href="`/Selling-Points?city=${city}`" class="button gray ripple-effect button-sliding-icon sidebar-button">  {{__(city)}} <i class="icon-feather-arrow-left"></i></Link>
          <div class="clearfix"></div>

          <div class="margin-bottom-40"></div>
        </div>
        <!-- Sidebar Container / End -->
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
    sellPoints: Object,
    cities: Object,
  },
  components: {
    pagination,
  },
  mounted() {
    console.log('this.sellPoints', this.sellPoints);
    console.log('this.cities', this.cities);
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
</style>
