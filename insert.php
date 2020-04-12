<?php
    $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
    $db = mysql_select_db("colleges", $connection); // Selecting Database from Server
    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $id = $_POST['ID'];
    $fname = $_POST['First Name'];
    $lname = $_POST['Last Name'];
    $email = $_POST['Email'];

    if($name !=''||$email !='')
        {
            //Insert Query of SQL
            $query = mysql_query("insert into students(id, first_name, last_name, email) values ('$id', '$fname', '$lname', '$email')");
            echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        }
    else
        {
            echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }
    }

    //To retrieve data in descending order of first_name

    $sql = "SELECT * FROM persons ORDER BY DESC first_name";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>first_name</th>";
                    echo "<th>last_name</th>";
                    echo "<th>email</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }

    mysql_close($connection); // Closing Connection with Server
?>