<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-with, initial-scale=1.0"> 
    <title> admincp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
    <link rel="stylesheet" type="text/css" href="css/min1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>
body {
    margin: 0;
    padding: 0;
    
}
</style>
</head>
<body>    
<div class="wrapper2" style=" height: 50px; ">
        <p class="header">Bonny Hotel</p>
            <a href="javascript:void(0);" id="logout-link" style="color: white; text-decoration: none;">Log out</a>
            </button>
        </div>
        <script>
             document.getElementById("logout-link").addEventListener("click", function() {
            window.location.href = "index.php";
            });
        </script>    
        </div>     
        <div id="main">
            <div class="vung2"> 
                    <div class="menu">
                        <ul class="list_menu">
                        <i class="fa-sharp fa-solid fa-circle-user"></i>
                        <li ><a href="index123.php">Admin</a></li>
                        <li ><a href="index123.php"> Trang chủ</a></li>
                        
                        <div class="dropdown"  style=" padding: 10px;  ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  Kinh doanh
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng phòng</a></li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them">Quản lý khách hàng</a></li>
    <li><a class="dropdown-item " href="posts.php?action=posts&query=them">Quản lý PT dịch vụ</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý hoá đơn</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý phiếu thu</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng dịch vụ</a></li>
   
    
  </ul>
</div>

<div class="dropdown" style=" padding: 10px;" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  QL nhân viên
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng phòng</li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them">Quản lý khách hàng</a></li>
    <li><a class="dropdown-item " href="posts.php?action=posts&query=them">Quản lý PT dịch vụ</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý hoá đơn</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý phiếu thu</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng dịch vụ</a></li>
   
    
  </ul>
</div>  

<div class="dropdown" style=" padding: 10px;" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  QL phòng
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng phòng</li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them">Quản lý khách hàng</a></li>
    <li><a class="dropdown-item " href="posts.php?action=posts&query=them">Quản lý PT dịch vụ</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý hoá đơn</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý phiếu thu</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng dịch vụ</a></li>
   
    
  </ul>
</div>     
      
<div class="dropdown" style=" padding: 10px;" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  QL dịch vụ</button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng phòng</li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them">Quản lý khách hàng</a></li>
    <li><a class="dropdown-item " href="posts.php?action=posts&query=them">Quản lý PT dịch vụ</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý hoá đơn</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý phiếu thu</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng dịch vụ</a></li>
   
    
  </ul>
</div>     
<div class="dropdown" style=" padding: 10px;" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  Báo cáo
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng phòng</li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them">Quản lý khách hàng</a></li>
    <li><a class="dropdown-item " href="posts.php?action=posts&query=them">Quản lý PT dịch vụ</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý hoá đơn</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý phiếu thu</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng dịch vụ</a></li>
   
    
  </ul>
</div>     
<div class="dropdown" style=" padding: 10px; ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  Mẫu in
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng phòng</li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them">Quản lý khách hàng</a></li>
    <li><a class="dropdown-item " href="posts.php?action=posts&query=them">Quản lý PT dịch vụ</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý hoá đơn</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Quản lý phiếu thu</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">Tình trạng dịch vụ</a></li>
   
    
  </ul>
</div>     
                        
                      
                        
                        
                        </ul>
                    </div>
</div>
           </div>
            <div class="trungtam">



                    <div class="row g-0 bg-body-secondary position-relative" style=" height: 550px; margin-left:200px; margin-top:10px; "   >
                        <?php
                            $sql_lietke_baiviet = "SELECT * FROM tbl_baiviet ORDER BY stt DESC";
                            $mysqli = new mysqli("localhost","root","","web_mysqli");
                           // $mysqli = new mysqli("139.180.157.177","dlbds_web","Dtvtech@123","dlbds_web");
                           $query_lietke_baiviet = mysqli_query($mysqli,$sql_lietke_baiviet );
                        ?>              
                                <?php
                                    while($row = mysqli_fetch_array($query_lietke_baiviet )){
                                ?>  
                                <div class="col-md-6 mb-md-0 p-md-4" >
                                    <img src="modules/posts/uploads/<?php echo $row ['hinhanh']?>"   style="max-width: 250px; max-height: 200px;   " >
                                </div>                         
                                <div class="" style="max-width: 250px; max-height: 200px; margin-left:-300px;  margin-top:30px;">
                                    <h4>  <?php echo $row['tieude'] ?></h4>
                                    <a href="<?php echo $row['link'] ?>" style=" margin-left:50px;margin-top:5px;" >Xem chi tiết</a>
                                    <div class="col-md-6 mb-md-0 p-md-4"  style=" margin-left:-10px;margin-top:5px;"><h6><?php echo $row['noidung'] ?> </h6>
                                    </div>
                                
</div>    


                                <?php
                                }
                                ?>                         
                            </div>                            
            </div>
        </div>
</div>
</body>
</html>






