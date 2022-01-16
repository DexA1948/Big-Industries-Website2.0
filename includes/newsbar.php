<?php
include($dbConnection_p);
?>

<div class="container-fluid w-75 bg-dark">
<div id="newsbar" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#newsbar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#newsbar" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#newsbar" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#newsbar" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="<?php echo $BIGlogo_jpg; ?>" class="d-block mx-auto" alt="BIG Industries logo" style="height: 300px;">
      <div class="carousel-caption" style="background-color: #AB4F9A;">
        <h5>Big Industries</h5>
        <p>Read Our Blogs and Posts<br><a class="btn btn-light my-2" href="blogs.php">Here</a></p>
      </div>
    </div>

    <?php
    $news_query = "SELECT title, summary, photopath FROM `post_table` ORDER BY id DESC LIMIT 3";
    $result = $conn->query($news_query);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="carousel-item">
          <img src="<?php 
          if ($row['photopath'] !== ""){
            echo $row['photopath'];
            }else{
              echo $newsbar_photos[rand(0, 3)];
            }?>" class="d-block mx-auto" alt="..." style="height: 300px;">
          <div class="carousel-caption d-none d-md-block" style="background-color: #AB4F9A;">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['summary']; ?></p>
          </div>
        </div>
    <?php
      }
    }
    $conn->close();
    ?>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#newsbar" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#newsbar" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>