$(function(){
    $("#btndelete").click(function(e){
     e.preventDefault();
    //   var form = $('#formedit');
    //   var str = form.serialize();
     //  var diva = $('#divaa');
     //  var status= $('#statuss');
      $.ajax({
       
        url:"../controler/maindelete.php",
      
        success:function(response){
        
        
           // alert(str.error.message);
         
        
           location.href='../view/compte.php';
       
 
         //  diva.html(response);
         //  status.text('Posté');
         
          
        },
        error: function( xhr, status, error ) {
         // status.text('Erreur pour poster le formulaire : '+ response.status + " " + response.statusText);
         console.log(xhr, status, error);
         alert(error);
         
        }				
          } );
    });
  
  });	