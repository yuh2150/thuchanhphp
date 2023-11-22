<?php 

include('connect.inc');
include('danhsach.php');

$lop = $_GET['lop'];
$query = "SELECT * FROM sinhvien WHERE lop ='$lop'";
$result = mysqli_query($conn,$query);
$tr = "<table>
   <tr class=hd>
         <td> TT </td>
         <td> mã số </td>
         <td> họ tên </td>
         <td> địa chỉ </td>
   </tr>";
   $tt = 1 ;
   while($row = mysqli_fetch_array($result)){
    $tr.= "<tr>
    <td>{$tt}</td>
    <td>{$row['masv']}</td>
    <td>{$row['hoten']}</td>
    <td>{$row['diachi']}</td>
    </tr>";
    $tt++;
   }
   $tr."</table>";
   echo $tr;      
   
?>