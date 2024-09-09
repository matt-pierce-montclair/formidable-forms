!function(){var e={588:function(e){e.exports=function(e,t){var n,r,i=0;function o(){var o,a,s=n,l=arguments.length;e:for(;s;){if(s.args.length===arguments.length){for(a=0;a<l;a++)if(s.args[a]!==arguments[a]){s=s.next;continue e}return s!==n&&(s===r&&(r=s.prev),s.prev.next=s.next,s.next&&(s.next.prev=s.prev),s.next=n,s.prev=null,n.prev=s,n=s),s.val}s=s.next}for(o=new Array(l),a=0;a<l;a++)o[a]=arguments[a];return s={args:o,val:e.apply(null,o)},n?(n.prev=s,s.next=n):r=s,i===t.maxSize?(r=r.prev).next=null:i++,n=s,s.val}return t=t||{},o.clear=function(){n=null,r=null,i=0},o}},975:function(e,t,n){var r;!function(){"use strict";var i={not_string:/[^s]/,not_bool:/[^t]/,not_type:/[^T]/,not_primitive:/[^v]/,number:/[diefg]/,numeric_arg:/[bcdiefguxX]/,json:/[j]/,not_json:/[^j]/,text:/^[^\x25]+/,modulo:/^\x25{2}/,placeholder:/^\x25(?:([1-9]\d*)\$|\(([^)]+)\))?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-gijostTuvxX])/,key:/^([a-z_][a-z_\d]*)/i,key_access:/^\.([a-z_][a-z_\d]*)/i,index_access:/^\[(\d+)\]/,sign:/^[+-]/};function o(e){return function(e,t){var n,r,a,s,l,c,u,f,d,p=1,h=e.length,v="";for(r=0;r<h;r++)if("string"==typeof e[r])v+=e[r];else if("object"==typeof e[r]){if((s=e[r]).keys)for(n=t[p],a=0;a<s.keys.length;a++){if(null==n)throw new Error(o('[sprintf] Cannot access property "%s" of undefined value "%s"',s.keys[a],s.keys[a-1]));n=n[s.keys[a]]}else n=s.param_no?t[s.param_no]:t[p++];if(i.not_type.test(s.type)&&i.not_primitive.test(s.type)&&n instanceof Function&&(n=n()),i.numeric_arg.test(s.type)&&"number"!=typeof n&&isNaN(n))throw new TypeError(o("[sprintf] expecting number but found %T",n));switch(i.number.test(s.type)&&(f=n>=0),s.type){case"b":n=parseInt(n,10).toString(2);break;case"c":n=String.fromCharCode(parseInt(n,10));break;case"d":case"i":n=parseInt(n,10);break;case"j":n=JSON.stringify(n,null,s.width?parseInt(s.width):0);break;case"e":n=s.precision?parseFloat(n).toExponential(s.precision):parseFloat(n).toExponential();break;case"f":n=s.precision?parseFloat(n).toFixed(s.precision):parseFloat(n);break;case"g":n=s.precision?String(Number(n.toPrecision(s.precision))):parseFloat(n);break;case"o":n=(parseInt(n,10)>>>0).toString(8);break;case"s":n=String(n),n=s.precision?n.substring(0,s.precision):n;break;case"t":n=String(!!n),n=s.precision?n.substring(0,s.precision):n;break;case"T":n=Object.prototype.toString.call(n).slice(8,-1).toLowerCase(),n=s.precision?n.substring(0,s.precision):n;break;case"u":n=parseInt(n,10)>>>0;break;case"v":n=n.valueOf(),n=s.precision?n.substring(0,s.precision):n;break;case"x":n=(parseInt(n,10)>>>0).toString(16);break;case"X":n=(parseInt(n,10)>>>0).toString(16).toUpperCase()}i.json.test(s.type)?v+=n:(!i.number.test(s.type)||f&&!s.sign?d="":(d=f?"+":"-",n=n.toString().replace(i.sign,"")),c=s.pad_char?"0"===s.pad_char?"0":s.pad_char.charAt(1):" ",u=s.width-(d+n).length,l=s.width&&u>0?c.repeat(u):"",v+=s.align?d+n+l:"0"===c?d+l+n:l+d+n)}return v}(function(e){if(s[e])return s[e];for(var t,n=e,r=[],o=0;n;){if(null!==(t=i.text.exec(n)))r.push(t[0]);else if(null!==(t=i.modulo.exec(n)))r.push("%");else{if(null===(t=i.placeholder.exec(n)))throw new SyntaxError("[sprintf] unexpected placeholder");if(t[2]){o|=1;var a=[],l=t[2],c=[];if(null===(c=i.key.exec(l)))throw new SyntaxError("[sprintf] failed to parse named argument key");for(a.push(c[1]);""!==(l=l.substring(c[0].length));)if(null!==(c=i.key_access.exec(l)))a.push(c[1]);else{if(null===(c=i.index_access.exec(l)))throw new SyntaxError("[sprintf] failed to parse named argument key");a.push(c[1])}t[2]=a}else o|=2;if(3===o)throw new Error("[sprintf] mixing positional and named placeholders is not (yet) supported");r.push({placeholder:t[0],param_no:t[1],keys:t[2],sign:t[3],pad_char:t[4],align:t[5],width:t[6],precision:t[7],type:t[8]})}n=n.substring(t[0].length)}return s[e]=r}(e),arguments)}function a(e,t){return o.apply(null,[e].concat(t||[]))}var s=Object.create(null);"undefined"!=typeof window&&(window.sprintf=o,window.vsprintf=a,void 0===(r=function(){return{sprintf:o,vsprintf:a}}.call(t,n,t,e))||(e.exports=r))}()}},t={};function n(r){var i=t[r];if(void 0!==i)return i.exports;var o=t[r]={exports:{}};return e[r](o,o.exports,n),o.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){"use strict";var e,t,r,i,o=n(588),a=n.n(o);function s(e){return s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},s(e)}function l(e,t,n){return r=function(e,t){if("object"!=s(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=s(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(t),(t="symbol"==s(r)?r:String(r))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e;var r}n(975),a()(console.error),e={"(":9,"!":8,"*":7,"/":7,"%":7,"+":6,"-":6,"<":5,"<=":5,">":5,">=":5,"==":4,"!=":4,"&&":3,"||":2,"?":1,"?:":1},t=["(","?"],r={")":["("],":":["?","?:"]},i=/<=|>=|==|!=|&&|\|\||\?:|\(|!|\*|\/|%|\+|-|<|>|\?|\)|:/;var c={"!":function(e){return!e},"*":function(e,t){return e*t},"/":function(e,t){return e/t},"%":function(e,t){return e%t},"+":function(e,t){return e+t},"-":function(e,t){return e-t},"<":function(e,t){return e<t},"<=":function(e,t){return e<=t},">":function(e,t){return e>t},">=":function(e,t){return e>=t},"==":function(e,t){return e===t},"!=":function(e,t){return e!==t},"&&":function(e,t){return e&&t},"||":function(e,t){return e||t},"?:":function(e,t,n){if(e)throw t;return n}};var u={contextDelimiter:"",onMissingKey:null};function f(e,t){var n;for(n in this.data=e,this.pluralForms={},this.options={},u)this.options[n]=void 0!==t&&n in t?t[n]:u[n]}function d(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function p(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?d(Object(n),!0).forEach((function(t){l(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):d(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}f.prototype.getPluralForm=function(n,o){var a,s,l,u,f=this.pluralForms[n];return f||("function"!=typeof(l=(a=this.data[n][""])["Plural-Forms"]||a["plural-forms"]||a.plural_forms)&&(s=function(e){var t,n,r;for(t=e.split(";"),n=0;n<t.length;n++)if(0===(r=t[n].trim()).indexOf("plural="))return r.substr(7)}(a["Plural-Forms"]||a["plural-forms"]||a.plural_forms),u=function(n){var o=function(n){for(var o,a,s,l,c=[],u=[];o=n.match(i);){for(a=o[0],(s=n.substr(0,o.index).trim())&&c.push(s);l=u.pop();){if(r[a]){if(r[a][0]===l){a=r[a][1]||a;break}}else if(t.indexOf(l)>=0||e[l]<e[a]){u.push(l);break}c.push(l)}r[a]||u.push(a),n=n.substr(o.index+a.length)}return(n=n.trim())&&c.push(n),c.concat(u.reverse())}(n);return function(e){return function(e,t){var n,r,i,o,a,s,l=[];for(n=0;n<e.length;n++){if(a=e[n],o=c[a]){for(r=o.length,i=Array(r);r--;)i[r]=l.pop();try{s=o.apply(null,i)}catch(e){return e}}else s=t.hasOwnProperty(a)?t[a]:+a;l.push(s)}return l[0]}(o,e)}}(s),l=function(e){return+u({n:e})}),f=this.pluralForms[n]=l),f(o)},f.prototype.dcnpgettext=function(e,t,n,r,i){var o,a,s;return o=void 0===i?0:this.getPluralForm(e,i),a=n,t&&(a=t+this.options.contextDelimiter+n),(s=this.data[e][a])&&s[o]?s[o]:(this.options.onMissingKey&&this.options.onMissingKey(n,e),0===o?n:r)};var h={"":{plural_forms:function(e){return 1===e?0:1}}},v=/^i18n\.(n?gettext|has_translation)(_|$)/,m=function(e){return"string"!=typeof e||""===e?(console.error("The namespace must be a non-empty string."),!1):!!/^[a-zA-Z][a-zA-Z0-9_.\-\/]*$/.test(e)||(console.error("The namespace can only contain numbers, letters, dashes, periods, underscores and slashes."),!1)},y=function(e){return"string"!=typeof e||""===e?(console.error("The hook name must be a non-empty string."),!1):/^__/.test(e)?(console.error("The hook name cannot begin with `__`."),!1):!!/^[a-zA-Z][a-zA-Z0-9_.-]*$/.test(e)||(console.error("The hook name can only contain numbers, letters, dashes, periods and underscores."),!1)},g=function(e,t){return function(n,r,i){var o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:10,a=e[t];if(y(n)&&m(r))if("function"==typeof i)if("number"==typeof o){var s={callback:i,priority:o,namespace:r};if(a[n]){var l,c=a[n].handlers;for(l=c.length;l>0&&!(o>=c[l-1].priority);l--);l===c.length?c[l]=s:c.splice(l,0,s),a.__current.forEach((function(e){e.name===n&&e.currentIndex>=l&&e.currentIndex++}))}else a[n]={handlers:[s],runs:0};"hookAdded"!==n&&e.doAction("hookAdded",n,r,i,o)}else console.error("If specified, the hook priority must be a number.");else console.error("The hook callback must be a function.")}},b=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return function(r,i){var o=e[t];if(y(r)&&(n||m(i))){if(!o[r])return 0;var a=0;if(n)a=o[r].handlers.length,o[r]={runs:o[r].runs,handlers:[]};else for(var s=o[r].handlers,l=function(e){s[e].namespace===i&&(s.splice(e,1),a++,o.__current.forEach((function(t){t.name===r&&t.currentIndex>=e&&t.currentIndex--})))},c=s.length-1;c>=0;c--)l(c);return"hookRemoved"!==r&&e.doAction("hookRemoved",r,i),a}}},S=function(e,t){return function(n,r){var i=e[t];return void 0!==r?n in i&&i[n].handlers.some((function(e){return e.namespace===r})):n in i}},k=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return function(r){var i=e[t];i[r]||(i[r]={handlers:[],runs:0}),i[r].runs++;for(var o=i[r].handlers,a=arguments.length,s=new Array(a>1?a-1:0),l=1;l<a;l++)s[l-1]=arguments[l];if(!o||!o.length)return n?s[0]:void 0;var c={name:r,currentIndex:0};for(i.__current.push(c);c.currentIndex<o.length;){var u=o[c.currentIndex].callback.apply(null,s);n&&(s[0]=u),c.currentIndex++}return i.__current.pop(),n?s[0]:void 0}},w=function(e,t){return function(){var n,r,i=e[t];return null!==(n=null===(r=i.__current[i.__current.length-1])||void 0===r?void 0:r.name)&&void 0!==n?n:null}},x=function(e,t){return function(n){var r=e[t];return void 0===n?void 0!==r.__current[0]:!!r.__current[0]&&n===r.__current[0].name}},E=function(e,t){return function(n){var r=e[t];if(y(n))return r[n]&&r[n].runs?r[n].runs:0}},_=new function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.actions=Object.create(null),this.actions.__current=[],this.filters=Object.create(null),this.filters.__current=[],this.addAction=g(this,"actions"),this.addFilter=g(this,"filters"),this.removeAction=b(this,"actions"),this.removeFilter=b(this,"filters"),this.hasAction=S(this,"actions"),this.hasFilter=S(this,"filters"),this.removeAllActions=b(this,"actions",!0),this.removeAllFilters=b(this,"filters",!0),this.doAction=k(this,"actions"),this.applyFilters=k(this,"filters",!0),this.currentAction=w(this,"actions"),this.currentFilter=w(this,"filters"),this.doingAction=x(this,"actions"),this.doingFilter=x(this,"filters"),this.didAction=E(this,"actions"),this.didFilter=E(this,"filters")},L=(_.addAction,_.addFilter,_.removeAction,_.removeFilter,_.hasAction,_.hasFilter,_.removeAllActions,_.removeAllFilters,_.doAction,_.applyFilters,_.currentAction,_.currentFilter,_.doingAction,_.doingFilter,_.didAction,_.didFilter,_.actions,_.filters,function(e,t,n){var r=new f({}),i=new Set,o=function(){i.forEach((function(e){return e()}))},a=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"default";r.data[t]=p(p(p({},h),r.data[t]),e),r.data[t][""]=p(p({},h[""]),r.data[t][""])},s=function(e,t){a(e,t),o()},l=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"default",t=arguments.length>1?arguments[1]:void 0,n=arguments.length>2?arguments[2]:void 0,i=arguments.length>3?arguments[3]:void 0,o=arguments.length>4?arguments[4]:void 0;return r.data[e]||a(void 0,e),r.dcnpgettext(e,t,n,i,o)},c=function(){return arguments.length>0&&void 0!==arguments[0]?arguments[0]:"default"},u=function(e,t,r){var i=l(r,t,e);return n?(i=n.applyFilters("i18n.gettext_with_context",i,e,t,r),n.applyFilters("i18n.gettext_with_context_"+c(r),i,e,t,r)):i};if(n){var d=function(e){v.test(e)&&o()};n.addAction("hookAdded","core/i18n",d),n.addAction("hookRemoved","core/i18n",d)}return{getLocaleData:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"default";return r.data[e]},setLocaleData:s,resetLocaleData:function(e,t){r.data={},r.pluralForms={},s(e,t)},subscribe:function(e){return i.add(e),function(){return i.delete(e)}},__:function(e,t){var r=l(t,void 0,e);return n?(r=n.applyFilters("i18n.gettext",r,e,t),n.applyFilters("i18n.gettext_"+c(t),r,e,t)):r},_x:u,_n:function(e,t,r,i){var o=l(i,void 0,e,t,r);return n?(o=n.applyFilters("i18n.ngettext",o,e,t,r,i),n.applyFilters("i18n.ngettext_"+c(i),o,e,t,r,i)):o},_nx:function(e,t,r,i,o){var a=l(o,i,e,t,r);return n?(a=n.applyFilters("i18n.ngettext_with_context",a,e,t,r,i,o),n.applyFilters("i18n.ngettext_with_context_"+c(o),a,e,t,r,i,o)):a},isRTL:function(){return"rtl"===u("ltr","text direction")},hasTranslation:function(e,t,i){var o,a,s=t?t+""+e:e,l=!(null===(o=r.data)||void 0===o||null===(a=o[null!=i?i:"default"])||void 0===a||!a[s]);return n&&(l=n.applyFilters("i18n.has_translation",l,e,t,i),l=n.applyFilters("i18n.has_translation_"+c(i),l,e,t,i)),l}}}(0,0,_)),A=(L.getLocaleData.bind(L),L.setLocaleData.bind(L),L.resetLocaleData.bind(L),L.subscribe.bind(L),L.__.bind(L)),C=(L._x.bind(L),L._n.bind(L),L._nx.bind(L),L.isRTL.bind(L),L.hasTranslation.bind(L),"frm_hidden");function T(e){return T="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},T(e)}function q(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,P(r.key),r)}}function P(e){var t=function(e,t){if("object"!=T(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=T(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"==T(t)?t:String(t)}Promise.resolve(),new URL(window.location.href).searchParams,window.frmDom.util.onClickPreventDefault;var O=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.radioElements=document.querySelectorAll(".frm-style-component.frm-radio-component"),0!==this.radioElements.length&&this.init()}var t,n;return t=e,(n=[{key:"init",value:function(){var e=this;this.radioElements.forEach((function(t){e.initOnRadioChange(t)})),this.initTrackerOnAccordionClick()}},{key:"initTrackerOnAccordionClick",value:function(){var e=this;document.querySelectorAll("#frm_style_sidebar .accordion-section h3").forEach((function(t){t.addEventListener("click",(function(t){t.target.closest(".accordion-section").querySelectorAll('.frm-style-component.frm-radio-component input[type="radio"]:checked').forEach((function(t){setTimeout((function(){return e.onRadioChange(t)}),200)}))}))}))}},{key:"initOnRadioChange",value:function(e){var t=this;e.querySelectorAll('input[type="radio"]').forEach((function(e){e.checked&&t.onRadioChange(e),e.addEventListener("change",(function(e){t.onRadioChange(e.target)}))}))}},{key:"onRadioChange",value:function(e){var t=e.closest(".frm-style-component.frm-radio-component"),n=t.querySelector('input[type="radio"]:checked + label');null!==n&&(this.moveTracker(n,t),this.hideExtraElements(e),this.maybeShowExtraElements(e))}},{key:"maybeShowExtraElements",value:function(e){var t=e.getAttribute("data-frm-show-element");if(null!==t){var n=document.querySelectorAll('div[data-frm-element="'.concat(t,'"]'));0!==n.length&&n.forEach((function(e){(function(e){null==e||e.classList.remove(C)})(e),e.classList.add("frm-element-is-visible")}))}}},{key:"hideExtraElements",value:function(){var e=document.querySelectorAll(".frm-element-is-visible");0!==e.length&&e.forEach((function(e){e.classList.remove("frm-element-is-visible"),e.classList.add("frm_hidden"),function(e){null==e||e.classList.add(C)}(e)}))}},{key:"moveTracker",value:function(e,t){var n=e.offsetLeft,r=e.offsetWidth,i=t.querySelector(".frm-radio-active-tracker");i.style.left=0,i.style.width="".concat(r,"px"),i.style.transform="translateX(".concat(n,"px)")}}])&&q(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();function j(e){return j="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},j(e)}function F(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,D(r.key),r)}}function D(e){var t=function(e,t){if("object"!=j(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=j(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"==j(t)?t:String(t)}var I=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.component=t;try{var n=JSON.parse(this.component.dataset.willChange);this.data={propagateInputs:this.initPropagationList(n),changeEvent:new Event("change",{bubbles:!0})}}catch(e){console.error('Error parsing JSON data from "will-change" attribute.',e)}}var t,n;return t=e,(n=[{key:"initPropagationList",value:function(e){var t=[];return e.forEach((function(e){var n=document.querySelector('input[name="'.concat(e,'"]'));null!==n&&t.push(n)})),t}},{key:"updateAllDependentElements",value:function(e){this.data.propagateInputs.forEach((function(t){t.value=e})),this.data.propagateInputs[0].dispatchEvent(this.data.changeEvent)}}])&&F(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();function V(e){return V="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},V(e)}function W(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,M(r.key),r)}}function M(e){var t=function(e,t){if("object"!=V(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=V(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"==V(t)?t:String(t)}var X=function(){function e(){var t=this;if(function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.sliderElements=document.querySelectorAll(".frm-slider-component"),0!==this.sliderElements.length){this.sliderBulletWidth=16,this.sliderMarginRight=5,this.eventsChange=[];var n=frmDom.util.debounce;this.valueChangeDebouncer=n((function(e){return t.triggerValueChange(e)}),25),this.initOptions(),this.init()}}var t,n;return t=e,(n=[{key:"initOptions",value:function(){var e=this;this.options=[],this.sliderElements.forEach((function(t,n){var r=t.classList.contains("frm-has-multiple-values")?t.closest(".frm-style-component"):t;e.options.push({dragging:!1,startX:0,translateX:0,maxValue:parseInt(t.dataset.maxValue,10),element:t,index:n,value:0,dependentUpdater:r.classList.contains("frm-style-dependent-updater-component")?new I(r):null})}))}},{key:"init",value:function(){this.initSlidersPosition(),this.initDraggable()}},{key:"initDraggable",value:function(){var e=this;this.sliderElements.forEach((function(t,n){e.eventsChange[n]=new Event("change",{bubbles:!0,cancelable:!0});var r=t.querySelector(".frm-slider-bullet"),i=t.querySelector('.frm-slider-value input[type="text"]');i.addEventListener("change",(function(r){var o=t.querySelector("select").value;e.getMaxValue(o,n)<parseInt(r.target.value,10)||(e.initSliderWidth(t),e.updateValue(t,i.value+o),e.triggerValueChange(n))})),e.expandSliderGroup(t),e.updateOnUnitChange(t,i,n),e.changeSliderPositionOnClick(t,i,n),r.addEventListener("mousedown",(function(r){r.preventDefault(),r.stopPropagation(),t.classList.contains("frm-disabled")||e.enableDragging(r,n)})),r.addEventListener("mousemove",(function(r){t.classList.contains("frm-disabled")||e.moveTracker(r,n)})),r.addEventListener("mouseup",(function(r){t.classList.contains("frm-disabled")||e.disableDragging(n,r)})),r.addEventListener("mouseleave",(function(r){t.classList.contains("frm-disabled")||e.disableDragging(n,r)}))}))}},{key:"expandSliderGroup",value:function(e){var t=e.querySelector(".frmsvg");if(void 0!==e.dataset.displaySliders&&null!==t){var n=this.getSliderGroupItems(e);t.addEventListener("click",(function(){n.forEach((function(e){e.classList.toggle("frm_hidden")}))}))}}},{key:"updateOnUnitChange",value:function(e,t,n){var r=this;e.querySelector("select").addEventListener("change",(function(i){var o=i.target.value.toLowerCase();if("auto"===o)return e.classList.add("frm-disabled"),r.updateValue(e,"auto"),void r.triggerValueChange(n);e.classList.remove("frm-disabled"),r.options[n].fullValue=t.value+o,r.updateValue(e,r.options[n].fullValue),r.triggerValueChange(n)}))}},{key:"changeSliderPositionOnClick",value:function(e,t,n){var r=this,i=e.querySelector(".frm-slider"),o=new Event("change",{bubbles:!0,cancelable:!0});i.addEventListener("click",(function(a){if(!e.classList.contains("frm-disabled")&&(a.preventDefault(),a.stopPropagation(),a.target.classList.contains("frm-slider")||a.target.classList.contains("frm-slider-active-track"))){var s=i.offsetWidth-r.sliderBulletWidth,l=i.getBoundingClientRect(),c=a.clientX-l.left-r.sliderBulletWidth,u=e.querySelector("select").value,f=r.calculateValue(s,c,r.getMaxValue(u,n));f<0||(r.options[n].fullValue=r.updateValue(e,f+u),r.initChildSlidersWidth(e,c,n,f+u),t.value=f,t.dispatchEvent(o))}}))}},{key:"getSliderGroupItems",value:function(e){if(void 0===e.dataset.displaySliders)return[];var t=e.dataset.displaySliders.split(",").map((function(e){return'.frm-slider-component[data-type="'.concat(e,'"]')})).join(", ");return e.closest(".frm-style-component").querySelectorAll(t)}},{key:"initSlidersPosition",value:function(){var e=this,t=document.querySelectorAll("#frm_style_sidebar .accordion-section h3"),n=document.querySelector(".frm-quick-settings");null!==n&&this.initSlidersWidth(n),t.forEach((function(t){t.addEventListener("click",(function(t){e.initSlidersWidth(t.target.closest(".accordion-section"))}))})),this.initSliderPositionOnFieldShapeChange()}},{key:"initSliderPositionOnFieldShapeChange",value:function(){var e=this,t=document.querySelector(".frm-style-component.frm-field-shape");null!==t&&t.querySelectorAll('input[type="radio"]').forEach((function(t){t.addEventListener("change",(function(t){if(t.target.checked&&"rounded-corner"===t.target.value){var n=document.querySelector('div[data-frm-element="field-shape-corner-radius"] .frm-slider-component');e.initSliderWidth(n)}}))}))}},{key:"initSlidersWidth",value:function(e){var t=this;e.querySelectorAll(".frm-slider-component").forEach((function(e){setTimeout((function(){t.initSliderWidth(e)}),100)}))}},{key:"initSliderWidth",value:function(e){var t=this.getSliderIndex(e),n=e.querySelector(".frm-slider").offsetWidth-this.sliderBulletWidth,r=parseInt(e.querySelector('.frm-slider-value input[type="text"]').value,10),i=e.querySelector("select").value,o="%"===i?Math.round(n*r/100):Math.ceil(r/this.options[t].maxValue*n);e.querySelector(".frm-slider-active-track").style.width="".concat(o,"px"),this.options[t].translateX=o,this.options[t].value=r+i}},{key:"initChildSlidersWidth",value:function(e,t,n,r){var i=this;(e.classList.contains("frm-has-independent-fields")||e.classList.contains("frm-has-multiple-values"))&&(e.classList.contains("frm-has-independent-fields")?e.querySelectorAll(".frm-independent-slider-field"):this.getSliderGroupItems(e)).forEach((function(e,o){e.querySelector(".frm-slider-active-track").style.width="".concat(t,"px"),i.options[n+o+1].translateX=t,i.options[n+o+1].value=r}))}},{key:"getSliderIndex",value:function(e){return this.options.filter((function(t){return t.element===e}))[0].index}},{key:"moveTracker",value:function(e,t){if(this.options[t].dragging){var n=e.clientX-this.options[t].startX,r=this.sliderElements[t],i=r.querySelector(".frm-slider").offsetWidth;if(!((n=Math.max(n,0))+this.sliderBulletWidth/2+this.sliderMarginRight>=i)){var o=r.querySelector("select").value,a=this.calculateValue(i,n,this.getMaxValue(o,t));r.querySelector('.frm-slider-value input[type="text"]').value=a,r.querySelector(".frm-slider-bullet .frm-slider-value-label").innerText=a,r.querySelector(".frm-slider-active-track").style.width="".concat(n,"px"),this.initChildSlidersWidth(r,n,t,a+o),this.options[t].translateX=n,this.options[t].value=a+o,this.options[t].fullValue=this.updateValue(r,this.options[t].value),this.valueChangeDebouncer(t)}}}},{key:"getMaxValue",value:function(e,t){return"%"===e?100:this.options[t].maxValue}},{key:"enableDragging",value:function(e,t){e.target.classList.add("frm-dragging"),this.options[t].dragging=!0,this.options[t].startX=e.clientX-this.options[t].translateX}},{key:"disableDragging",value:function(e,t){!1!==this.options[e].dragging&&(t.target.classList.remove("frm-dragging"),this.options[e].dragging=!1,this.triggerValueChange(e))}},{key:"triggerValueChange",value:function(e){var t=this;if(null===this.options[e].dependentUpdater){var n=this.sliderElements[e].classList.contains("frm-has-multiple-values")?this.sliderElements[e].closest(".frm-style-component").querySelector('input[type="hidden"]'):this.sliderElements[e].querySelectorAll('.frm-slider-value input[type="hidden"]');n instanceof NodeList?n.forEach((function(n){n.dispatchEvent(t.eventsChange[e])})):n.dispatchEvent(this.eventsChange[e])}else this.options[e].dependentUpdater.updateAllDependentElements(this.options[e].fullValue)}},{key:"calculateValue",value:function(e,t,n){var r=Math.ceil(this.sliderBulletWidth*(t/e)),i=Math.ceil((t+r)/e*n);return Math.min(i,n)}},{key:"updateValue",value:function(e,t){var n=this;if(e.classList.contains("frm-has-multiple-values")){var r=e.closest(".frm-style-component").querySelector('input[type="hidden"]'),i=r.value.split(" "),o=e.dataset.type;switch(i[2]||(i[2]="0px"),i[3]||(i[3]="0px"),o){case"vertical":i[0]=t,i[2]=t;break;case"horizontal":i[1]=t,i[3]=t;break;case"top":i[0]=t;break;case"bottom":i[2]=t;break;case"left":i[3]=t;break;case"right":i[1]=t}var a=i.join(" ");return r.value=a,this.getSliderGroupItems(e).forEach((function(e){var r=n.getUnitMeasureFromValue(t);e.querySelector('.frm-slider-value input[type="text"]').value=parseInt(t,10),e.querySelector("select").value=r})),a}if(e.classList.contains("frm-has-independent-fields")){var s=e.querySelectorAll('.frm-slider-value input[type="hidden"]'),l=e.querySelectorAll('.frm-slider-value input[type="text"]');return s.forEach((function(e,n){e.value=t,l[n+1].value=parseInt(t,10)})),t}return e.querySelector('.frm-slider-value input[type="hidden"]').value=t,t}},{key:"getUnitMeasureFromValue",value:function(e){return["%","px","em"].find((function(t){return e.includes(t)}))||""}}])&&W(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();function R(e){return R="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},R(e)}function U(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,N(r.key),r)}}function N(e){var t=function(e,t){if("object"!=R(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=R(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"==R(t)?t:String(t)}var z=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),void 0!==t&&(this.wrapper=t instanceof Element?t:document.querySelector(t),null!==this.wrapper&&(this.flexboxSlidesGap="16px",this.navs=this.wrapper.querySelectorAll(".frm-tabs-navs ul > li"),this.slideTrackLine=this.wrapper.querySelector(".frm-tabs-active-underline"),this.slideTrack=this.wrapper.querySelector(".frm-tabs-slide-track"),this.slides=this.wrapper.querySelectorAll(".frm-tabs-slide-track > div"),this.init()))}var t,n;return t=e,(n=[{key:"init",value:function(){var e=this;null!==this.wrapper&&this.navs.length&&null!==this.trackLine&&null!==this.slideTrack&&this.slides.length&&(this.initDefaultSlideTrackerWidth(),this.navs.forEach((function(t,n){t.addEventListener("click",(function(t){return e.onNavClick(t,n)}))})))}},{key:"onNavClick",value:function(e,t){this.removeActiveClassnameFromNavs(),e.target.classList.add("frm-active"),this.initSlideTrackUnderline(e.target,t),this.changeSlide(t)}},{key:"initDefaultSlideTrackerWidth",value:function(){this.slideTrackLine.dataset.initialWidth&&(this.slideTrackLine.style.width="".concat(this.slideTrackLine.dataset.initialWidth,"px"))}},{key:"initSlideTrackUnderline",value:function(e,t){this.slideTrackLine.classList.remove("frm-first","frm-last");var n=void 0!==e?e:this.navs.filter((function(e){return e.classList.contains("frm-active")}));this.slideTrackLine.style.transform="translateX(".concat(n.offsetLeft,"px)"),this.slideTrackLine.style.width=n.clientWidth+"px",this.navs.length!==t+1?0===t&&this.slideTrackLine.classList.add("frm-first"):this.slideTrackLine.classList.add("frm-last")}},{key:"changeSlide",value:function(e){this.removeActiveClassnameFromSlides();var t=0==e?"0px":"calc( ( ".concat(100*e,"% + ").concat(parseInt(this.flexboxSlidesGap,10)*e,"px ) * -1 )");this.slideTrack.style.transform="translateX(".concat(t,")"),e in this.slides&&this.slides[e].classList.add("frm-active")}},{key:"removeActiveClassnameFromSlides",value:function(){this.slides.forEach((function(e){return e.classList.remove("frm-active")}))}},{key:"removeActiveClassnameFromNavs",value:function(){this.navs.forEach((function(e){return e.classList.remove("frm-active")}))}}])&&U(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();function B(e){return B="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},B(e)}function G(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,$(r.key),r)}}function $(e){var t=function(e,t){if("object"!=B(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=B(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"==B(t)?t:String(t)}var Z=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.elements=document.querySelectorAll(".frm-style-tabs-wrapper"),0!==this.elements.length&&this.init()}var t,n;return t=e,(n=[{key:"init",value:function(){this.elements.forEach((function(e){new z(e)}))}},{key:"initOnTabClick",value:function(e){var t=this;this.initActiveBackgroundWidth(e),e.querySelectorAll(".frm-tab-item").forEach((function(e){e.addEventListener("click",(function(e){t.onTabClick(e.target.closest(".frm-tabs-wrapper"))}))}))}}])&&G(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();function J(e){return J="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},J(e)}function K(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,H(r.key),r)}}function H(e){var t=function(e,t){if("object"!=J(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var r=n.call(e,"string");if("object"!=J(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"==J(t)?t:String(t)}new(function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.success=frmDom.success,this.init(),this.initHover()}var t,n;return t=e,(n=[{key:"init",value:function(){new O,new X,new Z,this.initColorPickerDependentUpdaterComponents(),this.initStyleClassCopyToClipboard(A("The class name has been copied.","formidable"))}},{key:"initColorPickerDependentUpdaterComponents",value:function(){var e=document.querySelectorAll(".frm-style-dependent-updater-component.frm-colorpicker"),t=[];e.forEach((function(e){var n=e.querySelector("input.hex"),r=void 0!==n?n.getAttribute("id"):null;null!==r&&t.push({id:r,dependentUpdaterClass:new I(e,"colorpicker")})})),wp.hooks.addAction("frm_style_options_color_change","formidable",(function(e){var n=e.event,r=e.value,i=n.target.closest(".wp-picker-container"),o=n.target.getAttribute("id");i.querySelector(".wp-color-result-text").innerText=r,t.forEach((function(e){e.id===o&&e.dependentUpdaterClass.updateAllDependentElements(r)}))}))}},{key:"initHover",value:function(){var e=document.querySelector(".frm-right-panel .styling_settings .accordion-container");if(null!==e){var t=document.createElement("div");t.classList.add("frm_hidden"),t.classList.add("frm-style-settings-hover"),e.appendChild(t),e.querySelector(":scope > ul").querySelectorAll(":scope > li").forEach((function(e){e.querySelector("h3").addEventListener("mouseover",(function(e){t.style.transform="translateY(".concat(e.target.closest("li").offsetTop,"px)"),t.classList.add("frm-animating"),t.classList.remove("frm_hidden"),setTimeout((function(){t.classList.remove("frm-animating")}),250)}))})),document.querySelectorAll("#frm_style_sidebar .accordion-section h3").forEach((function(e){e.addEventListener("click",(function(){t.classList.add("frm_hidden")}))}))}}},{key:"initStyleClassCopyToClipboard",value:function(e){var t=this;document.querySelector(".frm-copy-text").addEventListener("click",(function(n){var r=n.target.innerText;navigator.clipboard.writeText(r).then((function(){t.success(e)}))}))}}])&&K(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}())}()}();