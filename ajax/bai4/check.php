<meta charset="utf-8">;
<?php
 session_start();
 include('connect.php');
 $user = $_GET['user']; 
 $pass = $_GET['pass'];
 $query = "SELECT * FROM sinhvien WHERE masv = '$user' AND matkhau = '$pass'";
 mysqli_query($con, "SET NAMES 'utf8'");
 $result  = mysqli_query($con, $query);
 if(mysqli_num_rows($result)>0){
   $row = mysqli_fetch_array($result);  // trả về mãng giá trị  
   $_SESSION['code'] = $row['masv'];
   $_SESSION['info'] = $user.'-'.$row['hoten'].'-'.$row['lop'];    
   echo 'xin chao '. $user.'-'.$row['hoten'];
 }else{
    echo 'nhap sai user name hoac password';
 }
 mysqli_free_result($result); // giải phóng 
 mysqli_close($con);
?>