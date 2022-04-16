<template>
  <nav class="pagination">
    <ul>
      <li class="pagination-arrow">
        <a href="#" class="ripple-effect"
          ><i class="icon-material-outline-keyboard-arrow-left"></i
        ></a>
      </li>

      <li>
        <Link
          v-for="(link, p) in customLinks"
          :key="p"
          :href="link?.url || '#'"
          :class="
            'ripple-effect mx-2 ' + (link?.active == true ? 'current-page' : '')"
        >
          {{ link.label }}
        </Link>
      </li>
      <li class="pagination-arrow">
        <a href="#" class="ripple-effect"
          ><i class="icon-material-outline-keyboard-arrow-right"></i
        ></a>
      </li>
    </ul>
  </nav>
</template>
<script>
export default {
  props: {
    links: Array,
  },
  computed: {
    customLinks() {
      this.links.pop();
      this.links.shift();
      return this.links;
    },
  },
};
</script>
