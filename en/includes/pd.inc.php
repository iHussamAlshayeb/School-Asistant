x<?php
session_start();

$error = array();

include_once('../includes/dbh.inc.php');


if(isset($_POST['std_info'])){
    
    
    
    $acd_num = mysqli_real_escape_string($conn, strip_tags($_POST['academic_num']));

 $sql = "SELECT * from Student where Academic_ID = '$acd_num'";




$result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck > 0)    {

        while($row = mysqli_fetch_assoc($result)){
        $id = $row['Academic_ID'];
        $name = $row['Name'];
        $father_name = $row['Father_Name'];
        $father_phone = $row['Father_Phone'];
        $mother_name = $row['Mother_Name'];
        $mother_phone = $row['Mother_Phone'];
        $bus_name = $row['Bus_Name'];
        $bus_phone = $row['Bus_Phone'];
        $bus_type = $row['Bus_Type'];
        $class_name = $row['Class'];
        $student_id = $row['ID'];
            
            
            echo
                
                 '
                
<ul class="list-group list-group-flush">
<li class="list-group-item">رقم السجل المدني: '.$student_id.'</li>
<li class="list-group-item">اسم الطالبة: '.$name.'</li>
  <li class="list-group-item">اسم ولي الأمر :'.$father_name.'</li>
  <li class="list-group-item">رقم ولي الأمر :'.$father_phone.'</li>
  <li class="list-group-item">اسم الأم :'.$mother_name.'</li>
  <li class="list-group-item">رقم الأم :'.$mother_phone.'</li>
  <li class="list-group-item">نوع النقليات :'.$bus_type.'</li>
    <li class="list-group-item">اسم النقليات :'.$bus_name.'</li>
      <li class="list-group-item">رقم النقليات :'.$bus_phone.'</li>
        <li class="list-group-item">الصف : '.$class_name.'</li>
</ul>



';
        }
            
            
        }
}

if(isset($_POST['printstudent'])){
    
    
    
    $ac_num = mysqli_real_escape_string($conn, strip_tags($_POST['acc_id']));

 $sql = "SELECT * from Student where Academic_ID = '$ac_num'";




$result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck > 0)    {

        while($row = mysqli_fetch_assoc($result)){
        $name = $row['Name'];
        $father_name = $row['Father_Name'];
        $father_phone = $row['Father_Phone'];
        $bus_name = $row['Bus_Name'];
        $bus_phone = $row['Bus_Phone'];
        $bus_type = $row['Bus_Type'];
        $class_name = $row['Class'];
     
            
            
            echo
                
                 '
<ul class="list-group list-group-flush">
<li class="list-group-item">اسم الطالبة: '.$name.'</li>
  <li class="list-group-item">اسم ولي الأمر :'.$father_name.'</li>
  <li class="list-group-item">نوع النقليات :'.$bus_type.'</li>
    <li class="list-group-item">اسم النقليات :'.$bus_name.'</li>
            <li class="list-group-item">الصف : '.$class_name.'</li>
      <li class="list-group-item">رقم النقليات :'.$bus_phone.'</li>
</ul>
<br>

';
        }
            
            
        }
}

if(isset($_POST['printclass'])){
    
    
    
    $clss_num = mysqli_real_escape_string($conn, strip_tags($_POST['classid']));

 $sql = "SELECT * from Student where class = '$clss_num'";




$result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck > 0)    {

        while($row = mysqli_fetch_assoc($result)){
   
        $name = $row['Name'];
        $father_name = $row['Father_Name'];
        $bus_name = $row['Bus_Name'];
        $bus_phone = $row['Bus_Phone'];
        $bus_type = $row['Bus_Type'];
        $class_name = $row['Class'];
      
            
            
            echo
                
                 '
                
<ul class="list-group list-group-flush">
<li class="list-group-item">اسم الطالبة: '.$name.'</li>
<li class="list-group-item">اسم ولي الأمر :'.$father_name.'</li>
<li class="list-group-item">نوع النقليات :'.$bus_type.'</li>
<li class="list-group-item">اسم النقليات :'.$bus_name.'</li>
<li class="list-group-item">رقم النقليات :'.$bus_phone.'</li>
<li class="list-group-item">الصف : '.$class_name.'</li>
</ul>

<br>


';
        }
            
            
        }
}


if(isset($_POST['log_in'])){
    
	$username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
	$password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));
	
    
    if(empty($username)){
        
        array_push($error,"Username is Required");
    }
    
    if(empty($password)){
        array_push($error,"Password is required");
    }
    
    if(count($error) == 0){
        
       
        
        $query = "SELECT * FROM Teachers WHERE Username='$username' AND Password='$password' LIMIT 1";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['Username'] = $username;
            $_SESSION['success'] = "تم تسجيل الدخول بنجاح";
            header('location: index.php');
        }else {
        	array_push($error, "اسم المستخدم او كلمة المرور خاطئة");
        }
          
    }
}
