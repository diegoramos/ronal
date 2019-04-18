if (claves_id) {
  $.ajax({
    url: base_url+'claves/get_editdata/'+claves_id,
    type: 'GET',
    dataType: 'json',
    data: {},
  })
  .done(function(data) {
    if (data!=null) {
      $('#Horas1').text(data.hora1);
      $('#Horas2').text(data.hora2);
      $('input[name="puntaje_total1"]').val(data.puntaje_total1);
      $('input[name="puntaje_total2"]').val(data.puntaje_total2);
      if (data.puntaje!='') {
        $('input[id="punto'+data.puntaje+'"]').attr('checked', 'checked');
      }
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

function guardar(){
  var hora1=$("#Horas1").text();
  var hora2=$("#Horas2").text();
  var puntaje_total1 = $('input[name="puntaje_total1"]').val();
  var puntaje_total2 = $('input[name="puntaje_total2"]').val();
  var puntaje = $('input[name="puntaje"]:checked').val();
  $.ajax({
    url: base_url+'claves/guardar',
    type: 'POST',
    dataType: 'json',
    data: {
      hora1:hora1,
      hora2:hora2,
      puntaje_total1:puntaje_total1,
      puntaje_total2:puntaje_total2,
      puntaje:puntaje
       },
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
  var hora1=$("#Horas1").text();
  var hora2=$("#Horas2").text();
  var puntaje_total1 = $('input[name="puntaje_total1"]').val();
  var puntaje_total2 = $('input[name="puntaje_total2"]').val();
  var puntaje = $('input[name="puntaje"]:checked').val();
  $.ajax({
    url: base_url+'claves/update/'+claves_id,
    type: 'POST',
    dataType: 'json',
    data: {
      hora1:hora1,
      hora2:hora2,
      puntaje_total1:puntaje_total1,
      puntaje_total2:puntaje_total2,
      puntaje:puntaje
    },
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