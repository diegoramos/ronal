function actualizar(param){
	var estado = $("#"+param).attr('estado'); // obtienes estado
	if (estado==0) {
		$("#"+param).attr('fill', '#000');
		$("#"+param).attr('estado','1'); // das estado
	} else {
		$("#"+param).attr('fill', '#fff');
		$("#"+param).attr('estado','0'); // das estado
	}
}

//
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
//
function guardar(){
  var count =1;
  var milista=new Array();
  while(count<=14){
  	var data = {};
  	data.hora = $("#Horas"+count).text();
  	data.correcto = $('input[name="ra'+count+'"]:checked').val();
  	data.puntaje = $('input[name="puntaje'+count+'"]:checked').val();
  	milista.push(data);
  	count=count+1;
  }
  console.log(milista);
}
