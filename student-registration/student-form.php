<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 10/3/16
 */

include_once "./inc/convertions/encrypt-decrypt.php";
include_once "./inc/validator/form-data.php";

// form data as query string
$form_data = isset($_REQUEST['form_data']) ? decode_data($_REQUEST['form_data']) : array();
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Student Registration Form - App No: 0010</h3>
    </div>
    <div class="panel-body">
        <form action="registration.php" method="post" class="form-horizontal">
            <div class="form-container">
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="firstname">First
                                Name</label></div>
                        <div class="col-lg-10">
                            <input type="text" name="studentForm[firstname]" id="firstname" class="form-control"
                                   value="<?php echo show_value('firstname', $form_data); ?>"
                                   placeholder="Enter firstname" autofocus/>
                            <span class="error"><?php echo show_message('firstname', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="lastname">Last
                                Name</label></div>
                        <div class="col-lg-10">
                            <input type="text" name="studentForm[lastname]" id="lastname" class="form-control"
                                   value="<?php echo show_value('lastname', $form_data); ?>"
                                   placeholder="Enter lastname"/>
                            <span class="error"><?php echo show_message('lastname', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="gender">Gender</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="radio" name="studentForm[gender]" value="Male"> Male &nbsp;&nbsp;
                            <input type="radio" name="studentForm[gender]" value="Female"> Female &nbsp;&nbsp;
                            <input type="radio" name="studentForm[gender]" value="other"> Other
                            <span class="error"><?php echo show_message('gender', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="last_yr_percentage">Last
                                Year %</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="studentForm[last_yr_percentage]" id="last_yr_percentage"
                                   class="form-control"
                                   value="<?php echo show_value('last_yr_percentage', $form_data); ?>"
                                   placeholder="Enter last year %"/>
                            <span class="error"><?php echo show_message('last_yr_percentage', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="applying_for">Applying
                                For</label></div>
                        <div class="col-lg-10">
                            <select name="studentForm[applying_for]" id="applying_for" class="form-control">
                                <option value="">--Select Applying for--</option>
                                <option value="11th">11th</option>
                                <option value="12th">12th</option>
                            </select>
                            <span class="error"><?php echo show_message('applying_for', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="phone_number">Phone
                                Number</label></div>
                        <div class="col-lg-10">
                            <input type="text" name="studentForm[phone_number]" id="phone_number" class="form-control"
                                   value="<?php echo show_value('phone_number', $form_data); ?>"
                                   placeholder="Enter phone number"/>
                            <span class="error"><?php echo show_message('phone_number', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="email">Email ID(if
                                any)</label></div>
                        <div class="col-lg-10">
                            <input type="text" name="studentForm[email]" id="email" class="form-control"
                                   value="<?php echo show_value('email', $form_data); ?>"
                                   placeholder="Enter email"/>
                            <span class="error"><?php echo show_message('email', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="address">Address</label>
                        </div>
                        <div class="col-lg-10">
                            <textarea name="studentForm[address]" id="address" class="form-control"
                                      placeholder="Enter address"
                                      rows="4"><?php echo show_value('address', $form_data); ?></textarea>
                            <span class="error"><?php echo show_message('address', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2"><label class="control-label col-sm-offset-2" for="postal_code">Postal
                                Code</label></div>
                        <div class="col-lg-10">
                            <input type="text" name="studentForm[postal_code]" id="postal_code" class="form-control"
                                   value="<?php echo show_value('postal_code', $form_data); ?>"
                                   placeholder="Enter postal code"/>
                            <span class="error"><?php echo show_message('postal_code', $form_data); ?></span>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-1 col-lg-offset-2">
                            <input type="reset" class="btn btn-danger" value="Reset"/>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
