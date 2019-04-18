if (cubo_id) {
  $.ajax({
    url: base_url+'cubos/get_editdata/'+cubo_id,
    type: 'GET',
    dataType: 'json',
    data: {},
  })
  .done(function(data) {
    if (data!=null) {
      $('input[name="puntaje_total1"]').val(data.puntaje_total);
      $('input[name="puntaje_total2"]').val(data.puntaje_total_sin);
      var obj = JSON.parse(data.cuerpo);
      $.each(obj, function(index, val) {
        //$('#Horas'+(index+1)).text(val.hora);
        if (val.puntaje!='') {
          $('input[id="pun'+(index+1)+''+val.puntaje+'"]').attr('checked', 'checked');
        }
        
        $('#Horas'+(index+1)).text(val.hora);
        if (val.correcto=='si') {
          $('input[id="si'+(index+1)+'"]').attr('checked', 'checked');
        } else if(val.correcto=='no'){
          $('input[id="no'+(index+1)+'"]').attr('checked', 'checked');
        }else{}
      });
      
    } else {
      alert("Error al traer datos");
    }
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
} else {
  
}

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
///////////////////////////////////////////////////////////////
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
  }/////////////////////////////////////////////////////////////////////
  $.ajax({
    url: base_url+'cubos/guardar',
    type: 'POST',
    dataType: 'json',
    data: {data:milista,puntaje_total:$('input[name="puntaje_total1"]').val(),puntaje_total_sin:$('input[name="puntaje_total2"]').val() },
  })
  .done(function(data) {
    if (data.status) {
      alert("Se guardo con exito");
    }
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
}

function update(){
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

  $.ajax({
    url: base_url+'cubos/update/'+cubo_id,
    type: 'POST',
    dataType: 'json',
    data: {data:milista,puntaje_total:$('input[name="puntaje_total1"]').val(),puntaje_total_sin:$('input[name="puntaje_total2"]').val() },
  })
  .done(function(data) {
    if (data.status) {
      alert("Se actualizó con exito");
    }
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
}
