// Estilo card normas

insertarTituloPage()
function insertarTituloPage(){
	const item =document.querySelector('.title-page-year > div > div > header > h2')
const tituloPage =document.querySelector('.title-page-year').textContent;
	const periodo = localStorage.getItem("periodo");
		item.innerHTML=tituloPage+ " " + periodo	
}

// Estilo card normas
if(jQuery('body').find(".cont-normas").length){	
const contTramites=document.querySelectorAll('.cont-normas');
	var addcont=''
contTramites.forEach(item => {
	const contTodo = item.parentNode;
	const iditem=contTodo.querySelector('.cont-normas').parentNode.innerHTML;
	const url =contTodo.querySelector('.btnTramite > a').href;
	const periodo = localStorage.getItem("periodo");
	const link =`${url}`+`?periodo=${periodo}`;
	 addcont=`<a class='total-norma'  href="${link}">${iditem}  </a>`;
	 contTodo.innerHTML= addcont;
});
}
