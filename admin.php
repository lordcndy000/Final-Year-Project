<?php
   include('session.php');
   include('annc_post.php');
   include('upload_csv.php');
   include('uploadgrad_csv.php');
   include('uploadalum_csv.php');
   include('uploadav.php');
   include('changepicadmin.php');
   include('adminchangepass.php');
?>
<!doctype html>
<html class="no-js">
   <head>
      <title>Admin </title>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/admin/styles.css">
      <link rel="stylesheet" href="assets/css/scrollbar/scroll.css">
      <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/fullcalendar.css">
      <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>



   </head>

   <body>
     <header id="header">
       <div id="headerwrap">
         <div id="stilogo">
           <p> STI College Novaliches Placement Office Admin Page </p>
         </div>
         <div id="headermenu">
           <p id="messages" title="Messages" title='Messages'>User</p>
           <p id="userinfo" title='Edit info' title='My info'>User</p>
           <div class="dropdown">
             <p onclick="myFunction()" id="paintbucket" title='Themes'>Paint</p>
             <div id="paintselect" class="paint-content">
               <p id="color1" tabindex="0">00bcd4</p>
               <p id="color2" tabindex="0">253FC8</p>
               <p id="color3" tabindex="0">FFBB12</p>
               <p id="color4" tabindex="0">FF7B12</p>
               <p id="color5" tabindex="0">4AE610</p>
               <p id="color6" tabindex="0">F51135</p>

             </div>
           </div>
           <a href='logout.php' id="logoutimg" title='Logout'>Logout</a>

         </div>
       </div>
     </header>

     <div id="admSideb">

       <div id="vector">
         <?php
            $query = mysqli_query($db_conx, "select admin_pic from admin_tbl where studentNo = $studNo");
            if (mysqli_num_rows($query))
            {
              while($row = mysqli_fetch_assoc($query))
              {
              $adminpic = $row["admin_pic"];
              echo "<img class='admindp' src='data:image;base64,".$row['admin_pic']."' alt='No image yet'>";
              }
            }
            else
            {
                echo mysqli_error($query);
            }


         ?>
         <div id="useinf">
           <p> <?php echo $studLname . ", " . $studFname . " ". $studMi; ?> </p>
           <p> <?php echo $studUse; ?> </p>
         </div>
       </div>

       <div id="mainmenu" >
         <ul>
           <li id="daxh" style="cursor:pointer">
             <a href='' id="dash"> <span style="visibility: hidden"> Dash</span></a>  Dashboard
           </li>
           <li id="partz" style="cursor:pointer">
             <a href='' id="partnerx"> <span style="visibility: hidden"> Dash</span></a>  Partners
           </li>
           <li id="jobz" style="cursor:pointer">
             <a href='' id="jobx"> <span style="visibility: hidden"> Dash</span></a>  Job Posts
           </li>
           <li>
             <p id="ojtx"> <span style="visibility: hidden"> Dash</span> OJT </p>
           </li>
           <div class="ojtxhide">
            <li>
              <p id="trnlx"> <span style="visibility: hidden"> Dash</span> List Trainees </p>
           </li>
            <li>
              <p id="prgx"> <span style="visibility: hidden"> Dash</span> Pre-registration Form </p>
            </li>
            <li>
             <p id="logxh"> <span style="visibility: hidden"> Dash</span> Log Sheets </p>
             </li>
           </div>

           <li>
             <p id="gradx"> <span style="visibility: hidden"> Dash</span> Graduating </p>
           </li>
           <div class="gradxhide">
             <li>
               <p id="gradz"> <span style="visibility: hidden"> Dash</span> List of Graduates </p>
            </li>
            <li>
              <p id="jobazzt"> <span style="visibility: hidden"> Dash</span> Job Assistance </p>
            </li>
            <li>
             <p id="exzit"> <span style="visibility: hidden"> Dash</span> Exit Interview </p>
             </li>
           </div>

           <li>
             <p id="alumx"> <span style="visibility: hidden"> Dash</span> Alumni </p>
           </li>
           <div class="alumxhide">
             <li>
               <p id="alumz"> <span style="visibility: hidden"> Dash</span> List of Alumni </p>
            </li>
            <li>
              <p id="plaze"> <span style="visibility: hidden"> Dash</span> Job Placement </p>
            </li>
           </div>
           <li>
             <p id="ojtadv"> <span style="visibility: hidden"> Dash</span> OJT Advisers </p>
           </li>

         </ul>

       </div>
     </div>

     <div id="editadmin">
       <p class="editbanner">Account Settings</p>

       <div id="editform">
         <div id="updatepic">
           <div id="piccontainer">
         <?php
            $query = mysqli_query($db_conx, "select admin_pic from admin_tbl where studentNo = $studNo");
            if (mysqli_num_rows($query))
            {
              while($row = mysqli_fetch_assoc($query))
              {
              $adminpic = $row["admin_pic"];
              echo "<img class='editadpic' src='data:image;base64,".$row['admin_pic']."' alt='No image yet' width='100px' height='100px'>";
              }
            }
            else
            {
                echo mysqli_error($query);
            }

         ?>
       </div>
         <form method='post' enctype='multipart/form-data'>
           <input type="file" name="changeadminpic" required id="file-1" class="inputfile inputfile-1" />
           <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file</span></label>
           <input type='submit' name='btnchangepic' id='changepic' value='Upload'>
            <p id="togglechangepass"> Change password ▼ </p>
         </form>

         <form method='post' id="formchangepass">
           <input type='password' name='firstpass' id='firstpass' required>
           <input type='password' name='secpass' id='secpass' onkeyup="checkPass(); return false;" required>
          <span id="confirmMessage" class="confirmMessage"></span>
           <input type='submit' name='btnchangepass' id='adchangepass' value='Change password'>


         </form>
       </div>
       <div id="admininfo">


       </div>

       </div>
     </div>


     <div id='sendm'>
       <p>Messages</p>
       <div id='messageswrap'>
         <div id='inboxwrap'>
           <div class='inboxcont'>
             <p class='intitle'>Message Subject</p>
             <p class='infrom'>From: ganito</p>
             <p class='indate'>Send on: 12- 12-12</p>
           </div>
           <div class='inboxcont'>
             <p class='intitle'>Message Subject</p>
             <p class='infrom'>From: ganito</p>
             <p class='indate'>Send on: 12- 12-12</p>
           </div>
           <div class='inboxcont'>
             <p class='intitle'>Message Subject</p>
             <p class='infrom'>From: ganito</p>
             <p class='indate'>Send on: 12- 12-12</p>
           </div>
           <div class='inboxcont'>
             <p class='intitle'>Message Subject</p>
             <p class='infrom'>From: ganito</p>
             <p class='indate'>Send on: 12- 12-12</p>
           </div>
           <div class='inboxcont'>
             <p class='intitle'>Message Subject</p>
             <p class='infrom'>From: ganito</p>
             <p class='indate'>Send on: 12- 12-12</p>
           </div>


           </div>
           <div id='searchout'>

             <div id='searchbar'>
               <input type="text" name="search_out" id="search_out" placeholder="Search alumni" class="form-control">
             </div>

             <div id='alumwidgetwrap'>
             </div>

           </div>
         </div>



       </div>
     </div>

  <div id="dashcont">
    <p> DASHBOARD </p>

    <div id="dashfourth">
      <p class="countgraphban"> Services rating from exit interview responses</p>
      <canvas id="mycanvas"></canvas>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.3.min.js"></script>
      <script type="text/javascript" src="assets/js/Chart.min.js"></script>
      <script type="text/javascript" src="assets/js/linegraph.js"></script>
    </div>

      <div id="dashfirst">

        <div id="anncwrapper">
          <div id="dashannc">
            <p class="anncBanner"> Post an announcement </p>

            <form method='post' action='' id="anncform">
              <label class="labelinput">Announcement title</label>
              <input class="anncInput" type='text' name='annc_title' required placeholder='Enter announcement title'> <br>

              <label class="labelinput">To whom the announcement is</label>
              <select class="anncInput" id="annc_for" name="annc_for" required>
                <option disabled selected> Announcement for </option>
                <option value="All"> All </option>
                <option value="STI Partner Companies"> STI Partner Companies </option>
                <option value="OJT"> OJT </option>
                <option value="Alumni"> Alumni </option>
                <option value="Graduating"> Graduating </option>
                <option value="Practicum Advisers"> Practicum Advisers </option>
              </select>


              <select class="anncInput" id="ojt_crse" name="ojt_crse" style="display:none" required disabled>
                <option disabled selected> Select program </option>
                <option value="BSIT"> BSIT </option>
                <option value="BSTM"> BSTM </option>
                <option value="BSAT"> BSAT </option>
                <option value="BSHRM"> BSHRM </option>
                <option value="BSCS"> BSCS </option>
                <option value="BSCpE"> BSCpE </option>
                <option value="HRS"> HRS </option>
                <option value="ACT"> ACT </option>
              </select>

              <label class="labelinput">Content</label>
              <textarea class="anncInput" name='annc_cont' required placeholder='Input all details here' cols= 20></textarea> <br>
              <input type='submit' name='post_annc' value='Post announcement' class="anncSub">
            </form>
          </div>

          <div id="anncalen">
            <div id="calenwrap">
              <p class="calenBanner"> Calendar </p>
              <div id="calendar"></div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
              <script src='assets/js/jquery-ui-datepicker.min.js'></script>
              <script>
              $('#calendar').datepicker({
                inline: true,
                firstDay: 1,
                showOtherMonths: true,
                dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
              });
            </script>



            </div>


          </div>


      </div>

        <div id="dashpostswrap">
          <div id="dashposts">  </div>


        </div>

        </div>
        <div id="dashsec">

          <div id="partnerconf">
            <div id="partnerwraps">

            </div>

          </div>

          <div id="jobconfwrap">
            <div id="jobconf">
              <p class="jobconBanner"> Confirm Job Posts </p>

              <div id="jobconfcont">
                <img src='assets/img/admin/cat.jpg' class='jobconfmg'>
                <div id='jobdetals'>
                  <p class='jobtitle' data-id1=$jobid>Job Title</p>
                  <p class='jobpostby' data-id2=$jobid>Company Name</p>
                  <p class='jobon' data-id3=$jobid>Posted on: 12-12-12</p>
                  <p class='jobdescrp' data-id4=$jobid><strong>Job description: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='jobrole' data-id5=$jobid><strong>Job role: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='jobskillsreq' data-id6=$jobid><strong>Skills required: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='joindust' data-id7=$jobid><strong>Industry: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='joblocat' data-id8=$jobid><strong>Location: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='jobexper' data-id9=$jobid><strong>Experience: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='jobeducat' data-id10=$jobid><strong>Education: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='jobnational' data-id11=$jobid><strong>Nationality: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <p class='jobsalar' data-id12=$jobid><strong>Salary: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet sapien nec est facilisis, quis ornare lorem ultrices. Praesent sed est quam. Proin eget libero. </p>
                  <button type='button' class='deljobconf' data-id13=$confirm_id>Delete</button>
                  <button type='button' class='confjobconf' data-id14=$confirm_id>Confirm</button>

                </div>
              </div>

            </div>

          </div>


        </div>
        <div id="dashthrd">

          <div id="countpart">
            <p class="countpartbanner"> STI Partners</p>
            <div id="countpart-info">
              <div id="countpartlogo"></div>
              <div id="countpartcount">
                <?php
                  $countrows = mysqli_query($db_conx, "select * from partners_tbl");
                  $count = mysqli_num_rows($countrows);



                  $output = "<p>$count users</p>";


                  echo $output;


                ?>

              </div>

            </div>

          </div>

          <div id="countojt">
            <p class="countojtbanner"> Trainees</p>
            <div id="countojt-info">
              <div id="countojtlogo"></div>
              <div id="countojtcount">
                <?php
                  $countrows = mysqli_query($db_conx, "select * from ojt_tbl");
                  $count = mysqli_num_rows($countrows);



                  $output = "<p>$count users</p>";


                  echo $output;


                ?>

              </div>

            </div>

          </div>

          <div id="countgrad">
            <p class="countgradbanner"> Graduating Students</p>
            <div id="countgrad-info">
              <div id="countgradlogo"></div>
              <div id="countgradcount">
                <?php
                  $countrows = mysqli_query($db_conx, "select * from grad_tbl");
                  $count = mysqli_num_rows($countrows);



                  $output = "<p>$count users</p>";


                  echo $output;


                ?>

              </div>

            </div>

          </div>

          <div id="countalum">
            <p class="countalumbanner"> Alumni</p>
            <div id="countalum-info">
              <div id="countalumlogo"></div>
              <div id="countalumcount">
                <?php
                  $countrows = mysqli_query($db_conx, "select * from alumni_tbl");
                  $count = mysqli_num_rows($countrows);



                  $output = "<p>$count users</p>";


                  echo $output;


                ?>

              </div>

            </div>

          </div>




        </div>

