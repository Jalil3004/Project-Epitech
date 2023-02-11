




  //  console.log(form);
  

 $(function(){
   $("#thebtnco").click(function(e){
    e.preventDefault();
     var form = $('#formco');
     var str = form.serialize();
    //  var diva = $('#divaa');
    //  var status= $('#statuss');
     $.ajax({
       type:"POST",
       url:"../controler/mainco.php",
       data:str,
       success:function(response){
        let thetype = JSON.parse(response);
        console.log(thetype.type);
        if(thetype.type=='success'){
          // alert(str.error.message);
         alert (thetype.message);
         console.log(thetype.email);
          location.href='../view/compte.php?age=' + thetype.email;
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
        alert(error);
        
       }				
         } );
   });
 
 });	
 