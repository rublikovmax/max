$( document ).ready(function() {
	
	//Управление отображением блока "Спецпредложения" на главной странице
    $( ".actions h3.showed" ).click(function( event ) {
		
		$( this ).hide();
		$( ".actions h3.hidden" ).show();
		$( ".offer, .actions .show-more" ).hide( "slow" );
 
    });
	
	$( ".actions h3.hidden" ).click(function( event ) {
		
		$( this ).hide();
		$( ".actions h3.showed" ).show();
		$( ".offer, .actions .show-more" ).show( "slow" );
 
    });
	
	//Управление отображением блока "Мои фото" на главной странице
	$( ".images-gallery h3.showed" ).click(function( event ) {
		
		$( this ).hide();
		$( ".images-gallery h3.hidden" ).show();
		$( ".photos, .images-gallery .show-more" ).hide( "slow" );
 
    });
	
	$( ".images-gallery h3.hidden" ).click(function( event ) {
		
		$( this ).hide();
		$( ".images-gallery h3.showed" ).show();
		$( ".photos, .images-gallery .show-more" ).show( "slow" );
 
    });
	
	//Управление анимацией иконок соцсетей
	$( ".social" ).mouseover(function( event ) {
		
		$( this ).fadeTo(150 , 0.7);
 
    });
	
	$( ".social" ).mousedown(function( event ) {
		
		$( this ).fadeTo(150 , 0.3);
 
    });
	
	$( ".social" ).mouseout(function( event ) {
		
		$( this ).fadeTo(400 , 1);
 
    });
	
	//Управление анимацией кнопок
	$( ".btn" ).mouseover(function( event ) {
		
		$( this ).animate({
			color: "#ffffff",
			backgroundColor: "#725a4d"
		},
			150
		);
 
    });
	
	$( ".btn" ).mousedown(function( event ) {
		
		$( this ).animate({
			opacity: 0.3
		},
			150
		);
 
    });
	
	$( ".btn" ).mouseout(function( event ) {
		
		$( this ).animate({
			color: "#424242",
			backgroundColor: "#ffefd5",
			opacity: 1
		},
			400
		);
 
    });
	
	//Кнопка вверх
	$(window).scroll(function ( event ) {
        // Если отступ сверху больше 200px то показываем кнопку "Наверх"
        if ($(this).scrollTop() > 200) {
            $('.button-up').fadeIn( "slow" );
        } else {
            $('.button-up').fadeOut( "slow" );
        }
    });
	
	$('.button-up').click(function ( event ) {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
	
});