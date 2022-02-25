

// let accept = document.getElementById("accept").innerHTML;

// alert(accept);

// $(document).ready(function(){
//     let name = $("#accept");
//     name.click(function(){
//         alert("You entered p1!");

//         $.post("http://localhost:5050/new/admin/grand_access.php",
//     {
//       press: "press"
//     },
//     function(data,status){
//       alert("Data: " + data + "\nStatus: " + status);
      
//     });
//       });

  
    
//   });

$(document).ready(function(){
  // let name = $("#accept");
  
      // alert("You entered p1!");

      $.post("./mail.php",
  {
    press: "press"
  },
  function(data,status){
    // alert("Data: " + data + "\nStatus: " + status);
    $("#list").prepend(data);
    
    });

});

