<template>

   <div id="footer">
      <!-- Footer Top Section -->
      <div class="footer-top-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <!-- Footer Rows Container -->
              <div class="footer-rows-container">

              </div>
              <!-- Footer Rows Container / End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Top Section / End -->

      <!-- Footer Middle Section -->
      <div class="footer-middle-section">
        <div class="container">
          <div class="row flexCenterTop">
              <template v-if="$page.props.web_config.length > 0">
            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                    <ul class="">
                      <li v-if="web_facebook">
                        <a
                          :href="web_facebook"
                          title="Facebook"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-facebook-f"> Facebook</i>
                        </a>
                      </li>
                      <li v-if="web_twitter">
                        <a
                          :href="web_twitter"
                          title="Twitter"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-twitter"> Twitter</i>
                        </a>
                      </li>
                      <li v-if="web_instagram">
                        <a
                          :href="web_instagram"
                          title="Instagram"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-feather-instagram"> Instagram</i>
                        </a>
                      </li>
                      <li v-if="web_linkedin">
                        <a
                          :href="web_linkedin"
                          title="LinkedIn"
                          data-tippy-placement="bottom"
                          data-tippy-theme="light"
                        >
                          <i class="icon-brand-linkedin-in"> Linkedin</i>
                        </a>
                      </li>
                    </ul>
              </div>
            </div>
            </template>
            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                <ul>
                <template  v-if="auth">
                  <li>
                    <Link class="arabicCenter" href="/">الصفحة الرئيسية</Link>
                  </li>
                  <li>
                    <Link class="arabicCenter" :href="`/profile/${auth.id}`">الصفحة الشخصية</Link>
                  </li>
                </template>
                <template  v-else>
                  <li>
                    <Link class="arabicCenter" href="/">الصفحة الرئيسية</Link>
                  </li>
                  <li>
                    <Link class="arabicCenter" href="/Register">تسجيل</Link>
                  </li>
                  <li>
                    <Link class="arabicCenter" href="/login">تسجيل الدخول </Link>
                  </li>
                </template>
                  <li>
                    <Link class="arabicCenter" href="/contact">من نحن</Link>
                  </li>
                  <li>
                    <Link class="arabicCenter" href="/">المعلمين</Link>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Links -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="footer-links">
                  <a href="/"
                    ><img
                      class=""
                      src="/assets/images/logo.png"
                      alt=""
                    />
                  </a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Footer Middle Section / End -->

      <!-- Footer Copyrights -->
      <div class="footer-bottom-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 all-right-footer" >
                جميع الحقوق محفوظة. © <strong>الفاروق</strong> {{new Date().getFullYear()}}
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Copyrights / End -->
    </div>
</template>

<script>
export default {
 name: 'Footer',

    computed: {
    auth() {
      return this.$page.props.auth
    },
  },
      data() {
        let conf = this.$page.props.web_config

        if(conf.length > 0){
            return {
                web_facebook: conf.find((s) => s.key == "web_facebook")?.value || "",
                web_twitter: conf.find((s) => s.key == "web_twitter")?.value || "",
                web_linkedin: conf.find((s) => s.key == "web_linkedin")?.value || "",
                web_instagram: conf.find((s) => s.key == "web_instagram")?.value || "",
            }
        }
        return new Object
    },

}
</script>
