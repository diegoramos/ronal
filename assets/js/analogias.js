if (analogia_id) {
  $.ajax({
    url: base_url+'analogias/get_editdata/'+analogia_id,
    type: 'GET',
    dataType: 'json',
    data: {},
  })
  .done(function(data) {
    if (data!=null) {
      $('input[name="puntaje_total"]').val(data.puntaje_total);
      var obj = JSON.parse(data.cuerpo);
      $.each(obj, function(index, val) {
        //$('#Horas'+(index+1)).text(val.hora);
        if (val.puntaje!='') {
          $('input[id="pu'+(index+1)+''+val.puntaje+'"]').attr('checked', 'checked');
        }
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

function guardarana(){
  var count =1;
  var milista = new Array();
  while(count<=23){
    var data = {};
    data.puntaje = $('input[name="punt'+count+'"]:checked').val();
    data.puntaje = data.puntaje!=undefined?data.puntaje:0;
    milista.push(data);
    count=count+1;
  }
   $.ajax({
    url: base_url+'analogias/guardar',
    type: 'POST',
    dataType: 'json',
    data: {data:milista,puntaje_total:$('input[name="puntaje_total"]').val() },
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
  while(count<=23){
    var data = {};
    data.puntaje = $('input[name="punt'+count+'"]:checked').val();
    data.puntaje = data.puntaje!=undefined?data.puntaje:0;
    milista.push(data);
    count=count+1;
  }

  $.ajax({
    url: base_url+'analogias/update/'+analogia_id,
    type: 'POST',
    dataType: 'json',
    data: {data:milista,puntaje_total:$('input[name="puntaje_total"]').val() },
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