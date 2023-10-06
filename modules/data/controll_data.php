<?php
include('../../config/config.php');
$sonha = $_POST['sonha'];
$xa= $_POST['xa'];
$huyen = $_POST['huyen'];
$ngang = $_POST['ngang'];
$dai = $_POST['dai'];
$dientich = $_POST['dientich'];
$dorong = $_POST['dorong'];

//hình ảnh

$hinhanh =$_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh=time ().'_'.$hinhanh;




if(isset($_POST['themdanhmuc'])){
    //them
    $sql_them = "INSERT INTO tbl_danhmuc(sonha,xa,huyen,ngang,dai,dientich,dorong,hinhanh) VALUE('".$sonha."','".$xa."','".$huyen."','".$ngang."','".$dai."',
    
    
    '".$dientich."','".$dorong."','".$hinhanh."')";


    mysqli_query($mysqli,$sql_them);

    move_uploaded_file($hinhanh_tmp,"uploads/". $hinhanh);
    header('location:../../data.php?action=data&query=them');


}elseif(isset($_POST['suaghichu'])=='xoa'){
    

        $sql_update = "UPDATE  tbl_danhmuc SET 
      ghichu='".$ghichu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        
    
    mysqli_query($mysqli,$sql_update);
    header('location:../../data.php?action=data&query=them');



    
}elseif(isset($_POST['suadanhmuc'])=='xoa'){
    if ($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,"uploads/". $hinhanh); 
    //sua
        $sql_update = "UPDATE  tbl_danhmuc SET sonha='".$sonha."',xa='".$xa."',huyen='".$huyen."',ngang='".$ngang."',dai='".$dai."',dientich='".$dientich."',dorong='".$dorong."',
        hinhanh='".$hinhanh."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        
    }else{
        $sql_update = "UPDATE  tbl_danhmuc SET sonha='".$sonha."',xa='".$xa."',huyen='".$huyen."',ngang='".$ngang."',dai='".$dai."',dientich='".$dientich."',dorong='".$dorong."'
        ,hinhanh='".$hinhanh."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        
    }
    mysqli_query($mysqli,$sql_update);
    header('location:../../data.php?action=data&query=them');







    





}elseif(isset($_POST['suadanhmuc'])=='xoa'){

    //xoa
}else{
    $id=$_GET['iddanhmuc'];
    $sql="SELECT*FROM tbl_danhmuc WHERE id_danhmuc='$id' LIMIT 1";
    $query=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_array($query)){
        unlink("uploads/".$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../data.php?action=data&query=them');
}




?>




