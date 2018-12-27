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
    $EducationId = $_GET["ma"];
    mysqli_query($conn, "DELETE FROM `education` WHERE EducationId=$EducationId");
}
?>
<?php
if (isset($_POST['btnDelete']) && isset($_POST['checkbox'])) {
    for ($i = 0; $i < count($_POST['checkbox']); $i++) {
        $EducationId1 = $_POST['checkbox'][$i];
        mysqli_query($conn, "DELETE FROM `education` WHERE EducationId=$EducationId1");
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
	<form name="frmXoa" method="post" action="">
		<h1 class="text-center">Manage Education</h1>
		<p>
			<a  class="btn btn-default" href="?page=addEdu">
				<i class="fa fa-plus"></i>
			</a>

		</p>
		<table class="table-striped table-responsive table-bordered" id="myTable">
			<thead>
				<tr>
					<th><strong>Choice</strong></th>
					<th ><strong>No</strong></th>
					<th class="col-2"><strong>Education</strong></th>
                    <th class="col-4"><strong>Name</strong></th>
                    <th class="col-2"><strong>Details</strong></th>
					<th class="col-2"><strong>Delete</strong></th>
					<th class="col-2"><strong>Update</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php 
    $num = 1;
    $result = mysqli_query($conn, "SELECT * FROM `education`");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
					<tr>
						<td><input name="checkbox[]" type="checkbox" id="checkbox[]"  class="form-control" value="<?php echo $row["GradeId"] ?>"></td>
						<td><?php echo $num ?></td>
						<td><?php echo $row["EducationId"] ?></td>
                        <td><?php echo $row["EducationName"] ?></td>
                        <td><?php echo $row["EducationDetails"] ?></td>
						<td align='center'>
							<a class="btn btn-default"   href="?page=education&ma=<?php echo $row['EducationId']; ?>" onclick="return deleteConfirm()">
								<i class="fa fa-remove"></i></a>
							</td>
							<td>
								<a class="btn btn-default" href="?page=educationUpdate&ma=<?php echo $row['EducationId']; ?>"><i class="fa fa-share"></i></a>
							</td>
						</tr>
						<?php
        $num++;
    }
    ?>
				</tbody>
			</table>
            
            <br>
			<div class="row" ><!--Nút chức nang-->
				<div class="col-md-12">
					<input type="submit" value="Delete Choice" name="btnDelete" id="btnDelete" onclick='return deleteConfirm()' class="btn btn-info"/>

				</div>
			</div>
		</form>

        </div>
    </div>
</div>