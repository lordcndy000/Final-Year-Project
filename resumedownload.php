<?php
include('session.php');

  if(isset($_POST["ressave"]))
  {

    $resname = $_POST["resname"];
    $resadd = $_POST["resadd"];
    $resnum = $_POST["resnum"];
    $resemail = $_POST["resemail"];
    $resobj = $_POST["resobj"];
    $reseduc = $_POST["reseduc"];
    $resworkex = $_POST["resworkex"];
    $reskil = $_POST["reskil"];
    $resxtra = $_POST["resxtra"];
    $resref = $_POST["resref"];

// Assume $strHTML is the variable which contains the HTML code for the report
  $strHTML = "<p><strong style='font-size: 16px'>$resname</strong>
              <br>$resadd
              <br>$resnum
              <br>$resemail</p>
              <br>
              <p><strong>OBJECTIVE</strong></p>
              <p>$resobj</p>
              <p><strong>EDUCATION</strong></p>
              <p>$reseduc</p>
              <p><strong>WORK EXPERIENCE</strong></p>
              <p>$resworkex</p>
              <p><strong>SKILLS</strong></p>
              <p>$reskil</p>
              <p><strong>EXTRA-CURRICULAR ACTIVITIES</strong></p>
              <p>$resxtra</p>
              <p><strong>REFERENCES</strong></p>
              <p>$resref</p>";


  $strFile =  '<html>
          <head>
            <style type="text/css">
              body {
                margin:0;
                padding:0px;
                font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;
                font-size: 14.5px;
                line-height: 1px;

                p{

                    text-align: justify;

                }
              }

            </style>
          </head>
          <body>
          '. $strHTML .'
          </body>
        </html>';

// Include the HTML To Doc class file in your PHP script
include("html_to_doc.php");

// Create the object from the class
$htmltodoc= new HTML_TO_DOC();

// Pass the variable which contains the code to the object.
// The 3rd parameter forces to download the generated Microsoft Word document.

$htmltodoc->createDoc($strFile, "$ojtstudLname-RESUME.doc", true);
}
?>
