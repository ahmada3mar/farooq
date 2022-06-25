@extends('app')
<style>
    .thankyou {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column
    }

    .details {
        margin: 30px
    }

    img {
        max-height: 300px
    }

    .buttons {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 20px
    }
</style>
<div class="thankyou">
    <img src="/assets/images/thankyoy.svg" />
    <div class="details  mt-5">
        <h2>تم تسجيل المساق بنجاح </h2>
        <div class="buttons">
            <a onclick="window.top.location.reload()"  > إنهاء </a>
            <button onclick="goToCourse()" class="button full-width button-sliding-icon ripple-effect">
                عرض المساق
            </button>
        </div>
    </div>
</div>

<script>
function goToCourse(id){
    window.top.location.href = "/course/{{ $id }}"
}
</script>
