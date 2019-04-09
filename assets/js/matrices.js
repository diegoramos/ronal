function guardarrespuesta(){
  var count =1;
  var milista=new Array();
  while(count<=35){
    var data = {};
    data.punt = $('input[name="punres'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}