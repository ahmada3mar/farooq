<template>
  <modal @modal-close="handleClose">
    <form
      @submit.prevent="handleConfirm"
      slot-scope="props"
      class="bg-white rounded-lg shadow-lg overflow-hidden p-5 mt-8"
      style="width: 500px; padding: 25px; position: relative; top: 70%"
    >
      <div v-if="!isLoading">
        <h3 class="m-1">Creating Cards</h3>

        <p class="m-1">Please wait ..</p>
        <div class="spinner">
          <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
          </div>
        </div>
      </div>
      <div v-else>
        <h3 class="m-1">{{ num }} Cards was Created</h3>

        <p class="m-1">You can download it as Excel sheet</p>
        <div class="flex items-center justify-end mt-8">
          <a
            class="m-1"
            :href="url"
            :download="`cards-${new Date().toISOString().slice(0, 10)}.xlsx`"
          >
            <div
              @click="download"
              type="submit"
              class="
                btn btn-default btn-primary
                inline-flex
                items-center
                relative
                mt-5
              "
              dusk="create-button"
            >
              Download
              <icon
                class="ml-2"
                type="download"
                view-box="0 0 24 24"
                width="16"
                height="16"
              />
            </div>
          </a>
        </div>
      </div>
    </form>
  </modal>
</template>

<script>
export default {
  name: "GeneralModal",
  props: ["isLoading", "url", "num"],
  methods: {
    handleClose() {
      this.$emit("close");
    },
    handleConfirm() {
      this.$emit("confirm");
    },
  },
};
</script>

<style scoped>
a {
  text-decoration: none;
  color: white;
}
.spinner {
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
  padding: 15;
}
.sk-chase {
  width: 40px;
  height: 40px;
  position: relative;
  animation: sk-chase 2.5s infinite linear both;
}

.sk-chase-dot {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  animation: sk-chase-dot 2s infinite ease-in-out both;
}

.sk-chase-dot:before {
  content: "";
  display: block;
  width: 25%;
  height: 25%;
  background-color: teal;
  border-radius: 100%;
  animation: sk-chase-dot-before 2s infinite ease-in-out both;
}

.sk-chase-dot:nth-child(1) {
  animation-delay: -1.1s;
}
.sk-chase-dot:nth-child(2) {
  animation-delay: -1s;
}
.sk-chase-dot:nth-child(3) {
  animation-delay: -0.9s;
}
.sk-chase-dot:nth-child(4) {
  animation-delay: -0.8s;
}
.sk-chase-dot:nth-child(5) {
  animation-delay: -0.7s;
}
.sk-chase-dot:nth-child(6) {
  animation-delay: -0.6s;
}
.sk-chase-dot:nth-child(1):before {
  animation-delay: -1.1s;
}
.sk-chase-dot:nth-child(2):before {
  animation-delay: -1s;
}
.sk-chase-dot:nth-child(3):before {
  animation-delay: -0.9s;
}
.sk-chase-dot:nth-child(4):before {
  animation-delay: -0.8s;
}
.sk-chase-dot:nth-child(5):before {
  animation-delay: -0.7s;
}
.sk-chase-dot:nth-child(6):before {
  animation-delay: -0.6s;
}

modal {
  top: 25%;
}
@keyframes sk-chase {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes sk-chase-dot {
  80%,
  100% {
    transform: rotate(360deg);
  }
}

@keyframes sk-chase-dot-before {
  50% {
    transform: scale(0.4);
  }
  100%,
  0% {
    transform: scale(1);
  }
}
</style>
