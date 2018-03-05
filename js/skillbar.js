// Javascript Function For The Skillbars
// Credit: https://codepen.io/tamak/pen/hzEer

jQuery(document).scroll(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},4000);
	});
});