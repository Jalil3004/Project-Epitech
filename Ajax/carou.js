$(document).ready(function() {
    var currentSlide = 0;
    var slides = $("#carousel .slide");
    var numberOfSlides = slides.length;
  
    function showSlide(index) {
      slides.hide();
      slides.eq(index).show();
    }
  
    showSlide(currentSlide);
  
    $("#next").on("click", function() {
      currentSlide = (currentSlide + 1) % numberOfSlides;
      showSlide(currentSlide);
    });
  
    $("#prev").on("click", function() {
      currentSlide = (currentSlide - 1 + numberOfSlides) % numberOfSlides;
      showSlide(currentSlide);
    });
    $(".dropdown").hover(
        function () {
          $(".dropdown-content").show();
        },
        function () {
          $(".dropdown-content").hide();
        }
      );
      
$(function(){
  $("#thebtnsearch").click(function(e){
   e.preventDefault();
    var form = $('#formsearch');
    var ste = form.serialize();

    // Préparation des données à envoyer avec la requête AJAX

   //  var diva = $('#divaa');
   //  var status= $('#statuss');
    $.ajax({
      type:"POST",
      url:"../controler/mainsearch.php",
      data: ste,
      success:function(response){
       
       console.log(response);
       if(ste.error){
         alert(ste.error.message);
       }
       else{
        
        
         
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

  });

