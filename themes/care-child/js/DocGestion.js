if(jQuery('body').find(".documentos").length){
const docItem=document.querySelectorAll(".documentos");
var templateIten='';	
docItem.forEach( (item )=> {
		
	const contTodo = item.parentNode;
	const iditem=contTodo.innerHTML;
	const url =contTodo.querySelector('.btnTramite > a').href;
	const name =contTodo.querySelector('.team_member_name').textContent
	templateIten=`<a class='itemCarTramite' href="${url}" data-hash="${name}">  ${iditem}</a>`;
	crearCarrDocumentos(templateIten);
	contTodo.removeChild(item);
	});
}
function crearCarrDocumentos(templateIten){
	
var contDocCarr=document.getElementById("contDocCarr");
	contDocCarr.innerHTML+=templateIten;

}
jQuery(document).ready(function(){
	jQuery("#contDocCarr").owlCarousel(
{
   
        loop:true,
        center:true,
        margin:20,
	    nav:true,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
	responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
		800:{
            items:4
        },
        1100:{
            items:5
        }
    }
   
}
	
);
	
})
const linkDoc= document.querySelectorAll('.linkDoc');

linkDoc.forEach(item => {
	item.addEventListener('click',()=>{
		//var submenu=jQuery('.sub-menu');
		var mostrado =jQuery(".sub-menu").css("display");
    if (mostrado=="none"){
        jQuery(".sub-menu").css("display", "block");
    }else{
          jQuery(".sub-menu").css("display", "none");
    }
	});
});
jQuery('.menu-item').hover(function() {
   jQuery(".sub-menu").css("display", "block");
});
