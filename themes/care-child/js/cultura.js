if(jQuery('body').find(".footer-cultura")){
	const items=document.querySelectorAll('.footer-cultura');
	
	var template=``;
	items.forEach(item=>{
	const bg_item=	item.querySelector('.baner-img-fondo > img').src
	const img_item=item.querySelector('.logo-cultura ').innerHTML
	const cont_text=item.querySelector('.cont_footer_text ').innerHTML
const mujer=item.querySelector('.mujer_cultura').innerHTML;
	 template=`
     <div class='cont-img'>${img_item}</div> ${ cont_text}<div class='cont_img_footer'>${mujer}</div>
     `;
	crearcontenido(template,bg_item)	
	
	})
	
	
function crearcontenido(template,bg_item){
const cont=document.querySelector('.footer-cultura');
    cont.innerHTML='';	
	cont.style.backgroundImage="url('" + bg_item + "')";
	cont.innerHTML=template;


}	
}
jQuery('.slider_carrucel').owlCarousel({
	center: false,
	items: 1,
	loop: true,
		stagePadding: 0,
	margin: 0,
		autoplay: true,
		smartSpeed: 1000,
	pauseOnHover: false,
	nav: false,
	dots: true,
	navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
  });
