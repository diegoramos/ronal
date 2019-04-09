function guardararitme(){
  var count =1;
  var milista=new Array();
  while(count<=34){
    var data = {};
    data.punt = $('input[name="punarit'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}