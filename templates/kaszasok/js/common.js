// site-wide utilities and scripts

jQuery(document).ready(function () {
	jQuery("#hider").hide();
	jQuery("#popup_box").hide();

	jQuery("#showpopup").click(function () {
	    jQuery("#hider").fadeIn("slow");
	    jQuery('#popup_box').fadeIn("slow");
	});

	jQuery("#buttonClose").click(function () {
	    jQuery("#hider").fadeOut("slow");
	    jQuery('#popup_box').fadeOut("slow");
	});

});
