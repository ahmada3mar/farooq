         <template>
  <div class="accordion js-accordion margin-bottom-30">
    <div class="accordion__item js-accordion-item ">
      <div @click="togle" class="accordion-header js-accordion-header">الوصف</div>
      <div class="accordion-body js-accordion-body ">
        <div class="accordion-body__description">
          {{ course.description }}
        </div>
      </div>
    </div>

    <div
      class="accordion__item js-accordion-item"
      :key="unit.id"
      v-for="unit in course.units || []"
    >
      <div @click="togle" class="accordion-header js-accordion-header">
        {{ unit?.name }}
      </div>

      <!-- Accordtion Body -->
      <div class="accordion-body js-accordion-body ">
        <!-- Accordion Content -->
        <div
          :key="lectur.id"
          v-for="lectur in unit.lectures"
          @click="changeVid(lectur)"
          class="accordion-body__contents link"
        >
          {{ lectur?.name }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
    name:'Accordion',
    props:{
        course:Object,
        changeVid:Function
    },
    data(){
        return {
            open:false
        }
    },
    methods:{
        togle(e){

            let parent =  e.target.parentElement
            let target = parent.querySelector('.accordion-body')

            // parent.parentElement.querySelectorAll('.accordion-body')

            // .forEach(el=>{
            //     if(el != target){
            //         el.style.display = 'none'
            //     }
            //     }) ;

            let style = target.style.display ;
            target.style.display = (style == 'block' ? 'none' : 'block');

        }
    }
}
</script>
