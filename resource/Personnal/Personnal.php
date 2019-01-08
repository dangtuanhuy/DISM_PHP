<script type="text/javascript">
	function deleteConfirm()
	{
		if(confirm("Are you sure delete!")){
			return true;
		}
		else{
			return false;
		}
	}
</script>
<!-- Lệnh Delete -->

<?php 
if (isset($_GET["ma"])) {
    $PersonnelAccount = $_GET["ma"];
mysqli_query($conn, "DELETE FROM `personnel` WHERE PersonnelAccount='{$PersonnelAccount}'");
}
?>
<?php
if (isset($_POST['btnDelete']) && isset($_POST['checkbox'])) {
    for ($i = 0; $i < count($_POST['checkbox']); $i++) {
        $PersonnelAccount1 = $_POST['checkbox'][$i];
    mysqli_query($conn, "DELETE FROM `personnel` WHERE PersonnelAccount='{ $PersonnelAccount1}'");
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
	<form name="frmXoa" method="post" action="">
		<h1 class="text-center">Manage Personnal</h1>
		<p>
			<a  class="btn btn-success" href="?page=addper">
				ADD
			</a>

		</p>
        <br>
		<table class="table-striped table-responsive table-bordered" id="myTable" border='1'>
			<thead>
				<tr>
					<th ><strong>Choice</strong></th>
					<th ><strong>No</strong></th>
					<th ><strong>Name</strong></th>
                    <th ><strong>Phone</strong></th>
                    <th ><strong>Certificate</strong></th>
                    <th ><strong>Role</strong></th>
					<th class="col-1"><strong>Delete</strong></th>
					<th class="col-1"><strong>Update</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php 
    $num = 1;
    $result = mysqli_query($conn, "SELECT PersonnelAccount, `PersonnelName`, `PersonnelEmail`, `PersonnelPhone`, `PersonnelCetificate`,   `RoleName` FROM personnel JOIN role ON personnel.RoleId = role.RoleId");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
					<tr>
						<td><input name="checkbox[]" type="checkbox" id="checkbox[]"  class="form-control" value="<?php echo $row["$PersonnelAccount"] ?>"></td>
						<td><?php echo $num ?></td>
						<td><?php echo $row["PersonnelName"] ?></td>
                        <td><?php echo $row["PersonnelPhone"] ?></td>
                        <td><?php echo $row["PersonnelCetificate"] ?></td>
                        <td><?php echo $row["RoleName"]?></td>
						<td align='center'>
							<a class="btn btn-danger"   href="?page=per&ma=<?php echo $row['$PersonnelAccount']; ?>" onclick="return deleteConfirm()">
								Delete</a>
						</td>
						<td>
								<a class="btn btn-primary" href="?page=updateper&ma=<?php echo $row['$PersonnelAccount']; ?>">Update</a>
						</td>
						</tr>
						<?php
        $num++;
    }
    ?>
				</tbody>
			</table>
            
            <br>
			<div class="row" >
				<div class="col-md-12">
					<input type="submit" value="Delete Choice" name="btnDelete" id="btnDelete" onclick='return deleteConfirm()' class="btn btn-info"/>

				</div>
			</div>
		</form>

        </div>
    </div>
</div>