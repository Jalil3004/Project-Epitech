

 var form = document.getElementById("form");






$(function(){
  $("#thebtn").click(function(e){
   e.preventDefault();
    var form = $('#form');
    var ste = form.serialize();
   //  var diva = $('#divaa');
   //  var status= $('#statuss');
    $.ajax({
      type:"POST",
      url:"../controler/main.php",
      data:ste,
      success:function(response){
        let thetype = JSON.parse(response);
        console.log(thetype.type);
        if(thetype.type=='success'){
          // alert(str.error.message);
         alert (thetype.message);
         
         location.href='../view/connexion.php';
        }
        else{
          
          alert (thetype.message);
        }
      
   

       //  diva.html(response);
       //  status.text('Posté');
       
        
      },
      error: function( xhr, status, error ) {
       // status.text('Erreur pour poster le formulaire : '+ response.status + " " + response.statusText);
       console.log(xhr, status, error);
       
      }				
        } );
  });

});	

 











  