<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit']))
  {
 $stuname=$_POST['stuname'];
 $stuemail=$_POST['stuemail'];
 $stuclass=$_POST['stuclass'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $stuid=$_POST['stuid'];
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $connum=$_POST['connum'];
 $altconnum=$_POST['altconnum'];
 $address=$_POST['address'];
 $maths=$_POST['maths'];
 $dlco=$_POST['dlco'];
 $ds=$_POST['ds'];
 $dsgt=$_POST['dsgt'];
 $cg=$_POST['cg'];
 $java=$_POST['java'];
 $amaths=$_POST['amaths'];
 $adlco=$_POST['adlco'];
 $ads=$_POST['ads'];
 $adsgt=$_POST['adsgt'];
 $acg=$_POST['acg'];
 $ajava=$_POST['ajava'];
 $nobooks=$_POST['nobooks'];
 $book1=$_POST['book1'];
 $book2=$_POST['book2'];
 $book3=$_POST['book3'];
 $book4=$_POST['book4'];

 $eid=$_GET['editid'];

$sql="update tblstudent set StudentName=:stuname,StudentEmail=:stuemail,StudentClass=:stuclass,Gender=:gender,DOB=:dob,StuID=:stuid,FatherName=:fname,MotherName=:mname,ContactNumber=:connum,AltenateNumber=:altconnum,Address=:address,maths=:maths,dlco=:dlco,ds=:ds,dsgt=:dsgt,cg=:cg,java=:java,amaths=:amaths,adlco=:adlco,ads=:ads,adsgt=:adsgt,acg=:acg,ajava=:ajava,nobooks=:nobooks,book1=:book1,book2=:book2,book3=:book3,book4=:book4 where ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':stuname',$stuname,PDO::PARAM_STR);
$query->bindParam(':stuemail',$stuemail,PDO::PARAM_STR);
$query->bindParam(':stuclass',$stuclass,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':stuid',$stuid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mname',$mname,PDO::PARAM_STR);
$query->bindParam(':connum',$connum,PDO::PARAM_STR);
$query->bindParam(':altconnum',$altconnum,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':maths',$maths,PDO::PARAM_STR);
$query->bindParam(':dlco',$dlco,PDO::PARAM_STR);
$query->bindParam(':ds',$ds,PDO::PARAM_STR);
$query->bindParam(':dsgt',$dsgt,PDO::PARAM_STR);
$query->bindParam(':cg',$cg,PDO::PARAM_STR);
$query->bindParam(':java',$java,PDO::PARAM_STR);
$query->bindParam(':amaths',$amaths,PDO::PARAM_STR);
$query->bindParam(':adlco',$adlco,PDO::PARAM_STR);
$query->bindParam(':ads',$ads,PDO::PARAM_STR);
$query->bindParam(':adsgt',$adsgt,PDO::PARAM_STR);
$query->bindParam(':acg',$acg,PDO::PARAM_STR);
$query->bindParam(':ajava',$ajava,PDO::PARAM_STR);
$query->bindParam(':nobooks',$nobooks,PDO::PARAM_STR);
$query->bindParam(':book1',$book1,PDO::PARAM_STR);
$query->bindParam(':book2',$book2,PDO::PARAM_STR);
$query->bindParam(':book3',$book3,PDO::PARAM_STR);
$query->bindParam(':book4',$book4,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();
  echo '<script>alert("Student has been updated")</script>';
}

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|| Update Students</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Students </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Update Students</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Update Students</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <?php
$eid=$_GET['editid'];
$sql="SELECT tblstudent.StudentName,tblstudent.StudentEmail,tblstudent.StudentClass,tblstudent.Gender,tblstudent.DOB,tblstudent.StuID,tblstudent.FatherName,tblstudent.MotherName,tblstudent.ContactNumber,tblstudent.AltenateNumber,tblstudent.Address,tblstudent.maths,tblstudent.dlco,tblstudent.ds,tblstudent.dsgt,tblstudent.cg,tblstudent.java,tblstudent.amaths,tblstudent.adlco,tblstudent.ads,tblstudent.adsgt,tblstudent.acg,tblstudent.ajava,tblstudent.nobooks,tblstudent.book1,tblstudent.book2,tblstudent.book3,tblstudent.book4,tblstudent.UserName,tblstudent.Password,tblstudent.Image,tblstudent.DateofAdmission,tblclass.ClassName,tblclass.Section from tblstudent join tblclass on tblclass.ID=tblstudent.StudentClass where tblstudent.ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Name</label>
                        <input type="text" name="stuname" value="<?php  echo htmlentities($row->StudentName);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Email</label>
                        <input type="text" name="stuemail" value="<?php  echo htmlentities($row->StudentEmail);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Student Class</label>
                        <select  name="stuclass" class="form-control" required='true'>
                          <option value="<?php  echo htmlentities($row->StudentClass);?>"><?php  echo htmlentities($row->ClassName);?> <?php  echo htmlentities($row->Section);?></option>
                         <?php 

$sql2 = "SELECT * from    tblclass ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row1)
{          
    ?>  
<option value="<?php echo htmlentities($row1->ClassName);?><?php echo htmlentities($row1->Section);?>"><?php echo htmlentities($row1->ClassName);?> <?php echo htmlentities($row1->Section);?></option>
 <?php } ?> 
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Gender</label>
                        <select name="gender" value="" class="form-control" required='true'>
                          <option value="<?php  echo htmlentities($row->Gender);?>"><?php  echo htmlentities($row->Gender);?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date of Birth</label>
                        <input type="date" name="dob" value="<?php  echo htmlentities($row->DOB);?>" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Student ID</label>
                        <input type="text" name="stuid" value="<?php  echo htmlentities($row->StuID);?>" class="form-control" readonly='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Photo</label>
                        <img src="images/<?php echo $row->Image;?>" width="100" height="100" value="<?php  echo $row->Image;?>"><a href="changeimage.php?editid=<?php echo $row->ID;?>"> &nbsp; Edit Image</a>
                      </div>
                      <h3>Parents/Guardian's details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Father's Name</label>
                        <input type="text" name="fname" value="<?php  echo htmlentities($row->FatherName);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mother's Name</label>
                        <input type="text" name="mname" value="<?php  echo htmlentities($row->MotherName);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Number</label>
                        <input type="text" name="connum" value="<?php  echo htmlentities($row->ContactNumber);?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Alternate Contact Number</label>
                        <input type="text" name="altconnum" value="<?php  echo htmlentities($row->AltenateNumber);?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <textarea name="address" class="form-control" required='true'><?php  echo htmlentities($row->Address);?></textarea>
                      </div>

                      <h3>Assesment Marks details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Maths</label>
                        <input type="text" name="maths" value="<?php  echo htmlentities($row->maths);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">DLCO</label>
                        <input type="text" name="dlco" value="<?php  echo htmlentities($row->dlco);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">DS</label>
                        <input type="text" name="ds" value="<?php  echo htmlentities($row->ds);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">DSGT</label>
                        <input type="text" name="dsgt" value="<?php  echo htmlentities($row->dsgt);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">CG</label>
                        <input type="text" name="cg" value="<?php  echo htmlentities($row->cg);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">JAVA</label>
                        <input type="text" name="java" value="<?php  echo htmlentities($row->java);?>" class="form-control" required='true'>
                      </div>

                      <h3>Attendance details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Attendance For Maths</label>
                        <input type="text" name="amaths" value="<?php  echo htmlentities($row->amaths);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Attendance For DLCO</label>
                        <input type="text" name="adlco" value="<?php  echo htmlentities($row->adlco);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Attendance For DS</label>
                        <input type="text" name="ads" value="<?php  echo htmlentities($row->ads);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Attendance For DSGT</label>
                        <input type="text" name="adsgt" value="<?php  echo htmlentities($row->adsgt);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Attendance For CG</label>
                        <input type="text" name="acg" value="<?php  echo htmlentities($row->acg);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Attendance For JAVA</label>
                        <input type="text" name="ajava" value="<?php  echo htmlentities($row->ajava);?>" class="form-control" required='true'>
                      </div>


                      <h3>Library details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">No of Books Issued (Max 4 Books)</label>
                        <input type="text" name="nobooks" value="<?php  echo htmlentities($row->nobooks);?>" class="form-control" readonly='true' required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name - Book 1</label>
                        <input type="text" name="book1" value="<?php  echo htmlentities($row->book1);?>" class="form-control" readonly='true' required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name - Book 2</label>
                        <input type="text" name="book2" value="<?php  echo htmlentities($row->book2);?>" class="form-control" readonly='true' required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name - Book 3</label>
                        <input type="text" name="book3" value="<?php  echo htmlentities($row->book3);?>" class="form-control" readonly='true' required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name - Book 4</label>
                        <input type="text" name="book4" value="<?php  echo htmlentities($row->book4);?>" class="form-control" readonly='true' required='true'>
                      </div>

                      <h3>Login details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" name="uname" value="<?php  echo htmlentities($row->UserName);?>" class="form-control" readonly='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="Password" name="password" value="<?php  echo htmlentities($row->Password);?>" class="form-control" readonly='true'>
                      </div><?php $cnt=$cnt+1;}} ?>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>