<?php
$dbh = new PDO('mysql:host=localhost;dbname=inventory_module', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
		
		
        
        $stmt 	= $dbh->prepare("INSERT INTO `inv_warehosueinfo`(ware_hosue_id,name) VALUES(?,?)");
		
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$nm);
		
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been added</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to add data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else if($page=='update'){
    try{
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
		
        $stmt = $dbh->prepare("UPDATE inv_warehosueinfo SET name=? WHERE ware_hosue_id=?");
        $stmt->bindParam(1,$nm);
        $stmt->bindParam(2,$id);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been updated</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to update data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else if($page=='delete'){
    try{
        $id = $_POST['id'];
        $stmt = $dbh->prepare("DELETE FROM inv_warehosueinfo WHERE ware_hosue_id=?");
        $stmt->bindParam(1,$id);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been deleted</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to delete data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else{
    try{
        $stmt = $dbh->prepare("SELECT * FROM `inv_warehosueinfo` ORDER BY `ware_hosue_id` DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['ware_hosue_id']."</td>";
            print "<td>".$row['name']."</td>";
			
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['ware_hosue_id']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['ware_hosue_id'] ?>','<?php echo $row['name'] ?>')" class=''><i class="fa fa-edit text-success"></i></button>
            <button onclick="removeConfirm('<?php echo $row['ware_hosue_id'] ?>')" class=''><i class="fa fa-trash text-danger"></i></button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>