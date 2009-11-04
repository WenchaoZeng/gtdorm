$(document).ready(function () {
	$("ul.approval li:even").addClass("alt");
    $('span.sub_nav_selected_alt1').click(function () {
	$('ul.approval').slideToggle('medium');$('ul.dorm_manage').slideUp('medium');return false
    });
	$('ul.approval li a').mouseover(function () {
	$(this).animate({ fontSize: "13px", paddingLeft: "14px" }, 50 );
    });
	$('ul.approval li a').mouseout(function () {
	$(this).animate({ fontSize: "12px", paddingLeft: "10px" }, 50 );
    });
	
	$("ul.dorm_manage li:even").addClass("alt");
    $('span.sub_nav_selected_alt2').click(function () {
	$('ul.dorm_manage').slideToggle('medium');$('ul.approval').slideUp('medium');return false;
    });
	$('ul.dorm_manage li a').mouseover(function () {
	$(this).animate({ fontSize: "13px", paddingLeft: "14px" }, 50 );
    });
	$('ul.dorm_manage li a').mouseout(function () {
	$(this).animate({ fontSize: "12px", paddingLeft: "10px" }, 50 );
    });
});