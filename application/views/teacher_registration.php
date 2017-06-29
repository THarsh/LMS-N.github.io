<?php include(FCPATH . "assets/includes/nav.php"); ?>


<div class="row">

    <div class="col-md-12">
        <div class="ibox float-e-margins">
             <div class="ibox-content">
                 <div id="wizard">
                    <h1>First Reg1</h1>
                    <div class="step-content">
                        <div class="m-t-md">
                            <div class="row">
                                            <?php echo form_open_multipart('profile/profile_details', 'id="teacher-reg-form"'); ?>

                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><label>Enter Your Name</label> <span class="erros">* </span></td>
                                            <td> <input type="text" name="username" class="form-control"
                                                        placeholder="Enter Your Name"> <?php echo form_error('name'); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td><label>Enter Your NIC </label>  <span class="erros">* </span></td>
                                            <td>
                                                <input type="text" name="nic" class="form-control"
                                                       placeholder="Enter Your NIC"> <?php echo form_error('nic'); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td><label>Your Mobile  Ex-07x xxx xxxx </label><span class="erros">* </span></td>
                                            <td>
                                                <input type="text" name="mob1" class="form-control"
                                                       placeholder="Your Mobile  Ex-07x xxx xxxx"> <?php echo form_error('mob1'); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">4</th>
                                            <td><label>Your Land  Ex-0xx xxx xxxx  </label><span class="erros">* </span></td>
                                            <td>
                                                <input type="text" name="mob2" class="form-control"
                                                       placeholder="Your Land  Ex-0xx xxx xxxx"> <?php echo form_error('mob2'); ?>
                                            </td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">5</th>
                                            <td><label>Enter Permanent Address</label><span class="erros">* </span></td>
                                            <td>
                                                <input type="text" name="permadd" class="form-control"
                                                         placeholder="Enter Permanent Address"> <?php echo form_error('permadd'); ?>

                                            </td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">6</th>
                                            <td><label>Enter Postal Address</label><span class="erros">* </span></td>
                                            <td>
                                                <input type="text" name="postadd" class="form-control"
                                                       placeholder="Enter Postal Address"> <?php echo form_error('postadd'); ?>

                                            </td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">7</th>
                                            <td><label>Date of Birth</label><span class="erros">* </span></td>
                                            <td>
                                                <input type="date" name="dob" data-language="en"
                                                       class="datepicker-here form-control">
                                                <!-- <input type="date" name="dob" class="form-control" placeholder="Enter You Date of birth">  -->
                                                <?php echo form_error('dob'); ?>
                                            </td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td><label>Upload Your Photo</label><span class="erros">* </span></td>
                                            <td>
                                                <input type="file" name="photo" class="form-control"
                                                       placeholder="Upload Your photo"
                                                       accept="image/*"><?php echo form_error('photo'); ?>
                                            </td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">9</th>
                                            <td><label>Gender</label><span class="erros">* </span></td>
                                            <td>
                                                <select name="gender" class="form-control"
                                                        placeholder="Select You gender">
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                </select>
                                            </td>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <center>
                                        <button class="btn-n btn-s" type="submit">Proceed</button>
                                    </center>
                                </div>


                                            <!--<div class="col-md-12">

                                                <div id="errors-div" class="erros"></div>

                                                <span class="erros">* </span>
                                                <input type="text" name="username" class="form-control"
                                                       placeholder="Enter Your Name"> <?php /*echo form_error('name'); */?>
                                                <br>

                                                <span class="erros">* </span>
                                                <input type="text" name="nic" class="form-control"
                                                       placeholder="Enter Your NIC"> <?php /*echo form_error('nic'); */?>
                                                <br>

                                                <span class="erros">* </span>
                                                <input type="text" name="mob1" class="form-control"
                                                       placeholder="Your Mobile  Ex-07x xxx xxxx"> <?php /*echo form_error('mob1'); */?>
                                                <br>

                                                <input type="text" name="mob2" class="form-control"
                                                       placeholder="Your Land  Ex-0xx xxx xxxx"> <?php /*echo form_error('mob2'); */?>
                                                <br>

                                                <span class="erros">* </span>
                                                <input type="text" name="permadd" class="form-control"
                                                       placeholder="Enter Permanent Address"> <?php /*echo form_error('permadd'); */?>
                                                <br>

                                                <span class="erros">* </span>
                                                <input type="text" name="postadd" class="form-control"
                                                       placeholder="Enter Postal Address"> <?php /*echo form_error('postadd'); */?>
                                                <br>

                                                <span class="erros">* </span>
                                                <input type="date" name="dob" data-language="en"
                                                       class="datepicker-here form-control">

                                                <?php /*echo form_error('dob'); */?>
                                                <br>

                                                <input type="file" name="photo" class="form-control"
                                                       placeholder="Upload Your photo"
                                                       accept="image/*"><?php /*echo form_error('photo'); */?>
                                                <br>

                                                <span class="erros">* </span>
                                                <select name="gender" class="form-control"
                                                        placeholder="Select You gender">
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                </select>
                                                <br>


                                                <center>
                                                    <button class="btn-n btn-s" type="submit">Proceed</button>
                                                </center>
                                            </div>-->
                                            </form>
                                        </div>



                        </div>
                    </div>

                    <h1>Courses details</h1>
                    <div class="step-content">
                        <div class=" m-t-md">
                            <div class="row">

                                <div class="order">
                                    <?php echo form_open_multipart('course/insert_details', 'id="add-subject-form"'); ?>
                                    <div id="errors-div2" class="erros"></div>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><label>Subject<span class="erros"> *</span></label></td>
                                            <td>
                                                <div class="subj-sel">
                                                    <select name="levl1" id="levl1">
                                                        <option>GCE O/L</option>
                                                        <option>GCE A/L</option>
                                                        <option>Other</option>
                                                    </select>

                                                    <select name="levl2" id="levl2">
                                                        <option>Commerce</option>
                                                        <option>Biology</option>
                                                        <option>Arts</option>
                                                        <option>Mathematics</option>
                                                        <option>Other</option>
                                                    </select>

                                                    <select name="levl3" id="levl3">
                                                        <option>Accounting</option>
                                                        <option>Economics</option>
                                                        <option>Business Studies</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <?php echo form_error('levl1'); ?>
                                                <?php echo form_error('levl2'); ?>
                                                <?php echo form_error('levl3'); ?>

                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td><label> Language<span class="erros"> *</span></label></td>
                                            <td>
                                                <select name="lang">
                                                    <option>English</option>
                                                    <option>Sinhala</option>
                                                    <option>Tamil</option>
                                                </select>
                                                <?php echo form_error('lang'); ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><label> Secondary Language</label></td>
                                            <td>
                                                <label>
                                                    <input class="form-control" type="checkbox" name="slang1"
                                                           value="English">
                                                    English
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" name="slang2"
                                                           value="Sinhala">
                                                    Sinhala
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" name="slang3"
                                                           value="Tamil">
                                                    Tamil
                                                </label>

                                            </td>

                                        </tr>

                                        <tr class="hidden">
                                            <th scope="row">4</th>
                                            <td><label> Qualification(s)</label></td>
                                            <td>
                                                <ul>
                                                    <?php
                                                    // foreach ($qualfs as $value) {

                                                    //     echo "<li class='li' data-id='" . $value['q_id'] . "'>" . $value['qualifi'] . " <span data-id='" . $value['q_id'] . "' class='glyphicon glyphicon-remove text-danger remove' style='cursor:pointer'></li>";
                                                    // }

                                                    $tags = "<form id='q-form' method='post' action='profile/submit_qualification'  enctype='multipart/form-data'>
                                                                    <input type='text' name='q_name' class='form-control' placeholder='Qualification Name' required><br>
                                                                    <input type='file' name='q_doc' class='form-control' accept='image/*,application/pdf' placeholder='Attach the proof document' required><br><br>
                                                                </form>";

                                                    ?>
                                                    <!-- <li><a href="<?php echo base_url(); ?>index.php/home/add_qualification" class="btn btn-default">Add a New Qualification</a></li> -->
                                                    <?php //echo '<li><a href="#" data-toggle="popover" title="Add New Qualification" data-content="'.$tags.'">Add New Qualification</a></li>'?>
                                                </ul>
                                                <!-- <button type="reset" data-toggle="popover" title="Add New Qualification" data-content="<?php echo $tags; ?>">Add New Qualification</button> -->
                                                <?php
                                                // echo '<button class="btn btn-default" type="button" data-attr="qlfy" data-toggle="confirmation"
                                                //         data-btn-ok-label="Save"
                                                //         data-btn-cancel-label="Cancel"
                                                //         data-title="Qualification" data-content="' . $tags . '">
                                                //     Add New Qualification
                                                // </button>';
                                                ?>
                                                <div id="errors-div1" class="erros"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">6</th>
                                            <td><label>Experience</label></td>
                                            <td>
                                                <input class="form-control" type="text" name="exp">
                                                <?php echo form_error('exp'); ?>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">7</th>
                                            <td><label>Reminders</label></td>
                                            <td>
                                                <input class="form-control" type="text" name="rem">
                                                <?php echo form_error('rem'); ?>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">8</th>
                                            <td>
                                                <label>Minimum time you expect to spend per session<br> of teaching for
                                                    this subject?<span class="erros"> *</span></label>
                                            </td>
                                            <td>
                                                <input type="text" name="min_dur" class="timepicker">
                                                <?php echo form_error('min_dur'); ?>
                                            </td>

                                        </tr>


                                        <tr>
                                            <th scope="row">9</th>
                                            <td>
                                                <label>Maximum time you expect to spend per session<br> of teaching for
                                                    this subject?<span class="erros"> *</span></label>
                                            </td>

                                            <td>
                                                <input type="text" name="max_dur" class="timepicker">
                                                <?php echo form_error('max_dur'); ?>
                                            </td>


                                        </tr>


                                        <tr>
                                            <th scope="row">10</th>
                                            <td><label>Upload Video a video elaborating your teaching skills</label>
                                            </td>
                                            <td>
                                                <input class="form-control" type="url" name="video">
                                                <?php echo form_error('video'); ?>
                                            </td>

                                        </tr>


                                        <tr>
                                            <th scope="row">11</th>
                                            <td><label>Attach pdf relevant tutorials to the video</label></td>
                                            <td>
                                                <input class="form-control" type="file" name="vid_explain"
                                                       accept="application/pdf">
                                            </td>

                                        </tr>


                                        <tr class="tr">
                                            <th scope="row">12</th>
                                            <td><label>Teacher Travel<span class="erros"> *</span></label></td>
                                            <td id="radios">
                                                <label><input class="form-control" type="radio" name="teacher_travel"
                                                              id="teacher_travel_y" value="Y"
                                                              onclick="change();">Yes</label>
                                                <label><input class="form-control" type="radio" name="teacher_travel"
                                                              id="teacher_travel_n" value="N"
                                                              onclick="change();">No</label>
                                                <?php echo form_error('teacher_travel'); ?>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">15</th>
                                            <td><label>Maximum number of students</label></td>
                                            <td>
                                                <select name="max_stud">
                                                    <option>No Limit</option>
                                                    <?php
                                                    for ($i = 1; $i <= 99; $i++) {
                                                        echo '<option>' . sprintf("%02d", $i) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <center>
                                        <button class="btn-n btn-s" type="submit">Proceed</button>
                                    </center>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <h1> Add Free Time Slots For Teacher Traveling</h1>
                    <div class="step-content">
                        <div class="  m-t-md">
                            <div class="row">
                                <div class="order">
                                    <?php echo form_open('home/save_free_time', 'id="add-free-time"'); ?>
                                    <table class="table table-bordered">

                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td colspan="5">
                                                <label>Location</label>
                                                <input type="text" id="location" class="hidden" name="location"><label>
                                                    <?php echo form_error('location'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <?php echo $map1['js']; ?>
                                                <?php echo $map1['html']; ?><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <label>Distance</label>
                                            </td>
                                            <td>
                                                <input type="number" name="distance" value="10" required><label>KM<span
                                                            class="text-danger"> *</span></label>
                                                <?php echo form_error('distance'); ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <label>Day</label>
                                            </td>
                                            <td>
                                                <select name="day">
                                                    <option value="Mo">Monday</option>
                                                    <option value="Tu">Tuesday</option>
                                                    <option value="We">Wednesday</option>
                                                    <option value="Th">Thursday</option>
                                                    <option value="Fr">Friday</option>
                                                    <option value="Sa">Saturday</option>
                                                    <option value="Su">Sunday</option>
                                                </select><span class="text-danger"> *</span>
                                            </td>


                                        </tr>

                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <label>From Time</label>
                                            </td>
                                            <td>
                                                <input type="text" name="from_time" class="timepicker">
                                                <?php echo form_error('from_time'); ?>
                                            </td>

                                        </tr>


                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <label>To Time</label>
                                            </td>
                                            <td>
                                                <input type="text" name="to_time" class="timepicker">
                                                <?php echo form_error('to_time'); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <label>Start Date</label>
                                            </td>
                                            <td>

                                                <input type="text" name="start_date" data-language="en"
                                                       class="datepicker-here">
                                                <?php echo form_error('start_date'); ?>
                                            </td>

                                        </tr>


                                        </tbody>


                                    </table>
                                    <center>
                                        <input type="button" class="btn btn-success disabled proceed-btn"
                                               value="Proceed">
                                    </center>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <h1> Add Free Time Slots For Student Traveling</h1>
                    <div class="step-content">
                        <div class="  m-t-md">
                            <div class="row">
                                <div class="order">

                                    <table class="table table-bordered">


                                        <table class="table table-bordered">

                                            <div id="errors-free-time-st" class="erros"></div>
                                            <?php echo form_open('home/save_free_time_st', 'id="add-free-time-st"'); ?>


                                            <table class="table">

                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <label>Do you have any arrangedvenue/place where students <br>
                                                            can travel for any individual or group classes?<span
                                                                    class="erros"> *</span></label>
                                                    </td>
                                                    <td>
                                                        <select name="venue" id="venue" onchange="changedFunction()">
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
                                                        </select>
                                                    </td>

                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <label>Location<span class="text-danger"> *</span></label>
                                                    </td>
                                                    <td>

                                                    </td>

                                                </tr>
                                                <tr class="if-yes">

                                                    <td colspan="3">
                                                        <input type="text" id="location" class="hidden" name="location">
                                                        <?php echo form_error('location'); ?>
                                                        <?php echo $map2['js']; ?>
                                                        <?php echo $map2['html']; ?>
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">3</th>
                                                    <td><label>Address<span class="text-danger"> *</span></label></td>
                                                    <td><input type="text" name="address"
                                                               value="21, Hill Street, Nedimala, Dehiwala, Western Province">
                                                        <span id="addr"></span>
                                                        <?php echo form_error('address'); ?>
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">4</th>
                                                    <td><label>Maximum number of students<span
                                                                    class="text-danger"> *</span></label></td>
                                                    <td>
                                                        <input type="number" name="num_o_stud" value="10">
                                                        <?php echo form_error('num_o_stud'); ?>
                                                    </td>
                                                </tr>


                                                <tr class="if-yes">
                                                    <th scope="row">5</th>
                                                    <td><label>Day<span class="text-danger"> *</span></label></td>
                                                    <td>
                                                        <select name="day" required="">
                                                            <option value="Mo">Monday</option>
                                                            <option value="Tu">Tuesday</option>
                                                            <option value="We">Wednesday</option>
                                                            <option value="Th">Thursday</option>
                                                            <option value="Fr">Friday</option>
                                                            <option value="Sa">Saturday</option>
                                                            <option value="Su">Sunday</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">6</th>
                                                    <td><label>From Time<span class="text-danger">*</span></label></td>
                                                    <td>
                                                        <input type="text" name="from_time" class="timepicker">
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">7</th>
                                                    <td><label>To Time</label></td>
                                                    <td>
                                                        <input type="text" name="to_time" class="timepicker">
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">8</th>
                                                    <td><label>Date<span class="text-danger"> *</span></label></td>
                                                    <td>
                                                        <!-- <input type="date" name="start_date" value="2017/06/01">   -->
                                                        <input type="text" name="start_date" data-language="en"
                                                               class="datepicker-here">


                                                        <?php echo form_error('start_date'); ?> </td>
                                                <tr>

                                                <tr class="if-yes">
                                                    <th scope="row">9</th>
                                                    <td><label>Subject<span class="text-danger"> *</span></label></td>
                                                    <td>
                                                        <?php
                                                        //var_dump($subj);
                                                        echo '<select name="subject" required="">';

                                                        foreach ($subj as $row) {
                                                            echo '<option>' . $row['subject'] . '</option>';
                                                        }

                                                        echo "</select>";
                                                        ?>
                                                        <?php echo form_error('subject'); ?>
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">10</th>
                                                    <td><label>Hourly rate for an individual class<span
                                                                    class="text-danger"> *</span></label></td>
                                                    <td>
                                                        <input type="number" name="hourly_rate_indv" value="2000">
                                                        <?php echo form_error('hourly_rate_indv'); ?>
                                                    </td>
                                                </tr>

                                                <tr class="if-yes">
                                                    <th scope="row">11</th>
                                                    <td><label>Hourly rate for group class<span
                                                                    class="text-danger"> *</span></label></td>
                                                    <td>
                                                        <input type="number" name="hourly_rate_grp" value="2500">
                                                        <?php echo form_error('hourly_rate_grp'); ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">12</th>
                                                    <td>
                                                        <label>Are the students required to make any other venue fee in
                                                            addition to the above fee?<span
                                                                    class="text-danger"> *</span></label>
                                                    </td>
                                                    <td>
                                                        <select name="additional_fee" required="">
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
                                                        </select>
                                                        <?php echo form_error('additional_fee'); ?>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">13</th>
                                                    <td>
                                                        <label>Any messages for students regarding appointments relevant
                                                            to this venue</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="note"
                                                               value="This is an institute and you have to pay a fee for this venue">
                                                        <?php echo form_error('note'); ?>
                                                    </td>

                                                </tr>


                                                </tbody>


                                            </table>
                                            <center>
                                                <input type="button" class="btn btn-success disabled proceed-btnst"
                                                       value="Proceed">
                                            </center>
                                            </form>


                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
             
     
      
        



 