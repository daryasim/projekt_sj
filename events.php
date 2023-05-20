<?php
include 'includes/connection.php';
?>


<section id="program" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
                <div class="section-title">
                    <h2>Our Programs</h2>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>

            <div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                   
                </ul>
                <!-- tab panes -->
                <div class="tab-content">

                    <!-- 1st day -->

                    <div role="tabpanel" class="tab-pane active" id="fday">
                        <?php
                        $sql = "Select * from firstday";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $time = $row['time'];
                                $room = $row['room'];
                                $title = $row['title'];
                                $byname = $row['byname'];
                                $description = $row['description'];
                                $picture = $row['picture'];
                                echo ' 
                                    <div class="col-md-2 col-sm-2">';
                        ?>
                                <img src="<?php echo 'images/' . $picture; ?>" class="img-responsive" . />
                        <?php echo '</div>
                        <div class="col-md-10 col-sm-10"></div>
                       

                            <h6>
                                <span><i class="fa fa-clock-o"></i>' . $time . '</span>
                                <span><i class="fa fa-map-marker"></i>' . $room . '</span>
                            </h6>
                            <h3>' . $title . '</h3>
                            <h4>' . $byname . '</h4>
                            <p>' . $description . '</p>
                            </div>

                    
                            <div class="program-divider col-md-12 col-sm-12"></div>';
                            }
                        }
                        ?>
                    
                </div>

            </div>
        </div>

    </div>
    </div>
</section>