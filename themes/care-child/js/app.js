// scrip para crear el carrucel
var myState = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }
if(jQuery('body').find(".img-carrucel").length){	
var contcarr=document.getElementById("contCar");
const numImg=document.querySelectorAll(".img-carrucel > div > div > div");
numImg.forEach(item => {
     const img=  item.querySelector('figure');
		contcarr.appendChild(img);

    });   


}

// estilos carrucel
jQuery(document).ready(function(){		
  MostrarCarrucel();
//templateGestionRiesgos()
templateComunicado()
//templateVideoModal();
	
});	
function templateVideoModal(){
	const title =`Entrega del premio Nacional "Sello Municipal INCLUIR PARA CRECER".`;
	const template=`<video width="520" height="250" controls>
    <source src="https://munihuachac.gob.pe/wp-content/uploads/2022/04/SelloMunicipal-1.mp4" type="video/mp4">
    Tu navegador no soporta los vídeos de HTML5
</video>`
	 MostrarVideoModal(title, template);
}
function templateGestionRiesgos(){
	const title=`<h2>titulo Prueba</h2>`
	const template=`<div id="canvas_container">
    <canvas id="pdf_renderer"></canvas>
</div>`;
	CargarComunicadosInfo(title,template)
}
function templateComunicado(){
		const template =`<h3>Padron final de beneficiarios de donaciones de bienes Municipalidad Distrital de Huáchac </h3>
<a href='https://munihuachac.gob.pe/wp-content/uploads/2022/05/SKMBT_36322051812030.pdf' target='blank' class="bnt-ventana" > Ver Lista</a> </br> <br>

`
	cargarventaInforme(template);
}

function cargarventaInforme(template){

Swal.fire(
  {
	   title: false,
          icon: false,
            html:`${template}`,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            customClass: {
              closeButton: 'iconoSweet',
              content: 'ContSweeAlert',
              
            },
	  timer: 9000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
     // b.textContent = Swal.getTimerLeft()
    }, 1000)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
  }
)	;	
	}
function MostrarCarrucel(){
	jQuery("#contCar").owlCarousel(
{
    loop:true,
    margin:20,
    nav:true,
	
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
}
);
  
	
}
function MostrarVideoModal(title,template){
	Swal.fire({
          title: `${title}`,
          icon: false,
            html:`${template}`,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            customClass: {
              closeButton: 'iconoSweet',
              content: 'ContSweeAlert',
              
            }
          
        }) 
}
function CargarComunicadosInfo(title,template){
	
pdfjsLib.getDocument('https://munihuachac.gob.pe/wp-content/uploads/2022/04/PROGRAMA-GESTION-DE-RIESGOS-1-1.pdf').then((pdf) => {
 myState.pdf = pdf;
render();
    // more code here
 
});
	 Swal.fire({
          title: `${title}`,
          icon: false,
            html:`${template}`,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            customClass: {
              closeButton: 'iconoSweet',
              content: 'ContSweeAlert',
              
            }
          
        }) 
}
function render() {
    myState.pdf.getPage(myState.currentPage).then((page) => {
 
      var canvas = document.getElementById("pdf_renderer");
var ctx = canvas.getContext('2d');
 
var viewport = page.getViewport(myState.zoom);
	canvas.width = viewport.width;
canvas.height = viewport.height;	
 page.render({
    canvasContext: ctx,
    viewport: viewport
});
    });
}
