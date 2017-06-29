













<!-- scripts -->
<script src="<?= base_url()?>assets/js/jquery-3.1.1.min.js"></script>
 
<script src="<?= base_url()?>assets/js/steps/jquery.steps.min.js"></script>
<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.js"></script>  
 <script src="<?= base_url()?>assets/js/bootstrap3-typeahead.js"></script>   

  
 	 

   


 <!-- ###SCRIPTS#### -->
 
   <script >
        $(document).ready(function(){
          $("#wizard").steps();

          $("a[href='#finish']").css('background-color','red');
             
       });

        function modle_pop(){
        	  $("#sign_in").modal("hide");
              $("#reg_form").modal("show");
        }
    </script>
 <!-- ###SCRIPTS#### -->

</body>

</html>