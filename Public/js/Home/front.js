// var timer;
// var i = 0;
// var speed = 5000;
function addFavorite() {
	if(document.all) {
		try {
				window.external.addFavorite(window.location.href, document.title);
		} catch(e) {
				alert("加入收藏失败，请使用Ctrl+D进行添加");
		}
	} else if(window.sidebar) {
		window.sidebar.addPanel(document.title, window.location.href, "");
	} else {
		alert("加入收藏失败，请使用Ctrl+D进行添加");
	}
 }
function setHomepage() {
	if(document.all) {
		document.body.style.behavior = 'url(#default#homepage)';
		document.body.setHomePage(window.location.href);
	} else if(window.sidebar) {
		if(window.netscape) {
			try {
					netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			} catch(e) {
					alert("该操作被浏览器拒绝，如果想启用该功能，请在地址栏内输入 about:config,然后将项 signed.applets.codebase_principal_support 值该为true");
			}
		}
		var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
		prefs.setCharPref('browser.startup.homepage', window.location.href);
	} else {
		alert('您的浏览器不支持自动自动设置首页, 请使用浏览器菜单手动设置!');
	}
}
// function direct () {
// 	window.clearInterval(timer); /*清除计时器*/
// 	timer = window.setInterval("slider()", speed); /*计时器*/
// }
// function slider () {
// 	if(i>5){
// 		i=0;
// 	}
// 	$('.focus_pic li').eq(i).addClass('hover').siblings().removeClass('hover');
// 	$('.slider_title a').eq(i).show().siblings('a').hide();
// 	$('.slider_img li').eq(i).fadeIn().siblings('li').fadeOut();
// 	i++;
// }
$(function(){
	$(".lazy").lazyload();
	// direct();

	// $('.focus_pic li').hover(function(){
	// 	window.clearInterval(timer);
	// 	// var backColor = $(this).find('img').attr('backColor');
	// 	// $('#slider_background').css({background : backColor});
	// 	$(this).addClass('hover').siblings().removeClass('hover');
	// 	i = $(this).index();
	// 	$('.slider_title a').eq(i).show().siblings('a').hide();
	// 	$('.slider_img li').eq(i).fadeIn().siblings('li').fadeOut();
	// });

	// $('.focus_pic li').mouseleave(function(){
	// 	direct();
	// });
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '200', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '', // Text for element
		activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});
})