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
.khung {
            border: 2px solid #000; /* Độ dày và màu sắc của viền khung */
            padding: 20px; /* Khoảng cách từ nội dung đến viền khung */
            width: 1220px; /* Độ rộng của khung */
            height: 200px; /* Độ cao của khung */
           margin-left:60px;
           margin-top: -80px;
           
        }
</style>
</head>
<body>    
<div class="wrapper2" style=" height: 80px; background-color: #6EB7CE;  ">
      
<img class="iconoirflower" alt="" src="/image/bieutuong.PNG" />

<img class="iconoirflower3" alt="" src="/image/chuong.PNG" />
<img class="iconoirflower4"  alt="" src="/image/nguoi1.PNG" /> 

<div> 
<div class="dropdown" style=" padding: 10px;"     >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"style="  background-color: #399FE8; border-radius: 20px; width: 5px; height: 10px; margin-left:1438px; margin-top: -86px; border: 1px solid #399FE8; ">
  <h7> </h7>
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2" style=" color: black; background:#fff">
    <li><a class="dropdown-item " href="data.php?action=data&query=them" style=" color: black;">Trịnh Trang</a></li>
    <li><a class="dropdown-item " href="staff.php?action=staff&query=them" style=" color: black;">Tài khoản của tôi</a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them" style=" color: black;">Đổi mật khẩu </a></li>
    <li><a class="dropdown-item " href="data.php?action=data&query=them">
      

 <p class="header"></p>
     <a href="javascript:void(0);" id="logout-link" style="color: black; text-decoration: none;margin-left:15px ;margin-top: 350%;">Đăng xuất</a>
     </button>
 
 <script>
      document.getElementById("logout-link").addEventListener("click", function() {
     window.location.href = "index.php";
     });
 </script> 
    </a></li>

   
    
  </ul>
</div> 
</div>


<input type="text" id="search" name="q" style="   text-align: left; border-radius: 25px;  background:#D9D9D9 ;height: 30px;margin-left:1100px; border: 1px solid #D9D9D9  ;margin-top: -300px; "  placeholder=" Tìm kiếm..." required>
 
       
            </button>
        </div>
           
        </div>     
        <div id="main">
            <div class="vung2"> 
                    <div class="menu">
                        <ul class="list_menu">
                        
                       
                        <h7> <img class="iconoirflower5"  alt="" src="/image/nguoi1.PNG" />  Admin</h7>
                        
                        <li  style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:11px; "><a href="data.php?action=data&query=them"> Trang chủ</a></li>
                        
                        <div class="dropdown"  style=" padding: 10px;   ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"

  style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:-33px;  border: 1px solid #F7F7F7; ">
     
  <h7> Kinh doanh </h7>
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
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:-33px; border: 1px solid #F7F7F7; ">
  <h7>QL nhân viên</h7>
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
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:-33px; border: 1px solid #F7F7F7; ">
  <h7>QL phòng</h7>
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
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:-33px; border: 1px solid #F7F7F7; ">
  <h7>QL dịch vụ </h7></button>
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
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:-33px;  border: 1px solid #F7F7F7;">
  <h7>Báo cáo</h7>
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
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"style="  background-color: #F7F7F7; border-radius: 15px; width: 180px; height: 35px; margin-left:-33px; border: 1px solid #F7F7F7; ">
  <h7>Mẫu in</h7>
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
           
            
            
            <div class="wrapper">
            <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
    
            ?>
            </div> 
             
            
            

                     
    


                                              
            </div>
        </div>
</div>
</body>
</html>






