 <?php include(FCPATH . "assets/includes/nav.php"); ?>

<div class="container">
<div class="row" style="padding-top:10px;">
    <div class="col-md-6">
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
    <div class="col-md-6">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Create a new account</h5>

                </div>
                <div class="ibox-content">
                    <form class="form-horizontal">

                        <div class="form-group"><label class="col-lg-2 control-label">Email</label>

                            <div class="col-lg-10"><input placeholder="Email" class="form-control"
                                                          type="email">
                            </div>
                        </div>

                        <div class="form-group"><label class="col-lg-2 control-label">First Name</label>

                            <div class="col-lg-10"><input placeholder="First Name" class="form-control"
                                                          type="text">
                            </div>
                        </div>

                        <div class="form-group"><label class="col-lg-2 control-label">Last Name</label>

                            <div class="col-lg-10"><input placeholder="Last Name" class="form-control"
                                                          type="text">
                            </div>
                        </div>

                        <div class="form-group"><label class="col-lg-2 control-label">Phone Number</label>

                            <div class="col-lg-10"><input placeholder="Phone Number" class="form-control"
                                                          type="text">
                            </div>
                        </div>


                        <div class="form-group"><label class="col-lg-2 control-label">Password</label>

                            <div class="col-lg-10"><input placeholder="Password" class="form-control"
                                                          type="password"></div>
                        </div>

                        <div class="form-group"><label class="col-lg-2 control-label">Confirm
                                Password</label>

                            <div class="col-lg-10"><input placeholder="Confirm  Password"
                                                          class="form-control" type="password"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div>
                                    <button class="btn btn-sm btn-primary   m-t-n-xs" type="submit"><strong>Log
                                            in</strong></button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    </div>
</div>
 