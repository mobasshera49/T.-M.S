<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","registration");
    
    // mysql search query
    $query = "SELECT `id`, `username`, `email` FROM `users` WHERE `id` = $id";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($id) > 1)
    {
      while ($row = mysqli_fetch_array($id))
      {
        $id = $row['id'];
        $username= $row['username'];
        $email = $row['email'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            
            $username = "";
            $email = "";
    }
    
    
    mysqli_free_result($id);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $username = "";
    $email = "";
}
?>