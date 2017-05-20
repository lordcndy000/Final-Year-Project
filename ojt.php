<?php
   include('session.php');
   include('changeojtpic.php');
   include('ojtchangepass.php');

?>
<!DOCTYPE html>
<html class='no-js'>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STI Novaliches OJT Page</title>
    <link rel="stylesheet" href="assets/css/profile/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Roboto|Slabo+27px" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="sidebar">
        <nav>
          <ul>
            <a href="#" title="Dashboard">
              <li></li>
            </a>
            <a href="#" title="Job Posts">
              <li></li>
            </a>
            <a href="#" title="My Profile">
              <li></li>
            </a>
            <a href="logout.php" title="Logout">
              <li></li>
            </a>
          </ul>
        </nav>
      </div>
    </header>
    <div id="content">

      <div id="placeholder">

      </div>

      <div id="myprofile">
        <div class="profile-wrap">
          <h1> <span class="p"> My Profile </span></h1>
          <div id="profile-info">
              <p><?php echo $studFname . " " . $studMi ."." . " ". $studLname; ?> | <?php echo $studMail ?> | <?php echo $studCrs ?> | <?php echo $studUse ?> | <?php echo $studSec ?> </p>
          </div>
        </div>
        <div id="profile-nav">
          <ul id="profile-nav-cont">

            <li><p id="mydetails" class="ulli"> My Details </p> </li>
            <li><p id="myformx" class="ulli"> My Forms </p> </li>
            <li><p id="myrezume" class="ulli"> My Résumé </p> </li>

          </ul>
        </div>
        <div id="signojt">
          <p id='signojtxx'> My Details </p>

        </div>
        <!--DETAILS-->
        <div id="mydetails-cont"> <!-- hide thisss -->
          <div id="imgcont">
            <?php
              $qry2 = "select ojt_pic from ojt_tbl where studentNo = $studNo";
              $resul2 = mysqli_query($db_conx, $qry2);

              while($row = mysqli_fetch_array($resul2))
              {

                echo "<img class='imgsrc' src='data:image;base64,".$row['ojt_pic']."'>";
              }
            ?>

          <form method='post' enctype='multipart/form-data' id="formch">
            <div id="labelcontainer">
              <input required type="file" name="image" id="file-5" class="inputfile inputfile-4" />
    					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Change picture</span></label>
            </div>
            <input type='submit' name='imageup' class='imageup' value='Save'>
          </form>
          <p id="ojtchangepasstext"> Change password ▼ </p>

          <form method='post' id='changepassform'>
            <input type="password" name='newpass' id='newpass' placeholder="Type new password">
            <input type="password" name='confpass' id='confpass' onkeyup="checkPass(); return false;" placeholder="Confirm new password">
            <p id='confirmMessage'></p>
            <input type="submit" name='changepassojt' class='imageup' id="imageup" value='Submit' disabled>

          </form>


          </div>
          <!--ajax-->
          <div id="detCont"></div>

        </div>

        <!--FORMS-->
        <div id="profileforms-cont"> <!--hide this-->

          <div id="ojtpreregf-cont" class="profileforms-box">
            <div id="imgpreg"></div>
            <p class='prereglabel'>OJT Pre-registration Form </p>
          </div>

          <div id="ojtlogf-cont" class="profileforms-box">
            <div id="imglog"></div>
            <p class='prereglabel'>OJT Logsheet </p>
          </div>

          <div id="ojtreqsf-cont" class="profileforms-box">
            <div id="imgreqs"></div>
            <p class='prereglabel'>OJT Forms and Templates </p>
          </div>
        </div>

        <div id="ojtreqs-cont"> <!--hide this-->

          <div id="initial-cont" class="profileforms-box">
            <div id="imginitial"></div>
            <p class='prereglabel'>Initial Requirements </p>
          </div>

          <div id="periodical-cont" class="profileforms-box">
            <div id="imgperiod"></div>
            <p class='prereglabel'>Periodical Requirements </p>
          </div>

          <div id="final-cont" class="profileforms-box">
            <div id="imgfinal"></div>
            <p class='prereglabel'>Final Requirements </p>
          </div>
        </div>

        <div id="ojtinitial"> <!--hide this-->
          <div id="filterwgen">
            <div id=instructionwrap>
              <div id="selectinstruct">
                <p>Please select your program using the dropdown below.</p>
                <p>After you have downloaded and edited the form, you may now submit it
                  <span style="color:#B45E00; cursor:pointer" id="initialhere">here</span></p>
              </div>
              <div id="select-wrap">
                <select id="filtercrs">
                  <option disabled selected>Filter by course</option>
                  <option value="ABCOMM">ABCOMM</option>
                  <option value="BSHRM">BSHRM</option>
                  <option value="BSTM">BSTM</option>
                  <option value="HRS">HRS</option>
                  <option value="BSAT">BSAT</option>
                  <option value="BSBM">BSBM</option>
                  <option value="BSIT, BSCS, ITP">BSIT, BSCS, ITP</option>
                </select>

              </div>
            </div>
            <div id="generalreq">
              <div id="acceptance" class="profileforms-box">
                <div id="imgword"></div>
                <p class='prereglabel'>Letter of Acceptance </p>
              </div>

              <div id="pwaiver" class="profileforms-box">
                <div id="imgword"></div>
                <p class='prereglabel'>Parent's Waiver </p>
              </div>

              <div id="agreement" class="profileforms-box">
                <div id="imgword"></div>
                <p class='prereglabel'>Trainee and STI Agreement </p>
              </div>

              <div id="resumetemplate" class="profileforms-box">
                <div id="imgword"></div>
                <p class='prereglabel'>Resume Template</p>
              </div>

              <div id="studappl" class="profileforms-box">
                <div id="imgword"></div>
                <p class='prereglabel'>Student Application Letter Template </p>
              </div>

              <div id="worksched" class="profileforms-box">
                <div id="imgword"></div>
                <p class='prereglabel'>Work Schedule </p>
              </div>


                <div id="endorseabcomm" class="profileforms-box">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Endorsement Letter ABCOMM </p>
                </div>


                <div id="endorsebshrm1" class="profileforms-box hidehrm">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Enrosement Letter BSHRM(1) </p>
                </div>

                <div id="endorsebshrm2" class="profileforms-box hidehrm">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Enrosement Letter BSHRM(2) </p>
                </div>

                <div id="endorsebshrm3" class="profileforms-box hidehrm">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Enrosement Letter BSHRM(3) </p>
                </div>

                <div id="endorsebstm1" class="profileforms-box  hidetm">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Enrosement Letter BSTM(1) </p>
                </div>

                <div id="endorsebstm2" class="profileforms-box  hidetm">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Enrosement Letter BSTM(2) </p>
                </div>

                <div id="endorsehrs" class="profileforms-box">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Enrosement Letter HRS</p>
                </div>

                <div id="endorsebsat" class="profileforms-box hideat">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Group Enrosement Letter BSAT </p>
                </div>

                <div id="trainplanbsat" class="profileforms-box hideat">
                  <div id="imgpdf"></div>
                  <p class='prereglabel'>OJT Training Plan for BSAT </p>
                </div>

                <div id="singlebsat" class="profileforms-box hideat">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Single Enrosement Letter BSAT </p>
                </div>

                <div id="endorsebsit" class="profileforms-box hideit">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Group Enrosement Letter BSIT, BSCS, ITP </p>
                </div>

                <div id="singlebsit" class="profileforms-box hideit">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Single Enrosement Letter BSIT, BSCS, ITP </p>
                </div>


                <div id="trainplanbsit" class="profileforms-box hideit">
                  <div id="imgword"></div>
                  <p class='prereglabel'>OJT Training Plan for BSIT, BSCS, ITP </p>
                </div>

                <div id="trainplanbsbm" class="profileforms-box hidebm">
                  <div id="imgxel"></div>
                  <p class='prereglabel'>OJT Training Plan for BSBM </p>
                </div>

                <div id="singlebsbm" class="profileforms-box hidebm">
                  <div id="imgword"></div>
                  <p class='prereglabel'>Single Enrosement Letter BSBM </p>
                </div>


            </div>
          </div>
        </div>

        <div id="ojtinitialupload"> <!--hide-->
          <div id="initialupload-cont">
            <div id="messagewrap">
              <div id="multi-msg"></div>
              <div id="initialuploadformwrap">
                <form name='initupload' id='initupload' action='ojtup1.php' method="POST" enctype="multipart/form-data">
        					<input type="file" name="file-1" id="file-1" class="inputfile inputfile-1" />
        					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="initspan">Choose File</span></label>
                  <input type='button' id='btninit' class='imageup' value='Upload'>
                </form>

              </div>
            </div>
            <div id="uploadsinitial"></div>
          </div>
        </div>

        <div id="ojtperiodupload"> <!--hide-->
          <div id="periodupload-cont">
            <div id="messagewrap2">
              <div id="perioduploadformwrap">
                <div id="perioduploadformwrap2">
                  <div id="selectinstruct2">
                    <div id='ojtperiodstatus' style='font-size: 14px'></div>
                    <p>Periodical requirements should be uploaded after the files has been downloaded and updated and after initial requirements are marked as Complete</p>
                  </div>
                  <form name='periodupload' id='periodupload' action='ojtup2.php' method="POST" enctype="multipart/form-data">
                    <input type="file" name="file-2" id="file-2" class="inputfile inputfile-2"/>
  					        <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="periodspan">Choose File</span></label>
                    <input type='button' id='btnperiod' class='imageup' value='Upload'>
                  </form>

                  <div id="uploadsperiodic">
                    <p><i> Download this files first. </i> </p>

                    <div id="ojtperiodical">
                      <div id="dailytime" class="profileforms-box">
                        <div id="imgxel"></div>
                        <p class='prereglabel'>OJT Daily Time Record Template</p>
                      </div>

                      <div id="midsemeval" class="profileforms-box">
                        <div id="imgword"></div>
                        <p class='prereglabel'>OJT Midsem Evalutaion</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div id="uploadsperiodicxx"></div>
                </div>
              </div>
            </div>
          </div>

        <div id="ojtfinalupload"> <!--hide-->
        <div id="finalupload-cont">
        <div id="messagewrap3">
          <div id="finaluploadformwrap">
            <div id="finaluploadformwrap2">
              <div id="selectinstruct3">
                <div id='ojtfinalstatus' style='font-size: 14px'></div>
                <p>Final requirements should be uploaded after the files has been downloaded and updated and after periodical requirements are marked as Complete</p>
              </div>
              <form name='finaluploud' id='finaluploud' action='ojtup3.php' method="POST" enctype="multipart/form-data">
                <input type="file" name="file-3" id="file-3" class="inputfile inputfile-3">
  					    <label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="finalspan">Choose File</span></label>
                <input type='button' id='btnfinal' class='imageup' value='Upload'>
              </form>

              <div id="uploadsfinal">
                <p><i> Download this files first. </i> </p>

                <div id="ojtfinally">
                  <div id="attchinteg" class="profileforms-box">
                    <div id="imgword"></div>
                    <p class='prereglabel'>Attachment Integration Paper Template</p>
                  </div>

                  <div id="ftpapl" class="profileforms-box">
                    <div id="imgword"></div>
                    <p class='prereglabel'>FT-APL-009-00 Performance Appraisal (OJT Policy)</p>
                  </div>

                  <div id="interneval" class="profileforms-box">
                    <div id="imgword"></div>
                    <p class='prereglabel'>Student Internship Evaluation Form</p>

                      </div>
                    </div>
                  </div>
                </div>
              <div id="uploadsfinalxx"></div>
            </div>
          </div>
        </div>
        </div>


        <div id="resumexx-cont">

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

          <!--<a href='drag.php'> asdad </a>-->

        </div>

      </div>


      <div id="jobposts">
        <div class="job-wrap1">
          <h1> <span class="j"> Job Posts </span> </h1>

            <div id="livejsearch">

              <input type="text" name="search_j" id="search_j" placeholder="Type keywords (e.g IT, ABC Company, Quezon City)" class="form-control" />
            </div>
            </div>
        <div class="job-recent">


            <div id="jobrecentwrap">


              <div id="jobrecentpost">

              </div>

              <div id="jobchoose">
                STI Partners
                <div id="emplistwrap"></div>
            </div>

          </div>

        </div>
      </div>


      <div id="dashboard">

        <div class="dash-wrap">
          <h1> <span class="d"> Dashboard </span></h1>
          <div id="hugename">

            <p id="hugencont"><?php echo $ojtstudFname, $ojtstudLname ?></p>


          </div>
        </div>

          <div class="dash-cont">

            <div id="annwrap">

              <div id="annpost">

              </div>

              <div id="anncolumn">
                <div id="dashcalen">
                  <?php
                    include 'calendar.php';

                    $calendar = new Calendar();

                    echo $calendar->show();
                  ?>

                  <div id="dashuser"></div>

                  </div>
                </div>


              </div>


            </div>
          </div>


    <!--        <div class="dash-scroll">
            <div class="dash-ann">
              <h3> Announcements </h1>
                <div class="dash-ann-scroll">
               <?php
              $sql = mysqli_query($db_conx,"select * from announce_tbl where ann_for = 'All' or ann_for = 'OJT' order by ann_id desc");

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
                <p class='dash-ann-content-content'> $cont  </p>
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
          </div> -->

      </div>

    </div>
  </div>



  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/functions-profile.js"></script>
  <script src="assets/js/fileinput.js"></script>
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

  </body>
</html>
