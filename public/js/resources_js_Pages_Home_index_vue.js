"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Home_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=script&setup=true&lang=js":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=script&setup=true&lang=js ***!
  \**********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue3_carousel_dist_carousel_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue3-carousel/dist/carousel.css */ "./node_modules/vue3-carousel/dist/carousel.css");
/* harmony import */ var vue3_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue3-carousel */ "./node_modules/vue3-carousel/dist/carousel.es.js");
var __default__ = {
  components: {
    Carousel: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Carousel,
    Slide: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Slide,
    Pagination: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Pagination,
    Navigation: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Navigation
  },
  props: {
    teachers: Number,
    subscriber: Number,
    settings: Object,
    courses: Array,
    mostSelling: Array,
    docs: Array,
    instructos: Array,
    sections: Array
  },
  data: function data() {
    var _this$settings$find, _this$settings$find2, _this$settings$find3, _this$settings$find4;

    return {
      background: (_this$settings$find = this.settings.find(function (s) {
        return s.key == "home_cover_image";
      })) === null || _this$settings$find === void 0 ? void 0 : _this$settings$find.value,
      description: (_this$settings$find2 = this.settings.find(function (s) {
        return s.key == "home_description";
      })) === null || _this$settings$find2 === void 0 ? void 0 : _this$settings$find2.value,
      shadow: ((_this$settings$find3 = this.settings.find(function (s) {
        return s.key == "home_shadow";
      })) === null || _this$settings$find3 === void 0 ? void 0 : _this$settings$find3.value) || "",
      descriptionColor: ((_this$settings$find4 = this.settings.find(function (s) {
        return s.key == "home_description_color";
      })) === null || _this$settings$find4 === void 0 ? void 0 : _this$settings$find4.value) || "#777"
    };
  },
  mounted: function mounted() {// this.jq()
    // console.log( this.settings.find(s=>s.key == 'home_cover_image')?.value || '/assets/images/banner.jpg' )
    // ready();
  }
};


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/Object.assign(__default__, {
  setup: function setup(__props, _ref) {
    var expose = _ref.expose;
    expose();
    var __returned__ = {
      Carousel: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Carousel,
      Slide: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Slide,
      Pagination: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Pagination,
      Navigation: vue3_carousel__WEBPACK_IMPORTED_MODULE_0__.Navigation
    };
    Object.defineProperty(__returned__, '__isScriptSetup', {
      enumerable: false,
      value: true
    });
    return __returned__;
  }
}));

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=template&id=0f04e50b&scoped=true":
/*!***************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=template&id=0f04e50b&scoped=true ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");


var _withScopeId = function _withScopeId(n) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.pushScopeId)("data-v-0f04e50b"), n = n(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.popScopeId)(), n;
};

var _hoisted_1 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("title", null, "الرئيسية", -1
  /* HOISTED */
  );
});

var _hoisted_2 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("meta", {
    name: "description",
    content: "الرئيسية",
    "head-key": "description"
  }, null, -1
  /* HOISTED */
  );
});

var _hoisted_3 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("meta", {
    name: "keywords",
    content: "الرئيسية"
  }, null, -1
  /* HOISTED */
  );
});

var _hoisted_4 = {
  "class": "container"
};
var _hoisted_5 = {
  "class": "row"
};
var _hoisted_6 = {
  "class": "col-md-12"
};
var _hoisted_7 = {
  "class": "banner-headline"
};

var _hoisted_8 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("strong", null, null, -1
  /* HOISTED */
  );
});

var _hoisted_9 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("br", null, null, -1
  /* HOISTED */
  );
});

var _hoisted_10 = ["innerHTML"];
var _hoisted_11 = {
  "class": "section margin-top-65"
};
var _hoisted_12 = {
  "class": "container"
};
var _hoisted_13 = {
  "class": "row"
};
var _hoisted_14 = {
  "class": "col-xl-12"
};

var _hoisted_15 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "section-headline centered margin-bottom-15"
  }, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", null, "الفروع")], -1
  /* HOISTED */
  );
});

var _hoisted_16 = {
  "class": "categories-container"
};

var _hoisted_17 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "category-box-icon"
  }, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
    "class": "icon-line-awesome-graduation-cap"
  })], -1
  /* HOISTED */
  );
});

var _hoisted_18 = {
  "class": "category-box-counter"
};

var _hoisted_19 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "category-box-content"
  }, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" <h3>الثاني ثانوي</h3> ")], -1
  /* HOISTED */
  );
});

