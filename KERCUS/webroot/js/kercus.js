$('a.menuCore').live('click', function() {
    $('#content').load($(this).attr('href'),function () {$(this).fadeIn(300);});
    return false;
});

$(document).ready(function(){
	  
	/**
	 * the menu
	 */
	var $menu = $('#ldd_menu');
	
	/**
	 * for each list element,
	 * we show the submenu when hovering and
	 * expand the span element (title) to 510px
	 */
	$menu.children('li').each(function(){
		var $this = $(this);
		var $span = $this.children('span');
		$span.data('width',$span.width());
		
		$this.bind('mouseenter',function(){
			$menu.find('.ldd_submenu').stop(true,true).hide();
			$span.stop().animate(null,300,function(){
				$this.find('.ldd_submenu').slideDown(300);
			});
		}).bind('mouseleave',function(){
			$this.find('.ldd_submenu').stop(true,true).hide();
			$span.stop().animate({'width':$span.data('width')+'px'},300);
		});
	});
	
	$("#UserUsername").focus(function(){if($(this).val()=='Nombre de Usuario') $(this).val('');});
	$("#UserUsername").blur(function(){if($(this).val()=='') $(this).val('Nombre de Usuario');});
	  
});
