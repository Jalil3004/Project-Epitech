

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
       
       console.log(response);
       if(ste.error){
         alert(ste.error.message);
       }
       else{
         alert ('Vous êtes inscrit');
         location.href='../view/connexion.php';
         
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

 











  