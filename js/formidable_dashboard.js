/*! For license information please see formidable_dashboard.js.LICENSE.txt */
(()=>{"use strict";var t,e,i,n,r={229:(t,e)=>{Object.defineProperty(e,"__esModule",{value:!0});var i=function(){function t(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}return function(e,i,n){return i&&t(e.prototype,i),n&&t(e,n),e}}();e.FrmCounter=function(){function t(e,i){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),!e instanceof Element||null===e.getAttribute("data-counter")||(this.template="default",null!==e.getAttribute("data-type")&&(this.template=e.getAttribute("data-type")),this.element=e,this.value=parseInt(e.getAttribute("data-counter"),10),this.activeCounter=0,this.speed=void 0!==i&&void 0!==i.speed?i.speed:270,this.valueStep=Math.ceil(this.value/this.speed),this.timeoutInterval=this.initTimeoutInterval(),0!==this.value&&this.animate())}return i(t,[{key:"initTimeoutInterval",value:function(){return this.value<10?160:this.value<70?40:4}},{key:"formatNumber",value:function(t){return"currency"===this.template?t.toLocaleString(void 0,{minimumFractionDigits:2}):t}},{key:"animate",value:function(){var t=this;this.activeCounter<this.value?(this.activeCounter+=this.valueStep,this.element.innerText=this.formatNumber(this.activeCounter),setTimeout((function(){t.animate()}),this.timeoutInterval)):this.element.innerText=this.formatNumber(this.value)}}]),t}()},579:(t,e,i)=>{Object.defineProperty(e,"__esModule",{value:!0}),e.FrmTabsNavigator=void 0;var n,r=function(){function t(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}return function(e,i,n){return i&&t(e.prototype,i),n&&t(e,n),e}}(),o=(n=i(772))&&n.__esModule?n:{default:n};e.FrmTabsNavigator=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),void 0!==e&&(this.flexboxSlidesGap="16px",this.wrapper=document.querySelector(e),this.navs=this.wrapper.querySelectorAll(".frm-tabs-navs ul > li"),this.slideTrackLine=this.wrapper.querySelector(".frm-tabs-active-underline"),this.slideTrack=this.wrapper.querySelector(".frm-tabs-slide-track"),this.slides=this.wrapper.querySelectorAll(".frm-tabs-slide-track > div"),this.init())}return r(t,[{key:"init",value:function(){var t=this;null!==this.wrapper&&null!==this.navs&&null!==this.trackLine&&null!==this.slideTrack&&null!==this.slides&&(this.navs.forEach((function(e,i){e.addEventListener("click",(function(e){return t.onNavClick(e,i)}))})),this.initSlideScrollbar())}},{key:"onNavClick",value:function(t,e){this.removeActiveClassnameFromNavs(),t.target.classList.add("frm-active"),this.initSlideTrackUnterline(t.target),this.changeSlide(e)}},{key:"initSlideTrackUnterline",value:function(t){var e=void 0!==t?t:this.navs.filter((function(t){return t.classList.contains("frm-active")}));this.slideTrackLine.style.transform="translateX("+e.offsetLeft+"px)",this.slideTrackLine.style.width=e.offsetWidth+"px"}},{key:"initSlideScrollbar",value:function(){this.slides.forEach((function(t){new o.default(t)}))}},{key:"changeSlide",value:function(t){this.removeActiveClassnameFromSlides();var e=0==t?"0px":"calc( ( "+100*t+"% + "+this.flexboxSlidesGap+" ) * -1 )";this.slideTrack.style.transform="translateX("+e+")",void 0!==this.slides[t]&&this.slides[t].classList.add("frm-active")}},{key:"removeActiveClassnameFromSlides",value:function(){this.slides.forEach((function(t){return t.classList.remove("frm-active")}))}},{key:"removeActiveClassnameFromNavs",value:function(){this.navs.forEach((function(t){return t.classList.remove("frm-active")}))}}]),t}()},772:(t,e,i)=>{function n(t){return getComputedStyle(t)}function r(t,e){for(var i in e){var n=e[i];"number"==typeof n&&(n+="px"),t.style[i]=n}return t}function o(t){var e=document.createElement("div");return e.className=t,e}i.r(e),i.d(e,{default:()=>W});var l="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector);function a(t,e){if(!l)throw new Error("No element matching method supported");return l.call(t,e)}function s(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function c(t,e){return Array.prototype.filter.call(t.children,(function(t){return a(t,e)}))}var h={main:"ps",rtl:"ps__rtl",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},u={x:null,y:null};function d(t,e){var i=t.element.classList,n=h.state.scrolling(e);i.contains(n)?clearTimeout(u[e]):i.add(n)}function f(t,e){u[e]=setTimeout((function(){return t.isAlive&&t.element.classList.remove(h.state.scrolling(e))}),t.settings.scrollingThreshold)}var p=function(t){this.element=t,this.handlers={}},v={isEmpty:{configurable:!0}};p.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},p.prototype.unbind=function(t,e){var i=this;this.handlers[t]=this.handlers[t].filter((function(n){return!(!e||n===e)||(i.element.removeEventListener(t,n,!1),!1)}))},p.prototype.unbindAll=function(){for(var t in this.handlers)this.unbind(t)},v.isEmpty.get=function(){var t=this;return Object.keys(this.handlers).every((function(e){return 0===t.handlers[e].length}))},Object.defineProperties(p.prototype,v);var m=function(){this.eventElements=[]};function b(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}function g(t,e,i,n,r){var o;if(void 0===n&&(n=!0),void 0===r&&(r=!1),"top"===e)o=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");o=["contentWidth","containerWidth","scrollLeft","x","left","right"]}!function(t,e,i,n,r){var o=i[0],l=i[1],a=i[2],s=i[3],c=i[4],h=i[5];void 0===n&&(n=!0),void 0===r&&(r=!1);var u=t.element;t.reach[s]=null,u[a]<1&&(t.reach[s]="start"),u[a]>t[o]-t[l]-1&&(t.reach[s]="end"),e&&(u.dispatchEvent(b("ps-scroll-"+s)),e<0?u.dispatchEvent(b("ps-scroll-"+c)):e>0&&u.dispatchEvent(b("ps-scroll-"+h)),n&&function(t,e){d(t,e),f(t,e)}(t,s)),t.reach[s]&&(e||r)&&u.dispatchEvent(b("ps-"+s+"-reach-"+t.reach[s]))}(t,i,o,n,r)}function y(t){return parseInt(t,10)||0}m.prototype.eventElement=function(t){var e=this.eventElements.filter((function(e){return e.element===t}))[0];return e||(e=new p(t),this.eventElements.push(e)),e},m.prototype.bind=function(t,e,i){this.eventElement(t).bind(e,i)},m.prototype.unbind=function(t,e,i){var n=this.eventElement(t);n.unbind(e,i),n.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(n),1)},m.prototype.unbindAll=function(){this.eventElements.forEach((function(t){return t.unbindAll()})),this.eventElements=[]},m.prototype.once=function(t,e,i){var n=this.eventElement(t),r=function(t){n.unbind(e,r),i(t)};n.bind(e,r)};var w={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||"maxTouchPoints"in window.navigator&&window.navigator.maxTouchPoints>0||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)};function Y(t){var e=t.element,i=Math.floor(e.scrollTop),n=e.getBoundingClientRect();t.containerWidth=Math.round(n.width),t.containerHeight=Math.round(n.height),t.contentWidth=e.scrollWidth,t.contentHeight=e.scrollHeight,e.contains(t.scrollbarXRail)||(c(e,h.element.rail("x")).forEach((function(t){return s(t)})),e.appendChild(t.scrollbarXRail)),e.contains(t.scrollbarYRail)||(c(e,h.element.rail("y")).forEach((function(t){return s(t)})),e.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=S(t,y(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=y((t.negativeScrollAdjustment+e.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=S(t,y(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=y(i*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),function(t,e){var i={width:e.railXWidth},n=Math.floor(t.scrollTop);e.isRtl?i.left=e.negativeScrollAdjustment+t.scrollLeft+e.containerWidth-e.contentWidth:i.left=t.scrollLeft,e.isScrollbarXUsingBottom?i.bottom=e.scrollbarXBottom-n:i.top=e.scrollbarXTop+n,r(e.scrollbarXRail,i);var o={top:n,height:e.railYHeight};e.isScrollbarYUsingRight?e.isRtl?o.right=e.contentWidth-(e.negativeScrollAdjustment+t.scrollLeft)-e.scrollbarYRight-e.scrollbarYOuterWidth-9:o.right=e.scrollbarYRight-t.scrollLeft:e.isRtl?o.left=e.negativeScrollAdjustment+t.scrollLeft+2*e.containerWidth-e.contentWidth-e.scrollbarYLeft-e.scrollbarYOuterWidth:o.left=e.scrollbarYLeft+t.scrollLeft,r(e.scrollbarYRail,o),r(e.scrollbarX,{left:e.scrollbarXLeft,width:e.scrollbarXWidth-e.railBorderXWidth}),r(e.scrollbarY,{top:e.scrollbarYTop,height:e.scrollbarYHeight-e.railBorderYWidth})}(e,t),t.scrollbarXActive?e.classList.add(h.state.active("x")):(e.classList.remove(h.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,e.scrollLeft=!0===t.isRtl?t.contentWidth:0),t.scrollbarYActive?e.classList.add(h.state.active("y")):(e.classList.remove(h.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,e.scrollTop=0)}function S(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function X(t,e){var i=e[0],n=e[1],r=e[2],o=e[3],l=e[4],a=e[5],s=e[6],c=e[7],u=e[8],p=t.element,v=null,m=null,b=null;function g(e){e.touches&&e.touches[0]&&(e[r]=e.touches[0].pageY),p[s]=v+b*(e[r]-m),d(t,c),Y(t),e.stopPropagation(),e.type.startsWith("touch")&&e.changedTouches.length>1&&e.preventDefault()}function y(){f(t,c),t[u].classList.remove(h.state.clicking),t.event.unbind(t.ownerDocument,"mousemove",g)}function w(e,l){v=p[s],l&&e.touches&&(e[r]=e.touches[0].pageY),m=e[r],b=(t[n]-t[i])/(t[o]-t[a]),l?t.event.bind(t.ownerDocument,"touchmove",g):(t.event.bind(t.ownerDocument,"mousemove",g),t.event.once(t.ownerDocument,"mouseup",y),e.preventDefault()),t[u].classList.add(h.state.clicking),e.stopPropagation()}t.event.bind(t[l],"mousedown",(function(t){w(t)})),t.event.bind(t[l],"touchstart",(function(t){w(t,!0)}))}var T={"click-rail":function(t){t.element,t.event.bind(t.scrollbarY,"mousedown",(function(t){return t.stopPropagation()})),t.event.bind(t.scrollbarYRail,"mousedown",(function(e){var i=e.pageY-window.pageYOffset-t.scrollbarYRail.getBoundingClientRect().top>t.scrollbarYTop?1:-1;t.element.scrollTop+=i*t.containerHeight,Y(t),e.stopPropagation()})),t.event.bind(t.scrollbarX,"mousedown",(function(t){return t.stopPropagation()})),t.event.bind(t.scrollbarXRail,"mousedown",(function(e){var i=e.pageX-window.pageXOffset-t.scrollbarXRail.getBoundingClientRect().left>t.scrollbarXLeft?1:-1;t.element.scrollLeft+=i*t.containerWidth,Y(t),e.stopPropagation()}))},"drag-thumb":function(t){X(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),X(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(t){var e=t.element;t.event.bind(t.ownerDocument,"keydown",(function(i){if(!(i.isDefaultPrevented&&i.isDefaultPrevented()||i.defaultPrevented)&&(a(e,":hover")||a(t.scrollbarX,":focus")||a(t.scrollbarY,":focus"))){var n,r=document.activeElement?document.activeElement:t.ownerDocument.activeElement;if(r){if("IFRAME"===r.tagName)r=r.contentDocument.activeElement;else for(;r.shadowRoot;)r=r.shadowRoot.activeElement;if(a(n=r,"input,[contenteditable]")||a(n,"select,[contenteditable]")||a(n,"textarea,[contenteditable]")||a(n,"button,[contenteditable]"))return}var o=0,l=0;switch(i.which){case 37:o=i.metaKey?-t.contentWidth:i.altKey?-t.containerWidth:-30;break;case 38:l=i.metaKey?t.contentHeight:i.altKey?t.containerHeight:30;break;case 39:o=i.metaKey?t.contentWidth:i.altKey?t.containerWidth:30;break;case 40:l=i.metaKey?-t.contentHeight:i.altKey?-t.containerHeight:-30;break;case 32:l=i.shiftKey?t.containerHeight:-t.containerHeight;break;case 33:l=t.containerHeight;break;case 34:l=-t.containerHeight;break;case 36:l=t.contentHeight;break;case 35:l=-t.contentHeight;break;default:return}t.settings.suppressScrollX&&0!==o||t.settings.suppressScrollY&&0!==l||(e.scrollTop-=l,e.scrollLeft+=o,Y(t),function(i,n){var r=Math.floor(e.scrollTop);if(0===i){if(!t.scrollbarYActive)return!1;if(0===r&&n>0||r>=t.contentHeight-t.containerHeight&&n<0)return!t.settings.wheelPropagation}var o=e.scrollLeft;if(0===n){if(!t.scrollbarXActive)return!1;if(0===o&&i<0||o>=t.contentWidth-t.containerWidth&&i>0)return!t.settings.wheelPropagation}return!0}(o,l)&&i.preventDefault())}}))},wheel:function(t){var e=t.element;function i(i){var r=function(t){var e=t.deltaX,i=-1*t.deltaY;return void 0!==e&&void 0!==i||(e=-1*t.wheelDeltaX/6,i=t.wheelDeltaY/6),t.deltaMode&&1===t.deltaMode&&(e*=10,i*=10),e!=e&&i!=i&&(e=0,i=t.wheelDelta),t.shiftKey?[-i,-e]:[e,i]}(i),o=r[0],l=r[1];if(!function(t,i,r){if(!w.isWebKit&&e.querySelector("select:focus"))return!0;if(!e.contains(t))return!1;for(var o=t;o&&o!==e;){if(o.classList.contains(h.element.consuming))return!0;var l=n(o);if(r&&l.overflowY.match(/(scroll|auto)/)){var a=o.scrollHeight-o.clientHeight;if(a>0&&(o.scrollTop>0&&r<0||o.scrollTop<a&&r>0))return!0}if(i&&l.overflowX.match(/(scroll|auto)/)){var s=o.scrollWidth-o.clientWidth;if(s>0&&(o.scrollLeft>0&&i<0||o.scrollLeft<s&&i>0))return!0}o=o.parentNode}return!1}(i.target,o,l)){var a=!1;t.settings.useBothWheelAxes?t.scrollbarYActive&&!t.scrollbarXActive?(l?e.scrollTop-=l*t.settings.wheelSpeed:e.scrollTop+=o*t.settings.wheelSpeed,a=!0):t.scrollbarXActive&&!t.scrollbarYActive&&(o?e.scrollLeft+=o*t.settings.wheelSpeed:e.scrollLeft-=l*t.settings.wheelSpeed,a=!0):(e.scrollTop-=l*t.settings.wheelSpeed,e.scrollLeft+=o*t.settings.wheelSpeed),Y(t),a=a||function(i,n){var r=Math.floor(e.scrollTop),o=0===e.scrollTop,l=r+e.offsetHeight===e.scrollHeight,a=0===e.scrollLeft,s=e.scrollLeft+e.offsetWidth===e.scrollWidth;return!(Math.abs(n)>Math.abs(i)?o||l:a||s)||!t.settings.wheelPropagation}(o,l),a&&!i.ctrlKey&&(i.stopPropagation(),i.preventDefault())}}void 0!==window.onwheel?t.event.bind(e,"wheel",i):void 0!==window.onmousewheel&&t.event.bind(e,"mousewheel",i)},touch:function(t){if(w.supportsTouch||w.supportsIePointer){var e=t.element,i={},r=0,o={},l=null;w.supportsTouch?(t.event.bind(e,"touchstart",u),t.event.bind(e,"touchmove",d),t.event.bind(e,"touchend",f)):w.supportsIePointer&&(window.PointerEvent?(t.event.bind(e,"pointerdown",u),t.event.bind(e,"pointermove",d),t.event.bind(e,"pointerup",f)):window.MSPointerEvent&&(t.event.bind(e,"MSPointerDown",u),t.event.bind(e,"MSPointerMove",d),t.event.bind(e,"MSPointerUp",f)))}function a(i,n){e.scrollTop-=n,e.scrollLeft-=i,Y(t)}function s(t){return t.targetTouches?t.targetTouches[0]:t}function c(t){return!(t.pointerType&&"pen"===t.pointerType&&0===t.buttons||(!t.targetTouches||1!==t.targetTouches.length)&&(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function u(t){if(c(t)){var e=s(t);i.pageX=e.pageX,i.pageY=e.pageY,r=(new Date).getTime(),null!==l&&clearInterval(l)}}function d(l){if(c(l)){var u=s(l),d={pageX:u.pageX,pageY:u.pageY},f=d.pageX-i.pageX,p=d.pageY-i.pageY;if(function(t,i,r){if(!e.contains(t))return!1;for(var o=t;o&&o!==e;){if(o.classList.contains(h.element.consuming))return!0;var l=n(o);if(r&&l.overflowY.match(/(scroll|auto)/)){var a=o.scrollHeight-o.clientHeight;if(a>0&&(o.scrollTop>0&&r<0||o.scrollTop<a&&r>0))return!0}if(i&&l.overflowX.match(/(scroll|auto)/)){var s=o.scrollWidth-o.clientWidth;if(s>0&&(o.scrollLeft>0&&i<0||o.scrollLeft<s&&i>0))return!0}o=o.parentNode}return!1}(l.target,f,p))return;a(f,p),i=d;var v=(new Date).getTime(),m=v-r;m>0&&(o.x=f/m,o.y=p/m,r=v),function(i,n){var r=Math.floor(e.scrollTop),o=e.scrollLeft,l=Math.abs(i),a=Math.abs(n);if(a>l){if(n<0&&r===t.contentHeight-t.containerHeight||n>0&&0===r)return 0===window.scrollY&&n>0&&w.isChrome}else if(l>a&&(i<0&&o===t.contentWidth-t.containerWidth||i>0&&0===o))return!0;return!0}(f,p)&&l.preventDefault()}}function f(){t.settings.swipeEasing&&(clearInterval(l),l=setInterval((function(){t.isInitialized?clearInterval(l):o.x||o.y?Math.abs(o.x)<.01&&Math.abs(o.y)<.01?clearInterval(l):t.element?(a(30*o.x,30*o.y),o.x*=.8,o.y*=.8):clearInterval(l):clearInterval(l)}),10))}}},L=function(t,e){var i=this;if(void 0===e&&(e={}),"string"==typeof t&&(t=document.querySelector(t)),!t||!t.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");for(var l in this.element=t,t.classList.add(h.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1},e)this.settings[l]=e[l];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var a,s,c=function(){return t.classList.add(h.state.focus)},u=function(){return t.classList.remove(h.state.focus)};this.isRtl="rtl"===n(t).direction,!0===this.isRtl&&t.classList.add(h.rtl),this.isNegativeScroll=(s=t.scrollLeft,t.scrollLeft=-1,a=t.scrollLeft<0,t.scrollLeft=s,a),this.negativeScrollAdjustment=this.isNegativeScroll?t.scrollWidth-t.clientWidth:0,this.event=new m,this.ownerDocument=t.ownerDocument||document,this.scrollbarXRail=o(h.element.rail("x")),t.appendChild(this.scrollbarXRail),this.scrollbarX=o(h.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",c),this.event.bind(this.scrollbarX,"blur",u),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var d=n(this.scrollbarXRail);this.scrollbarXBottom=parseInt(d.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=y(d.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=y(d.borderLeftWidth)+y(d.borderRightWidth),r(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=y(d.marginLeft)+y(d.marginRight),r(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=o(h.element.rail("y")),t.appendChild(this.scrollbarYRail),this.scrollbarY=o(h.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",c),this.event.bind(this.scrollbarY,"blur",u),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var f=n(this.scrollbarYRail);this.scrollbarYRight=parseInt(f.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=y(f.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?function(t){var e=n(t);return y(e.width)+y(e.paddingLeft)+y(e.paddingRight)+y(e.borderLeftWidth)+y(e.borderRightWidth)}(this.scrollbarY):null,this.railBorderYWidth=y(f.borderTopWidth)+y(f.borderBottomWidth),r(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=y(f.marginTop)+y(f.marginBottom),r(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:t.scrollLeft<=0?"start":t.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:t.scrollTop<=0?"start":t.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach((function(t){return T[t](i)})),this.lastScrollTop=Math.floor(t.scrollTop),this.lastScrollLeft=t.scrollLeft,this.event.bind(this.element,"scroll",(function(t){return i.onScroll(t)})),Y(this)};L.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,r(this.scrollbarXRail,{display:"block"}),r(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=y(n(this.scrollbarXRail).marginLeft)+y(n(this.scrollbarXRail).marginRight),this.railYMarginHeight=y(n(this.scrollbarYRail).marginTop)+y(n(this.scrollbarYRail).marginBottom),r(this.scrollbarXRail,{display:"none"}),r(this.scrollbarYRail,{display:"none"}),Y(this),g(this,"top",0,!1,!0),g(this,"left",0,!1,!0),r(this.scrollbarXRail,{display:""}),r(this.scrollbarYRail,{display:""}))},L.prototype.onScroll=function(t){this.isAlive&&(Y(this),g(this,"top",this.element.scrollTop-this.lastScrollTop),g(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},L.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),s(this.scrollbarX),s(this.scrollbarY),s(this.scrollbarXRail),s(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},L.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter((function(t){return!t.match(/^ps([-_].+|)$/)})).join(" ")};const W=L}},o={};function l(t){var e=o[t];if(void 0!==e)return e.exports;var i=o[t]={exports:{}};return r[t](i,i.exports,l),i.exports}l.d=(t,e)=>{for(var i in e)l.o(e,i)&&!l.o(t,i)&&Object.defineProperty(t,i,{enumerable:!0,get:e[i]})},l.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),l.r=t=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},t=function(){function t(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}return function(e,i,n){return i&&t(e.prototype,i),n&&t(e,n),e}}(),e=l(579),i=l(229),n=new(function(){function n(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),this.options={ajax:{action:"dashboard_ajax_action",dashboardActions:{welcomeBanner:"welcome-banner-cookie",checkEmailIfSubscribed:"email-has-subscribed",saveSubscribedEmail:"save-subscribed-email"}}}}return t(n,[{key:"initInbox",value:function(){var t=this;new e.FrmTabsNavigator(".frm-inbox-wrapper");var i=document.querySelector("#frm_leave_email");document.querySelector("#frm-add-my-email-address").addEventListener("click",(function(){t.saveSubscribedEmail(i.value).then((function(t){}))}))}},{key:"initIntroWidgetAnimation",value:function(){document.querySelectorAll(".frm-dashboard-widget.frm-animate").forEach((function(t,e){t.classList.remove("frm-animate"),t.style.transitionDelay=.025*(e+1)+"s"}))}},{key:"initCounters",value:function(){document.querySelectorAll(".frm-counter").forEach((function(t){return new i.FrmCounter(t)}))}},{key:"initTooltips",value:function(){"undefined"!=typeof bootstrap&&document.querySelectorAll(".frm-has-tooltip").forEach((function(t){new bootstrap.Tooltip(t)}))}},{key:"initCloseWelcomeBanner",value:function(){var t=this,e=document.querySelector(".frm-dashboard-banner-close"),i=document.querySelector(".frm-dashboard-banner");null!==e&&null!==i&&e.addEventListener("click",(function(){t.closeWelcomeBannerSaveCookieRequest().then((function(t){!0===t.success&&i.remove()}))}))}},{key:"checkIfEmailIsSubscribed",value:function(t){var e=this;return new Promise((function(i,n){fetch(window.ajaxurl,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams({action:e.options.ajax.action,dashboard_action:e.options.ajax.dashboardActions.checkEmailIfSubscribed,email:t})}).then((function(t){t.json().then((function(t){i(t)}))}))}))}},{key:"saveSubscribedEmail",value:function(t){var e=this;return new Promise((function(i,n){fetch(window.ajaxurl,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams({action:e.options.ajax.action,dashboard_action:e.options.ajax.dashboardActions.saveSubscribedEmail,email:t})}).then((function(t){t.json().then((function(t){i(t)}))}))}))}},{key:"closeWelcomeBannerSaveCookieRequest",value:function(){var t=this;return new Promise((function(e,i){fetch(window.ajaxurl,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams({action:t.options.ajax.action,dashboard_action:t.options.ajax.dashboardActions.welcomeBanner,banner_has_closed:1})}).then((function(t){t.json().then((function(t){e(t)}))}))}))}}]),n}()),document.addEventListener("DOMContentLoaded",(function(){n.initInbox(),n.initIntroWidgetAnimation(),n.initCounters(),n.initCloseWelcomeBanner(),n.initTooltips()}))})();