<!-- confrm comp accounts, confirm job posts -->
      </div>

    </div>


<!--partners -->
<div id="partners">

    <div id="part_banner">
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from partners_tbl");
          $numrows = mysqli_num_rows($sql);
          echo "<p> List of STI's Partner Companies : $numrows record(s) </p>";
      ?>
    </div>
    <p style="font-size: 16px; padding: 20px"> Below is the list of all partner companies that registered in the system.
      The list can be updated using the table indicated.

      <div id="search_partner">
        <input type="text" name="searchPartner" id="searchPartner" placeholder="Filter records (e.g IT, Google, IBM)" class="form-control">
      </div>

    <div id="partner-recs">
      <div id="partner-tbls"></div>
      </div>


    <!--
    <div class="partTbl">
      <?php
        $sql = "SELECT * FROM partners_tbl";
        $result = mysqli_query($db_conx, $sql);

        echo "
        <table>
          <tr>
            <th> Partner ID </th>
            <th> Partner Name </th>
            <th> Username </th>
            <th> Company Address </th>
            <th> Email </th>
            <th> About </th>
            <th> Date Registered </th>
          </tr>";

          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $partner_id = $row['partner_id'];
          $partner_username = $row['partner_username'];
          $partner_email = $row['partner_email'];
          $partner_compN = $row['partner_compN'];
          $partner_compA = $row['partner_compA'];
          $partner_dateReg = $row['partner_dateReg'];
          $partner_about = $row['partner_about'];

          echo"
            <tr>
              <td> PRTNR$partner_id </td>
              <td> $partner_compN </td>
              <td> $partner_username </td>
              <td> $partner_compA </td>
              <td> $partner_email </td>
              <td> $partner_about </td>
              <td> $partner_dateReg </td>
              <td>
                <form action='' method='post'>
                  <input type='hidden' value='$partner_id' name='del-part-id'>
                  <input type='submit' class='anncSub2' value='Delete Account' name='del-part-acc'>
                </form>
              </td>";
        }
        echo"</table>";

          ?>
        </div> -->
  </div>

