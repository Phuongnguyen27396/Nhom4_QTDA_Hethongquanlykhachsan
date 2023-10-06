<p></p>
<table class="table table-bordered" style="  margin-left:200px;  ">
    <form method="POST" action="modules/data/controll_data.php" enctype="multipart/form-data">
                
        <tr>
            <td style="background: #d9d9d9">Mã phiếu đặt phòng  </td>
            <td><input type="text" name="sonha"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Mã phòng</td> 
            <td><input type="text" name="duong" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Người lập</td> 
            <td><input type="text" name="xa"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Tên khách hàng</td> 
            <td><input type="text" name="ngang"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Ngày lập</td> 
            <td><input type="text" name="dai"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Check in</td> 
            <td><input type="text" name="dientich"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">check out</td> 
            <td><input type="text" name="dorong"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Trạng thái</td> 
            <td>
            <select name="huyen">
                    <option value="0">Hoàn thành</option>
                    <option value="1">Chưa hoàn thành</option>
                    <option value="2">Huỷ</option>
                   
                </select>
            </td>
        </tr>
        
        
        <tr> 
            <td style="background: #d9d9d9">Hinh anh</td> 
            <td><input type="file" name="hinhanh"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr>  
            <td colspan="16"><input type="submit" name="themdanhmuc" value="Save"></td>
        </tr>
  </form>
</table>    