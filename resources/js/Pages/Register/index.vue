<template>
  <Head>
    <title>سجل</title>
    <meta name="description" content="Register" head-key="description" />
    <meta name="keywords" content="Register" />
  </Head>

  <div class="container-xl py-5 my-5">
    <div class="row">
      <div class="col-md-4 mx-2 left-image">
        <img src="/assets/images/register.jpg" />
      </div>
      <div class="col-md-7 register">
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
          <form @submit.prevent="submit" >
            <div class="container-xl ">
                <div class="row arabicRow">

            <div class="input-with-icon-left col-6">
              <i class="icon-material-outline-account-circle"></i>
              <input
                type="text"
                class="input-text with-border "
                v-model="form.name"
                id="FullName"

                placeholder="الأسم الرباعي"
                required
              />
            </div>
            <div class="input-with-icon-left col-6">
              <i class="icon-material-baseline-mail-outline"></i>
              <input
                type="text"
                class="input-text with-border  "
                v-model="form.email"
                name="emailaddress"
                id="emailaddress"
                placeholder="البريد الإلكتروني"
                required
              />
            </div>
            <div class="input-with-icon-left col-6">
              <i class="icon-material-baseline-mail-outline"></i>
              <input
                type="text"
                class="input-text with-border "
                v-model="form.mobile"
                name="mobile"
                id="mobile"
                placeholder="رقم الهاتف"
                required
              />
            </div>
            <div class="input-with-icon-left  col-6">
            <select class="custom-select arabic  "  v-model="sectionSelected" name="title" id="title" required>
                <option disabled sectionSelected hidden value=""  >التخصص</option>
				<option @click="SelectSection" v-for="section in sections" :key="section.id" :value="section.id" class="select-option">{{section.name}}</option>
			</select>
              <i class="icon-material-baseline-mail-outline"></i>

            </div>
            <div class="input-with-icon-left  col-6">
            <select class="custom-select arabic  "  v-model="citySelected" name="city" id="city" required>
                <option disabled citySelected hidden value=""  >المدينة</option>
                <option @click="SelectCity" class="select-option" value="إربد"  >إربد</option>
                <option @click="SelectCity" class="select-option" value="المفرق"  >المفرق</option>
                <option @click="SelectCity" class="select-option" value="عجلون"  >عجلون</option>
                <option @click="SelectCity" class="select-option" value="جرش"  >جرش</option>
                <option @click="SelectCity" class="select-option" value="عمان"  >عمان</option>
                <option @click="SelectCity" class="select-option" value="الزرقاء"  >الزرقاء</option>
                <option @click="SelectCity" class="select-option" value="السلط"  >السلط</option>
                <option @click="SelectCity" class="select-option" value="مأدبا"  >مأدبا</option>
                <option @click="SelectCity" class="select-option" value="الطفيلة"  >الطفيلة</option>
                <option @click="SelectCity" class="select-option" value="الكرك"  >الكرك</option>
                <option @click="SelectCity" class="select-option" value="معان"  >معان</option>
                <option @click="SelectCity" class="select-option" value="العقبة"  >العقبة</option>

			</select>
              <i class="icon-material-baseline-mail-outline"></i>

            </div>
            <div class="input-with-icon-left col-6">
              <i class="icon-material-baseline-mail-outline"></i>
              <input
                type="text"
                class="input-text with-border "
                v-model="form.area"
                name="area"
                id="area"
                placeholder="المنطقة"
                required
              />
            </div>
            <div class="input-with-icon-left col-6"
              title="Should be at least 8 characters long"
              data-tippy-placement="bottom"
            >
              <i class="icon-material-outline-lock"></i>
              <input
                type="password"
                class="input-text with-border "
                v-model="form.password"
                name="password"
                id="password"
                placeholder="كلمة المرور"
                required
              />
            </div>
            <div class="input-with-icon-left col-6">
              <i class="icon-material-outline-lock"></i>
              <input
                type="password"
                class="input-text with-border "
                v-model="form.password_confirmation"
                name="password-repeat-register"
                id="password-repeat-register"
                placeholder=" تأكيد كلمة المرور"
                required
              />
            </div>
                </div>

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

let sectionSelected, citySelected;

export default {
  props: {
    errors: Object,
    sections: Object,
  },

  data() {
    return {
      form: reactive({}),
      citySelected: "",
      sectionSelected: "",
    };
  },
  methods: {
    submit() {
        this.form.title = this.sectionSelected;
        this.form.city = this.citySelected;
      Inertia.post("register", this.form);
    },
    SelectCity() {
        this.citySelected = this.value;
    },
    SelectSection() {
        this.sectionSelected = this.value;
    }
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
.arabicRow{
    flex-direction: row-reverse;
}


</style>
