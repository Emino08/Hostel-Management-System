function allow(id){
  
    let email = (id.id).substring(6,)

  $(document).ready(function(){
  
    $.post("./verify.php",
  {
    email: email
  },
  function(data,status){
    alert(data);
    
    });
  })
  }