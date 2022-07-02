<template>
  <Head>
    <title> استعادة الحساب</title>
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
            <h3> استعادة كلمة المرور </h3>
            <span> بدل من ذلك  <a href="login">قم بتسجيل الدخول</a></span>
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
                placeholder="كلمة السر الجديدة"
                required
              />
            </div>

            <div class="input-with-icon-left">
              <i class="icon-material-outline-lock"></i>
              <input
                v-model="form.password_confirmation"
                type="password"
                class="input-text with-border"
                name="password_confirmation"
                id="password"
                placeholder="تاكيد كلمة السر"
                required
              />
            </div>
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
             ارسال <i class="icon-material-outline-arrow-right-alt"></i>
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
    token: String,
    email:String
  },

  data() {
    return {
      form: reactive({
        email: this.email || "",
        password: "",
        password_confirmation: "",
        token: this.token,
      }),
    };
  },
  methods: {
    submit() {
      Inertia.post("/reset-password", this.form);
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
