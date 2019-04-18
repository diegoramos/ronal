if (retencion_id) {
  $.ajax({
    url: base_url+'retDigitos/get_editdata/'+retencion_id,
    type: 'GET',
    dataType: 'json',
    data: {},
  })
  .done(function(data) {
    if (data!=null) {
      $('input[name="puntaje_total1"]').val(data.puntaje_total1);
      $('input[name="puntaje_total2"]').val(data.puntaje_total2);
      $('input[name="puntaje_total3"]').val(data.puntaje_total3);
      $('input[name="puntaje_total4"]').val(data.puntaje_total4);
      $('input[name="puntaje_retencion_global"]').val(data.puntaje_retencion_global);
      var obj = JSON.parse(data.cuerpo);
      var count =1;
      $.each(obj.lista1, function(index, val) {
        if (val.puntaje!='') {
          $('input[id="nu'+count+''+val.puntaje+'"]').attr('checked', 'checked');
        }
        count++;
      });
      var count2 =33;
      $.each(obj.lista2, function(index, val2) {
        if (val2.puntaje!='') {
          $('input[id="nu'+count2+''+val2.puntaje+'"]').attr('checked', 'checked');
        }
        count2++;
      });
      count3 =17;
      $.each(obj.lista3, function(index, val3) {
        if (val3.puntaje!='') {
          $('input[id="nu'+count3+''+val3.puntaje+'"]').attr('checked', 'checked');
        }
        count3++;
      });
      var count4 =41;
      $.each(obj.lista4, function(index, val4) {
        if (val4.puntaje!='') {
          $('input[id="nu'+count4+''+val4.puntaje+'"]').attr('checked', 'checked');
        }
        count4++;
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
function guardardretencion(){
  var count =1;
  var milista1=new Array();
  while(count<=16){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista1.push(data);
    count=count+1;
  }

  count =33;
  var milista2=new Array();
  while(count<=40){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista2.push(data);
    count=count+1;
  }

  count =17;
  var milista3=new Array();
  while(count<=32){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista3.push(data);
    count=count+1;
  }

  count =41;
  var milista4=new Array();
  while(count<=48){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista4.push(data);
    count=count+1;
  }

  $.ajax({
    url: base_url+'retDigitos/guardar',
    type: 'POST',
    dataType: 'json',
    data: {
      lista1:milista1,
      lista2:milista2,
      lista3:milista3,
      lista4:milista4,
      puntaje_total1:$('input[name="puntaje_total1"]').val(),
      puntaje_total2:$('input[name="puntaje_total2"]').val(),
      puntaje_total3:$('input[name="puntaje_total3"]').val(),
      puntaje_total4:$('input[name="puntaje_total4"]').val(),
      puntaje_retencion_global:$('input[name="puntaje_retencion_global"]').val(),
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
  var milista1=new Array();
  while(count<=16){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista1.push(data);
    count=count+1;
  }

  count =33;
  var milista2=new Array();
  while(count<=40){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista2.push(data);
    count=count+1;
  }

  count =17;
  var milista3=new Array();
  while(count<=32){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista3.push(data);
    count=count+1;
  }

  count =41;
  var milista4=new Array();
  while(count<=48){
    var data = {};
    var temp = $('input[name="puninter'+count+'"]:checked').val();
    data.punt = temp!=undefined?temp:null;
    milista4.push(data);
    count=count+1;
  }

  $.ajax({
    url: base_url+'retDigitos/update/'+retencion_id,
    type: 'POST',
    dataType: 'json',
    data: {
      lista1:milista1,
      lista2:milista2,
      lista3:milista3,
      lista4:milista4,
      puntaje_total1:$('input[name="puntaje_total1"]').val(),
      puntaje_total2:$('input[name="puntaje_total2"]').val(),
      puntaje_total3:$('input[name="puntaje_total3"]').val(),
      puntaje_total4:$('input[name="puntaje_total4"]').val(),
      puntaje_retencion_global:$('input[name="puntaje_retencion_global"]').val(),
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