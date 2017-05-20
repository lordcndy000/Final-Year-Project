<?php
   include('session.php');
   include('changealumpic.php');
   include('changealumpass.php');
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STI Novaliches Alumni Page</title>
    <link rel="stylesheet" href="assets/css/alumni/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Roboto|Slabo+27px" rel="stylesheet">
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
  </head>
  <body>
    <header>
      <div class="sidebar">
        <nav>
          <ul>
            <a href="#" title="Dashboard">
              <li id="dashclick"></li>
            </a>
            <a href="#" title="Job Posts">
              <li id="jobclick"></li>
            </a>
            <a href="#" title="My Profile">
              <li id="profileclick"></li>
            </a>

            <a href="logout.php" title="Logout">
              <li></li>
            </a>
          </ul>
        </nav>
      </div>
    </header>
    <div id="content">
      <div id="alumdashboard">
        <div id="alumbanner">
          <div id="whatdash">
            <div id="whatlogo"></div>
            <p> Dashboard </p>

          </div>
          <div id="hugename">

            <?php echo "<p id='hugencont'>$alumstudFname $alumstudLname </p>"; ?>


          </div>


        </div>
        <div class="dash-cont">

          <p class="annchead">Announcements</p>
          <div id="contentwrapper">
            <div id="announcementswrapper"> </div>
            <div id="calendaranduser">
              <div id="calendar"></div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
              <script src="assets/js/jquery-ui-datepicker.min.js"></script>
              <script>
              	$('#calendar').datepicker({
              		inline: true,
              		firstDay: 1,
              		showOtherMonths: true,
              		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
              	});
              </script>
              <div id="user">

                <div id="usercont"> </div>


              </div>


            </div>


          </div>

          </div>



      </div>

      <div id="alumjobs">
        <div id="alumjbanner">
          <div id="whatjdash">
            <div id="whatjlogo"></div>
            <p> Job Posts </p>


          </div>
          <div id="livejsearchal">

            <input type="text" name="search_jal" id="search_jal" placeholder="Type keywords (e.g IT, ABC Company, Quezon City)" class="form-control" />
          </div>


        </div>
        <div class="job-cont">

          <p class="joposthead">Job Posts</p>

          <div id="jobpostwrap">
            <div id="jobpostss"> </div>
            <div id="employers">
              <p class='joposthead'>STI Partners</p>
              <div id="employerswrapper"> </div>

            </div>


          </div>

        </div>


      </div>

      <div id="alumprofile">
        <div id="alumpbanner">
          <div id="whatpdash">

            <div id="logowrapper1">
              <div id="whatplogo"></div>
              <p> My Profile </p>
            </div>

            <div id="logowrapper">

            <?php echo "<p> $alumstudFname $alumstudMi $alumstudLname | $alumstudMail | $alumprog | Alumni </p>";  ?>
            </div>

          </div>


        </div>
          <div id="profmenu">
            <ul>
              <li><p id="mydet">My Details</p></li>
              <li><p id="myforms">Job Assistance Monitoring Form</p></li>
              <li><p id="myres">My Résumé</p></li>
            </ul>
          </div>

          <div class="prof-cont">

            <p id="joprofthead">My Details</p>

            <div id="mydets">
              <div id="prof-img-cont">
                <form method='post' enctype="multipart/form-data" method="post" id='changepicform'>
                  <?php
                    $qry2 = "select alum_pic from alumni_tbl where studentNo = $studNo";
                    $resul2 = mysqli_query($db_conx, $qry2);

                    while($row = mysqli_fetch_array($resul2))
                    {

                      echo "<img class='imgother' src='data:image;base64,".$row['alum_pic']."' height='250px' width='250px'>";

                    }
                  ?>

                  <div id="filez">
                    <input type="file" required name="file1" id="file-1" class="inputfile inputfile-1" >
                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Change Picture</span></label>
                  </div>
                  <input type='submit' name='changepicalum' id='changepicalum' class='changepicalum' value='Save'>
                  <p id='changepassalumtog'>Change password ▼ </p>
                </form>

                <form id='formhide' method='post'>
                  <input type='password' name='alpass1' id='alpass1' placeholder='Type new password' required>
                  <input type='password' name='alpass1' id='alpass2' onkeyup="checkPass(); return false;" placeholder='Confirm new password'  required>
                   <span id="confirmMessage" class="confirmMessage"></span>
                  <input type='submit' name='changepassalum' id='changepassalum' class='changepicalum' value='Submit'>

                </form>
              </div>
              <div id='aluminfoswrap'>  </div>


            </div>

            <div id="myformal">




            </div>

            <div id="myresal">
              <form method='post' action="resumedownload.php">

                <div id="formflex">
                  <p>Name</p>
                  <input type="text" name="resname" id="resname" class="restext" required>

                  <p>Address</p>
                  <textarea id="resadd" name="resadd" class="restext" required></textarea>

                  <p>Telephone Numbers</p>
                  <input type="text" id="resnum" name="resnum" class="restext" required>

                  <p>Email Address</p>
                  <input type="email" id="resemail" name="resemail" class="restext" required>


                </div>

                <div id="formflex2">
                  <p>Objective</p>
                  <textarea id="resobj" rows="5" name="resobj" class="restext" required placeholder='One to two sentences long that describes the type of job you want, the type of organization you prefer and how you can contribute to the position/organization.'></textarea>

                  <p>Education</p>
                  <textarea id="reseduc" rows="7" name="reseduc" class="restext" required placeholder='Includes college and high school information only. Do not forget to put the name of your school, degree, term of graduation, academic awards/recognition, or other awards sponsored by the school.'></textarea>

                  <p>Work Experience (if applicable)</p>
                  <textarea id="resworkex" rows="8" name="resworkex" class="restext" required placeholder='This includes employer (name of organization), number of year/s employed, job title, and results and accomplishments on the job. For a stronger resume, avoid simply listing your responsibilities; quantify the results achieved. '></textarea>

                  <input type="submit" name="ressave" value="Save and Download" id="ressave" class='ressave'>

                  <i> Note: The résumé will be downloaded as <span style="color:black">.doc</span> file.</i>

                </div>

                <div id="formflex3">
                  <p>Skills</p>
                  <textarea id="reskil" rows="9" name="reskil" class="restext" required placeholder='This includes the languages you speak and other special skills – e.g., typing, records filing, driving, etc. You may also include your computer/technical skills and level – e.g., MS Office - intermediate; MS Access – beginner; Visual Basic – beginner. '></textarea>

                  <p>Extra-curricular activities</p>
                  <textarea id="resxtra" rows="9" name="resxtra" class="restext" required placeholder='Includes the name of the organization, duration of participation, position, and results and accomplishments on the job. As much as possible, quantify results achieved. Participation in school contests and competitions is included in this portion.'></textarea>

                  <p>References</p>
                  <textarea id="resref" rows="12" name="resref" class="restext" required placeholder='Include name/s, positions, organization and contact number of person/s. For general resumes, it is acceptable to indicate “Available upon Request.” If you must write your references, make sure to write it in a separate sheet of paper. Also, please do not forget to inform your references that you have included them in your list.'></textarea>
                </div>



              </form>


            </div>
          </div>



      </div>



    </div>
    <!--
    <div id="content">

      <div id="placeholder">

      </div>

      <div id="myforms">
        <div class="form-wrap">
          <h1> <span class="f"> My Forms </span> </h1>
        </div>

        <div class="forms">
          <p> My forms </p>
          <ul>
            <li> <a href="jobplacement_monitoring.php"> Job Placement Monitoring Form  </a> </li>
          </ul>


        </div>



      </div>

      <div id="myresume">
        <div class="resume-wrap">
          <h1> <span class="r"> My Résumé </span></h1>
          <div class="resume-banner">
            <p> Craft your own competent résumé </p>
          </div>
        </div>

        <div class="resume-cont">
          <div class="resume-saved">
            <div class="resume-saved-cont">
              <p> Saved Résumé </p>
              <ul>
                <li> <a> Resume1 </a> </li>
                <li> <a> Resume2 </a> </li>
                <li> <a> Resume3 </a> </li>
                <li> <a> Resume4 </a> </li>
              </ul>
            </div>
          </div>
        </div>

      </div>



      <div id="myprofile">
        <div class="profile-wrap">
          <h1> <span class="p"> My Profile </span></h1>

          <div class="space-right-down">
            <div class="space-right">
              <h2> KDFJ </h2>
            </div>
          </div>
          <!--<div class="space"></div>-->
          <!--
          <div class="space2">
            <div class="profile-sum">
              <p><?php echo $studFname . " " . $studMi ."." . " ". $studLname; ?> | <?php echo $studMail ?> | <?php echo $studCrs ?> | <?php echo $studUse ?> </p>
            </div>
          </div>

        </div>



        <div class="profile-cont">

          <div class="profile-cont-pic">

            <p class="change"> Change Picture </p>
            <h1 class="change"> change </h1>
          </div>
          <div class="profile-menu">
            <div class="profile-nav">
              <ul>
                <li><a href='#myprofile'> Activities </a></li>
                <li><a href='#myprofile'> About </a></li>
                <li><a href='#myprofile'> Jobs Interested </a></li>
                <li><a href='#myprofile'> Edit Info </a></li>
              </ul>
            </div>
        </div>
      </div>
        <div id="profile-about">

        </div>

        <!--CHAT-->
