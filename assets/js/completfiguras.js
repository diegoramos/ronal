function guardarcomplefigura(){
  var count =1;
  var milista=new Array();
  while(count<=38){
    var data = {};
    data.punt = $('input[name="puncomfigura'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}