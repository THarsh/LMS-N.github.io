<!-- #################Style############ -->

<style type="text/css">
  .navbar{
   margin-bottom: 0px !important;
  }

  .page-heading {
    border-top: 0 none !important;
    padding-top:8px;
    padding-bottom:0px;
}
</style>

<!-- #################Style############ -->


<div class="container-fluid">
  <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <img class="img-responsive" src="http://via.placeholder.com/100x50" style="padding:10px;">
      </div>
      <div class="col-md-4">
        <img class="img-responsive" src="http://via.placeholder.com/100x50" style="padding:10px;">
      </div>


      </div>
  </div>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      

    </div>
 <!-- <li><a class="l-btn <?= $status?>" href="<?= base_url() ?>index.php/welcome/login">LOGIN & REGISTER</a></li> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url() ?>index.php/welcome/">Home</a></li>
        <li><a href="#">Institutions</a></li>
        <li><a href="#">Teachers</a></li>
        
        <!--  <li><a href="<?= base_url() ?>index.php/welcome/login">Sing In</a></li> -->
        <li class="dropdown">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= base_url() ?>index.php/welcome/institution">Register as an institution/Institutional profile</a></li>
            <li><a href="<?= base_url() ?>index.php/welcome/teacher">Register as a teacher/Teachers Profile</a></li>
            </ul>
        </li>
        <li><a href="#">My appointments</a></li>
        <li><a href="#">Help</a></li>

        <li><a data-toggle="modal"  href="#sign_in">Singn In</a></li>

      <div class="col-md-12 hidden-md hidden-lg">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <center>
           <button type="submit" class="btn btn-default">Search</button>
        </center>
       
      </form>
      </div>

 
        
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
           

 <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-md-12">
        <div class="col-md-6">
            <h3>  Headding Name  </h3>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb pull-right">
          <li>
              <a href="index-2.html">Home</a>
          </li>
             <li class="active">
                <strong>Location</strong>
              </li>
          </ol>
      </div>
    </div>
</div>


<!-- sing in modal -->
 <div id="sign_in" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-body">
              <div class="row">
              <div class="col-md-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Sign in</h5>
                             
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                            <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group"><label>Email</label> <input placeholder="Email" class="form-control" type="Email"></div>


                                 <div class="form-group"><label>Password</label> <input placeholder="Password" class="form-control" type="password"></div>
                            </div>
                                
                              
                                 
                                 
                                <div class="form-group">
                                    <div class="col-md-12">
                                       <div>
                                        <center>
                                        <button class="btn btn-sm btn-primary   m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                        </center>
                                        </div>
                                     <hr>
                                     <center>
                                      </label><a href="#" id="reg_link" onclick="modle_pop();"  data-toggle="modal" >Create new account</a></lable>
                                     </center> 
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </div>


 <!-- registration modal -->

<div id="reg_form" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
                              <div class="ibox float-e-margins">
                                  <div class="ibox-title">
                                      <h5>Create a new account</h5>
                                       
                                  </div>
                                  <div class="ibox-content">
                                      <form class="form-horizontal">
                                          
                                          <div class="form-group"><label class="col-lg-2 control-label">Email</label>

                                              <div class="col-lg-10"><input placeholder="Email" class="form-control" type="email"> 
                                              </div>
                                          </div>

                                          <div class="form-group"><label class="col-lg-2 control-label">First Name</label>

                                              <div class="col-lg-10"><input placeholder="First Name" class="form-control" type="text"> 
                                              </div>
                                          </div>

                                          <div class="form-group"><label class="col-lg-2 control-label">Last Name</label>

                                              <div class="col-lg-10"><input placeholder="Last Name" class="form-control" type="text"> 
                                              </div>
                                          </div> 
                                          
                                           <div class="form-group"><label class="col-lg-2 control-label">Phone Number</label>

                                              <div class="col-lg-10"><input placeholder="Phone Number" class="form-control" type="text"> 
                                              </div>
                                          </div>



                                          <div class="form-group"><label class="col-lg-2 control-label">Password</label>

                                              <div class="col-lg-10"><input placeholder="Password" class="form-control" type="password"></div>
                                          </div>

                                           <div class="form-group"><label class="col-lg-2 control-label">Confirm  Password</label>

                                              <div class="col-lg-10"><input placeholder="Confirm  Password" class="form-control" type="password"></div>
                                          </div>
                                           
                                          <div class="form-group">
                                              <div class="col-lg-offset-2 col-lg-10">
                                                 <div>
                                                  <button class="btn btn-sm btn-primary   m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                                  
                                              </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
           </div>
        </div>
      </div>
  </div>
</div>

 


 

