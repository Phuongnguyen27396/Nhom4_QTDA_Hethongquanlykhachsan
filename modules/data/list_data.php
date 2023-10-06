  <?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY dai DESC";
    $mysqli = new mysqli("localhost","root","","qtda");
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
 <div class="khung" style=" margin-top:50px;  margin-left:-100px;width: 1205px; background-color: #fff; border: 1px solid  #fff;" >
        <!-- Nội dung trong khung -->
        <p>Quản lý phòng  [Thứ năm, 13/04/2023 | 24:00:00]</p>
    </div>
        
<button type="button" class="btn btn-outline-warning" style="margin-top: -550px; "><a href="data.php?action=data&query=sua1" style="color: black;text-decoration: none;font-size: 26px;">+</a></button>

<table class="table table-bordered"style=" width:1200px; margin-left:-100px; margin-top:-10px;font-size: 13px; border-collapse: separate;
    border-spacing: 12px;border: 1px solid #fff; background-color: #fff; 
    padding: 20px;">
    <td style=" margin-top:10% ; font-size:17px ; " >Danh sách phiếu đặt phòng</td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:10% ; font-size:18px ; " ></td>
    <td style=" margin-top:300px ;  margin-left:-100px; ; ">
   <form action="/tim-kiem.php" method="GET"  >
        
        <input type="text" id="search" name="q" style="   text-align: center; border-radius: 25px;  background:#F5F0F0 ;height: 30px; border: 1px solid #F5F0F0 "  placeholder=" Tìm kiếm..." required>
        
    </form>
   </td>
  <tr class="hihi">
 
  <td style=" border: 1px solid #D9D9D9;  box-shadow:  0px 2px rgba(0, 0, 0, 0.3) ;background-color: #D9D9D9;">STT</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Mã phiếu đặt phòng</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Mã phòng</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Người lập</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Tên khách hàng</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Ngày lập</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Check in</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">check out</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Trạng thái</td>
    <td style=" border: 1px solid #D9D9D9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #D9D9D9;">Thao tác</td>
    

  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;   /*  cộng thứ tự chỗ id  */
?>

    <tr>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9; "><?php echo $i ?></td>    
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9;"><?php echo $row['sonha'] ?></td>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9"><?php echo $row['duong'] ?></td>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9"><?php echo $row['xa'] ?></td>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9"><?php echo $row['ngang'] ?></td>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9"><?php echo $row['dai'] ?></td>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9"><?php echo $row['dientich'] ?></td>
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9"><?php echo $row['dorong'] ?></td>
    
    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9">
    <?php 

    if ( $row['huyen']==0) {
      echo 'Hoàn thành';
    }elseif ( $row['huyen']==1) {
      echo 'Chưa hoàn thành';
    }elseif ( $row['huyen']==2) {
      echo 'Huỷ'; 
    
    }
     ?>
    </td>
  
    
    
   

    <td style=" border: 1px solid #F9F9F9;box-shadow:  0px 2px rgba(0, 0, 0, 0.3);background-color: #F9F9F9">
        <a href="modules/data/controll_data.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=data&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">sửa</a>| <a href="?action=data&query=xem&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xem</a>
    </td>
  </tr>

  <?php
  }
  ?>
  
</table>   
</table> 