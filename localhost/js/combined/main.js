$(document).ready(function(){$.localScroll(),$(".cache").delay(1e3).fadeOut(500),$("#wrapper-header").delay(1500).animate({opacity:"1",width:"100%"},500),$("#wrapper-navbar").delay(2e3).animate({opacity:"1",height:"60px"},500),$("#main-container-image").delay(2500).animate({opacity:"1"},500)});var speed="slow";$("html, body").hide(),$(document).ready(function(){$("html, body").fadeIn(speed,function(){$("a[href], button[href]").click(function(e){var t=$(this).attr("href");0!=t.indexOf("#")&&0!=t.indexOf("javascript:")&&(e.preventDefault(),$("html, body").fadeOut(speed,function(){window.location=t}))})})});var timer,body=document.body;window.addEventListener("scroll",function(){clearTimeout(timer),body.classList.contains("disable-hover")||body.classList.add("disable-hover"),timer=setTimeout(function(){body.classList.remove("disable-hover")},200)},!1),$(document).on("touchstart mouseover","#stripes",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#stripes").stop().animate({scale:"1.2",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchend mouseout","#stripes",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#stripes").stop().animate({scale:"1",opacity:"1"},300),e.handled=!0});var MENUSIDEOPEN=document.getElementById("stripes");MENUSIDEOPEN.addEventListener("click",function(){$("#main-container-menu").stop().animate({left:"0"},300)}),$(document).on("touchstart mouseover","#cross-menu",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#cross-menu").stop().animate({scale:"1.2",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchend mouseout","#cross-menu",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#cross-menu").stop().animate({scale:"1",opacity:"1"},300),e.handled=!0});var MENUSIDECLOSE=document.getElementById("cross-menu");MENUSIDECLOSE.addEventListener("click",function(){$("#main-container-menu").stop().animate({left:"-100%"},300)}),$(document).on("touchstart mouseover","#wrapper-title-2",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#fleche-nav-2").stop().animate({rotate:"90deg",opacity:"1"},300),e.handled=!0}),$(document).on("touchend mouseout","#wrapper-title-2",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#fleche-nav-2").stop().animate({rotate:"0deg",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchstart mouseover","#wrapper-title-3",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#fleche-nav-3").stop().animate({rotate:"90deg",opacity:"1"},300),e.handled=!0}),$(document).on("touchend mouseout","#wrapper-title-3",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#fleche-nav-3").stop().animate({rotate:"0deg",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchstart mouseover","#stripes",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#stripes").stop().animate({scale:"1.2",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchend mouseout","#stripes",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#stripes").stop().animate({scale:"1",opacity:"1"},300),e.handled=!0}),$(document).on("touchstart mouseover","#oldnew-next",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#oldnew-next").stop().animate({scale:"1.2",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchend mouseout","#oldnew-next",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#oldnew-next").stop().animate({scale:"1",opacity:"1"},300),e.handled=!0}),$(document).on("touchstart mouseover","#oldnew-prev",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#oldnew-prev").stop().animate({scale:"1.2",opacity:"0.5"},300),e.handled=!0}),$(document).on("touchend mouseout","#oldnew-prev",function(e){if(e.stopPropagation(),e.preventDefault(),!0===e.handled)return!1;$("#oldnew-prev").stop().animate({scale:"1",opacity:"1"},300),e.handled=!0});