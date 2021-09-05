<?php (include"connection.php");
  
      $id = $_GET['id'];
      $sql = "DELETE FROM manage_posts WHERE id=$id";
      $res= mysqli_query($conn,$sql);
      
      if($res==true)
      {
      echo '<script>alert("The following post has been deleted")</script>';
      echo '<script>window.location="manage_posts.php"</script>';
    }
    else
    {
        echo '<script>alert("Error to delete the following posts. Please try again")</script>';
        echo '<script>window.location="manage_posts.php"</script>';
    }
