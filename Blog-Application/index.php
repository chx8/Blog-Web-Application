<?php include 'navi.php';       
?>
<style>
    body{
    background-image: url("https://i.pinimg.com/564x/43/33/4d/43334d66e9982f507ec52c0d5032413f.jpg");
    height: 100%;
    
    
</style>


<div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <div class="container-pic" style="float: right">
      <img src="../Blog-Application/img/wall3.jpg" style="width: 101%;"><br><br><br>
      <div class="centered">My Dashboard ❀ </div><br>
        </div>
         

    <?php
    $sql = "SELECT * FROM manage_posts";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $count = mysqli_num_rows($res); 
        if($count>0){
            while($rows=mysqli_fetch_assoc($res))
            {
              $id=$rows['id'];
              $title=$rows['title'];
              $date=$rows['date'];
              $description=$rows['description'];  ?>
      
  <div class="box">
            <h1><?php echo $title?></h1>
            <h3>Updated Date: <?php echo $date?></h3>
            <div class="box-desc">
                <p><?php echo nl2br ($description) ?>
                    
                </p></div>
            <a href="view_posts.php?id=<?php echo $id; ?>" class="btn-secondary">View this post</a>
  </div>    
<?php } } }?>
    
    <div class="footer" style='text-align: center'>Copyrights Reserved Blogging.Co 2021</div><br>
</div>
