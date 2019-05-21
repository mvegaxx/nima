<script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/webflow.js?v=1555958628" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJnrJ6s1bNd6JbIcL-lTYnUdEO8vtjatw&amp;callback=initMap"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>




<!-- carruseles -->
 <script type="text/javascript">
$(window).scroll(function() {    
    posicionarMenu();
});

function posicionarMenu() {
    if ($(window).scrollTop() >= 50){
				$('.image').addClass('pequeno');
				$('.div-logo-absolute').addClass('logo-scroll');
				$('.menu-header').addClass('menu-scroll');
				$('.nav-menu').addClass('nav-menu-scroll');
    } else {
				$('.image').removeClass('pequeno');
				$('.div-logo-absolute').removeClass('logo-scroll');
				$('.menu-header').removeClass('menu-scroll');
				$('.nav-menu').removeClass('nav-menu-scroll');

   
    }
}


 	$(document).ready(function(){
    $('.slides-inicio').slick({
    	
		  infinite: true,
		  fade:true,
			speed: 1200,

		  cssEase: 'linear',
			arrows: true,
			autoplay: true,
			autoplaySpeed: 4000,
		  
     });

    $('.slides-comentarios').slick({
    	
		  infinite: true,
		  fade:true,
		  speed: 500,
		  cssEase: 'linear',
			arrows: false,
			autoplay: true,
 		  autoplaySpeed: 5000,
		  
     });

    $('.slider-3').slick({
    	
		  infinite: true,
		  fade:true,
		  cssEase: 'linear',
			arrows: true,		  
			pauseOnHover:true,
			autoplay:false,
			autoplaySpeed: 6000,
     });

    $('.info-galeria').slick({
    	infinite: true,
		  fade:true,
		  cssEase: 'linear',
			arrows: true,	
			pauseOnHover:true,
			autoplay:false,	
			autoplaySpeed: 4000,
   
		});

		$('.carrusel-habitaciones').slick({
    	infinite: true,
		  fade:true,
		  cssEase: 'linear',
			arrows: true,	
			pauseOnHover:false,
			autoplay:true,	
			autoplaySpeed: 4000,
			slidesToShow: 1,
  		slidesToScroll: 1,
   
		});

		$('.link-menu-habitaciones').on('click', function(){
		     $('.slick-prev ').trigger('click');
		 });


		 $('.w-icon-slider-left').on('click', function(){
		     $('.slick-prev ').trigger('click');
		 });
		 $('.w-icon-slider-right').on('click', function(){
		     $('.slick-next ').trigger('click');
		 });    


		 $('.w-icon-slider-left').on('click', function(){
		     $('.state-playing ').trigger('click');
		 });
		 $('.w-icon-slider-right').on('click', function(){
		     $('.state-playing').trigger('click');
			 
		 });   


	});

//filtros 

$('.menu-experiencias').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'a', function() {

				$('.menu-experiencias a').removeClass("asterisco");
				$(this).addClass("asterisco");
  			
				var filterValue = $(this).attr('data-filter');
				$('.experiencia').each(function( i ) {			
					$(this).addClass("ocultar");
					$(this).removeClass("mostrar");
					console.log(filterValue)
					if(filterValue ===  $(this).attr('data-filter')){
					
							$(this).addClass("mostrar");
					}
			});
		});
});

$('.menu-habitaciones').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'a', function() {

				$('.menu-habitaciones a').removeClass("asterisco");
				$(this).addClass("asterisco");


				var filterValue = $(this).attr('data-filter');
				var link = $(this);
				$('.habitacion').each(function( i ) {			
					$(this).addClass("ocultar");
					$(this).removeClass("mostrar");
				
					
					if(filterValue ===  $(this).attr('data-filter')){

							$(this).addClass("mostrar");
					}
			});
		});
});


$('.menu-habitaciones').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'a', function() {

				var filterValue = $(this).attr('data-filter');
				$('.sitio-mx').each(function( i ) {			
					$(this).addClass("ocultar");
					$(this).removeClass("mostrar");
					$(this).removeClass("Restaurantes");
					console.log($(this).attr('data-filter'))
					if(filterValue ===  $(this).attr('data-filter')){

							$(this).addClass("mostrar");
					}
			});
		});
});



