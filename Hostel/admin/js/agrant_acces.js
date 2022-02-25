$(document).ready(function(){
    // let name = $("#accept");
    
        // alert("You entered p1!");
  
        $.post("./amail.php",
    {
      press: "press"
    },
    function(data,status){
      // alert("Data: " + data + "\nStatus: " + status);
      $("#list").prepend(data);
      
      });
  
  });
  