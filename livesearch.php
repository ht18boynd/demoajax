<?php
include ("db.php");
if (isset($_POST['input']))
{
	$input =$_POST['input'];
	$sql = "select * from customer where name like '{$input}%'or phone like '{$input}%' or email like '{$input}%' limit 3";
	$result = mysqli_query($link , $sql);
	if (mysqli_num_rows($result)>0)
    {
?> 
    <table>
        <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>

    </tr>
        </thead>
        <tbody>
<?php 
        while ($row =mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $name= $row['name'];
            $phone= $row ['phone'];
            $email=$row ['email'];
        
      ?>   
           
            <tr>
                <td><?php echo $id;?></td>
                <td>
                    <?php echo $name;?>
                </td>
                <td>
                    <?php echo $phone;?>
                </td>
                <td>
                    <?php echo $email;?>
                </td>
            </tr> 
            <?php 
        }
        ?>
        </tbody>
   
</table> 
  <?php
    }else{
        
        echo "<h6 class='text-danger text-center'>NoData</h6>";
    }
    
}

?>