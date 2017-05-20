<?php
  include('comp_session.php');
  include('job_delete.php');
  include('job-edit.php');
  include('updatecomp.php');
  include('changepicture.php');

?>
<!DOCTYPE html>
<html class='no-js'>
  <head>
    <title> <?php echo $partner_compN; ?> </title>
    <link rel="stylesheet" href="assets/css/company/styles.css">
    <link rel="stylesheet" href="assets/css/scrollbar/scroll.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto|Slabo+27px">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro" rel="stylesheet">
    
  </head>

  <body>
    <header>
      <div id="comp_nav">
        <nav>
          <a href='#comp_postban'> Post a job </a>
          <a href='#mypost_ban'> My Posts </a>
          <a href='#myprfle_ban'> Profile </a>
        </nav>

        <div class="complogt">
          <a href="comp_logout.php">Logout</a>
        </div>

      </div>

      <div id="comp_nameban">
        <p> <?php echo $partner_compN; ?> </p>
      </div>
    </header>
      <!--post -->
    <div id="comp_post">
      <div id="comp_postban">
        <p> Post a Job </p>
      </div>
      <div id="form_container">
        <div id="comp_form">
          <div id="comp_formw">
            <form onsubmit="return false">
              <label><strong> Job title </strong> </label>
              <input id="jobTle" type="text" name="job_title" placeholder="Enter job title" required class="part-text">
              <label><strong> Job description </strong> </label>
              <textarea  id="jobDesc" name="job_desc" placeholder="Enter job description" required></textarea>
              <label><strong> Job role </strong> </label>
              <textarea  id="jobRle" rows="4" cols="30" name="job_role" placeholder="Enter job role" required></textarea> <br>
              <label><strong> Job skills </strong> </label>
              <textarea id="jobSkls"  name="job_skills" placeholder="Enter job skills" required ></textarea>
              <label><strong> Job industry </strong> </label>
              <select  id="select_job" class="select-job" name="job_indust" class="part-text" required>
                <option value="Automotive"> Automotive </option>
                <option value="Banking and Financial Services"> Banking and Financial Services</option>
                <option value="Bio Technology"> Bio Technology </option>
                <option value="Chemicals and Petrochem"> Chemicals and Petrochem </option>
                <option value="Construction and Engineering"> Construction and Engineering </option>
                <option value="FMCG"> FMCG </option>
                <option value="Customer Service"> Customer Service </option>
                <option value="Education"> Education </option>
                <option value="Electronics Manufacturing"> Electronics Manufacturing </option>
                <option value="Entertainment and Media"> Entertainment and Media </option>
                <option value="Insurance"> Insurance </option>
                <option value="ITES and BPO"> ITES and BPO </option>
                <option value="IT / Computer Hardware"> IT / Computer Hardware </option>
                <option value="IT / Computer Software"> IT / Computer Software </option>
                <option value="KPO and Analytics"> KPO and Analytics </option>
                <option value="Machinery and Equipment Manufacturing"> Machinery and Equipment Manufacturing </option>
                <option value="Oil and Gas"> Oil and Gas </option>
                <option value="Pharmaceuticals"> Pharmaceuticals </option>
                <option value="Plastics and Rubber"> Plastics and Rubber </option>
                <option value="Power and Energy"> Power and Energy </option>
                <option value="Real Estate"> Real Estate </option>
                <option value="Recruitment and Staffing"> Recruitment and Staffing </option>
                <option value="Retailing"> Retailing </option>
                <option value="Semiconductor Manufacturing"> Semiconductor Manufacturing </option>
                <option value="Telecom"> Telecom </option>
              </select>

              <label><strong> Location </strong> </label>
              <input  id="jobLoct" type="text" name="job_loc" placeholder="Enter location" required class="part-text">

              <label><strong> Nationality </strong> </label>
              <input id="jobNati"  type="text" name="job_nat" placeholder="Enter nationality" required class="part-text">

              <label><strong> Experience/ Requirements </strong> </label>
              <textarea id="jobExp"  rows="4" cols="30" name="job_exp" placeholder="Enter experience/requirements" required></textarea>

              <label><strong> Education </strong> </label>
              <textarea  id="jobEduc" rows="4" cols="30" name="job_educ" placeholder="Enter education" required></textarea>
              <label><strong> Salary </strong> </label> <br>

              <input type="text"  id="jobSals" name="job_sal" placeholder="Enter salary" class="part-text">

              <select  id="select_per" class="select-per" name="job_per" class="part-text" required>
                <option disabled selected>salary per... </option>
                <option value="per hour"> per hour </option>
                <option value="per day"> per day </option>
                <option value="per week"> per week </option>
                <option value="per month"> per month </option>
                <option value="per year"> per year </option>

              </select>
              <br>
              <input type="submit" name="post_job" id="post_job" class="postBtn" value="Post">
            </form>
          </div>


      </div>

    </div>

    </div>
    <!--my posts -->
    <div id="comp_mypost">
      <div id="mypost_ban">
        <p id="jxbanner"> My Posts </p>
      </div>
      <div id="post_container">

        <!-- job posts menu and table -->
        <div id="jobFlt">
          <input type="text" name="searchJ" id="searchJ" placeholder="Filter" class="form-control">
          <?php
          $sql1 = "select partner_id from job_posts where partner_id = '$partner_id'";
          $res1 = mysqli_query($db_conx, $sql1);
          $num1 = mysqli_num_rows($res1);
          echo "<p class='pendingmenu jobpostz'> My Posts - $num1 record(s)</p>";

          ?>

          <?php

            $sql = "select partner_id from job_conf where partner_id = '$partner_id'";
            $res = mysqli_query($db_conx, $sql);
            $num = mysqli_num_rows($res);
            echo "<p class='pendingmenu pendingjp'> Pending job posts - $num record(s) </p>";
          ?>
        </div>

        <div id="jposts">

        </div>


        <!-- Pending  -->
        <div id="pendJ">
          <input type="text" name="searchPend" id="searchPend" placeholder="Filter" class="form-control">
          <?php
          $sql1 = "select partner_id from job_posts where partner_id = '$partner_id'";
          $res1 = mysqli_query($db_conx, $sql1);
          $num1 = mysqli_num_rows($res1);
          echo "<p class='pendingmenu jobpostz'> My Posts - $num1 record(s)</p>";

          ?>
          <?php

            $sql = "select partner_id from job_conf where partner_id = '$partner_id'";
            $res = mysqli_query($db_conx, $sql);
            $num = mysqli_num_rows($res);

            echo "<p class='pendingmenu pendingjp'> Pending job posts - $num record(s) </p>";
          ?>
          </div>

          <div id="pendposts">

          </div>


      </div>

    </div>

    <!--profile-->
    <div id="comp_myprfle">
      <div id="myprfle_ban">
        <p id="profbanner"> My Profile </p>
      </div>

      <div id="profile_container">
        <div id="comp_about">
          <p class="about"> About Us </p>

          <div id="comp_about_cont">
          <!--  <p class="comp_abt" contenteditable>
                asdasdgreat living,
                and help people further their careers and better their lives.
            </p> -->
          </div>
      </div>
      <div id="img">
        <?php
          $qry2 = "select partner_pic from partners_tbl where partner_id = '$partner_id'";
          $resul2 = mysqli_query($db_conx, $qry2);

          while($row = mysqli_fetch_array($resul2))
          {

            echo "<img class='imgsrc' src='data:image;base64,".$row['partner_pic']."'>";
          }
        ?>


        <form method='post' enctype='multipart/form-data' id="formch">
          <div id="labelcontainer">
            <input required type="file" name="image" id="file-5" class="inputfile inputfile-4" />
  					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Change picture</span></label>
          </div>
          <input type='submit' name='imageup' class='imageup' value='save'>
        </form>
      </div>

      <div id="comp_info">

      </div>


    </div>
    <div style="background-color:#fafafa">

    </div>
    <a href='#comp_nav' title='Back to top' id='linktotop'>
      <div id="parentstop"></div>
    </a>

    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/comp_page.js"></script>
    <script src="assets/js/fileinput.js"></script>

  </body>
</html>