<!--job posts-->
<div id="jobpostx">

  <div id='job_banner'>
    <?php
        $sql = $sql = mysqli_query($db_conx, "select * from job_posts");
        $numrows = mysqli_num_rows($sql);
        echo "<p> Jobs posts : $numrows record(s) </p>";
    ?>

  </div>
  <p style="font-size: 16px; padding: 20px"> Below is the list of all jobs posted by STI's partners.
    The list can be updated by editing the table below. </p>

  <div id="search_job">
    <input type="text" name="search_jobx" id="search_jobx" placeholder="Filter records (e.g Automotive, Google, 70000)" class="form-control">
  </div>

  <div id="job_recsx">
    <div id="job_tblx"></div>
    </div>

</div>

<!--trainess-->
<div id="train_lsx">

  <div id='train_banner'>
    <?php
        $sql = $sql = mysqli_query($db_conx, "select * from ojt_tbl");
        $numrows = mysqli_num_rows($sql);
        echo "<p> List of Trainees : $numrows record(s) </p>";
    ?>

  </div>
  <p style="font-size: 16px; padding: 20px"> Below is the list of all students who are taking their practicum.
    The list can be updated by uploading a .csv (click <i id="here" style="cursor:pointer; color: #308481">here</i>
    to view the format) file, or by editing the table below.
  <strong> Uploading a .csv file will override all existing records.</strong> </p>

  <form name="import" method="post" enctype="multipart/form-data" id="form-imp">
    <input type="file" name="fileOj" required>
    <input type="submit" name="upOj" value="Update OJT list" class="anncSub2">
  </form>
  <div id="search-right">
    <input type="text" name="search_text" id="search_text" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
  </div>

  <div id="ojt-recs">
    <div id="ojt_contzR"></div>
    </div>

