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
      <div class="centered">View Post ❀ </div><br>
        </div>

            <table>
                <div class="box-2">
            <h1><?php echo $title?></h1>
            <h3>ULast pdated Date: <?php echo $date?></h3>
            <div class="box-desc">
                <p><?php echo nl2br ($description) ?>
                    
                </p></div>
            <a href="index.php" class="btn-secondary"></i>Back</a><br><br></div>             
                 </table>


<div class="footer">Copyrights Reserved Blogging.Co 2021</div><br>
</div>