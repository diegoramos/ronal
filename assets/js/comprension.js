function guardarcompre(){
  var count =1;
  var milista=new Array();
  while(count<=21){
    var data = {};
    data.punt = $('input[name="puncompre'+count+'"]:checked').val();
    milista.push(data);
    count=count+1;
  }
  console.log(milista);
}