</div>

<!--pre registration -->
<div id='pre-reg'>

  <div id='pre_banner'>
    <?php
        $sql = $sql = mysqli_query($db_conx, "select * from ojt_prereg");
        $numrows = mysqli_num_rows($sql);
        echo "<p> OJT Pre-registration form submissions : $numrows record(s) </p>";
    ?>
  </div>
  <p style="font-size: 16px; padding: 20px"> Below is the list of all students who finished their pre-registration form.
    The list can be updated using the table. </p>

    <div id="search_preg">
      <input type="text" name="search_barpreg" id="search_barpreg" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="preg_list">
      <div id="preg_tbl"></div>
    </div>
</div>

<!--ojt logs -->
<div id='logsheet'>
  <div id='logs_banner'>
    <?php
        $sql = $sql = mysqli_query($db_conx, "select * from ojt_log");
        $numrows = mysqli_num_rows($sql);
        echo "<p> OJT Logsheet submissions : $numrows record(s) </p>";
    ?>
  </div>
  <p style="font-size: 16px; padding: 20px"> Below is the list of all students who finished their OJT logsheet form.
    The list can be updated using the table. </p>

    <div id="search_logs">
      <input type="text" name="search_logsh" id="search_logsh" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="logs_list">
      <div id="logs_tbl"></div>
    </div>
