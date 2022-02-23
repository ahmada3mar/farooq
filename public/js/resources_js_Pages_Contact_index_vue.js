"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Contact_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Contact/index.vue?vue&type=script&lang=js":
/*!**************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Contact/index.vue?vue&type=script&lang=js ***!
  \**************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {
    name: String
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Contact/index.vue?vue&type=template&id=6c9f31ca":
/*!******************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Contact/index.vue?vue&type=template&id=6c9f31ca ***!
  \******************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  id: "titlebar",
  "class": "gradient"
};
var _hoisted_2 = {
  "class": "container"
};
var _hoisted_3 = {
  "class": "row"
};
var _hoisted_4 = {
  "class": "col-md-12"
};

var _hoisted_5 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("nav", {
  id: "breadcrumbs",
  "class": "dark"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", null, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  href: "/"
}, "Home")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  href: "#"
}, "Pages")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, "Contact")])], -1
/* HOISTED */
);

var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"container\"><div class=\"row\"><div class=\"col-xl-12\"><div class=\"contact-location-info margin-bottom-50\"><div class=\"contact-address\"><ul><li class=\"contact-address-headline\">Our Office</li><li>425 Makka Street, Amman, Jordan</li><li>Phone +962 7 7898 2290</li><li><a href=\"#\">info@qorrah.com</a></li><li><div class=\"freelancer-socials\"><ul><li><a href=\"//www.facebook.com/QorrahInitiative\" title=\"facebook\" data-tippy-placement=\"top\"><i class=\"icon-brand-facebook\"></i></a></li><li><a href=\"https://www.linkedin.com/company/cesterdad/\" title=\"linkedin\" data-tippy-placement=\"top\"><i class=\"icon-brand-linkedin\"></i></a></li><li><a href=\"//www.twitter.com/Cesterdad\" title=\"Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li><li><a href=\"//www.instagram.com/qorrahinitiative/\" title=\"Instagram\" data-tippy-placement=\"top\"><i class=\"icon-brand-instagram\"></i></a></li></ul></div></li></ul></div><div id=\"single-job-map-container\"><div id=\"singleListingMap\" data-latitude=\"31.966874\" data-longitude=\"35.881324\" data-map-icon=\"im im-icon-Hamburger\"></div><a href=\"#\" id=\"streetView\">Street View</a></div></div></div><div class=\"col-xl-8 col-lg-8 offset-xl-2 offset-lg-2\"><section id=\"contact\" class=\"margin-bottom-60\"><h3 class=\"headline margin-top-15 margin-bottom-35\">Any questions? Feel free to contact us!</h3><!-- @if (count($errors) &gt; 0)\r\n\t\t\t\t&lt;div class=&quot;alert alert-danger&quot;&gt;\r\n\t\t\t\t &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot;&gt;×&lt;/button&gt;\r\n\t\t\t\t &lt;ul&gt;\r\n\t\t\t\t  @foreach ($errors-&gt;all() as $error)\r\n\t\t\t\t   &lt;li&gt;{{ $error }}&lt;/li&gt;\r\n\t\t\t\t  @endforeach\r\n\t\t\t\t &lt;/ul&gt;\r\n\t\t\t\t&lt;/div&gt;\r\n\t\t\t   @endif\r\n\t\t\t\t&lt;form method=&quot;post&quot; name=&quot;contactform&quot; id=&quot;contactform&quot; action=&quot;{{ route(&#39;contact&#39;) }}&quot; autocomplete=&quot;on&quot;&gt;\r\n\t\t\t\t\t@csrf\r\n\t\t\t\t\t&lt;div class=&quot;row&quot;&gt;\r\n\t\t\t\t\t\t&lt;div class=&quot;col-md-6&quot;&gt;\r\n\t\t\t\t\t\t\t&lt;div class=&quot;input-with-icon-left&quot;&gt;\r\n\r\n\t\t\t\t\t\t\t\t@if (Auth::check())\r\n\r\n\t\t\t\t\t\t\t\t&lt;input class=&quot;with-border&quot; name=&quot;name&quot; type=&quot;text&quot; id=&quot;name&quot; placeholder=&quot;Your Name&quot; value=&quot;{{Auth::user()-&gt;name}}&quot; required=&quot;required&quot; /&gt;\r\n\t\t\t\t\t\t\t\t@else\r\n\t\t\t\t\t\t\t\t&lt;input class=&quot;with-border&quot; name=&quot;name&quot; type=&quot;text&quot; id=&quot;name&quot; placeholder=&quot;Your Name&quot; required=&quot;required&quot; /&gt;\r\n\t\t\t\t\t\t\t\t@endif\r\n\r\n\t\t\t\t\t\t\t\t&lt;i class=&quot;icon-material-outline-account-circle&quot;&gt;&lt;/i&gt;\r\n\t\t\t\t\t\t\t&lt;/div&gt;\r\n\t\t\t\t\t\t&lt;/div&gt;\r\n\r\n\t\t\t\t\t\t&lt;div class=&quot;col-md-6&quot;&gt;\r\n\t\t\t\t\t\t\t&lt;div class=&quot;input-with-icon-left&quot;&gt;\r\n\t\t\t\t\t\t\t\t@if (Auth::user())\r\n\r\n\t\t\t\t\t\t\t\t&lt;input class=&quot;with-border&quot; name=&quot;email&quot; type=&quot;email&quot; id=&quot;email&quot; placeholder=&quot;Email Address&quot; value=&quot;{{Auth::user()-&gt;email}}&quot; pattern=&quot;^[A-Za-z0-9](([_\\.\\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\\.\\-]?[a-zA-Z0-9]+)*)\\.([A-Za-z]{2,})$&quot; required=&quot;required&quot; /&gt;\r\n\t\t\t\t\t\t\t\t@else\r\n\t\t\t\t\t\t\t\t&lt;input class=&quot;with-border&quot; name=&quot;email&quot; type=&quot;email&quot; id=&quot;email&quot; placeholder=&quot;Email Address&quot; pattern=&quot;^[A-Za-z0-9](([_\\.\\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\\.\\-]?[a-zA-Z0-9]+)*)\\.([A-Za-z]{2,})$&quot; required=&quot;required&quot; /&gt;\r\n\r\n\t\t\t\t\t\t\t\t@endif\r\n\t\t\t\t\t\t\t\t&lt;i class=&quot;icon-material-outline-email&quot;&gt;&lt;/i&gt;\r\n\t\t\t\t\t\t\t&lt;/div&gt;\r\n\t\t\t\t\t\t&lt;/div&gt;\r\n\t\t\t\t\t&lt;/div&gt;\r\n\r\n\t\t\t\t\t&lt;div class=&quot;input-with-icon-left&quot;&gt;\r\n\t\t\t\t\t\t&lt;input class=&quot;with-border&quot; name=&quot;subject&quot; type=&quot;text&quot; id=&quot;subject&quot; placeholder=&quot;Subject&quot; required=&quot;required&quot; /&gt;\r\n\t\t\t\t\t\t&lt;i class=&quot;icon-material-outline-assignment&quot;&gt;&lt;/i&gt;\r\n\t\t\t\t\t&lt;/div&gt;\r\n\r\n\t\t\t\t\t&lt;div&gt;\r\n\t\t\t\t\t\t&lt;textarea class=&quot;with-border&quot; name=&quot;comments&quot; cols=&quot;40&quot; rows=&quot;5&quot; id=&quot;comments&quot; placeholder=&quot;Message&quot; spellcheck=&quot;true&quot; required=&quot;required&quot;&gt;&lt;/textarea&gt;\r\n\t\t\t\t\t&lt;/div&gt;\r\n\r\n\t\t\t\t\t&lt;input type=&quot;submit&quot; class=&quot;submit button margin-top-15&quot; id=&quot;submit&quot; value=&quot;Submit Message&quot; /&gt;\r\n\r\n\t\t\t\t&lt;/form&gt; --></section></div></div></div>", 1);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Titlebar\r\n================================================== "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(_ctx.__('contact')), 1
  /* TEXT */
  ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Breadcrumbs "), _hoisted_5])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Content\r\n================================================== "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Container "), _hoisted_6, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Container / End ")], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./resources/js/Pages/Contact/index.vue":
/*!**********************************************!*\
  !*** ./resources/js/Pages/Contact/index.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_6c9f31ca__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=6c9f31ca */ "./resources/js/Pages/Contact/index.vue?vue&type=template&id=6c9f31ca");
/* harmony import */ var _index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js */ "./resources/js/Pages/Contact/index.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_MHMD6_Desktop_js_farooq_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_MHMD6_Desktop_js_farooq_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_index_vue_vue_type_template_id_6c9f31ca__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/Pages/Contact/index.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Contact/index.vue?vue&type=script&lang=js":
/*!**********************************************************************!*\
  !*** ./resources/js/Pages/Contact/index.vue?vue&type=script&lang=js ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Contact/index.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Contact/index.vue?vue&type=template&id=6c9f31ca":
/*!****************************************************************************!*\
  !*** ./resources/js/Pages/Contact/index.vue?vue&type=template&id=6c9f31ca ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_template_id_6c9f31ca__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_template_id_6c9f31ca__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=template&id=6c9f31ca */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Contact/index.vue?vue&type=template&id=6c9f31ca");


/***/ })

}]);