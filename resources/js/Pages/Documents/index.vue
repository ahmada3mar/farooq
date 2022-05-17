<template>
  <Head>
    <title>courses</title>
    <meta name="description" content="404" head-key="description" />
    <meta name="keywords" content="404" />
  </Head>

  <div class="full-page-container">
    <div class="full-page-content-container" data-simplebar>
      <div class="full-page-content-inner">

    <!-- documents -->
  <div class="section gray margin-top-45 margin-bottom-65 padding-top-65 padding-bottom-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <!-- Section Headline -->
          <div class="section-headline margin-top-0 margin-bottom-35">
            <h3 class="arabic">أسئلة سنوات</h3>
          </div>

          <!-- Jobs Container -->
          <div class="listings-container compact-list-layout margin-top-35">
            <Link
              v-for="document in docs"
              :key="document.id"
              :href="`/document/download/${document.id}`"
              class="job-listing with-apply-button"
            >
              <div class="job-listing-details">
                <span class="list-apply-button ripple-effect" >تنزيل</span>
                <div class="job-listing-description arabic">
                  <h3 class="job-listing-title">{{ document.name }}</h3>
                  <div class="job-listing-footer">
                    <ul>
                      <li>
                        {{ document.downloads }}
                        تنزيل
                      </li>
                      <li>
                        <i class="icon-feather-book-open"></i>
                        المادة {{ __(document.course.name) }}

                      </li>
                      <li>
                        <i class="icon-material-outline-school"></i>
                        الصف {{ __(document.class) }}
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <i class="icon-material-outline-attach-file font3rem"></i>
                </div>
              </div>
            </Link>
          </div>
        </div>
      </div>
    </div>
  </div>


        <!-- Pagination -->
        <!-- <div class="clearfix"></div>
        <div class="pagination-container margin-top-20 margin-bottom-20">
          <pagination :links="docs.links" />
        </div>
        <div class="clearfix"></div> -->
        <!-- Pagination / End -->

      </div>
    </div>

    <div class="full-page-sidebar arabic">
      <div class="full-page-sidebar-inner" data-simplebar>
        <div class="sidebar-container arabic">


          <!-- Tags -->
            <h3>الصفوف</h3>
             	<Link href="/courses" class="button gray ripple-effect button-sliding-icon sidebar-button">  الكل <i class="icon-feather-arrow-left"></i></Link>
             	<Link href="/courses?class=12" class="button gray ripple-effect button-sliding-icon sidebar-button ">  الثاني ثانوي <i class="icon-feather-arrow-left"></i></Link>
             	<Link href="/courses?category=highschool" class="button gray ripple-effect button-sliding-icon sidebar-button">  الصفوف الثانوية <i class="icon-feather-arrow-left"></i></Link>
             	<Link href="/courses?category=secondary" class="button gray ripple-effect button-sliding-icon sidebar-button">  الصفوف الأعدادية <i class="icon-feather-arrow-left"></i></Link>
             	<Link href="courses?category=primary" class="button gray ripple-effect button-sliding-icon sidebar-button">  الصفوف الأساسية <i class="icon-feather-arrow-left"></i></Link>
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
    docs: Object,

  },
  components: {
    pagination,
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
    text-align: right;
  }
  .font3rem{
    font-size: 3rem;
}
</style>