</div>

<!--grad lists -->
<div id='gradlixt'>
  <div id='gradx_banner'>
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from grad_tbl");
          $numrows = mysqli_num_rows($sql);
          echo "<p> List of Graduating Students : $numrows record(s) </p>";
      ?>
    </div>
    <p style="font-size: 16px; padding: 20px"> Below is the list of all graduating students.
      The list can be updated by uploading a .csv (click <i id="here" style="cursor:pointer; color: #308481">here</i>
      to view the format) file, or by editing the table below.
    <strong> Uploading a .csv file will override all existing records.</strong> </p>

    <form name="import" method="post" enctype="multipart/form-data" id="grad-imp"> <!--id = form-imp-->
      <input type="file" name="fileGrad" required> <!-- name= fileOj -->
      <input type="submit" name="upGrad" value="Update Graduating List" class="anncSub2"> <!--name = upOj-->
    </form>
    <div id="search-right">
      <input type="text" name="search_grad" id="search_grad" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="grad-recs">
      <div id="grad_tblx"></div>
      </div>
    </div>

<!--job asist-->
<div id='jobaxxt'>
  <div id='jobaxxt_banner'>
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from job_assistance");
          $numrows = mysqli_num_rows($sql);
          echo "<p> List of Students who submitted Job Assistance form : $numrows record(s) </p>";
      ?>
    </div>
    <p style="font-size: 16px; padding: 20px"> Below is the list of all students who submitted their job assistance form.
      The list can be updated using the table below.</p>

    <div id="jobxxt-search">
      <input type="text" name="search_jobaxt" id="search_jobaxt" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="jobxt-recs">
      <div id="jobxt_tblx"></div>
      </div>
  </div>
<!--exit interview -________________- -->
<div id='exitint'>
  <div id='exit_banner'>
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from grad_exit_interview");
          $numrows = mysqli_num_rows($sql);
          echo "<p> List of Students who finished exit interview form : $numrows record(s) </p>";
      ?>
    </div>
    <p style="font-size: 16px; padding: 20px"> Below is the list of all graduating students who finished their exit interview form.
      The list can be updated using the table below.</p>

    <div id="exit-search">
      <input type="text" name="search_exit" id="search_exit" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="exit_recs">
      <div id="exit_tblx"></div>
      </div>
  </div>

<!--alumni lists -->
<div id='alumni_lixt'>
  <div id='alumni_banner'>
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from alumni_tbl");
          $numrows = mysqli_num_rows($sql);
          echo "<p> List of all STI Alumni : $numrows record(s) </p>";
      ?>
    </div>
    <p style="font-size: 16px; padding: 20px"> Below is the list of all STI Alumni.
      The list can be updated by uploading a .csv (click <i id="here" style="cursor:pointer; color: #308481">here</i>
      to view the format) file, or by editing the table below.
      Uploading a .csv file will <strong> not </strong> override all existing records. </p>

    <form name="import" method="post" enctype="multipart/form-data" id="alumni-imp"> <!--id = form-imp-->
      <input type="file" name="fileAlum" required> <!-- name= fileOj -->
      <input type="submit" name="upAlum" value="Update Alumni List" class="anncSub2"> <!--name = upOj-->
    </form>
    <div id="search-alum">
      <input type="text" name="search_alum" id="search_alum" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="alum-recs">
      <div id="alum_tblx"></div>
      </div>
    </div>


<!--job placement-->
<div id='job_plxe'>
  <div id='plxe_banner'>
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from job_placement_monitoring");
          $numrows = mysqli_num_rows($sql);
          echo "<p> Job Placement Monitoring : $numrows record(s) </p>";
      ?>
    </div>
    <p style="font-size: 16px; padding: 20px"> Below is the list of all alumni who updated their job placement form.</p>

    <div id="plxe-search">
      <input type="text" name="search_plxe" id="search_plxe" placeholder="Filter records (e.g BSIT, Mabalot, Lordwill)" class="form-control">
    </div>

    <div id="plxe_recs">
      <div id="plxe_tblx"></div>
      </div>
  </div>