<!--
        <div id="wrapper1">

        <div id="chatbox"></div>

        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
        </form>

        </div>

      </div>


      <div id="jobposts">
        <div class="job-wrap1">
          <h1> <span class="j"> Job Posts </span> </h1>
            <div class="job-scrl">

              <form method="get" action="" class="job-form">

                <input type="text" placeholder="Job Title, Keywords" class="text-job">
                <select class="select-job">
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
                <input type="submit" value="Search" name="search" class="submit-job">
              </form>

              <p class="kicker"> Find jobs posted by STI's Partners </p>
            </div>

          </div>
        <div class="job-recent">
          <p> Recent Posts</p>
          <?php
             $sql = mysqli_query($db_conx,"select * from job_posts order by job_id desc");

             while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

             $job_postby = $row['partner_compN'];
             $job_title = $row['job_title'];
             $job_loc = $row['job_loc'];
             $job_exp = $row['job_exp'];
             $job_date = $row['job_date'];

             echo "
               <div class='job-recent-content'>
                  <p class='job-title'> $job_title </p>
                  <p class='job-postby'> $job_postby </p>
                  <p class='job-loc'> $job_loc </p>
                  <p class='job-exp'> $job_exp </p>
                  <p class='job-date'> Posted on: $job_date   </p>
                  <input type='submit' class='recent-btn' value='Interested'>
              </div>";
              }

            ?>

        </div>
        <div class="job-emp">
          <p> ...or choose an employer </p>
          <div class='company-jobs-cont'>

          </div>

      </div>
    </div>
      <div id="dashboard">

        <div class="dash-wrap">
          <h1> <span class="d"> Dashboard </span>
            <span class="nav">
              <a href="" class="a1"> <span>ASD</span> </a>
              <a href="" class="a2"> <span>ASD</span> </a>
            </span>
          </h1>

        </div>
          <div class="dash-scroll">
            <div class="dash-ann">
              <h3> Announcements </h1>
                <div class="dash-ann-scroll">
               <?php
              $sql = mysqli_query($db_conx,"select * from announce_tbl where ann_for = 'All' or ann_for = 'Alumni' order by ann_id desc");

              while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

              $title = $row['ann_title'];
              $date = $row['ann_date'];
              $cont = $row['ann_cont'];
              $by = $row['ann_by'];
              $prio = $row['ann_priority'];


              echo"
              <div class='dash-ann-content'>
                <p class='title'> $title  </p>
                <p class='date'> $date  </p>
                <p class='dash-ann-content-content'> Priority: $prio </p>
                <p class='dash-ann-content-content'> $cont </p>
                <p class='ann-by'> Announcement by: $by </p>
              </div>";
              }
              //mysqli_close($db_conx);
            ?>
              </div>
            </div>
          </div>
          <div class="dash-calen">
            <iframe src="https://calendar.google.com/calendar/embed?src=en.philippines%23holiday%40group.v.calendar.google.com&ctz=Asia/Manila" style= scrolling="no"></iframe>
          </div>

      </div>




  </div> -->
  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/alumnifuncs.js"></script>
  </body>
</html>
