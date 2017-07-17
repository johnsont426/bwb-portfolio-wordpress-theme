jQuery(document).ready(function($) {
	$('.project-div .wp-post-image').addClass('project-img');
	$('.dec-imgs-div img').addClass('dec-img');
	$('.project-img-container img').addClass('project-block-img');

	$(function(){
		socialButton();
		navIcon();
	})

	function socialButton(){
		$("#menu-item-358").on("click", function(e){
			var $ul = $(this).parents("ul");
			$ul.toggleClass("show");
			e.preventDefault();
		})
	}

	function navIcon(){
		$('#nav-icon').click(function(){
			$(this).toggleClass('open');
			showHiddenMenu();
		});
	}

	function showHiddenMenu(){
		var $hm = $(".hidden-menu");
		$hm.toggleClass("hidden-menu-show");
	}

})