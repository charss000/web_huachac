function carrucelNoticia(){
	
	var templateIten='';
	const items = document.querySelectorAll('.Noticias > div > div > .vc_grid-item');
	items.forEach( item => {
	const ImgUrl =item.querySelector('.vc_gitem-zone img').src;
		const Descripcion =item.querySelector('.vc_gitem-post-data-source-post_excerpt').innerHTML;
		const Titulo =item.querySelector('.vc_gitem-post-data-source-post_title').innerHTML;
		const TituloAlt =item.querySelector('.vc_gitem-post-data-source-post_title').textContent;
		const Botton =item.querySelector('.vc_btn3-container').innerHTML;
      const itemU=item.querySelector('.vc_grid-item-mini').innerHTML;;
		
		 templateIten=`<div class='item-post item'>
							${itemU}

							
						</div>`;
		//crearCarrNoticia(templateIten);
		
	});
	 
}

carrucelNoticia();
// Carrucel Noticia
function crearCarrNoticia(templateIten){
var contcarrNot=document.getElementById("contNoticiaCarr");
	contcarrNot.innerHTML+=templateIten;


}
//fin carrucel noticia 

jQuery(document).ready(function(){
	jQuery("#contNoticiaCarr").owlCarousel(
{
    loop:true,
     margin:10,
    nav:true,
	
    responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        }
    }
}
		
	
);
})