<?php
include_once '../include/header.php';
?>

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="col-md-10 offset-md-1">
                    <div class="form-title">
                        <h2>Student Register Form</h2>
                    </div>
                </div>
                <div class="content-body">

                    <!-- stats -->
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action="student-register.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="roll" class="control-label">Student Id</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="roll" id="roll" required placeholder="Enter Your Roll" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Enter Your Name</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name" required placeholder="Enter Your Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Your Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" required placeholder="Enter Your Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="cols-md-4 control-label">Phone Number</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="phone" class="form-control" name="phone" id="phone" required placeholder="Enter your Phone Number" />
                                        </div>
                                    </div>
                                </div>

                                <div class="gender">
                                    <p>Select Your Gender</p>
                                    <div class="radio-inline">
                                        <label class="custom-control custom-radio">
                                      <input id="radio1" value="male" name="gender" type="radio" required class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description"></span>Male
                                    </label>
                                        <label class="custom-control custom-radio">
                                      <input id="radio2" value="female" name="gender" type="radio" required class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description"></span>Female
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group birth">
                                    <label><p>Select your DOB :</p></label>
                                <select name="day" class="dob">
                                    <?php
                                        for($i=1;$i<=31;$i++)
                                        {
                                            echo '<option value='.$i.'>'.$i.'</option>';
                                        }
                                    ?>
                                </select>

                                <select class="dob" name="month">             
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>               
                            </select>

                                <select name="year" class="dob">
                                    <?php
                                        for($i=1990;$i<=2017;$i++)
                                        {
                                            echo '<option value='.$i.'>'.$i.'</option>';
                                        }

                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-file" for="image"><h4>Chosose profile pic</h4>                      
                                  <input type="file" id="image" name="image" required class="custom-file-input">
                                  <span class="custom-file-control"></span>
                                </label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Register" class="btn btn-success">
                                    <input type="reset" name="submit" value="Reset" class="btn btn-info">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include_once '../include/footer.php';
?>