 
    <?php include(FCPATH . "assets/includes/nav.php"); ?>

    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
           <?php echo form_open('');?>    
                <h1>Register Form</h1>  
              
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" name="name" for="name-input-field">Name </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" name="email" for="email-input-field">Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label"  for="pawssword-input-field">Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="password_r" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" name password="r" for="repeat-pawssword-input-field">Repeat Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control"  name="password_r"   type="password">
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I've read and accept the terms and conditions</label>
                </div>
                <button class="btn btn-default submit-button" type="Submit">Submit Form</button>
            </form>
        </div>
    </div> 