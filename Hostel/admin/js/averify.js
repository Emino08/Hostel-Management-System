function allow(id){
  
    let email = (id.id).substring(6,)

  $(document).ready(function(){
  
    $.post("./averify.php",
  {
    email: email
  },
  function(data,status){
    // alert("Data: " + data + "\nStatus: " + status);
    alert(data);
    });
  })
  }