//mapa de google 
$(document).ready(  function initMap() {
	var mapStyles =  [
		{
			"elementType": "labels.icon",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#616161"
				}
			]
		},
		{
			"elementType": "labels.text.stroke",
			"stylers": [
				{
					"color": "#f5f5f5"
				}
			]
		},
		{
			"featureType": "administrative.land_parcel",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#bdbdbd"
				}
			]
		},
		{
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#eeeeee"
				}
			]
		},
		{
			"featureType": "poi",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#757575"
				}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#e5e5e5"
				}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#9e9e9e"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#ffffff"
				}
			]
		},
		{
			"featureType": "road.arterial",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#757575"
				}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#fcedb6"
				}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#616161"
				}
			]
		},
		{
			"featureType": "road.local",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#9e9e9e"
				}
			]
		},
  {
    "featureType": "transit.station",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "labels.text",
    "stylers": [
      {
        "color": "#c4a000"
      },
      {
        "visibility": "simplified"
      }
    ]
  },
		{
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#c9c9c9"
				}
			]
		},
		{
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#9e9e9e"
				}
			]
		}
	]
	var styledMap = new google.maps.StyledMapType(mapStyles,{name: "Styled Map"});
	var location = {lat: 19.419273, lng: -99.162713};
	var map = new google.maps.Map(document.getElementById('mapa'), {
		zoom: 16,
		center: location,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}
	});
	var icon = {
		url: "https://uploads-ssl.webflow.com/5cb74aaabdbe0d250553a51b/5cba1d5025ac530e1f96e54a_icono%20mapa.png",
		scaledSize: new google.maps.Size(26, 30)
	};
	var marker = new google.maps.Marker({
		position: location,
		icon: icon,
		map: map
	});
	infowindow = new google.maps.InfoWindow({content:"<div class='noScroll'>Click para obtener indicaciones</div>" });
	// google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
	// infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load');
	infowindow.open(map, marker);
	map.setOptions({'scrollwheel': false});
	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');
  google.maps.event.addListener(marker, 'click', function () {
		window.open('https://goo.gl/maps/YGpWCNdzci5642197','_blank');
		
	});
});


/*
myForm = $("#email-form-spa");
//forma de contacto
    $(function form(){

    	
      $(".submit-button").click(function(e){
      		

          var _nombre  = $("#nombrespa").val();
          var _apellido  = $("#apellidospa").val();
          var _mail = $("#mailspa").val();
          var _telefono =$("#telefonospa").val();
          var _fecha = $("#fechaspa").val();
   			
          $(".submit-button").attr("disabled", true);

          if($("#email-form-spa")){
          				alert()
                  $.ajax({
                  url: "mail.php",
                  type: "POST",
                  
                  success: function(){                    
                    $(".w-form-done").slideDown();
                    $(".w-form-fail").slideUp();
                  
                    
                  },
                  error: function(){
                   
                    $(".w-form-fail").slideDown();
                    $(".w-form-fail").html("Algo ha salido mal. intenta").slideDown();
    

                  }
                });
                e.preventDefault();
          }
          else{

            $(".w-form-fail").html("Algo ha salido mal").slideDown();
            $(".btn-envie").attr("disabled", false);

            $(".w-form-fail").html("Todos los campos son requeridos").slideDown();
            $("input:invalid, select:invalid, textarea:invalid").css("border-color","red");
           
          }
         });


    }); */

    /*
   function validaForm(){
    // Campos de texto
    if($("#nombrespa").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#nombrespa").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }
    if($("#apellidospa").val() == ""){
        alert("El campo Apellidos no puede estar vacío.");
        $("#apellidospa").focus();
        return false;
    }
    if($("#mailspa").val() == ""){
        alert("El campo Dirección no puede estar vacío.");
        $("#direccionspa").focus();
        return false;
    }
    if($("#telefonospa").val() == ""){
        alert("El campo Dirección no puede estar vacío.");
        $("#direccionspa").focus();
        return false;
    }
    if($("#fechaspa").val() == ""){
        alert("El campo Dirección no puede estar vacío.");
        $("#fechaspa").focus();
        return false;
    }

    return true; // Si todo está correcto

}

$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#enviarspa").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if(validaForm()){                               // Primero validará el formulario.
            $.post("mail.php",$("#email-form-spa").serialize(),function(res){
                $("#formspa").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                } else {
                    $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }
            });
        }
    });    
});*/
</script>