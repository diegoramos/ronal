function guardarpuntintento(){
  var count =1;
  var milista=new Array();
  while(count<=52){
    var data = {};
    data.punt = $('input[name="puninte'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}