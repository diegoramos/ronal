function guardarana(){
  var count =1;
  var milista=new Array();
  while(count<=23){
    var data = {};
    data.punt = $('input[name="punt'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}
