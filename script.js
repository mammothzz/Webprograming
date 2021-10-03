function switchTab (evt, tab_id) {
    let i, tabContent, tabMenu;

    tabContent = document.getElementsByClassName("tab_content--item");
    for (i = 0; i < tabContent.length; i++){
        tabContent[i].style.display = "none";
    }

    tabMenu = document.getElementsByClassName("tab-item");
    for (i = 0; i < tabMenu.length; i++){
        tabMenu[i].className = tabMenu[i].className.replace(" active","");
    }

    document.getElementById(tab_id).style.display = "block";
    evt.currentTarget.className += " active";
}

$(window).load(function () {
	$(".trigger_popup_fricc").click(function(){
	   $('.hover_bkgr_fricc').show();
	});
	$('.hover_bkgr_fricc').click(function(){
		$('.hover_bkgr_fricc').hide();
	});
	$('.popupCloseButton').click(function(){
		$('.hover_bkgr_fricc').hide();
	});
});

$(window).load(function () {
	$(".trigger_popup_fricc2").click(function(){
	   $('.hover_bkgr_fricc2').show();
	});
	$('.hover_bkgr_fricc2').click(function(){
		$('.hover_bkgr_fricc2').hide();
	});
	$('.popupCloseButton2').click(function(){
		$('.hover_bkgr_fricc2').hide();
	});
});

$(window).load(function () {
	$(".trigger_popup_fricc3").click(function(){
	   $('.hover_bkgr_fricc3').show();
	});
	$('.hover_bkgr_fricc3').click(function(){
		$('.hover_bkgr_fricc3').hide();
	});
	$('.popupCloseButton3').click(function(){
		$('.hover_bkgr_fricc3').hide();
	});
});