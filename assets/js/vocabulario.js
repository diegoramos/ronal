if (vocabulario_id) {
  $.ajax({
    url: base_url+'vocabulario/get_editdata/'+vocabulario_id,
    type: 'GET',
    dataType: 'json',
    data: {},
  })
  .done(function(data) {
    if (data!=null) {
      $('input[name="puntaje_total"]').val(data.puntaje_total);
      var obj = JSON.parse(data.cuerpo);
      $.each(obj, function(index, val) {

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

function guardar(){
  var count =1;
  var milista=new Array();
  while(count<=36){
    var data = {};
    var temp = $('input[name="pun'+count+'"]:checked').val();
    data.puntaje = temp!=undefined?temp:null;
    milista.push(data);
    count=count+1;
  }

  $.ajax({
    url: base_url+'vocabulario/guardar',
    type: 'POST',
    dataType: 'json',
    data: {
      lista:milista,
      puntaje_total:$('input[name="puntaje_total"]').val()
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
  var count =1;
  var milista=new Array();
  while(count<=36){
    var data = {};
    var temp = $('input[name="pun'+count+'"]:checked').val();
    data.puntaje = temp!=undefined?temp:null;
    milista.push(data);
    count=count+1;
  }
  $.ajax({
    url: base_url+'vocabulario/update/'+vocabulario_id,
    type: 'POST',
    dataType: 'json',
    data: {lista:milista,puntaje_total:$('input[name="puntaje_total"]').val() },
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
