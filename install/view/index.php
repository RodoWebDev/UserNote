<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="jetepay website">
        <title>Installation</title>
        <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.css' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel='stylesheet' type='text/css' href='assets/css/install.css' />
        <link rel="shortcut icon" href="../assets/images/favicon.ico" />

        <script type='text/javascript'  src='../assets/js/jquery.min.js'></script>
        <script type='text/javascript'  src='assets/jquery-validation/jquery.validate.min.js'></script>
        <script type='text/javascript'  src='assets/jquery-validation/jquery.form.js'></script>
        <script src='../assets/js/bootstrap.min.js'></script>
    </head>
    <body>
        <div class="install-box">

            <div class="panel panel-install">
                <div class="panel-heading text-center">                    
                    <h2> Installation</h2>
                </div>
                <div class="panel-body no-padding">
                    <div class="tab-container clearfix">
                        <div id="pre-installation" class="tab-title col-sm-4 active"><i class="fa fa-circle-o"></i><strong> Pre-Installation</strong></span></div>
                        <div id="configuration" class="tab-title col-sm-4"><i class="fa fa-circle-o"></i><strong> Configuration</strong></div>
                        <div id="finished" class="tab-title col-sm-4"><i class="fa fa-circle-o"></i><strong> Finished</strong></div> 
                    </div>
                    <div id="alert-container">

                    </div>


                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="pre-installation-tab">
                            <div class="section">
                                <p> <strong>Please configure your PHP settings to match following requirements:</strong></p>
                                <hr />
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="25%">PHP Settings</th>
                                                <th width="27%">Current Version</th>
                                                <th>Required Version</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PHP Version</td>
                                                <td><?php echo $current_php_version; ?></td>
                                                <td><?php echo $php_version_required; ?>+</td>
                                                <td class="text-center">
                                                    <?php if ($php_version_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="section">
                                <p> <strong>Please make sure the extensions/settings listed below are installed/enabled:</strong></p>
                                <hr />
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="25%">Extension</th>
                                                <th width="27%">Current Settings</th>
                                                <th>Required Settings</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MySQLi</td>
                                                <td> <?php if ($mysql_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($mysql_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>GD</td>
                                                <td> <?php if ($gd_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($gd_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>cURL</td>
                                                <td> <?php if ($curl_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($curl_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>allow_url_fopen</td>
                                                <td> <?php if ($allow_url_fopen_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($allow_url_fopen_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                              <tr>
                                                <td>date.timezone</td>
                                                <td> <?php if ($timezone_success) {
                                                        echo $timezone_settings;
                                                        } else {
                                                            echo "Null";
                                                        } ?>
                                                </td>
                                                <td>Timezone</td>
                                                <td class="text-center">
                                                    <?php if ($timezone_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="section">
                                <p><strong>Please make sure you have set the <code>writable</code> permission on the following files:</strong></p>
                                <hr />
                                <div>
                                    <table>
                                        <tbody>
                                            <?php
                                            foreach ($writeable_directories as $value) {
                                                ?>
                                                <tr>
                                                    <td style="width:87%;"><?php echo $value; ?></td>  
                                                    <td class="text-center">
                                                        <?php if (is_writeable(".." . $value)) { ?>
                                                            <i class="status fa fa-check-circle-o"></i>
                                                            <?php
                                                        } else {
                                                            $all_requirement_success = false;
                                                            ?>
                                                            <i class="status fa fa-times-circle-o"></i>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <button <?php
                                if (!$all_requirement_success) {
                                    echo "disabled=disabled";
                                }
                                ?> class="btn btn-info form-next"><i class='fa fa-chevron-right'></i> Next</button>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="configuration-tab">
                            <form name="config-form" id="config-form" action="do_install.php" method="post">

                                <div class="section clearfix">
                                    <p> <strong>Please enter your database connection details.</strong></p>
                                    <hr />
                                    <div>
                                        <div class="form-group clearfix">
                                            <label for="host" class=" col-md-3">Database Host</label>
                                            <div class="col-md-9">
                                                <input type="text" value="" id="host"  name="host" class="form-control" placeholder="Database Host (usually localhost)" />
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="dbuser" class=" col-md-3">Database User</label>
                                            <div class=" col-md-9">
                                                <input type="text" value="" name="dbuser" class="form-control" autocomplete="off" placeholder="Database user name" />
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="dbpassword" class=" col-md-3">Password</label>
                                            <div class=" col-md-9">
                                                <input type="password" value="" name="dbpassword" class="form-control" autocomplete="off" placeholder="Database user password" />
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="dbname" class=" col-md-3">Database Name</label>
                                            <div class=" col-md-9">
                                                <input type="text" value="" name="dbname" class="form-control" placeholder="Database Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section clearfix">
                                    <p><strong>Please enter your account details for administration.</strong></p>
                                    <hr />
                                    <div>
                                        <!-- <div class="form-group clearfix">
                                            <label for="first_name" class=" col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value=""  id="first_name"  name="first_name" class="form-control"  placeholder="Your first name" />
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="last_name" class=" col-md-3">Last Name</label>
                                            <div class=" col-md-9">
                                                <input type="text" value="" id="last_name"  name="last_name" class="form-control"  placeholder="Your last name" />
                                            </div>
                                        </div> -->
                                        <div class="form-group clearfix">
                                            <label for="email" class=" col-md-3">Email</label>
                                            <div class=" col-md-9">
                                                <input type="text" value="" name="email" class="form-control" placeholder="Your email" />
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="password" class=" col-md-3">Password</label>
                                            <div class=" col-md-9">
                                                <input type="password" value="" name="password" class="form-control" placeholder="Login password" />
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-info form-next">
                                        <span class="loader hide"> Please wait...</span>
                                        <span class="button-text"><i class='fa fa-chevron-right'></i> Finish</span> 
                                    </button>
                                </div>

                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="finished-tab">
                            <div class="section">
                                <div class="clearfix">
                                    <i class="status fa fa-check-circle-o pull-left" style="font-size: 50px"> </i><span class="pull-left"  style="line-height: 50px;">Congratulation! You have successfully installed Webprojectbuilder - Project</span>  
                                </div>

                                <div style="margin: 15px 0 15px 60px; color: #d73b3b;">
                                    Don't forget to delete your installation directory!
                                </div>
                                <a class="go-to-login-page" href="<?php echo $dashboard_url; ?>">
                                    <div class="text-center">
                                        <div style="font-size: 100px;"><i class="fa fa-desktop"></i></div>
                                        <div>GO TO YOUR LOGIN PAGE</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center m-b-10">
                            This project is created using <a href="https://www.webprojectbuilder.com" target="_blank">Web Project Builder</a>. An online php code builder tool.
                        </div>
                    </div>
                    <div class="progress-main-div">
                        <div class="col-md-12">
                            Updated version of this script is available at <a href="https://www.webprojectbuilder.com/item/user-login-and-management/?ref=local" target="_blank">www.webprojectbuilder.com</a><br> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </body>
</html>

<script type="text/javascript">

    var onFormSubmit = function ($form) {
        $form.find('[type="submit"]').attr('disabled', 'disabled').find(".loader").removeClass("hide");
        $form.find('[type="submit"]').find(".button-text").addClass("hide");
        $("#alert-container").html("");
    };
    var onSubmitSussess = function ($form) {
        $form.find('[type="submit"]').removeAttr('disabled').find(".loader").addClass("hide");
        $form.find('[type="submit"]').find(".button-text").removeClass("hide");
    };

    $(document).ready(function () {
        var $preInstallationTab = $("#pre-installation-tab"),
                $configurationTab = $("#configuration-tab");

        $(".form-next").click(function () {
            if ($preInstallationTab.hasClass("active")) {
                $preInstallationTab.removeClass("active");
                $configurationTab.addClass("active");
                $("#pre-installation").find("i").removeClass("fa-circle-o").addClass("fa-check-circle");
                $("#configuration").addClass("active");
                $("#host").focus();
            }
        });

        $("#config-form").submit(function () {
            var $form = $(this);
            onFormSubmit($form);
            $form.ajaxSubmit({
                dataType: "json",
                success: function (result) {
                    onSubmitSussess($form, result);
                    if (result.success) {
                        $configurationTab.removeClass("active");
                        $("#configuration").find("i").removeClass("fa-circle-o").addClass("fa-check-circle");
                        $("#finished").find("i").removeClass("fa-circle-o").addClass("fa-check-circle");
                        $("#finished").addClass("active");
                        $("#finished-tab").addClass("active");

                        /*$('#CompleteModal').modal({backdrop: 'static', keyboard: false}) ; 
                            var time = setInterval(function(){ 
                                var numb = $("#timer").text();
                                if(numb > 0){
                                    numb--;
                                    $("#timer").text(numb);
                                }
                                else{
                                    clearInterval(time);
                                    $('#CompleteModal').modal('hide');
                                }   
                            }, 1000);*/

                    } else {
                        $("#alert-container").html('<div class="alert alert-danger" role="alert">' + result.message + '</div>');
                    }
                }
            });
            return false;
        });

    });


$(window).load(function() {
    $('#InstallationModal').modal({backdrop: 'static', keyboard: false}) ; 
var t = setInterval(function(){ 
    var n = $("#timer").text();
    if(n > 0){
        n--;
        $("#timer").text(n);
    }
    else{
        clearInterval(t);
        $('#InstallationModal').modal('hide');
    }   
}, 1000);
});

</script>

<style>
.progress-main-div {
    padding-top: 10px;
    background-color: rgb(232, 82, 15);
    position: fixed;
    bottom: 21px;
    z-index: 50;
    width: 50%;
    padding-bottom: 10px;
    color: white;
    text-align: center;
    margin-left: 9%;
}
.progress-main-div a{
    color:#04046e;;
}
.tab-content {
    margin-bottom: 33px;
}
  </style>