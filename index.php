




<!DOCTYPE html>
<html>

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

    <title>Đăng nhập</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #D9D9D9; ;
        position: absolute;
        top: 20%;
        bottom: 0;
        left: 0;
        right: 0;
    }



    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


    }

    .container h2 {
        text-align: center;

    }

    .container input[type="text"],
    .container input[type="password"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        border-radius: 10px;

    }




    .txt2 {
        font-size: 14px;
        margin-top: 15px;
        margin-left: 25px;
    }

    .btn-dangnhap {
        background-color: #80ff80;
        /* Màu nền */
        color: #000;
        /* Màu chữ */
        border: none;
        /* Loại bỏ viền */
        padding: 10px 155px;
        /* Kích thước nút */
        border-radius: 10px;
        /* Bo góc nút */
        cursor: pointer;
        /* Biến con trỏ chuột thành dấu nhấp nháy */
        font-size: 15px;

    }
    </style>
</head>

<body>
<div class="wrapper1">
        
            <p class="header">Bonny Hotel</p>
                 
<div class="container">
        <?php 
    if(isset( $_POST['dangnhap'])){ 
      $email = $_POST['email'];
      $password = $_POST['password'];
      if($email == '1' && $password == '1'){
        header('Location:index123.php');
      }elseif($email == '2' && $password == '2'){
        header('Location:manager.php');
    }elseif($email == '3' && $password == '3'){
        header('Location:employee.php'); 
    }elseif($email == '4' && $password == '4'){
        header('Location:collaborators.php'); 
        
      }else{
        echo" Tài khoản hoặc Mật khẩu không chính xác";
      }
    }
  ?>
        <h2>Đăng nhập</h2>
        <form id="from_reg" action="index.php" method="post">
            <label> Email </label>
            <input type="text" name="email">

            <label>Password</label>
            <input type="password" name="password">

            <button type="submit" name="dangnhap" class="btn-dangnhap"> Đăng nhập</button>
        </form>


        <div class="text-center p-t-70 txt2">
            Trang web quản lý dữ liệu <i class="far fa-copyright" aria-hidden="true"></i>
            <a class="txt2" href="https://www.facebook.com/phuongnguyendang123/"> Code bởi phuong Nguyen</a>
        </div>
    </div>

</body>


</html>