var _hoisted_20 = {
  "class": "section margin-top-65 margin-bottom-65"
};
var _hoisted_21 = {
  "class": "container"
};
var _hoisted_22 = {
  "class": "row"
};
var _hoisted_23 = {
  "class": "col-xl-12"
};
var _hoisted_24 = {
  "class": "section-headline centered margin-top-0 margin-bottom-45"
};

var _hoisted_25 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("عرض الكل");

var _hoisted_26 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", null, "كورسات مقترحة", -1
  /* HOISTED */
  );
});

var _hoisted_27 = {
  "class": "photo-box-content"
};
var _hoisted_28 = {
  "class": "section gray margin-top-45 margin-bottom-65 padding-top-65 padding-bottom-75"
};
var _hoisted_29 = {
  "class": "container"
};
var _hoisted_30 = {
  "class": "row"
};
var _hoisted_31 = {
  "class": "col-xl-12"
};
var _hoisted_32 = {
  "class": "section-headline margin-top-0 margin-bottom-35"
};

var _hoisted_33 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("عرض الكل");

var _hoisted_34 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", {
    "class": "arabic"
  }, "أسئلة سنوات", -1
  /* HOISTED */
  );
});

var _hoisted_35 = {
  "class": "listings-container compact-list-layout margin-top-35"
};
var _hoisted_36 = {
  "class": "job-listing-details"
};

var _hoisted_37 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
    "class": "list-apply-button ripple-effect"
  }, "تنزيل", -1
  /* HOISTED */
  );
});

var _hoisted_38 = {
  "class": "job-listing-description arabic"
};
var _hoisted_39 = {
  "class": "job-listing-title"
};
var _hoisted_40 = {
  "class": "job-listing-footer"
};

var _hoisted_41 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
    "class": "icon-feather-book-open"
  }, null, -1
  /* HOISTED */
  );
});

var _hoisted_42 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
    "class": "icon-material-outline-school"
  }, null, -1
  /* HOISTED */
  );
});

var _hoisted_43 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "job-listing-company-logo"
  }, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
    "class": "icon-material-outline-attach-file font3rem"
  })], -1
  /* HOISTED */
  );
});

var _hoisted_44 = {
  "class": "col freelancer"
};
var _hoisted_45 = {
  "class": "freelancer-overview"
};
var _hoisted_46 = {
  "class": "freelancer-overview-inner"
};
var _hoisted_47 = {
  "class": "freelancer-avatar"
};
var _hoisted_48 = ["src"];
var _hoisted_49 = {
  "class": "freelancer-name"
};
var _hoisted_50 = {
  "class": "freelancer-details"
};
var _hoisted_51 = {
  "class": "freelancer-details-list"
};
var _hoisted_52 = {
  "class": "mx-4"
};

var _hoisted_53 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" المدينة ");

var _hoisted_54 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
    "class": "icon-material-outline-location-on"
  }, null, -1
  /* HOISTED */
  );
});

var _hoisted_55 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("عرض الملف الشخصي ");

