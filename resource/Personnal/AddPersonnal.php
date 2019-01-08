<?php 
$pername = "";
$perphone = "";
$permail = "";
$percerificate = "";
$peraccount = "";
$perpass = "";
if (isset($_POST['btnAdd'])) {
	$pername = $_POST['txtName'];
    $perphone = $_POST['txtPhone'];
    $permail = $_POST['txtEmail'];
	$percerificate = $_POST['txtCertificate'];
    $peraccount = $_POST['txtAccount'];
    $perpass = $_POST['txtPass'];
	$sqlInsert = "INSERT INTO `personnel`(`PersonnelAccount`, `ParsonnelPassword`, `PersonnelEmail`, `PersonnelPhone`, `PersonnelName`, `PersonnelCetificate`, PersonnalStatus,`RoleId`) VALUES ('$peraccount','".md5($perpass)."','$permail','$perphone','$pername ','$percerificate',0,2)";
	mysqli_query($conn, $sqlInsert);
	echo '<script> alert("Insert Success!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=?page=per"/>';
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
        
				<form method="post" class="form-horizontal">
					<div class="form-group">
						<h4 class="text-center">Add Personnal</h4>
					</div>
					<div class="form-group">
						<label for="txtAccount">Account:</label>
						<input type="text" class="form-control" id="txtAccount" required name="txtAccount" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="txtPass">Password:</label>
						<input type="password" class="form-control" id="txtPass" required name="txtPass" placeholder="Password">
					</div>
                    <div class="form-group">
						<label for="txtEmail">Email:</label>
						<input type="email" class="form-control" id="txtEmail" required name="txtEmail" placeholder="email">
					</div>
					<div class="form-group">
						<label for="txtPhone">Phone:</label>
						<input type="number" class="form-control" id="txtPhone" required name="txtPhone" placeholder="phone">
					</div>
					<div class="form-group">
						<label for="txtName">Name:</label>
						<input type="text" class="form-control" id="txtName" required name="txtName" placeholder="Name">
					</div>
                    <div class="form-group">
						<label for="txtCertificate">Certificate:</label>
						<input type="text" class="form-control" id="txtCertificate" required name="txtCertificate" placeholder="Details">
					</div>
					<input type="submit" class="btn btn-primary" name="btnAdd" value="Add"/>
					<input type="reset" name="btnReset" value="Cancel" class="btn btn-info" />
				</form>
        </div>
        </div>
        </div>