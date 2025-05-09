<?php
include 'header.php';
// Fetch about data
$page = $_GET['page'];
$query = "SELECT * FROM `pages` WHERE slug = '$page'";
$select_about = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($select_about);
?>

<section class='gym-content-container about' id="about">
    <div class="gym-section-title">
        <p class="gym-underline"><?php echo htmlspecialchars($page_data['content']); ?></p>
    </div>

    <div class="gym-about-section">
        <div class="gym-container">
            <div class="gym-row">

                <!-- Gym Image Column -->
                <div class="gym-img-col">
                    <img src="uploads/<?php echo htmlspecialchars($data['image']); ?>" alt="Fitness Training" class="gym-main-img">
                    <!-- <div class="gym-badge">🏆 <?php echo htmlspecialchars($data['badge_text']); ?></div> -->
                </div>

                <!-- Content Column -->
                <div class="gym-content-col">
                    <h3 class="gym-experience-title">
                        <span class="gym-highlight"><?php echo htmlspecialchars($data['highlight_years']); ?></span> of Fitness Excellence
                    </h3>

                    <p class="gym-description">
                        <?php echo nl2br(htmlspecialchars($data['description'])); ?>
                    </p>

                    <div class="gym-features">
                        <!-- Feature 1 -->
                        <div class="gym-feature-box">
                            <div class="gym-icon"><?php echo htmlspecialchars($data['feature1_icon']); ?></div>
                            <div>
                                <h4 class="gym-feature-title"><?php echo htmlspecialchars($data['feature1_title']); ?></h4>
                                <p class="gym-feature-desc"><?php echo htmlspecialchars($data['feature1_desc']); ?></p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="gym-feature-box">
                            <div class="gym-icon"><?php echo htmlspecialchars($data['feature2_icon']); ?></div>
                            <div>
                                <h4 class="gym-feature-title"><?php echo htmlspecialchars($data['feature2_title']); ?></h4>
                                <p class="gym-feature-desc"><?php echo htmlspecialchars($data['feature2_desc']); ?></p>
                            </div>
                        </div>
                    </div>

                    <a href="membership.php" class="gym-cta-btn">VIEW MEMBERSHIP PLANS →</a>
                </div>
            </div>
        </div>
</section>