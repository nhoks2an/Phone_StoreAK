<?php 
$conn = mysqli_connect ('localhost', 'root', '', 'store_phone');
mysqli_set_charset($conn, 'UTF8'); 
$sql = 'SELECT * FROM chinh_saches'; 
$result = $conn->query($sql);
$cs = [];
while($row = $result->fetch_assoc()) {
	$cs[]=$row;
}
$sql = 'SELECT * FROM footers'; 
$result = $conn->query($sql);
$ft = [];
while($row = $result->fetch_assoc()) {
	$ft[]=$row;
}
mysqli_close($conn);
?>
<div class="footer">
    <div class="center-layout">
        <div class="top-footer flex">
            <div class="thongtin">
                <div class="title-tt">THÔNG TIN</div>
                @foreach($ft as $item)
                <div class="title-ft"><?php echo $item['tieude'];?></div>
                <div class="diachi">
                    <?php echo $item['noidung'];?>
                </div>
                @endforeach
            </div>
            <div class="chinhsach">
                <div class="title-tt">CHÍNH SÁCH</div>
                @foreach($cs as $item)
                <a ><?php echo $item['tieude'];?></a> <br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="design">Design by AK Team</div>
</div>