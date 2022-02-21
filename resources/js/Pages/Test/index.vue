<template>
  <!-- Intro Banner
================================================== -->
  <!-- add class "disable-gradient" to enable consistent background overlay -->


  <!-- Content
================================================== -->
  <!-- Category Boxes -->
  <div class="section margin-top-65">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <iframe width="560" height="315" :src="`https://www.youtube.com/embed/${video}`" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Category Boxes / End -->


  <!-- Membership Plans / End-->
</template>


<script>
export default {
  props: {
    video: String,

  },

};
</script>
