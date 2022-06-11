<template>
  <div>
    <heading class="mb-6">Generate Cards</heading>

    <card class="mb-3">
      <div class="flex border-b border-40">
        <div class="px-8 py-6 w-1/5">
          <label for="count" class="inline-block text-80 pt-2 leading-tight"
            >Count</label
          >
        </div>
        <div class="py-6 px-8 w-1/2">
          <input
            v-model="count"
            id="count"
            dusk="count"
            list="count-list"
            type="number"
            placeholder="count"
            class="w-full form-control form-input form-input-bordered"
          />
        </div>
      </div>

      <div class="flex border-b border-40">
        <div class="px-8 py-6 w-1/5">
          <label for="course" class="inline-block text-80 pt-2 leading-tight"
            >course</label
          >
        </div>
        <div class="py-6 px-8 w-1/2">
          <multiselect
            :disabled="isDisabled"
            v-model="value"
            :loading="isLoading"
            :showNoResults="true"
            :limit="3"
            :max-height="600"
            :options="options"
            placeholder="select course"
            :selectLabel="__('Press enter to select')"
            :selectedLabel="__('Selected')"
            :deselectLabel="__('Press enter to remove')"
            :custom-label="customLabel"
            @search-change="getcourse"
          >
            <span slot="noResult">
              {{ __("Oops! No elements found.") }}
            </span>
          </multiselect>
        </div>
      </div>
    </card>

    <div class="flex items-center">
      <a
        :href="url"
        tabindex="0"
        class="btn btn-link dim cursor-pointer text-80 ml-auto mr-6"
      >
        Cancel
      </a>

      <button
        @click="download"
        type="submit"
        class="btn btn-default btn-primary inline-flex items-center relative"
        dusk="create-button"
      >
        <span class=""> Create Sections </span>
        <!---->
      </button>
    </div>
    <portal to="modals">
      <transition name="fade">
        <general-modal
          :isLoading="isDownladed"
          :url="url"
          :num="count"
          v-if="modalOpen"
          @confirm="confirmModal"
          @close="closeModal"
        />
      </transition>
    </portal>
  </div>
</template>

<script>
import axios from "axios";
import Multiselect from "vue-multiselect";
import GeneralModal from "./modal.vue";

export default {
  components: { Multiselect, GeneralModal },

  metaInfo() {
    return {
      title: "GenerateCards",
    };
  },
  data() {
    return {
      options: [],
      isLoading: false,
      calledFromClass: null,
      timer: null,
      isDisabled: false,
      value: null,
      modalOpen: false,
      count: 10,
      url: "#",
      isDownladed: false,
    };
  },
  mounted() {
    //
  },
  methods: {
    confirmModal() {
      this.modalOpen = false;
    },
    closeModal() {
      this.modalOpen = false;
    },
    download() {
      this.url = "#";
      this.isDownladed = false;

      this.modalOpen = true;
      axios({
        url: `/nova-vendor/generate-cards/cards?count=${this.count}&course_id=${
          this.value?.id || ""
        }`, //your url
        method: "POST",
        responseType: "blob", // important
      })
        .then((res) => {
          this.isDownladed = true;
          this.url = window.URL.createObjectURL(new Blob([res.data]));
        })
        .catch((err) => console.log(err));
    },
    customLabel(item) {
      return item.name;
    },

    async getcourse(value) {
      //   if (value.length >= 3) {
      //   this.options = false
      if (value.length >= 3) {
        this.isLoading = true;
        if (this.timer) {
          clearTimeout(this.timer);
          this.timer = null;
        }
        this.timer = setTimeout(async () => {
          this.options = (
            await Nova.request().get("/nova-vendor/generate-cards/", {
              name: value,
            })
          ).data;
        }, 800);
        this.isLoading = false;
      }
      //   }
    },
  },
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