<div id="advpage">
  <div id='adv_banner'>
      <?php
          $sql = $sql = mysqli_query($db_conx, "select * from ojtadv");
          $numrows = mysqli_num_rows($sql);
          echo "<p> OJT Advisers : $numrows record(s) </p>";
      ?>
    </div>

    <form name="import" method="post" enctype="multipart/form-data" id="ojtad-imp"> <!--id = form-imp-->
      <input type="file" name="fileadv" required> <!-- name= fileOj -->
      <input type="submit" name="upadv" value="Update Adviser List" class="anncSub2"> <!--name = upOj-->
    </form>

    <div id="adv-recs">
      <div id="adv_tblx"></div>
      </div>

</div>


<!--
    <h1>Welcome <?php echo $studUse; ?></h1>


    <div class="top-nav">
      <strong class="navAnnc"> Post Announcement |</strong>
      <strong class="navJobs"> Jobs Posted |</strong>
      <strong class="navPart"> Partners | </strong>
      <strong class="navGrad"> Graduating Students |</strong>
      <strong class="navOjt"> OJT |</strong>
      <strong class="navAlum"> Alumni |</strong>
    </div>



      </div>

      <hr>
    </div>

    <div class="job-sec">
        <h2> Posted Jobs </h2>
        <div class="job-list">

        </div>

    </div>

    <div class="company-sec">
      <h2> Confirm company accounts </h2>
      <div class="conf-acc">

        </div>
      <h2> Active Partner's Accounts </h2>
      <div class="activ-part">


      </div>
      <hr>
    </div>

    <div class="grad-sec">
      <strong class="list-grad"> List of Graduating Students | </strong>
      <strong class="list-jobassist"> Job Assistance | </strong>
      <strong class="list-exitint"> Exit Interview  </strong>
      <br>


      <div class="grad-list">
        <h3> List of Graduates </h3>
        <?php
          $sql = mysqli_query($db_conx, "select * from grad_tbl");


          echo "
          <table>
            <tr>
              <th> Account ID </th>
              <th> Student # </th>
              <th> Name </th>
              <th> Address </th>
              <th> Email </th>
              <th> Contact # </th>
              <th> Course </th>
            </tr>";

          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $id = $row['id'];
            $studNo = $row['studentNo'];
            $studname = $row['Name'];
            $studAdd = $row['Address'];
            $studMail = $row['Email'];
            $studCont = $row['cont'];
            $studCrs = $row['course'];

            echo"
              <tr>
                <td> GRADG$id </td>
                <td> $studNo </td>
                <td> $studname </td>
                <td> $studAdd </td>
                <td> $studMail </td>
                <td> $studCont </td>
                <td> $studCrs </td>

              </tr>";
          }
          echo"</table>";

          ?>
        </div>

      <br>

      <div class="grad-assist">

        <h3> Graduating students who submitted assistance form </h3>

      </div>

      <br>

      <div class="grad-exit">
        <h3> Exit interview form responses </h3>
        <?php
          $sql = mysqli_query($db_conx, "select * from grad_exit_interview");

          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $rec_id = $row['id'];
            $studentNo = $row['studentNo'];
            $Name = $row['Name'];
            $sy_attended = $row['sy_attended'];
            $date_grad = $row['date_grad'];
            $gender = $row['gender'];
            $civil_stat = $row['civil_stat'];
            $contact_network = $row['contact-network'];
            $course = $row['course'];
            $enrolled_otherSchl = $row['enrolled_otherSchl'];
            $perm_add = $row['perm_add'];
            $prov_add = $row['prov_add'];
            $wrk_exp = $row['wrk_exp'];
            $job_title = $row['job_title'];
            $date_emp = $row['date_emp'];
            $ojt_host = $row['ojt_host'];
            $train_hrs = $row['train_hrs'];
            $dept_ass = $row['dept_ass'];
            $train_sprvsr = $row['train_sprvsr'];
            $telNo = $row['telNo'];
            $accomp = $row['accomp'];
            $plans = $row['plans'];
            $yrs_from_now = $row['yrs_from_now'];
            $values = $row['values'];
            $gain_ojt = $row['gain_ojt'];
            $technical_sti = $row['technical_sti'];
            $skills_sti = $row['skills_sti'];
            $lib_srvc = $row['lib_srvc'];
            $lab_srvc = $row['lab_srvc'];
            $records_srvc = $row['records_srvc'];
            $cash_srvc = $row['cash_srvc'];
            $guide_srvc = $row['guide_srvc'];
            $place_srvc = $row['place_srvc'];
            $do_srvc = $row['do_srvc'];
            $adm_srvc = $row['adm_srvc'];
            $faci_srvc = $row['faci_srvc'];
            $fac_srvc = $row['fac_srvc'];
            $other_srvc = $row['other_srvc'];
            $activ = $row['activ'];
            $compete = $row['compete'];
            $orgs = $row['orgs'];

            echo"
            <i> Record id: <span> XINTR$rec_id </span> </i> <br>
            <p> Student no: <span> $studentNo  </span> </p>
            <p> Submitted by: <span>  $Name  </span> </p>
            <p> SY Attended: <span>  $sy_attended  </span> </p>
            <p> Date of Gradution: <span>  $date_grad </span>  </p>
            <p> Gender: <span>  $gender  </span> </p>
            <p> Civil Status: <span>  $civil_stat </span>  </p>
            <p> Tel No./Mobile No. - Network: <span>  $contact_network </span>  </p>
            <p> Course Taken: <span>  $course </span>  </p>
            <p> Program Enrolled/ Completed in other schools: <span>  $enrolled_otherSchl </span>  </p>
            <p> Permanent Address: <span>  $perm_add  </span> </p>
            <p> Provincial Address: <span>  $prov_add  </span> </p>
            <p> Work experience: <span>  $wrk_exp  </span> </p>
            <p> Job title: <span>  $job_title  </span> </p>
            <p> Date of employment: <span>  $date_emp  </span> </p>
            <p> Name of OJT Host Company: <span>  $ojt_host </span>  </p>
            <p> Training hours rendered/ completed: <span>  $train_hrs </span>  </p>
            <p> Department assigned: <span>  $dept_ass </span>  </p>
            <p> Name of training supervisor/Designation: <span>  $train_sprvsr </span>  </p>
            <p> Telephone number: <span>  $telNo </span>  </p>
            <p> Accomplishments of the trainee in the training: <span>  $accomp </span>  </p>
            <p> Plans after graduation: <span>  $plans </span>  </p>
            <p> How do you see yourself 5 years from now: <span>  $yrs_from_now </span>  </p>
            <p> Values learned from STI: <span>  $values </span>  </p>
            <p> Learnings gained from OJT: <span>  $gain_ojt </span>  </p>
            <p> Technical skills learned from STI: <span>  $technical_sti  </span> </p>
            <p> Soft skills learned from STI: <span>  $skills_sti </span>  </p>

            <p> <strong> Comments and rating about STI </strong> </p>

            <p> Library Services: <span>  $lib_srvc </span>  </p>
            <p> Computer Laboratory: <span>  $lab_srvc </span>  </p>
            <p> Records/Registrars Services: <span>  $records_srvc </span>  </p>
            <p> Cashiering Services: <span>  $cash_srvc </span>  </p>
            <p> Guidance Services: <span>  $guide_srvc </span>  </p>
            <p> Placement Office Services: <span>   $place_srvc </span>  </p>
            <p> Discipline Offices Services: <span>  $do_srvc </span>  </p>
            <p> Admissions Services: <span>  $adm_srvc </span>  </p>
            <p> Facilities: <span>  $faci_srvc </span>  </p>
            <p> Faculty Members/Staff: <span>  $fac_srvc </span>  </p>
            <p> Other Services: <span>  $other_srvc </span>  </p>
            <p> College Week: <span>  $activ </span>  </p>
            <p> Student Competitions: <span>  $compete </span>  </p>
            <p> Student Organizations: <span>  $orgs </span> </p>
            <hr>";

          }

          ?>


      </div>



    </div>

    <div class="ojt-sec">
      <strong class="list-ojt"> Trainess | </strong>
      <strong class="list-preojt"> Pre-Registration Form Responses | </strong>
      <strong class="list-logs"> Log Sheets </strong>

      <div class="ojt-list">
        <h2> List of Trainees </h2>

      </div>
      <br>

      <div class="ojt-pre">
        <h2> Pre-registration form responses </h2>




      </div>

      <div class="log-sheet-nav">
        <strong class="logs-bsit"> BSIT |</strong>
        <strong class="logs-bsbm"> BSBM | </strong>
        <strong class="logs-bstm"> BSTM | </strong>
        <strong class="logs-bsat"> BSAT | </strong>
        <strong class="logs-abcomm"> ABCOMM | </strong>
        <strong class="logs-bshrm"> BSHRM | </strong>
        <strong class="logs-bscs"> BSCS | </strong>
        <strong class="logs-bscpe"> BSCpE | </strong>
        <strong class="logs-act"> ACT | </strong>
        <strong class="logs-hrs"> HRS </strong>
      </div>

      <div class="bsit-logs">
        <h3> BSIT LOG SHEETS </h3>

        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSIT'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="bsbm-logs">
        <h3> BSBM LOG SHEETS </h3>

        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSBM'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="bstm-logs">
        <h3> BSTM LOG SHEETS </h3>

        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSTM'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }

        ?>



      </div>
      <br>
      <div class="bsat-logs">
        <h3> BSAT LOG SHEETS </h3>

        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSAT'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="abcomm-logs">
        <h3> ABCOMM LOG SHEETS </h3>
        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'ABCOMM'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="bshrm-logs">
        <h3> BSHRM LOG SHEETS </h3>

        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSHRM'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="bscs-logs">
        <h3> BSCS LOG SHEETS </h3>
        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSCS'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="bscpe-logs">
        <h3> BSCpE LOG SHEETS </h3>
        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'BSCpE'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="act-logs">
        <h3> ACT LOG SHEETS </h3>
        <?php


          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'ACT'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>
      <br>
      <div class="hrs-logs">
        <h3> HRS LOG SHEETS </h3>

        <?php

          $sql = mysqli_query($db_conx, "select * from ojt_log where course = 'HRS'");


          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

            $log_id = $row['log_id'];
            $stud_no = $row['stud_no'];
            $ojt_name = $row['ojt_name'];
            $subj_code = $row['subj_code'];
            $section = $row['section'];
            $mob_no = $row['mob_no'];
            $name_comp = $row['name_comp'];
            $office_add = $row['office_add'];
            $recipient_end = $row['recipient_end'];
            $desig_recip = $row['desig_recip'];
            $offc_tel = $row['offc_tel'];
            $name_adv = $row['name_adv'];

            echo"
            <p> Log ID: <span> OJTLG$log_id </span> </p>
            <p> Student No.:  <span> $stud_no </span> </p>
            <p> Name: <span> $ojt_name </span> </p>
            <p> Subject Code: <span> $subj_code </span </p>
            <p> Section: <span> $section </span> </p>
            <p> Mobile No.: <span> $mob_no </span> </p>
            <p> Name of company student is to be endorsed : <span> $name_comp </span> </p>
            <p> Office Address: <span> $office_add </span> </p>
            <p> Recipient of Endorsement Letter: $recipient_end </p>
            <p> Designation of the recipient of endorsement letter: <span> $desig_recip </span> </p>
            <p> Office Tel no.: <span> $offc_tel </span>
            <p> Name of adviser: <span> $name_adv </span>
            <hr>";

            }


        ?>



      </div>


    </div>

    <div class="alum-sec">
      <strong class="list-alumni"> List of Alumni | </strong>
      <strong class="list-jobMonitor"> Job Placement Monitoring</strong>
      <br>
      <div class="alum-list">
        <h2> List of Alumni </h2>
        <?php
          $sql = mysqli_query($db_conx, "select * from alumni_tbl");


          echo "
          <table>
            <tr>
              <th> Account ID </th>
              <th> Student # </th>
              <th> Name </th>
              <th> Address </th>
              <th> Email </th>
              <th> Contact # </th>
              <th> Course </th>
            </tr>";

          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {

            $id = $row['id'];
            $studNo = $row['studentNo'];
            $studname = $row['Name'];
            $studAdd = $row['Address'];
            $studMail = $row['Email'];
            $studCont = $row['cont'];
            $studCrs = $row['course'];

            echo"
              <tr>
                <td> ALUMN$id </td>
                <td> $studNo </td>
                <td> $studname </td>
                <td> $studAdd </td>
                <td> $studMail </td>
                <td> $studCont </td>
                <td> $studCrs </td>
                <td> <button class='showedit'> Message </button></td>
                <td>
                  <form method='post' action='' class='sendmess'>
                    <h4> Send Message to: $studname </h4> <br>
                    <input type='text' name='subj' placeholder='Subject' required> <br>
                    <textarea required placeholder='content' rows= '3' cols='30'></textarea> <br>
                    <input type='hidden' name='user-id' value='$id'>
                    <input type='submit' name='sendz' value='Send'>
                    </form>
                </td>
              </tr>";


          }
          echo"</table>";

        ?>
        </div>
        <br>
      <div class="jobMonitor-list">
        <h2> Job Plaement Monitoring Form Responses </h2>


      </div>

    </div>
-->

      <!-- MODAL  Message-->


      <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close"> </span>
          <p> Sample record (must be strictly followed or the system will produce an error)</p>
          <img src="assets\img\admin\samplerec.PNG">
        </div>

      </div>


    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/admin-funcs.js"></script>
   </body>

</html>
