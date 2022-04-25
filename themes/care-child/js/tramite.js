// Estilo card tramites Urll
if(jQuery('body').find(".cont-tramite ").length){	
const contTramites=document.querySelectorAll('.cont-tramite ');
contTramites.forEach((item, index) => {
	const contTodo = item.parentNode;
	const iditem=contTodo.querySelector('.cont-tramite').parentNode.innerHTML;
	const url =contTodo.querySelector('.btnTramite > a').href;
	
	var addcont=''
	
	if (item.classList.contains('sin-requisito')) {
		 addcont=`<a class='total-tramite' href="${url}">${iditem}  </a>`;
  
	} 
	else if (item.classList.contains('consulta-tramite')) {
		 addcont=`<div class='total-tramite' >${iditem}  </div>`;
  
	} 
	
	else {
	 	 addcont=`<div class='total-tramite' >${iditem}  </div>`;
	}

    contTodo.innerHTML= addcont;
	
});
}
// Estilo card tramites Urll
if(jQuery('body').find(".requisito ").length){	
const contTramites=document.querySelectorAll('.requisito ');
contTramites.forEach(item => {
	item.addEventListener('click',()=>{
		MostrarVentana(event)
	})
});
}

function MostrarVentana(event){
	
		const contItem= event.target.parentElement.parentElement.parentElement;
		
		  const itemtitle = contItem.querySelector('.team_member_name').textContent;
		 const itemCont = contItem.querySelector('.team_info > ul').innerHTML;
		const template=`<ul class=' vemtList'>${itemCont}</ul>`;
		MostrarRequisito(itemtitle,template);
		
		
	}
 function MostrarRequisito(itemtitle,template){
	 Swal.fire({
          title: `${itemtitle}`,
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
//consultar tramites
const btnconsultar=document.querySelector('.consulta-tramite');
btnconsultar.addEventListener('click',()=>{
	ConsultarTramite();
});
function ConsultarTramite(){
 Swal.fire({
        title: "Ingresa el código de solicitud",
        input: "text",
	 html:`<p> Puedes encontrarlo en el correo de confirmación enviado al momento de hacer la solicitud
</p>`,
        showCancelButton: true,
        confirmButtonText: "Guardar",
        cancelButtonText: "Cancelar",
        inputValidator: nombre => {
            // Si el valor es válido, debes regresar undefined. Si no, una cadena
            if (!nombre) {
                return "Por favor Ingrese un codigo";
            } else {
                return undefined;
            }
        }
    })
    .then(resultado => {
        
	if (resultado.value) {
		 var codigo=resultado.value;
		
		window.open(`https://facilita.gob.pe/t/1430/${codigo}`, '_blank'); 
	}
	

		
    });
}
// seccion carrucel tramite
function crearCarrTramite(templateIten){
	
var contcarrPost=document.getElementById("contTramiteCarr");
	contcarrPost.innerHTML+=templateIten;

}
// carrucel de tramite
  CarrucelTramie();
function CarrucelTramie(){
	var templateIten='';
	
	const items = document.querySelectorAll('.cont-tramite');
	items.forEach( (item )=> {
		const itemcarr=item.parentElement.parentElement;
		templateIten=`<div class='itemCarTramite' >${itemcarr.innerHTML}</div>`;
	crearCarrTramite(templateIten);
		
	});
	
}
jQuery(document).ready(function(){
	jQuery("#contTramiteCarr").owlCarousel(
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


 jQuery('.consulta-tramite').on('click', function(event) {
 
     ConsultarTramite();
   });

 jQuery('.requisito').on('click', function(e) {
 if (e.target == this){
	  MostrarVentana(e)	
 }
 
   });
})