var interv;
var Hora;
var i =1;
function inicio(ini,par,hor){
  document.getElementById(ini).disabled = true;
  document.getElementById(par).disabled = false;
  	Hora=hor;
  	interv = setInterval(cronometro,1000);
 
}
function cronometro(){
   document.getElementById(Hora).innerHTML = i;
   	i=i+1;
}
function parar(ini,par){
  document.getElementById(ini).disabled = false;
  document.getElementById(par).disabled = true;
	  clearInterval(interv);
	  i=1;
}