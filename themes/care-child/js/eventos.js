// seccion carrucel post 
function crearCarrPost(templateIten){
var contcarrPost=document.getElementById("contPostCarr");
	contcarrPost.innerHTML+=templateIten;

}


function carrucelPost(){
	
	var templateIten='';
	const items = document.querySelectorAll('.PosCarrucel > div > div > .vc_grid-item');
	items.forEach( item => {
		const ImgUrl =item.querySelector('.vc_gitem-zone img').src;
		const Descripcion =item.querySelector('.vc_gitem-post-data-source-post_excerpt').innerHTML;
		const Titulo =item.querySelector('.vc_gitem-post-data-source-post_title').innerHTML;
		const TituloAlt =item.querySelector('.vc_gitem-post-data-source-post_title').textContent;
		const Botton =item.querySelector('.vc_btn3-container').innerHTML;
		 templateIten=`<div class='item-post item'>
							<div class='firt-iten'>
                           <div style="background-image: url(${ImgUrl}) !important;" class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link">
<img src="${ImgUrl}" class="vc_gitem-zone-img" alt="${TituloAlt}">
</div>
<div class='cont-btn'> ${Titulo} 
<div class='cont-hover'>${Descripcion}${Botton}</div>
</div>


							</div>


							
						</div>`;
	
		crearCarrPost(templateIten);
		
	});
	 
}
carrucelPost();
jQuery(document).ready(function(){
	jQuery("#contPostCarr").owlCarousel(
{
    loop:true,
     margin:10,
    nav:true,
	
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
}
);
})