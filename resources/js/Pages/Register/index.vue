<template>
  <Head>
    <title>course</title>
    <meta name="description" content="Register" head-key="description" />
    <meta name="keywords" content="Register" />
  </Head>

  <div class="container  py-5 my-5">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">إبدأ اللآن</h3>
					<span> لديك حساب؟<a href="login">سجل دخول</a></span>
				</div>

				<!-- Account Type -->
				<div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> طالب</label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> مدرس</label>
					</div>
				</div>
					
				<!-- Form -->
				<form method="post" id="register-account-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="ايميل" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="كلمة المرور" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder=" تأكيد كلمة المرور" required/>
					</div>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">سجل <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> سجل من خلال فيسبوك</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> سجل من خلال جووجل</button>
				</div>
			</div>

		</div>
	</div>
</div>


</template>

<script setup>
import {Inertia} from '@inertiajs/inertia'
import {reactive} from 'vue';

const form = reactive({
    email:'',
    password:''
})
   const submit = ()=>{
        Inertia.post('login' , form)
    }

</script>
