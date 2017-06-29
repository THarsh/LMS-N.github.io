<!DOCTYPE html>
<html>



<head>

    
   
     
    <link href="<?= base_url()?>assets/css/steps/jquery.steps.css" rel="stylesheet">
     
    <link href="<?= base_url()?>assets/css/main/style.css" rel="stylesheet">

</head>

<body>

    

    
       
        
             
       
            <div class="row">
                
                <div class="col-lg-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Wizzard</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p>
                            This is basic example of Step
                        </p>
                        <div id="wizard">
                            <h1>First Step</h1>
                            <div class="step-content">
                                <div class="text-center m-t-md">
                                <h2>Hello in Step 1</h2>
                                <p>
                                    This is the first content.
                                </p>
                                </div>
                            </div>

                            <h1>Second Step</h1>
                            <div class="step-content">
                                <div class="text-center m-t-md">
                                    <h2>This is step 2</h2>
                                    <p>
                                        This content is diferent than the first one.
                                    </p>
                                </div>
                            </div>

                            <h1>Third Step</h1>
                            <div class="step-content">
                                <div class="text-center m-t-md">
                                    <h2>This is step 3</h2>
                                    <p>
                                        This is last content.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
             
     
      
        



    <!-- Mainly scripts -->
    <script src="<?= base_url()?>assets/js/jquery-3.1.1.min.js"></script>
     <script src="<?= base_url()?>assets/js/steps/jquery.steps.min.js"></script>

   
   


    <script >
        $(document).ready(function(){
            $("#wizard").steps();
             
       });
    </script>

</body>


</html>
