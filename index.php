<?php
  include('comp_reg.php');
  include('comp_log.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STI College Novaliches Job Placement and Placement Office Portal</title>
    <link rel="stylesheet" href="assets/css/home/styles.css">
    <link rel="stylesheet" href="assets/css/scrollbar/scroll.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto|Slabo+27px">

  </head>
  <body>
    <div class="scroll">
      <input type="checkbox" id="sidebar-toggler">
      <div class="page-wrap">
        <label for="sidebar-toggler" class="toggle">☰</label>
        <div class="page-content">
          <header id="header">
            <div class="login">
              <div class="welcome">
                <p>Sti college novaliches</p>
                <p>Placement office portal</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae eros vitae ipsum laoreet sollicitudin. Sed hendrerit libero non justo mollis hendrerit. Vestibulum et tortor. </p>
              </div>
              <div class="login-contain">
                <div class="form">
                  <form action= "login.php" method="post" class="login-form">
                    <p class="login-text">Login</p>
                    <input type="text" placeholder="Student Number/Username" required name="stdntNo" class="input-text">
                    <input type="password" placeholder="Password" required name="password" class="input-pass"><a href="">Forgot Password?</a>
                    <input type="submit" value="Login" class="btnLogin" name="submit">
                  </form>


                </div>
              </div>
              <br style="clear:both">
            </div>

          </header>
          <div id="partners">
            <div class="partner">
              <div class="partner-banner">
                <p>A place <br>for <span style="color:#f4f636; font-weight: 900">job hunters </span><br>and <span style="color:#f4f636; font-weight: 900">employers </span></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nisi ipsum, sagittis in lectus eget, tristique efficitur massa. Donec lacinia in sapien porta tincidunt. Fusce laoreet vitae metus nec volutpat. Donec at tortor mattis. </p>
                <div class="cleared"></div>
              </div>
              <div class="partner-content">

                <div class="login-partn">
                  <p> Welcome. Please <span style="color:#0107DF ">login.</span> </p>
                  <br>
                  <form class="part" method='POST' action=''>
                    <input type="text" placeholder="Username" class="part-text" name="compLogN" required>
                    <input type="password" placeholder="Password" class="part-text" name="compLogP" required>
                    <div class="forgotz">
                      <a href=""> Forgot password? </a>
                      <input type= "submit" name="comp_login" class="part-reg forgotz_btn" value="Login">
                    </div>
                  </form>
                </div>

                <div class="reg-partn">
                  <p> Or <span style="color: #f5c11e"> register </span> here. </p>
                  <form class="part" action='' method='POST'>
                    <input type="text" required placeholder="Company Name" class="part-text"name="compNm">
                    <input type="text" required placeholder="Company Address" class="part-text"name="compAd">
                    <input type="text" required placeholder="Username" class="part-text" name="compUs">
                    <input type="password" required placeholder="Password" class="part-text" name="compPss">
                    <input type="email" required placeholder="Email Address" class="part-text"name="compEml">
                    <input type="text" required placeholder="Contact Details" class="part-text"name="compCont">
                    <textarea required name="compAb" placeholder="Write something about your company"></textarea>
                    <input type="submit" class="part-reg forgotz_btn" name="comp_reg" value="Register">

                  </form>

                </div>

              </div>
            </div>
          </div>
          <div id="alumni">
            <div class="alumni">
              <div class="alumni-wrap">
                <p>Keep in touch <br>with your <span style="color:#f6b900">alma mater</span></p>
                <p> Duis eu elementum tellus. Curabitur libero libero, commodo eu diam sit amet, euismod pharetra lectus. Ut finibus elit sed mi. Usmanwpe lowqmg, pqwena, xasdeta. Ofjanqm oqnasdwr, amet sit. Tis loe <br>Login <a href="#">here </a>to get started.</p>
                <div class="cleared"></div>
              </div>
            </div>
          </div>
          <div id="grad">
            <div class="grad">
              <div class="grad-banner">
                <p>Duis eu elementum tellus. <br>Ut finibus elit sed mi. Usmanwpe lowqmg,  <br>pqwena, xasdeta. Fusce laoreet vitae </p>
                <p> <span style="color:#095caa">Preparing </span>students <br>for <span style="color:#f6b900; font-weight: 900">succsessful </span>future</p>
              </div>
              <div class="grad-tcontain">
                <div class="grad-text">
                  <p>Tomorrow's Leaders</p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nisi ipsum, sagittis in lectus eget, tristique efficitur massa. Donec lacinia in sapien porta tincidunt. Fusce laoreet vitae metus nec volutpat. Donec at tortor mattis.
                    Duis eu elementum tellus. Libero libero, euismod pharetra lectus.
                    Ut finibus elit sed mi. Usmanwpe lowqmg,
                    pqwena, xasdeta. Fusce laoreet vitae
                  </p>
                </div>
                <div class="grad-link">
                  <p>What can you do?</p>
                  <p>
                    Duis eu elementum tellus, consectetur adipiscing elit. Cras nisi ipsum, sagittis in lectus eget, tristique efficitur massa. Donec lacinia in sapien porta tincidunt. Fusce laoreet vitae metus nec volutpat. Donec at tortor mattis.
                    Usmanwpe lowqmg. Libero libero, euismod pharetra lectus.
                    tristique efficitur massa. Usmanwpe lowqmg,
                    sagittis in lectus eget. consectetur adipiscing elit
                    . Get started <a href="#">here.</a>
                  </p>
                </div>
              </div>
              <div class="cleared"></div>
            </div>
          </div>
          <div id="ojt">
            <div class="ojt">
              <div class="ojt-wrap">
                <div class="ojt-text">
                  <p>Practicum-ers</p>
                  <p>
                    Cras nisi ipsum, sagittis in lectus eget, consectetur adipiscing elit. Sagittis in lectus eget, tristique efficitur massa. Donec lacinia in sapien porta tincidunt. Fusce laoreet vitae metus nec volutpat. Donec at tortor mattis.
                    Duis eu elementum tellus. Libero libero, euismod pharetra lectus.
                    Ut finibus elit sed mi. Usmanwpe lectus eget,
                    Ut finibus elit sed mi. massa. Usmanwpe lowqmg,
                    Duis eu elementum tellus. Libero libero, euismod pharetra lectus.
                    Ut finibus elit sed mi. Usmanwpe lectus eget,
                    Ut finibus elit sed mi. massa. Usmanwpe lowqmg,
                    Ut finibus elit sed mi. massa. Usmanwpe lowqmg,
                    Duis eu elementum tellus. Libero libero, euismod pharetra lectus.
                    Ut finibus elit sed mi. Usmanwpe lectus eget,
                    Ut finibus elit sed mi. massa. Usmanwpe lowqmg,
                    . Get started <a href="#">here.</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <footer id="footer">
            <div class="visit"><strong>Visit our page</strong>
              <ul>
                <li><a href="http://www.facebook.com/novaliches.sti.edu">Facebook</a></li>
                <li><a href="http://www.youtube.com/user/STIdotEdu">Youtube</a></li>
                <li><a href="http://www.twitter.com/sticollege">Twitter</a></li>
              </ul>
            </div>
            <div class="contact-us">
              <p><strong>Contact us</strong></p>
              <input type="email" placeholder="Your Email" class="cont-input">
              <button class="btn-cont">Submit Query</button>
            </div>
          </footer>
        </div>
        <div class="sidebar">
          <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="#partners">Partners</a></li>
            <li><a href="#alumni">Alumni</a></li>
            <li><a href="#grad">Graduating</a></li>
            <li><a href="#ojt">OJT</a></li>
            <li><a href="announcements.php">Announcements</a></li>
          </ul>
        </div>
      </div>
    </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2>Signup</h2>
          </div>


          </div>
        </div>

      </div>


    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/functions.js"></script>
  </body>
</html>
