<template>
  <default-field :field="field">
    <template slot="field">
      <multiselect
      :disabled="isDisabled"
        v-model="value"
        :loading="isLoading"
        :showNoResults="true"
        :limit="3"
        :max-height="600"
        :options="options"
        :placeholder="this.field.indexName + ' ' + __('Select')"
        :selectLabel="__('Press enter to select')"
        :selectedLabel="__('Selected')"
        :deselectLabel="__('Press enter to remove')"
        :custom-label="customLabel"
        @search-change="getcourse"
        @input="onChange"
      >
        <span  slot="noResult">
          {{ __("Oops! No elements found.") }}
        </span>
      </multiselect>
      <p v-if="hasError" class="my-2 text-danger">
        {{ firstError }}
      </p>
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import Multiselect from "vue-multiselect";

export default {
  components: { Multiselect },
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],
//   mounted() {
//     console.log(this.options);
//   },

  data() {
    return {
      options: [],
      isLoading: false,
      calledFromClass: null,
      timer: null,
      isDisabled:false
    };
  },
  created() {
    if (this.field.calledFromClass) {
      this.calledFromClass = this.field.calledFromClass;
    } else {
      this.calledFromClass = this.field.resourceParentClass;
    }
    if (this.field.dependsOn) {
      Nova.$on(
        "unit-picker-" + this.field.dependsOn,
        async (dependsOnValue) => {
          this.value = "";

          Nova.$emit("unit-picker-" + this.field.attribute.toLowerCase(), {
            value: this.value,
            field: this.field,
          });

          if (dependsOnValue && dependsOnValue.value) {
            this.options = (
              await Nova.request().post("/nova-vendor/unit-picker", {
                editing: true,
                editMode: this.field.editMode,
                viaResource: this.field.viaResource,
                viaResourceId: this.field.viaResourceId,
                viaRelationship: this.field.viaRelationship,
                resourceClass: this.calledFromClass,
                modelClass: dependsOnValue.field.modelClass,
                attribute: this.field.attribute,
                viaResourceId:
                  dependsOnValue.value[dependsOnValue.field.modelPrimaryKey],
              })
            ).data;

            if (this.field.valueKey) {
              this.value = this.options.find(
                (item) =>
                  item[this.field.modelPrimaryKey] == this.field.valueKey
              );
              Nova.$emit("unit-picker-" + this.field.attribute.toLowerCase(), {
                value: this.value,
                field: this.field,
              });
            }
          }
        }
      );
    }

    if(this.field[this.field['attribute']]){
        this.isDisabled = true
        this.value =this.field[this.field['attribute']]
    }
  },

  methods: {
    customLabel(item) {
      return item[this.field.titleKey];
    },
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.options = this.field.options;
      if (this.field.value) {
        this.value = this.options.find(
          (item) => item[this.field.modelPrimaryKey] == this.field.valueKey
        );
        if (this.value) {
          Nova.$emit("unit-picker-" + this.field.attribute.toLowerCase(), {
            value: this.value,
            field: this.field,
          });
        }
      }
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      if (this.value) {
        formData.append(
          this.field.attribute,
          this.value[this.field.modelPrimaryKey] || ""
        );
      }
    },

    /**
     * Update the field's internal value.
     */
    handleChange(value) {
      this.value = value;
    },

    async getcourse(value) {
    //   if (value.length >= 3) {
        //   this.options = false
        if (!this.field.dependsOn && value.length >= 3){

            this.isLoading = true;
        if (this.timer) {
          clearTimeout(this.timer);
          this.timer = null;
        }
        this.timer = setTimeout(async () => {
          this.options = (
            await Nova.request().post("/nova-vendor/unit-picker/get-courses", {
              name: value,
            })
          ).data;
        }, 800);
        this.isLoading = false
            }
    //   }
    },

    async onChange(value) {
      Nova.$emit("unit-picker-" + this.field.attribute.toLowerCase(), {
        value,
        field: this.field,
      });
    },
  },
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
.multiselect {
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.05);
  min-height: 36px !important;
  border-radius: 0.5rem;
}

.multiselect__tags {
  min-height: 36px !important;
  border: 1px solid var(--60) !important;
  color: var(--80);
  border-radius: 0.5rem !important;
}

.multiselect__select {
  background-repeat: no-repeat;
  background-size: 10px 6px;
  background-position: center right 0.75rem;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 6"><path fill="#35393C" fill-rule="nonzero" d="M8.293.293a1 1 0 0 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4A1 1 0 0 1 1.707.293L5 3.586 8.293.293z"/></svg>');
}

.multiselect__select:before {
  content: none !important;
}

</style>
