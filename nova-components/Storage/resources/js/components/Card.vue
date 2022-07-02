<template>
  <div class="card relative px-6 py-4 card-panel">
    <div class="flex mb-4">
      <h3 class="mr-3 text-base text-80 font-bold">Storage</h3>
    </div>
    <div>
      <div :style="bar" class="bar"></div>
      <p class="flex items-center text-80 font-bold mt-2">{{ Math.round(free /1024/1024/1024 * 100)/100 }} Free / {{ Math.round(total /1024/1024/1024 *100)/100 }}  GB</p>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "card",

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],

  computed: {
    bar() {
      return {
        "--width_space" : 100 - ((this.free / this.total) * 100 ) + "%",
        "--storage_color" : (this.free  >  this.total/4) ? "green" : "red"
      };
    },
  },
  data() {
    return {
      total: this.card?.total_disk || 1,
      free: this.card?.free_disk || 0,
    };
  },
};
</script>

<style >
.bar {
  height: 15px;
  background: gainsboro;
  border-radius: 10px;
  position: relative;
}

.bar::after {
  content: "";
  height: 15px;
  position: absolute;
  top: 0;
  left: 0;
  width: var(--width_space);
  background: var(--storage_color);
  border-radius: 10px;
}
</style>
