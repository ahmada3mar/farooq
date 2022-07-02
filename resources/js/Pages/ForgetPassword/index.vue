<template>
  <Head>
    <title> استعادة الحساب</title>
    <meta name="description" content="login" head-key="description" />
    <meta name="keywords" content="login" />
  </Head>

  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-md-5 mx-2 left-image">
        <img src="/assets/images/fail.svg" />
      </div>

      <div class="col-md-5">
        <div class="login-register-page">
          <!-- Welcome Text -->
          <div class="welcome-text">
            <h3> استعادة كلمة المرور </h3>
            <span> بدل من ذلك  <Link href="login">قم بتسجيل الدخول</Link></span>
          </div>

          <!-- Form -->
          <form @submit.prevent="submit" method="post" id="login-form">
            <span v-if="errors.email" class="error-msg">{{
              errors.email
            }}</span>

            <span v-if="errors.status" style="color:green">{{
              errors.status
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
  },

  updated(){
console.log(this.status)
  },

  data() {
    return {
      form: reactive({
        email: "",
      }),
    };
  },
  methods: {
    submit() {
      Inertia.post("/forgot-password", this.form);
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
