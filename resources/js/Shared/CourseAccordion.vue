<template>
  <div class="accordion js-accordion w-auto margin-bottom-30 vid-description">
    <div class="accordion__item js-accordion-item">
      <div @click="togle" class="accordion-header js-accordion-header">
        {{ lectur?.name }}
      </div>
      <div class="accordion-body js-accordion-body px-4">
        <div class="p-4" v-html="lectur.description"></div>
      </div>
    </div>
    <template v-if="lectur.attachment?.length > 0">
      <div class="accordion__item js-accordion-item">
        <div @click="togle" class="accordion-header js-accordion-header">المرفقات</div>
        <div class="accordion-body js-accordion-body px-4">
          <div class="attachments-container px-2 py-3 arabic right">
            <a
              :key="attachment.id"
              v-for="attachment in lectur.attachment"
              :href="`/download/${attachment.attachment}/${
                attachment.name
              }/${attachment.attachment.split('.').pop()}`"
              class="attachment-box ripple-effect"
              ><span>{{ attachment.name }}</span
              ><i>{{ attachment.attachment.split(".").pop() }}</i></a
            >
          </div>
        </div>
      </div>
    </template>
  </div>
</template>

<script>
export default {
  name: "CourseAccordion",
  props: {
    lectur: Object,
  },
  methods: {
    togle(e) {
      let parent = e.target.parentElement;
      let target = parent.querySelector(".accordion-body");
      let style = target.style.display;
      target.style.display = style == "block" ? "none" : "block";
    },
  },
};
</script>

<style scoped>

.vid-description {
  border-radius: 0;
}

.right {
  direction: rtl;
}
</style>