var _hoisted_56 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
    "class": "icon-material-outline-arrow-right-alt"
  }, null, -1
  /* HOISTED */
  );
});

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_Head = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Head");

  var _component_Link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Link");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Head, null, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_1, _hoisted_2, _hoisted_3];
    }),
    _: 1
    /* STABLE */

  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    style: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeStyle)({
      '--shadow': $data.shadow
    }),
    "class": "intro-banner"
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "background-image-container",
    style: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeStyle)('background-image: url(' + ($data.background ? '/storage/' + $data.background : '/assets/images/banner.jpg') + ')')
  }, null, 4
  /* STYLE */
  ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", null, [_hoisted_8, _hoisted_9, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    style: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeStyle)({
      '--descriptionColor': $data.descriptionColor
    }),
    "class": "home_description",
    innerHTML: $data.description || ''
  }, null, 12
  /* STYLE, PROPS */
  , _hoisted_10)])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Stats "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" <div class=\"row\">\n        <div class=\"col-md-12\">\n          <ul class=\"intro-stats margin-top-45 hide-under-992px\">\n            <li>\n              <strong class=\"counter\">541521</strong>\n              <span>عدد الكورسات</span>\n            </li>\n            <li>\n              <strong class=\"counter\">{{ teachers }}</strong>\n              <span>المعلمين</span>\n            </li>\n            <li>\n              <strong class=\"counter\">{{ subscriber }}</strong>\n              <span>المسجلين</span>\n            </li>\n          </ul>\n        </div>\n      </div> ")])], 4
  /* STYLE */
  ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_11, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_13, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [_hoisted_15, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_16, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.sections, function (section) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(_component_Link, {
      key: section.id,
      href: "/courses?class=12&sections=".concat(section.id),
      "class": "category-box"
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [_hoisted_17, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_18, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(section === null || section === void 0 ? void 0 : section.name), 1
        /* TEXT */
        ), _hoisted_19];
      }),
      _: 2
      /* DYNAMIC */

    }, 1032
    /* PROPS, DYNAMIC_SLOTS */
    , ["href"]);
  }), 128
  /* KEYED_FRAGMENT */
  ))])])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" most sellers "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_20, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_21, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_22, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_23, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_24, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
    href: "/courses",
    "class": "headline-link"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_25];
    }),
    _: 1
    /* STABLE */

  }), _hoisted_26])]), ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.mostSelling, function (course) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      key: course.id,
      "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)("col-xl-".concat($props.mostSelling.length < 5 ? 12 / $props.mostSelling.length : '3', " col-md-6"))
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
      href: "/course/".concat(course.id),
      "class": "photo-box",
      style: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeStyle)("background-image:url(/storage/".concat(course.image, ")"))
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_27, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(course === null || course === void 0 ? void 0 : course.name), 1
        /* TEXT */
        ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" <span>{{ course.subscriber }} مشترك</span> ")])];
      }),
      _: 2
      /* DYNAMIC */

    }, 1032
    /* PROPS, DYNAMIC_SLOTS */
    , ["href", "style"])], 2
    /* CLASS */
    );
  }), 128
  /* KEYED_FRAGMENT */
  ))])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" documents "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_28, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_29, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_30, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_31, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Section Headline "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_32, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
    href: "/documents",
    "class": "headline-link"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_33];
    }),
    _: 1
    /* STABLE */

  }), _hoisted_34]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Jobs Container "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_35, [$props.docs ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, {
    key: 0
  }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.docs, function (document) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(_component_Link, {
      key: document.id,
      href: "/document/download/".concat(document.id),
      "class": "job-listing with-apply-button"
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        var _document$document_co;

        return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_36, [_hoisted_37, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_38, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", _hoisted_39, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(document === null || document === void 0 ? void 0 : document.name), 1
        /* TEXT */
        ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_40, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(document.downloads) + " تنزيل ", 1
        /* TEXT */
        ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, [_hoisted_41, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" المادة " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(_ctx.__((_document$document_co = document.document_course_id) === null || _document$document_co === void 0 ? void 0 : _document$document_co.name)), 1
        /* TEXT */
        )]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, [_hoisted_42, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" الصف " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(_ctx.__(document["class"])), 1
        /* TEXT */
        )])])])]), _hoisted_43])];
      }),
      _: 2
      /* DYNAMIC */

    }, 1032
    /* PROPS, DYNAMIC_SLOTS */
    , ["href"]);
  }), 128
  /* KEYED_FRAGMENT */
  )) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Highest Rated Freelancers "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)($setup["Carousel"], {
    snapAlign: "center",
    breakpoints: {
      1200: {
        itemsToShow: 3
      },
      800: {
        itemsToShow: 2
      }
    },
    wrapAround: true,
    "class": "container",
    "items-to-show": 1
  }, {
    addons: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)($setup["Navigation"]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)($setup["Pagination"])];
    }),
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.instructos, function (user) {
        return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)($setup["Slide"], {
          key: user.id
        }, {
          "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
            return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_44, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Overview "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_45, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_46, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Avatar "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_47, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
              href: "/profile/".concat(user.id)
            }, {
              "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
                return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
                  src: "/storage/".concat(user.avatar),
                  alt: ""
                }, null, 8
                /* PROPS */
                , _hoisted_48)];
              }),
              _: 2
              /* DYNAMIC */

            }, 1032
            /* PROPS, DYNAMIC_SLOTS */
            , ["href"])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Name "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_49, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h4", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
              href: "/profile/".concat(user.id)
            }, {
              "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
                return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)((0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(user === null || user === void 0 ? void 0 : user.name), 1
                /* TEXT */
                )];
              }),
              _: 2
              /* DYNAMIC */

            }, 1032
            /* PROPS, DYNAMIC_SLOTS */
            , ["href"])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" <span class=\"text-primary\">{{\n                                [\n                                    ...new Set(\n                                        user.courses.map((item) => item?.name)\n                                    ),\n                                ].reduce(\n                                    (previousValue, currentValue) =>\n                                        previousValue + \" \" + currentValue,\n                                    \"\"\n                                )\n                            }}</span> ")])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Details "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_50, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_51, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", _hoisted_52, [_hoisted_53, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("strong", null, [_hoisted_54, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(user.city), 1
            /* TEXT */
            )])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
              href: "/profile/".concat(user.id),
              "class": "button button-sliding-icon ripple-effect"
            }, {
              "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
                return [_hoisted_55, _hoisted_56];
              }),
              _: 2
              /* DYNAMIC */

            }, 1032
            /* PROPS, DYNAMIC_SLOTS */
            , ["href"])])])];
          }),
          _: 2
          /* DYNAMIC */

        }, 1024
        /* DYNAMIC_SLOTS */
        );
      }), 128
      /* KEYED_FRAGMENT */
      ))];
    }),
    _: 1
    /* STABLE */

  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Highest Rated Freelancers / End")], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.price-logo[data-v-0f04e50b] {\n    width: 50;\n    height: 50;\n    background: teal;\n    justify-content: center;\n    align-items: center;\n    display: flex;\n    color: white;\n    font-weight: bold;\n}\n.up[data-v-0f04e50b] {\n    font-size: 15px;\n}\n.bottom[data-v-0f04e50b] {\n    font-size: 16px;\n    top: 2px !important;\n}\n.pricing-plan[data-v-0f04e50b] {\n    display: flex;\n    font-weight: bold;\n    flex-direction: column;\n    justify-content: space-between;\n    height: 500px;\n    /* color: whitesmoke; */\n    /* background-image: url(\"/assets/images/price.png\"); */\n}\n.intro-banner[data-v-0f04e50b]:after,\n.intro-banner[data-v-0f04e50b]:before {\n    background: linear-gradient(\n        to left,\n        var(--shadow) 20%,\n        rgba(250, 250, 250, 0.1) 80%,\n        rgba(250, 250, 250, 0) 100%\n    );\n}\n.home_description[data-v-0f04e50b] {\n    margin-bottom: 1rem;\n    color: var(--descriptionColor);\n}\n.font3rem[data-v-0f04e50b] {\n    font-size: 3rem;\n}\n.categories-container[data-v-0f04e50b] {\n\tdisplay: flex;\n  flex-direction: row-reverse;\n\tflex-wrap: wrap;\n  justify-content: center;\n  align-items: center;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_10_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_10_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_style_index_0_id_0f04e50b_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_10_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_10_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_style_index_0_id_0f04e50b_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_10_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_10_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_style_index_0_id_0f04e50b_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/Pages/Home/index.vue":
