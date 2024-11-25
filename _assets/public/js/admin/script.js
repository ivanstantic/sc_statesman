/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/admin/modules/acf.js":
/*!*************************************!*\
  !*** ./src/js/admin/modules/acf.js ***!
  \*************************************/
/***/ (() => {

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
document.addEventListener('DOMContentLoaded', function () {
  function findPostTypeElement(node) {
    if (node.nodeType !== Node.ELEMENT_NODE) return null;
    return node.matches('[data-name="post_type"]') ? node : node.querySelector('[data-name="post_type"]');
  }
  var observer = new MutationObserver(function (mutationsList) {
    var postTypeElement = document.querySelector('[data-name="post_type"]');
    var _iterator = _createForOfIteratorHelper(mutationsList),
      _step;
    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var mutation = _step.value;
        if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
          var _iterator2 = _createForOfIteratorHelper(mutation.addedNodes),
            _step2;
          try {
            var _loop = function _loop() {
              var node = _step2.value;
              var postTypeElement = findPostTypeElement(node);
              if (postTypeElement) {
                // Prepare fields
                var postTypeFieldKey = postTypeElement.getAttribute('data-key');
                if (postTypeFieldKey) {
                  var postTypesField = acf.getField(postTypeFieldKey);
                  var categoriesElement = document.querySelector('[data-name="category_list"]');
                  if (categoriesElement) {
                    // Function to update categories based on selected post types
                    var updateCategories = function updateCategories(selectedPostTypes) {
                      var data = new FormData();
                      data.append('action', acfDynamicData.fields.categories); // Use the localized action for categories
                      data.append('post_types', JSON.stringify(selectedPostTypes));
                      fetch(acfDynamicData.ajax_url, {
                        method: 'POST',
                        body: data
                      }).then(function (response) {
                        return response.json();
                      }).then(function (result) {
                        if (result.success) {
                          categoriesField.$el.find('select').empty();
                          result.data.categories.forEach(function (category) {
                            var option = document.createElement('option');
                            option.value = category.term_id;
                            option.textContent = category.name;
                            categoriesField.$el.find('select').append(option);
                          });
                        }
                      })["catch"](function (error) {
                        return console.error('Error:', error);
                      });
                    }; // Init
                    var categoriesField = acf.getField(categoriesElement.getAttribute('data-key'));
                    var selectedPostTypes = postTypesField.val();
                    updateCategories(selectedPostTypes);

                    // Trigger updates on post type selection change
                    postTypesField.on('change', function () {
                      var selectedPostTypes = postTypesField.val();
                      updateCategories(selectedPostTypes);
                    });
                  }
                  var tagsElement = document.querySelector('[data-name="tag_list"]');
                  if (tagsElement) {
                    // Function to update tags based on selected post types
                    var updateTags = function updateTags(selectedPostTypes) {
                      var data = new FormData();
                      data.append('action', acfDynamicData.fields.tags); // Use the localized action for tags
                      data.append('post_types', JSON.stringify(selectedPostTypes));
                      fetch(acfDynamicData.ajax_url, {
                        method: 'POST',
                        body: data
                      }).then(function (response) {
                        return response.json();
                      }).then(function (result) {
                        if (result.success) {
                          tagsField.$el.find('select').empty();
                          result.data.tags.forEach(function (tag) {
                            var option = document.createElement('option');
                            option.value = tag.term_id;
                            option.textContent = tag.name;
                            tagsField.$el.find('select').append(option);
                          });
                        }
                      })["catch"](function (error) {
                        return console.error('Error:', error);
                      });
                    }; // Init
                    var tagsField = acf.getField(tagsElement.getAttribute('data-key'));
                    var _selectedPostTypes = postTypesField.val();
                    updateTags(_selectedPostTypes);

                    // Trigger updates on post type selection change
                    postTypesField.on('change', function () {
                      var selectedPostTypes = postTypesField.val();
                      updateTags(selectedPostTypes);
                    });
                  }
                }
              }
            };
            for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
              _loop();
            }
          } catch (err) {
            _iterator2.e(err);
          } finally {
            _iterator2.f();
          }
        }
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
  });

  // Observe the entire document for changes
  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!********************************!*\
  !*** ./src/js/admin/script.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_acf__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/acf */ "./src/js/admin/modules/acf.js");
/* harmony import */ var _modules_acf__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_acf__WEBPACK_IMPORTED_MODULE_0__);

})();

/******/ })()
;