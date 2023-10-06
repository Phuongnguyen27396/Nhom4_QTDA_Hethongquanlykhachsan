
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
       
      
        position: absolute;
        top: 20%;
        background-color:#E9EFF2
        
    }

    .container {
        max-width: 380px;
        padding: 75px;
      
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.9);
        margin-top: -450px;
        margin-left: 600px;
        position: absolute;
        text-align: 70px ;
        font-size: 12px;
        
        
    }

    .container h2 { /* đăng nhập đầu á*/
        text-align: center;
        font-size: 28px;
        

    }

    .container input[type="text"],
    
    .container input[type="password"] {
        width: 140%;
        padding: 20px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        margin-left: -100px;
        border-radius: 100px;

    }


    .txt2 {
        font-size: 50px;
        margin-top: 100px;
        margin-left: 50px;
    }

    .btn-dangnhap {   /* cái này là nút nhấn đăng nhập nha*/
        background-color: #6EB7CE;
        /* Màu nền */
        color: black;
        border: 1px solid #000000;
        /* Màu chữ */
        
        /* Loại bỏ viền */
        padding: 1px 35px;
        /* Kích thước nút */
        border-radius: 10px;
        /* Bo góc nút */
        
        font-size: 20px;
        margin-left: 140px;
        margin-top: 20px;
        
        

    }
    

    </style>
</head>

<body>
<div class="phan2">
<img class="iconoirflower" alt="" src="/image/bieutuong.PNG" />
<img class="iconoirflower1" alt="" src="/image/dannhap.PNG" />

</div>

    
    

<img class="iconoirflower2" alt="" src="/image/form.PNG" />

    <div class="container">
    
        <?php
         $error_message = ''; // Biến để lưu thông báo lỗi 
    if(isset( $_POST['dangnhap'])){ 
      $email = $_POST['email'];
      $password = $_POST['password'];
      if($email == '1' && $password == '1'){
        header('Location:data.php?action=data&query=them');
      }elseif($email == '2' && $password == '2'){
        header('Location:manager.php');
    }elseif($email == '3' && $password == '3'){
        header('Location:employee.php'); 
    }elseif($email == '4' && $password == '4'){
        header('Location:collaborators.php'); 
        
      }else{
        header('Location:fix.php'); 
      }
    }
  ?>


   


        <h2  style="  margin-top: -50px;padding: 20px;font-size: 22px;  " > Lỗi Đăng Nhập</h2>
        
        <form id="from_reg" action="index.php" method="post">
            <label style="font-size: 14px;"  >Thông tin không chính xác. Vui lòng kiểm tra lại !</label>


         
            <button type="button" name="dangnhap" class="btn-dangnhap" onclick="window.location.href = 'index.php';">OK</button>

        </form>

        
    


    </div>

    
</body>

</html>



