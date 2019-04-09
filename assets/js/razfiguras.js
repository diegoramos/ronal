function guardarrazfiguras(){
  var count =1;
  var milista=new Array();
  while(count<=12){
    var data = {};
    data.punt = $('input[name="pufigu'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}
function guardarrazfigu2(){
  var count =13;
  var milista=new Array();
  while(count<=28){
    var data = {};
    data.punt = $('input[name="pufigu'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}

