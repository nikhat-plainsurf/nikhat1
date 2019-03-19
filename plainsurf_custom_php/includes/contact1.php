<center><table border="1">
        <tr>
            <th>fname</th> 
            <th>lname</th> 
            <th>email</th>
            <th>mobile</th>
            <th>message</th>
            
            <th>Action</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "123", "info");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT  fname, lname,email,mobile,message,id FROM contact";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
            
    <tr id="<?php echo $row['id'] ?>">

                <td><?php echo $row['fname'] ?></td>
                 <td><?php echo $row['lname'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                   <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['message'] ?></td>
                     
                     <td><button class="btn btn-danger btn-sm remove">Delete</button></td>

            </tr>
            <?php } }?>
           
       
    </table></center>





