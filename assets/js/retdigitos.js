function guardardirecto(){
  var count =1;
  var milista=new Array();
  while(count<=8){
    var data = {};
    data.punt = $('input[name="puninter'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}
function guardardiginver(){
  var count =25;
  var milista=new Array();
  while(count<=48){
    var data = {};
    data.punt = $('input[name="puninter'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}