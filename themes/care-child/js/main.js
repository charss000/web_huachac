jQuery(window).resize(function() {
    //do something

    var width = jQuery(document).width();
    if (width > 992) {
     const contLogo=document.querySelector('#contLogo');
const contNuevoLogo=document.querySelector('.custom-html-widget');
contNuevoLogo.appendChild(contLogo).classList.add("logotipo");
    }
	else{
		 const contLogo=document.querySelector('#contLogo');
const contNuevoLogo=document.querySelector('#site-logo');
contNuevoLogo.appendChild(contLogo).classList.add("logotipo");
	}
});
jQuery(document).ready(function(){
    var width = window.innerWidth;
    var resolucion = jQuery( window ).width();

    if(resolucion > 992){
        const contLogo=document.querySelector('#site-logo > .header-default-css');
const contNuevoLogo=document.querySelector('#contLogo');
contNuevoLogo.appendChild(contLogo).classList.add("logotipo");
    }
    else{
 const contLogo=document.querySelector('#contLogo');
const contNuevoLogo=document.querySelector('#site-logo > .header-default-css');
contNuevoLogo.appendChild(contLogo).classList.add("logotipo");
    }
	
 });
/*
//estructura para cambiar de fondo un div
if(jQuery('body').find(".baner-img-fondo ").length){
const lists = document.querySelectorAll('.baner-img-fondo');
lists.forEach(list=>{
	const src=list.querySelector('.baner-img-fondo >img').src;
	jQuery(".baner-img-fondo >img").css("display", "block");
   
   list.style.backgroundImage="url('" + src + "')";
});
}
*/
if(jQuery('body').find(".btn-rendicion ").length){
const lists = document.querySelectorAll('.btn-rendicion');
	
lists.forEach((list,i)=>{
 const text=list.textContent;
const icono =list.querySelector('i').className;
	const url =list.querySelector('.btn-rendicion > a').href;
	const addcont=`<a href='${url}'><i class="${icono}"></i><p>${text}</p></a> `;

      list.innerHTML= addcont;
});
}
//fin de la estructura
//
// cambio de estilo al boton buscar

const contBus = document.querySelectorAll('.widget_search');
contBus.forEach(item => {
	const imput =item.querySelector('.wp-block-search__input');
	const button =item.querySelector('.wp-block-search__button');
	const label = item.querySelector('.wp-block-search__label');
	label.style.display='none';
	button.innerHTML='';
	button.innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" role="img" aria-hidden="true" focusable="false"><path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg>`;
	imput.placeholder='Buscar';
});

// copia de iconos sociales

const iconofooter=document.getElementById('footer-social');

 var elementos = jQuery('#topright-widget-area > ul').clone();
  jQuery('#footer-social').html(elementos);

//iconos de menu info
const iconoInfo=document.querySelector('#menu-menu-info');
const contIcono=iconoInfo.querySelectorAll('.menu-item');
var icono1=`<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M3.90625 12.5H16.0156V7.46582C16.0156 5.53223 14.4678 3.92578 12.5342 3.90625C10.5811 3.88672 8.98438 5.47364 8.98438 7.42188V8.20313C8.98438 8.85254 8.46191 9.375 7.8125 9.375H6.25C5.60059 9.375 5.07812 8.85254 5.07812 8.20313V7.42188C5.07812 3.32032 8.42285 -0.0146461 12.5244 2.29584e-06C16.626 0.0146507 19.9219 3.39356 19.9219 7.49512V12.5H21.0938C22.3877 12.5 23.4375 13.5498 23.4375 14.8438V22.6563C23.4375 23.9502 22.3877 25 21.0938 25H3.90625C2.6123 25 1.5625 23.9502 1.5625 22.6563V14.8438C1.5625 13.5498 2.6123 12.5 3.90625 12.5ZM10.5469 19.9219C10.5469 21.001 11.4209 21.875 12.5 21.875C13.5791 21.875 14.4531 21.001 14.4531 19.9219V17.5781C14.4531 16.499 13.5791 15.625 12.5 15.625C11.4209 15.625 10.5469 16.499 10.5469 17.5781V19.9219Z" />
</g>
<defs>
<clipPath id="clip0">
<rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)"/>
</clipPath>
</defs>
</svg>`;
var icono2=`<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="25" height="25" fill="white"/>
</clipPath>
</defs>
</svg>`;
var araIcon=[icono1,icono2];
var numIco=0;
const items = iconoInfo.querySelectorAll('.menu-item');
	items.forEach(item => {
		
		const urlIcono=item.querySelector('a').href;
		const vertextIcon=item.textContent;
		var str = vertextIcon
		var textIcon = str.substring(str.lastIndexOf(" ") + 1, str.length);
		var numIcoLet=textIcon.length;
		var  textPri =vertextIcon.slice(0,-numIcoLet) ;
		
		const addcont=`<a href="${urlIcono}"><div class='contIcoMenuInfo'> <div>${textPri}<span>${textIcon}</span></div>${araIcon[numIco]}  </div> </a>`;
      item.innerHTML= addcont;
		numIco ++;
		//iconoInfo.append(contIco);
    });





const MenuSereno= document.querySelector('.Serenazgo');


	MenuSereno.addEventListener('click',()=>{
	MostrarSerenos();
	
});

function MostrarSerenos(){
	
		const template=`
<div class='contSerenazgo'>

<div class='cont-text'>
<div class='cont-img'>
<img  src="https://munihuachac.gob.pe/wp-content/uploads/2022/02/serenazgo.svg" alt="Serenazgo Huachac">
<i class="fa fa-whatsapp" aria-hidden="true"></i>
</div>
<div class='info'>
<p>Serenazgo Huáchac Enviamos tus denuncias </p>
<h3>936011816</h3>
<a href="https://wa.me/51936011816/" target="_blank" > Contáctanos </a>
</div>
</div>
</div>`;
		MostrarVentanaSerenos(template);
}

 function MostrarVentanaSerenos(template){
	 Swal.fire({
          title: false,
          icon: false,
            html:`${template}`,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
		    position: 'top-end',
		 showClass: {
    popup: `
      animate__animated
      animate__fadeInRight
      animate__faster
    `
  },
  hideClass: {
    popup: `
      animate__animated
      animate__fadeOutRight
      animate__faster
    `
  },
            customClass: {
              closeButton: 'iconoSweet',
              content: 'ContSweeAlert',
              popup: 'popupSerenazgo',
            }
		
          
        }) 
 }
//Estilo copiar el año cuanod seleccione menu respectivo
const periodos=document.querySelectorAll('.periodo');
periodos.forEach(item => {
	item.addEventListener('click',()=>{
		const periodo =item.querySelector('.periodo > a').title;
		
		guardarLocaStorage(periodo);
	
			
	});
});

function guardarLocaStorage(periodo){
	  localStorage.setItem("periodo",periodo);
	
}