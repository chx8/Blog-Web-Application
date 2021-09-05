<?php include 'navi.php' ?>

<style>
    body{
    background-image: url("https://i.pinimg.com/564x/43/33/4d/43334d66e9982f507ec52c0d5032413f.jpg");
    height: 100%;
    
</style>


<div style="margin-left:15%;padding:1px 16px;height:1000px; text-align: center">
    <div class="container-pic" style="float: right">
      <img src="../Blog-Application/img/wall3.jpg" style="width: 101%;"><br><br><br>
      <div class="centered">Add New Post ❀ </div><br>
        </div>

       <!--add posts form-->
       <form style="border:5px solid; width:80%; margin-left: 10%; margin-top: 40%; margin-bottom: 5%;"  method="POST" enctype="multipart/form-data">
            <table>
                <h3>Note: Fill in all the details </h3>
                <hr><br>
                <label for="title" style="margin-left:5%"><b> Title: </b></label>
                <input type="text" name="title" placeholder="Title of the post" required/><br>
                    
                <label for="description" style="margin-left:5%"><b>Description: </b></label>
                <pre><textarea rows="35" name="description" placeholder="Add description of your post" required /></textarea></pre><br>
              
                <input type="hidden" name="time_date" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly="readonly">
                
                <input type="submit" name="submit" value="Add New Posts  " class="btn-first"><br><br> 
                <a href="manage_posts.php" class="btn-secondary"></i>Cancel</a><br><br>              
                 </table>

       </form><br><br><br><br>
    
       <div class="footer">Copyrights Reserved Blogging.Co 2021</div><br>

        <?php
          if(isset($_POST['submit']))
             {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $date = $_POST['time_date'];
                
                $sql = "INSERT INTO manage_posts SET 
                    title = '$title',
                    description = '$description',
                    date = '$date'
                ";
                $res = mysqli_query($conn, $sql);
                if($res == true)
                {
                     echo '<script>alert("Successfully added new posts")</script>';
                   echo '<script>window.location="manage_posts.php"</script>';
                }
                else
                {
                   echo '<script>alert("Failed to add new posts")</script>';
                   echo '<script>window.location="manage_posts.php"</script>';
                }   
            }
      ?>
</div>
        