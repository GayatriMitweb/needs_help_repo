<?php
include '../model/model.php';
$b2b_agent_code = $_SESSION['b2b_agent_code'];
$username = $_SESSION['b2b_username'];
$password = $_SESSION['b2b_password'];
if(isset($b2b_agent_code)&&isset($username)&&isset($password)){
//Include header
include 'layouts/header2.php';
$query1 = mysql_fetch_assoc(mysql_query("select * from b2b_settings_second"));
$privacy_policy = $query1['privacy_policy'];
?>
<div class="c-pageTitleSect">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12">
                <!-- *** Search Head **** -->
                <div class="searchHeading">
                <span class="pageTitle m0">Privacy Policy</span>
                </div>
                <!-- *** Search Head End **** -->
            </div>

            <div class="col-md-5 col-12 c-breadcrumbs">
                <ul>
                <li>
                    <a href="<?= $b2b_index_url ?>">Home</a>
                </li>
                <li class="st-active">
                    <a href="javascript:void(0)">Privacy Policy</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ********** Component :: Page Title End ********** -->
<div class='c-containerDark clearfix'>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <p><?= $privacy_policy ?></p>
            </div>
        </div>
    </div>
</div>
<?php
include 'layouts/footer.php';
?>
<?php }
else{
?>
<script>
  window.location.href = "login.php";
</script>
<?php } ?>