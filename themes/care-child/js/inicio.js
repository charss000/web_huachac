document.addEventListener('DOMContentLoaded', function () {
	if(jQuery('body').find(".contPopup > .vc_grid").length){	
		
	const entrada=document.querySelector('.contPopup');
		
    const item=entrada.querySelector('.vc_grid-item-mini');
	const contImg=	item.firstChild;
	const contTexto=item.lastChild;
		contImg.classList.add('ContBlockImg');
		contTexto.classList.add('ContBlockTexto');
   var title=entrada.querySelector('.vc_gitem-post-data-source-post_title').textContent;
  
  //Seccion conteneido modal
var estadoImg=0;
var estadoTexto=0;
 var Link=entrada.querySelector('.vc_btn3-container > a').href;		
//Comprobar si existe la Imagen
var templateImge='';
if(jQuery('.ContBlockImg').find(".vc_gitem-zone-img").length){
      //Seccion que Muestra Imagen
const verImg =item.querySelector('.vc_gitem-zone-img');
		
const Img=entrada.querySelector('.vc_gitem-zone  > img').src;
	
if(Img === "https://munihuachac.gob.pe/wp-content/plugins/js_composer/assets/vc/vc_gitem_image.png"){
    templateImge=`<div class="contImg">

</div>`
	 estadoImg=1;
   }
else{
templateImge=`<div class="contImg">
<a href="${Link}" class="btn "><img src="${Img}" class="contPopupImg"></img></a>
</div>`	
}
 

        }

//Seccion Para mostrar Parrafo
var contParrafo='';
//Comprobar si existe el parrafo
if(jQuery('.ContBlockTexto').find(".vc_gitem-post-data-source-post_excerpt").length){

     var btnVer=`<a href="${Link}" class="btn ">Ver Mas</a>`
const parrafo=entrada.querySelector('.vc_gitem-post-data-source-post_excerpt').textContent;
if(parrafo === ''){
   estadoTexto=1;
	contParrafo=`<div>
</div>`
   }
else{
 contParrafo=`<div><p>${parrafo}  </p>

</div>`;	
}



        }
 
	const titlePopup=`<h4>${title}</4>`;
	const contHtml=`<div>
 ${templateImge}


</div>`
	if(estadoImg != 1 || estadoTexto != 1){
	  Swal.fire({
          title: `${titlePopup}`,
          icon: false,
            html:`${contHtml}`,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            customClass: {
              closeButton: 'iconoSweet',
              content: 'ContSweeAlert',
              
            }
          
        }) 
	   }
	
	}

})

