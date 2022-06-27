<template>
      <div class="full-page-sidebar-inner" data-simplebar>
        <div class="sidebar-container arabic">


          <!-- Tags -->
            <div
              v-for="type in types"
              :key="type.key"
            >
              <button class="button ripple-effect button-sliding-icon sidebar-button type-button"

                @click="togleType"
                >
                   {{ type.value }}
              </button>
              <div class="Type-List hidden">
              <div
                v-for="section in sections"
                :key="section.id"
              >
              <button

                class="button gray ripple-effect button-sliding-icon sidebar-button"
                @click="togleSection"
                >
                    {{ section.name }} <i class="icon-feather-arrow-left"></i>
                </button>
                <div class="sidebar-dropdown hidden">
                <div
                  v-for="course in section.document_courses"
                  :key="course.id"

                >
                <Link
                          :href="`/documents?type=${type.key}&section=${section.id}&course=${course.id}`"
                          class="button ripple-effect button-sliding-icon sidebar-button"

                      >
                      {{ course.name }} <i class="icon-feather-arrow-left"></i>
                  </Link>
                </div>
                </div>

              </div>
              <div class="margin-bottom-10"></div>

              </div>
            </div>
          <div class="clearfix"></div>

          <div class="margin-bottom-40"></div>
        </div>
        <!-- Sidebar Container / End -->
      </div>
</template>

<script setup>
</script>

<script>

export default {
  props: {
    sections: Object,
    types: Object,
  },
    methods:{
        togleSection(e){

          e.preventDefault();
            let parent =  e.target.parentElement
            let target = parent.querySelector(`.sidebar-dropdown`);
            // let rest = document.querySelectorAll(`.show`);
            // rest.forEach(element => {
            //   element.classList.remove("show");
            // });
             target.classList.toggle("show");
            this.$forceUpdate();

        },
        togleType(e){
            let parent =  e.target.parentElement
            let target = parent.querySelector(`.Type-List`);
            // let rest = parentElement.querySelectorAll(`.show`);
            // rest.forEach(element => {
            //   element.classList.remove("show");
            // });
             target.classList.toggle("show");
             this.$forceUpdate();

        }
    },
        mounted() {
              // console.log('this.sections', this.sections);
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
  padding-left: 10px !important;
  height: 100%;
  overflow: auto;
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
  .sidebar-button{
    float: unset;
    width: 90%;
    font-size: 1.5rem;
    margin: 5px 0;
    text-align: center;
  }
  .font3rem{
    font-size: 3rem;
}

</style>
