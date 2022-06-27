<template>
  <Head>
    <title>الملفات</title>
    <meta name="description" content="الملفات" head-key="description" />
    <meta name="keywords" content="الملفات" />
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
            <h3 class="arabic">الملفات</h3>
          </div>

          <!-- Jobs Container -->
          <div class="listings-container compact-list-layout margin-top-35">
            <a
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
                        المادة {{ __(document.document_course.name) }}

                      </li>
                      <li>
                        <i class="icon-material-outline-school"></i>
                         {{ __(document.section.name) }}
                      </li>
                      <li>
                        <i class="icon-line-awesome-file-text"></i>
                         {{ __(`Type${document.Type}`) }}
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="job-listing-company-logo">
                  <i class="icon-material-outline-attach-file font3rem"></i>
                </div>
              </div>
            </a>
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
      <Sidebar :sections="sections" :types="types" />
    </div>
  </div>
</template>

<script setup>
</script>

<script>
import pagination from "../../Shared/Pagination.vue";
import Sidebar from "./SideBar.vue";


export default {
  props: {
    docs: Object,
    sections: Object,
    types: Object,

  },
  components: {
    pagination,
    Sidebar,
  },
    methods:{

    },
        mounted() {
              console.log('this.docs', this.docs);
              console.log('this.docType', this.docType);
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
.full-page-container{
  height: 70% ;
}
.full-page-content-inner{
      overflow: auto;
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
</style>
