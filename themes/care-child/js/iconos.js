function toggleBtn() {
    const Btns = document.querySelector(".btns");
    const add = document.getElementById("add");
    const remove = document.getElementById("remove");
    const btn = document.querySelector(".btns").querySelectorAll("a");
    Btns.classList.toggle("open");
    if (Btns.classList.contains("open")) {
      remove.style.display = "block";
      add.style.display = "none";
      btn.forEach((e, i) => {
        setTimeout(() => {
          bottom = 40 * i;
          e.style.bottom = bottom + "px";
          
        }, 100 * i);
      });
    } else {
      add.style.display = "block";
      remove.style.display = "none";
      btn.forEach((e, i) => {
        e.style.bottom = "0px";
      });
    }
  }
  //copia menu flotante 
var elemIcono =document.querySelectorAll('#topright-widget-area > ul > .widget_social');

elemIcono.forEach(item=>{
const href=item.querySelector('a').href;
var resul='';
if(href===""){
  resul=''
 
}
else{
  resul=`href="${href}"`;
}

const Ico=item.querySelector('a').innerHTML;

const Data =item.querySelector('a');
const color = Data.getAttribute('data-color');
const info = Data.getAttribute('data-text');
lista_menu_float(resul,Ico,color,info);

});

function lista_menu_float(href,Ico,color,info){

const template=`<a  ${href} class="btn-ico"  data-color:"${color}" style="background:${color} ;">
${Ico}
<span class='txtInfo' style="background:${color}">${info}</span>
</a>

`
crear_lista_menu_float(template)

}

function crear_lista_menu_float(template){
const lista=document.querySelector(".btns");
lista.innerHTML+=template;
}

const btnIconos=document.querySelector('.btn-ico > .ico-serenazgo-2');
btnIconos.addEventListener('click',()=>{
    MostrarSerenos();
})
