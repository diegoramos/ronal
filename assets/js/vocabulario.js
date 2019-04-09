function guardarvoca(){
  var count =1;
  var milista=new Array();
  while(count<=36){
    var data = {};
    data.punt = $('input[name="pun'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}
