




  //  console.log(form);
  $(".dropdown").hover(
    function () {
      $(".dropdown-content").show();
    },
    function () {
      $(".dropdown-content").hide();
    }
  );

  $(function(){
    $("#btnedit").click(function(e){
     e.preventDefault();
      var form = $('#formedit');
      var str = form.serialize();
     //  var diva = $('#divaa');
     //  var status= $('#statuss');
      $.ajax({
        type:"POST",
        url:"../controler/mainprofile.php",
        data:str,
        success:function(response){
        
          let thetype = JSON.parse(response);
          
          if(thetype.type=='success'){
            // alert(str.error.message);
           alert (thetype.message);
           
           location.href='../view/compte.php';
          }
          else{
            
            alert (thetype.message);
          }
           // alert(str.error.message);
         
       
       
 
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
  