/*!*******************************************!*\
  !*** ./resources/js/Pages/Home/index.vue ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_0f04e50b_scoped_true__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=0f04e50b&scoped=true */ "./resources/js/Pages/Home/index.vue?vue&type=template&id=0f04e50b&scoped=true");
/* harmony import */ var _index_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&setup=true&lang=js */ "./resources/js/Pages/Home/index.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var _index_vue_vue_type_style_index_0_id_0f04e50b_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css */ "./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css");
/* harmony import */ var D_moath_h_Mhmd_farooq_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;


const __exports__ = /*#__PURE__*/(0,D_moath_h_Mhmd_farooq_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__["default"])(_index_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_index_vue_vue_type_template_id_0f04e50b_scoped_true__WEBPACK_IMPORTED_MODULE_0__.render],['__scopeId',"data-v-0f04e50b"],['__file',"resources/js/Pages/Home/index.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Home/index.vue?vue&type=script&setup=true&lang=js":
/*!******************************************************************************!*\
  !*** ./resources/js/Pages/Home/index.vue?vue&type=script&setup=true&lang=js ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Home/index.vue?vue&type=template&id=0f04e50b&scoped=true":
/*!*************************************************************************************!*\
  !*** ./resources/js/Pages/Home/index.vue?vue&type=template&id=0f04e50b&scoped=true ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_template_id_0f04e50b_scoped_true__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_template_id_0f04e50b_scoped_true__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=template&id=0f04e50b&scoped=true */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=template&id=0f04e50b&scoped=true");


/***/ }),

/***/ "./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css":
/*!***************************************************************************************************!*\
  !*** ./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css ***!
  \***************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_10_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_10_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_style_index_0_id_0f04e50b_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-10.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-10.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Home/index.vue?vue&type=style&index=0&id=0f04e50b&scoped=true&lang=css");


/***/ })

}]);