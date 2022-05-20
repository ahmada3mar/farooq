<template>
  <Head>
    <title>Register</title>
    <meta name="description" content="Register" head-key="description" />
    <meta name="keywords" content="Register" />
  </Head>

  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-md-5 mx-2 left-image">
        <img src="/assets/images/register.jpg" />
      </div>
      <div class="col-md-5">
        <div class="login-register-page">
          <!-- Welcome Text -->
          <div class="welcome-text">
            <h3 style="font-size: 26px">إبدأ اللآن</h3>
            <span> لديك حساب؟ <a href="login"> سجل دخول </a></span>
          </div>

          <!-- Account Type -->
          <div v-if="Object.keys(errors).length" class="alert alert-danger">
            <ul>
              <li :key="value" v-for="(error, value) in errors">
                {{ error }}
              </li>
            </ul>
          </div>
          <div class="account-type">
            <div>
              <input
                type="radio"
                name="account-type-radio"
                id="freelancer-radio"
                class="account-type-radio"
                disabled
              />
              <label for="freelancer-radio" class="ripple-effect-dark">
                معلومات الحساب
                <i class="icon-material-outline-account-circle"></i>
              </label>
            </div>
          </div>

          <!-- Form -->
          <form @submit.prevent="submit">
            <div class="input-with-icon-left">
              <i class="icon-material-outline-account-circle"></i>
              <input
                type="text"
                class="input-text with-border"
                v-model="form.name"
                placeholder="الأسم الكامل"
                required
              />
            </div>
            <div class="input-with-icon-left">
              <i class="icon-material-baseline-mail-outline"></i>
              <input
                type="text"
                class="input-text with-border"
                v-model="form.email"
                name="emailaddress"
                id="emailaddress"
                placeholder="البريد الإلكتروني"
                required
              />
            </div>
            <div
              class="input-with-icon-left"
              title="Should be at least 8 characters long"
              data-tippy-placement="bottom"
            >
              <i class="icon-material-outline-lock"></i>
              <input
                type="password"
                class="input-text with-border"
                v-model="form.password"
                name="password"
                id="password"
                placeholder="كلمة المرور"
                required
              />
            </div>
            <div class="input-with-icon-left">
              <i class="icon-material-outline-lock"></i>
              <input
                type="password"
                class="input-text with-border"
                v-model="form.password_confirmation"
                name="password-repeat-register"
                id="password-repeat-register"
                placeholder=" تأكيد كلمة المرور"
                required
              />
            </div>
            <button
              class="
                button
                full-width
                button-sliding-icon
                ripple-effect
                margin-top-10
              "
              type="submit"
            >
              سجل <i class="icon-material-outline-arrow-right-alt"></i>
            </button>
          </form>

          <!-- Button -->

          <!-- Social Login -->
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
      form: reactive({}),
    };
  },
  methods: {
    submit() {
      Inertia.post("register", this.form);
    },
  },
};
</script>

<style scoped>
ul {
  padding: 0;
  padding-right: 20;
}
li {
  text-align: right;
}
</style>
