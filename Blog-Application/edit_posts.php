<?php include 'navi.php';
if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM manage_posts WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);

       $title=$row['title'];
       $date=$row['date'];
       $description=$row['description'];
    }
    else
    {
        header('location:manage_posts.php');
    }
 ?>
<style>
    body{
    background-image: url("https://i.pinimg.com/564x/43/33/4d/43334d66e9982f507ec52c0d5032413f.jpg");
    height: 100%;
    
    
</style>


<div style="margin-left:15%;padding:1px 16px;height:1000px;text-align: center">
    <div class="container-pic" style="float: right">
      <img src="../Blog-Application/img/wall3.jpg" style="width: 101%;"><br><br><br>
      <div class="centered">Add New Posts ❀ </div><br>
        </div>




<form style="border:5px solid; width:80%; margin-left: 10%; margin-top: 40%; margin-bottom: 5%"  method="POST" enctype="multipart/form-data">
            <table>
                <b><h3>Last updated date : <?php echo $date ?> </h3></b>
                <hr><br>
                <label style="margin-left:5%" for="title"><b> Title: </b></label><br>
                <input type="text" name="title" value="<?php echo $title ?>"><br>
                  
                <label style="margin-left:5%" for="description"><b>Description: </b></label><br>
                <textarea rows="35" name="description"><?php echo $description ?></textarea><br>
              
                <input type="hidden" name="time_date" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly="readonly">
             
                <input type="submit" name="submit" value="Update This Post" class="btn-first"><br><br>
                <a href="manage_posts.php" class="btn-secondary"></i>Cancel</a><br><br>              
                 </table>

       </form><br><br><br><br>

<?php if(isset($_POST['submit']))
            {
                $title2 = $_POST['title'];
                $description2 = $_POST['description'];
                $date2= $_POST['time_date'];
                
                $sql2 = "UPDATE manage_posts SET 
                    title = '$title2',
                    description = '$description2',
                    date = '$date2'
                    WHERE id='$id'";
                $res2 = mysqli_query($conn, $sql2);
                if($res2==true)
                {
                   echo '<script>alert("Posts has been updated succesfully")</script>';
                   echo '<script>window.location="manage_posts.php"</script>';
                }
                else
                {
                   echo '<script>alert("Failed to update posts. Please try again later")</script>';
                   echo '<script>window.location="edit_posts.php"</script>';
                }              
            }          
?>
         <div class="footer">Copyrights Reserved Blogging.Co 2021</div><br>
</div>
