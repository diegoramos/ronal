function guardarinforma(){
  var count =1;
  var milista=new Array();
  while(count<=33){
    var data = {};
    data.punt = $('input[name="puninfor'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}