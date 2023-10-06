<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc   where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>


<table border ="1" width="50%"  >
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" enctype="multipart/form-data">
        <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?> 
        
            
            <textarea row="100"  name="ghichu" style="resize: both"  class="ghichu1" >
            <?php echo $dong['ghichu']?>
            </textarea>
             
             
        <?php
        }
        ?>
  </form>
</table>    





<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmuc    where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $mysqli = new mysqli("localhost","root","","qtda");
    $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
?>
<table class="table table-bordered" style=" width:1000px; margin-left:100px; margin-top:-250px;">
  <tr >
    
    <th>Mã phiếu đặt phòng</th>
    <th>Mã phòng</th>
    <th>Người lập</th>
    <th>Tên khách hàng</th>
    <th>Ngày lập</th>
    <th>Check in</th>
    <th>check out</th>
    <th>Trạng thái</th>
    
    

  </tr>
 
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while($row = mysqli_fetch_array($query_chitiet)){
        ?>
        <tr>
        
        <tr>
   
    <td><?php echo $row['sonha'] ?></td>
    <td><?php echo $row['duong'] ?></td>
    <td><?php echo $row['xa'] ?></td>
    <td><?php echo $row['ngang'] ?></td>
    <td><?php echo $row['dai'] ?></td>
    <td><?php echo $row['dientich'] ?></td>
    <td><?php echo $row['dorong'] ?></td>
 
    <td>
    <?php 

    if ( $row['huyen']==0) {
      echo 'Hải Châu';
    }elseif ( $row['huyen']==1) {
      echo 'Cẩm Lệ';
    }elseif ( $row['huyen']==2) {
      echo 'Thanh Khê'; 
    }elseif ( $row['huyen']==3) {
      echo 'Liên Chiểu'; 
    }elseif ( $row['huyen']==4) {
      echo 'Ngũ Hành Sơn'; 
    }elseif ( $row['huyen']==5) {
      echo 'Sơn Trà'; 
    }elseif ( $row['huyen']==6) {
      echo 'Huyện Hòa Vang'; 
    }elseif ( $row['huyen']==7) {
      echo 'Huyện Hoàng Sa'; 
    }
     ?>
    </td>
   
    
    

    
    
  
  </tr>
  
        <?php
        }
        ?>
  </form>

</table>    

<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmuc    where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $mysqli = new mysqli("localhost","root","","qtda");
    $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
?>
<table border ="1" width="50%" >
  

  
 
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while($row = mysqli_fetch_array($query_chitiet)){
        ?>
  <div class ="hinh" >
    <img src="modules/data/uploads/<?php echo $row ['hinhanh']?>" width="250px  " style="margin-top: 500px;" >
  </div> 
        <?php
        }
        ?>
  </form>

</table>    







