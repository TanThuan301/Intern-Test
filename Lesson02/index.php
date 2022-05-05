<?php
include('./connectDB.php');

$contentHTML ='';
if (isset($_GET['submit'])) {
	$fullName = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$content = $_POST['content'];

	if (!empty($fullName) && !empty($email && !empty($phone) && !empty($content))) {
		// "UPDATE tbl_donhang SET huydon='$huydon' WHERE magiaodich='$magiaodich'"
		$sql = "INSERT INTO `customers` (`fullname`, `email`, `phone`, `content`) VALUES ('$fullName', '$email', '$phone', '$content')";
		mysqli_query($conn, $sql);
?>
		<script>
			alert('Cảm ơn bạn đã liên hệ với chúng tôi !')
		</script>

	<?php

		$contentHTML = '
		<h2 class="contact_header">Thông tin</h2>
		<p class="font-weight-bold">Họ và Tên:.' . $fullName . ' </p>
		<p class="font-weight-bold">Email:' . $email . ' </p>
		<p class="font-weight-bold">Số điện thoại: ' . $phone . '</p>
		<p class="font-weight-bold">Nội dung:' . $content . ' </p>';
	} else {
	?>
		<script type="text/javascript">
			alert("Vui lòng nhập đầy đủ thông tin vào các trường")
		</script>
<?php
	}
}


?>


<!DOCTYPE html>
<html>

<head>
	<title>Contact</title>
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center">

			<div class="card-body">
				<h2 class="contact_header">Liên hệ</h2>
				<form action="?submit" method="POST" enctype="multipart/form">
					<div class="form-group">
						<label for="InputName">Họ và Tên</label>
						<input name="fullname" type="text" id="ipName" class="form-control" value="" placeholder="Ex: Nguyen Van A">

					</div>
					<div class="form-group">
						<label for="InputEmail">Email</label>
						<input name="email" type="email" class="form-control" id="ipEmail" value="" placeholder="Ex: contact@gmail.com">

					</div>
					<div class="form-group">
						<label for="InputName">Số điện thoại</label>
						<input name="phone" type="number" class="form-control" id="ipPhone" value="">
					</div>
					<div class="form-group">
						<label for="InputName">Nội dung liên hệ</label>
						<textarea name="content" class="form-control" id="textContent" rows="3" value=""></textarea>

					</div>
					<div class="btnContact">
						<button type="submit" class="btn btn-primary" style="font-size: 1.5rem;"> Submit</button>
						
					</div>

				</form>
				<button type="submit" class="btn btn-danger" style="font-size: 1.5rem; margin-left:20px;" id="btnClear"> Clean</button>
			</div>

		</div>
		<div class="content">
			<?php
				echo $contentHTML;
			?>
		</div>
	</div>
</body>
<script>
	var fullName = document.querySelector("#ipName");
	var phone = document.querySelector("#ipPhone");
	var email = document.querySelector("#ipEmail");
	var textContent = document.querySelector("#textContent");
	var btnClear = document.querySelector("#btnClear");
	btnClear.addEventListener("click", function(event) {
		window.location="index.php"
		
	})
</script>

</html>