webpackJsonp([22],{CrFi:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=a("Jaym"),s={1:"Манга",4:"OEL-манга",5:"Манхва",6:"Маньхуа",7:"Сингл",8:"Руманга",9:"Комикс"};e.default={props:{item:{type:Object,default:function(){return{}}}},computed:{showMoreBtn:function(){return this.chaptersCount>3},chaptersCount:function(){return this.item.chapters.length},btnText:function(){var t=this.chaptersCount-3;return"показать еще ".concat(t," ").concat(Object(n.t)(t,"главу","главы","глав"))},mangaType:function(){return s[this.item.type]}},methods:{chapterUrl:function(t){var e="/".concat(this.item.slug,"/v").concat(t.volume,"/c").concat(t.number);return t.branch_id?(e+="?bid=".concat(t.branch_id),t.auth_user&&(e+="&ui=".concat(t.auth_user))):t.auth_user&&(e+="?ui=".concat(t.auth_user)),e}}}},F56y:function(t,e,a){var n=a("VU/8")(a("CrFi"),a("qL4X"),!1,null,null,null);t.exports=n.exports},LMAr:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"updates"},[t._l(t.items,function(t,e){return a("app-updates-item",{key:e,attrs:{item:t}})}),t._v(" "),t.pageLoading?a("div",{staticClass:"placeholders"},t._l(3,function(e){return a("div",{key:e,staticClass:"upd-placeholder"},[a("div",{staticClass:"ph-line ph-line_head"}),t._v(" "),a("div",{staticClass:"ph-line ph-line_subhead"}),t._v(" "),a("div",{staticClass:"ph-line ph-line_ch ph-line_ch-one"}),t._v(" "),a("div",{staticClass:"ph-line ph-line_ch ph-line_ch-two"}),t._v(" "),a("div",{staticClass:"ph-line ph-line_ch ph-line_ch-three"})])}),0):t._e(),t._v(" "),!t.pageLoading&&t.hasNextPage?a("button",{staticClass:"button button_block",on:{click:t.nextPage}},[t._v("\n    Показать еще\n  ")]):t._e()],2)},staticRenderFns:[]}},YVaE:function(t,e,a){var n=a("VU/8")(a("g1d7"),a("LMAr"),!1,null,null,null);t.exports=n.exports},cGnW:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=a("wC5p"),s=a("u5FJ"),r=a("YVaE"),i=a.n(r),c=Object(s.l)("#latest-updates");if(c){var o,u,l=new n.a(c,{history:!0,line:!0,preventInit:!0});l.on("changed",function(t){var e=t.name;"my-updates"!==e||o||(o=new i.a({propsData:{mountSelector:'[data-latest-updates="user"]',axiosConfig:{url:"/user/updates"}}})),"all-updates"!==e||u||(u=new i.a({propsData:{requestDataOnCreatedHook:!1,mountSelector:'[data-latest-updates="all"]',axiosConfig:{url:"/latest-updates",method:"POST"}}}))}),l.init(),Object(s.a)(c,"click",".updates__more",function(t,e){var a=e.previousElementSibling,n=e.innerHTML,r=s.g.has(a,"updates__chapters_expanded");if(s.g.toggle(a,"updates__chapters_expanded"),e.innerHTML=Object(s.f)(e,"data-text"),Object(s.f)(e,"data-text",n),r){var i=a.closest(".updates__item"),c=Object(s.i)(i).top;if(c-pageYOffset<0){var o=(Object(s.l)(".header")||{}).offsetHeight;scrollTo(0,c-o)}}})}var p=Object(s.l)("#genres"),d=!1;if(p){var h=Object(s.l)(".tags-short",p),_=Object(s.l)(".tags-more",p);Object(s.c)(_,"click",function(){var t='<i class="fa fa-fw fa-caret-{{dir}}"></i>';(d=!d)?(_.innerHTML="Свернуть ".concat(t.replace("{{dir}}","up")),h.style.height="".concat(h.scrollHeight,"px")):(_.innerHTML="Развернуть ".concat(t.replace("{{dir}}","down")),h.style.height="")})}},g1d7:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n=a("En79"),s=a.n(n),r=a("I3G/"),i=a.n(r),c=a("mtWM"),o=a.n(c),u=a("7/oE"),l=a("mxmQ"),p=a("F56y"),d=a.n(p);function h(t){for(var e=1;e<arguments.length;e++)if(e%2){var a=null!=arguments[e]?arguments[e]:{},n=Object.keys(a);"function"==typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(a).filter(function(t){return Object.getOwnPropertyDescriptor(a,t).enumerable}))),n.forEach(function(e){_(t,e,a[e])})}else Object.defineProperties(t,Object.getOwnPropertyDescriptors(arguments[e]));return t}function _(t,e,a){return e in t?Object.defineProperty(t,e,{value:a,enumerable:!0,configurable:!0,writable:!0}):t[e]=a,t}function v(t,e,a,n,s,r,i){try{var c=t[r](i),o=c.value}catch(t){return void a(t)}c.done?e(o):Promise.resolve(o).then(n,s)}e.default=i.a.extend({components:{AppUpdatesItem:d.a},mixins:[Object(u.a)(!1),l.a],props:{axiosConfig:Object,mountSelector:String},data:function(){return{items:[]}},created:function(){this._autoMount(this.mountSelector),this.hasNextPage=!0},methods:{request:function(){var t,e=(t=s.a.mark(function t(e){var a,n;return s.a.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,o.a.request(h({},this.axiosConfig,{params:e}));case 2:return a=t.sent,n=a.data,this.items=this.items.concat(n.data),t.abrupt("return",n);case 6:case"end":return t.stop()}},t,this)}),function(){var e=this,a=arguments;return new Promise(function(n,s){var r=t.apply(e,a);function i(t){v(r,n,s,i,c,"next",t)}function c(t){v(r,n,s,i,c,"throw",t)}i(void 0)})});return function(t){return e.apply(this,arguments)}}()}})},mxmQ:function(t,e,a){"use strict";var n=a("En79"),s=a.n(n),r=a("tuWI"),i=a.n(r);function c(t,e,a,n,s,r,i){try{var c=t[r](i),o=c.value}catch(t){return void a(t)}c.done?e(o):Promise.resolve(o).then(n,s)}function o(t){return function(){var e=this,a=arguments;return new Promise(function(n,s){var r=t.apply(e,a);function i(t){c(r,n,s,i,o,"next",t)}function o(t){c(r,n,s,i,o,"throw",t)}i(void 0)})}}e.a={components:{AppLoader:i.a},props:{requestDataOnCreatedHook:{type:Boolean,default:!0}},data:function(){return{loading:!0,page:1,pageLoading:!1,hasNextPage:!1,hasPrevPage:!1,scrollTopBeforePaginate:!1}},created:function(){var t=o(s.a.mark(function t(){return s.a.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:if(!this.requestDataOnCreatedHook){t.next=3;break}return t.next=3,this.requestHandler(this.page);case 3:this.loading=!1;case 4:case"end":return t.stop()}},t,this)}));return function(){return t.apply(this,arguments)}}(),methods:{nextPage:function(){this.requestHandler(this.page+1)},prevPage:function(){this.requestHandler(this.page-1)},requestHandler:function(){var t=o(s.a.mark(function t(e){var a,n,r,i;return s.a.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:return a={page:e},this.pageLoading=!0,this.scrollTopBeforePaginate&&window.scrollTo({top:0,behavior:"smooth"}),t.next=5,this.request(a);case 5:n=t.sent,r=n.next_page_url,i=n.prev_page_url,this.page=e,this.pageLoading=!1,this.hasNextPage=null!=r,this.hasPrevPage=null!=i;case 12:case"end":return t.stop()}},t,this)}));return function(e){return t.apply(this,arguments)}}(),resetPagination:function(){this.page=1,this.pageLoading=!1,this.hasNextPage=!1,this.hasPrevPage=!1},request:function(){}}}},qL4X:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"updates__item"},[a("div",{staticClass:"updates__left"},[t.mangaType?a("div",{staticClass:"updates__type"},[t._v("\n      "+t._s(t.mangaType)+"\n    ")]):t._e(),t._v(" "),a("a",{attrs:{href:"/"+t.item.slug}},[a("div",{staticClass:"cover cover_responsive updates__cover",style:{"background-image":"url("+t.$url.coverThumb(t.item)+")"}})]),t._v(" "),t.item.caution>0?a("div",{staticClass:"updates__warning"},[t._v("\n      "+t._s("1"==t.item.caution?"16+":"18+")+"\n    ")]):t._e()]),t._v(" "),a("div",{staticClass:"updates__right"},[a("div",{staticClass:"updates__header"},[a("div",{staticClass:"updates__header-top"},[a("div",{staticClass:"updates__labels"},[t.item.hot>0?a("div",{staticClass:"m-label m-label_alert"},[t._v("\n            популярное\n          ")]):t._e(),t._v(" "),t.item.new>0?a("div",{staticClass:"m-label m-label_success"},[t._v("\n            новое\n          ")]):t._e()]),t._v(" "),a("h4",{staticClass:"updates__name"},[a("a",{staticClass:"link-default",attrs:{href:"/"+t.item.slug+"?section=chapters"}},[t._v(t._s(t.item.rus_name||t.item.name))])])]),t._v(" "),a("div",{staticClass:"updates__header-bottom"},[a("div",{staticClass:"updates__date"},[t._v("\n          "+t._s(t.item.date)+"\n        ")]),t._v(" "),a("h6",{staticClass:"updates__name updates__name_rus"},[a("a",{attrs:{href:"/"+t.item.slug+"?section=chapters"}},[t._v(t._s(t.item.name))])])])]),t._v(" "),a("div",{staticClass:"updates__body"},[a("div",{staticClass:"updates__chapters"},t._l(t.item.chapters,function(e,n){return a("a",{key:n,staticClass:"updates__chapter",attrs:{href:t.chapterUrl(e)}},[a("strong",{staticClass:"updates__chapter-vol"},[t._v("Том "+t._s(e.volume)+" Глава "+t._s(e.number))]),t._v(" "),e.name?a("span",{staticClass:"updates__chapter-name text-truncate"},[t._v(t._s(e.name))]):t._e(),t._v(" "),2==e.status?a("span",{staticClass:"updates__chapter-team text-truncate"},[a("i",{staticClass:"fa fa-lock"})]):t._e()])}),0),t._v(" "),t.showMoreBtn?a("button",{staticClass:"updates__more",attrs:{"data-text":"свернуть"}},[t._v("\n        "+t._s(t.btnText)+"\n      ")]):t._e()])])])},staticRenderFns:[]}}});