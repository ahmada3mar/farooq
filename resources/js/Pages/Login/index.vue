<template>
  <Head>
    <title>تسجيل الدخول</title>
    <meta name="description" content="login" head-key="description" />
    <meta name="keywords" content="login" />
  </Head>

  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-md-5 mx-2 left-image">
        <img src="/assets/images/login.jpg" />
      </div>

      <div class="col-md-5">
        <div class="login-register-page">
          <!-- Welcome Text -->
          <div class="welcome-text">
            <h3>مرحبا بك مجددا</h3>
            <span>ليس لديك حساب ؟ <a href="Register">قم بالتسجيل</a></span>
          </div>

          <!-- Form -->
          <form @submit.prevent="submit" method="post" id="login-form">
            <span v-if="errors.email" class="error-msg">{{
              errors.email
            }}</span>

            <div class="input-with-icon-left">
              <i class="icon-material-baseline-mail-outline"></i>
              <input
                v-model="form.email"
                type="text"
                class="input-text with-border"
                name="emailaddress"
                id="emailaddress"
                placeholder="البريد الإلكتروني"
                required
              />
            </div>

            <span v-if="errors.password" class="error-msg">{{
              errors.password
            }}</span>

            <div class="input-with-icon-left">
              <i class="icon-material-outline-lock"></i>
              <input
                v-model="form.password"
                type="password"
                class="input-text with-border"
                name="password"
                id="password"
                placeholder="كلمة السر"
                required
              />
            </div>
            <a href="#" class="forgot-password">هل نسيت كلمة السر ؟</a>
          </form>

          <!-- Button -->
          <button
            class="
              button
              full-width
              button-sliding-icon
              ripple-effect
              margin-top-10
            "
            type="submit"
            form="login-form"
          >
            تسجيل الدخول <i class="icon-material-outline-arrow-right-alt"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script >
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

export default {
  props: {
    errors: Object,
  },

  data() {
    return {
      form: reactive({
        email: "",
        password: "",
      }),
    };
  },
  methods: {
    submit() {
      Inertia.post("login", this.form);
    },
  },
};

// const form = reactive({
//   email: "",
//   password: "",
// });

// const submit = () => {
// };
</script>
