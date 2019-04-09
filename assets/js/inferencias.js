function guardarinferencia(){
  var count =1;
  var milista=new Array();
  while(count<=77){
    var data = {};
    data.punt = $('input[name="puninferen'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}