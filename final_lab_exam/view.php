<?php
 $conn = mysqli_connect('127.0.0.1', 'root', '', 'employee');
 $sql = "SELECT * FROM employee_registration";
 $result = $conn->query($sql);
 
 
 
 
 
 if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Contact Number</th>
                <th>Username</th>
                <th>Password</th>
                
                
            </tr>";

  
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["employee_ID"] . "</td>
                <td>" . $row["employee_name"] . "</td>
                <td>" . $row["contact_no"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["password"] . "</td>
                
              </tr>
              <tr> <a href='update.php'><button>Update</button></a>
    <a href='delete.php'><button>Delete</button></a>
              </tr>";
              
    }
 
   
    
    
    echo "</table>";
} else {
    echo "No results found.";
}

?>

