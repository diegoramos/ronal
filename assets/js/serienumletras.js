if (serie_id) {
  $.ajax({
    url: base_url+'serieNumLetras/get_editdata/'+serie_id,
    type: 'GET',
    dataType: 'json',
    data: {},
  })
  .done(function(data) {
    if (data!=null) {
      $('input[name="puntaje_total"]').val(data.puntaje_total);
      $('input[id="pe1'+data.pred1+'"]').attr('checked', 'checked');
      $('input[id="pe2'+data.pred2+'"]').attr('checked', 'checked');
      var obj = JSON.parse(data.cuerpo);
      var count =1;
      $.each(obj, function(index, val) {
        if (val.puntaje!='') {
          $('input[id="pu'+count+''+val.puntaje+'"]').attr('checked', 'checked');
        }
        count++;
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
  while(count<=40){
    var data = {};
    var temp = $('input[name="puninte'+count+'"]:checked').val();
    data.puntaje = temp!=undefined?temp:null;
    milista.push(data);
    count=count+1;
  }
  $.ajax({
    url: base_url+'serieNumLetras/guardar',
    type: 'POST',
    dataType: 'json',
    data: {
      lista:milista,
      puntaje_total:$('input[name="puntaje_total"]').val(),
      pred1:($('input[name="pred1"]:checked').val()!=undefined)?$('input[name="pred1"]:checked').val():null,
      pred2:($('input[name="pred2"]:checked').val()!=undefined)?$('input[name="pred2"]:checked').val():null,
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
  while(count<=40){
    var data = {};
    var temp = $('input[name="puninte'+count+'"]:checked').val();
    data.puntaje = temp!=undefined?temp:null;
    milista.push(data);
    count=count+1;
  }
  $.ajax({
    url: base_url+'serieNumLetras/update/'+serie_id,
    type: 'POST',
    dataType: 'json',
    data: {
      lista:milista,
      puntaje_total:$('input[name="puntaje_total"]').val(),
      pred1:($('input[name="pred1"]:checked').val()!=undefined)?$('input[name="pred1"]:checked').val():null,
      pred2:($('input[name="pred2"]:checked').val()!=undefined)?$('input[name="pred2"]:checked').val():null,
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