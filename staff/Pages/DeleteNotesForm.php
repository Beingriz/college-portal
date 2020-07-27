
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Notice Update</title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body >
  <?php
  $host = "localhost";
   $user = "root";
   $pw = "";
   $db = "College_portal";
   $conn = mysqli_connect($host , $user , $pw , $db);
  $notes_id = $_GET['id'];
  $notes_course = $_GET['Course'];
  $notes_year = $_GET['Year'];
  $notes_sem = $_GET['id2'];
  $notes_sub = $_GET['id3'];

  $delete = "Delete from notes where Notes_ID ='$notes_id'";
  $notes_delete =  "Update student_reg set Note_file = 'No_Notes' Where Classs = '$notes_course' && Year = '$notes_year' &&  Semister ='$notes_sem' ";

  $sql_delete = mysqli_query($conn, $delete);   $sql_st_delete = mysqli_query($conn, $notes_delete);
  if($sql_delete)
  {
     echo '<script type="text/javascript">window.location=\'NewNotes.php\';</script>';
  }
  elseif( $sql_st_delete)
  {
     echo '<script type="text/javascript">alert("Student notes Deleted Successfully! ...");</script>';
  }
  else
  {
     echo '<script type="text/javascript">alert("unable to ddele! ...");</script>';
  }
  ?>
</body>
</html>