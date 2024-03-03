<?php include 'include/db.php';
$query = "SELECT * FROM `home`, `section_control`, `social_media`,`about` ";
// $query = "SELECT * FROM `section_control` ";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$user_data['title']?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script> -->
</head>
<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <?php
            if($user_data['home_section']){
                ?>
                <a href="#home" class="active">Home</a>
                <?php
            }
            if($user_data['about_section']){
                ?>
                <a href="#about">About</a>
                <?php
            }
            if($user_data['education_section']){
                ?>
                 <a href="#education">Education</a>
                <?php
            }
            if($user_data['experience_section']){
                ?>
                <a href="#experiences">Experiences</a>
                <?php
            }
            if($user_data['portfolio_section']){
                ?>
                <a href="#portfolio">Portfolio</a>
                <?php
            }
            if($user_data['contact_section']){
                ?>
                <a href="#contact">Contact</a>
                
                <?php
            }
            ?>
             <!-- <a href="http://localhost/Port6/admin2/" target="blank">Login</a> -->
            
            <!-- <a href="#about">About</a> -->
            <!-- <a href="#education">Education</a> -->
            <!-- <a href="#experiences">Experiences</a> -->
            <!-- <a href="#portfolio">Portfolio</a> -->
            <!-- <a href="#contact">Contact</a> -->
            
        </nav>




    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, This is me</h3>
            <h1><?=$user_data['title']?></h1>
            <h3>And I am a <span class="multiple-text"></span></h3>
            <p><?=$user_data['subtitle']?></p>

            <?php
            if($user_data['showicons']) {
                ?>
                 <div class="social-media">
                 <?php
                if($user_data['facebook']){
                    ?>
                    <a href="<?= $user_data['facebook']?>"><i class='bx bxl-facebook' ></i></a>
                    
                    <?php
                }
                ?>
                <?php
                if($user_data['instagram']){
                    ?>
                    <a href="<?= $user_data['instagram'] ?>"><i class='bx bxl-instagram'></i></a>
                    
                    
                    <?php
                }
                ?>
                
                <?php
                if($user_data['whatsapp']){
                    ?>
                     <a href="<?php echo $user_data['whatsapp']; ?>"><i class='bx bxl-whatsapp'></i></a>
                    
                    
                    <?php
                }
                ?>
                <?php
                if($user_data['messenger']){
                    ?>
                    <a href="<?= $user_data['messenger']?>"><i class='bx bxl-messenger' ></i></a>
                    
                    
                    <?php
                }
                ?>
                <?php
                if($user_data['github']){
                    ?>
                    <a href="<?= $user_data['github']?>" target="blank"><i class='bx bxl-github' ></i></a>
                    
                    
                    <?php
                }
                ?>

                <?php
                if($user_data['telegram']){
                    ?>
                    <a href="<?= $user_data['telegram']?>" target="blank"><i class='bx bxl-telegram' ></i></a>
                    
                    
                    <?php
                }
                ?>
            </div>
            <?php
            }
            ?>


           
            <a href="#about" class="btn">More About Me</a>
        </div>

        <div class="home-img">
            <img src="<?= $user_data['home_image']?>" alt="">
        </div>
    </section>


    <section class="about" id="about">
        <div class="about-img">
            <img src="<?= $user_data['about_image']?>" alt="">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3><?= $user_data['about_title']?></h3>
            <p><?= $user_data['about_subtitle']?></p>
        </div>
    </section>

    <!-- education -->


    <?php
            if($user_data['education_section']){
                ?>
                <section class="education" id="education">
        <h2 class="heading">My <span>Education</span></h2>

        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Higher Education</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2002 - 2005</div>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas cupiditate ad nulla sed molestias necessitatibus eveniet unde est eos nam doloremque obcaecati nisi porro sunt, delectus explicabo possimus fuga! Molestias.</p>

                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2002 - 2005</div>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas cupiditate ad nulla sed molestias necessitatibus eveniet unde est eos nam doloremque obcaecati nisi porro sunt, delectus explicabo possimus fuga! Molestias.</p>
                            
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2002 - 2005</div>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas cupiditate ad nulla sed molestias necessitatibus eveniet unde est eos nam doloremque obcaecati nisi porro sunt, delectus explicabo possimus fuga! Molestias.</p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="education-column">
                <h3 class="title">School Education</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2002 - 2005</div>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas cupiditate ad nulla sed molestias necessitatibus eveniet unde est eos nam doloremque obcaecati nisi porro sunt, delectus explicabo possimus fuga! Molestias.</p>

                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2002 - 2005</div>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas cupiditate ad nulla sed molestias necessitatibus eveniet unde est eos nam doloremque obcaecati nisi porro sunt, delectus explicabo possimus fuga! Molestias.</p>
                            
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2002 - 2005</div>
                            <h3>Master Degree - University</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas cupiditate ad nulla sed molestias necessitatibus eveniet unde est eos nam doloremque obcaecati nisi porro sunt, delectus explicabo possimus fuga! Molestias.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

                
                <?php
            }
            ?>

<?php
            if($user_data['experience_section']){
                ?>
                <section class="experiences" id="experiences">
        <h2 class="heading">My <span>Experiences</span></h2>

        <?php
        $experience = "SELECT * FROM `experience` ";
        $experience_result = mysqli_query($db,$experience);
        ?>


        <div class="experiences-container">
            <?php
            if($experience_result -> num_rows > 0){
                while($experience_data = $experience_result->fetch_assoc()){
                    ?>
                <div class="experiences-box">
                <i class='<?=$experience_data['ex_icon']?>'></i>
                <h3><?=$experience_data['ex_title']?></h3>
                <p><?=$experience_data['ex_text']?></p>
                <a href="<?=$experience_data['learn_btn']?> " class="btn" target="blank">Learn More</a>
                
                </div>
            <?php
                }
            }
            else{
                echo "No Experience Found";
            }
            ?>
            
            
        </div>
    </section>
                <?php
            }
            ?>

<?php
            if($user_data['portfolio_section']){
                ?>
                <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <?php
        $portfolio =  "SELECT * FROM `portfolio` "; 
        $portfolio_result = mysqli_query($db,$portfolio);
        ?>





        <div class="portfolio-container">
            <?php
            if($portfolio_result -> num_rows > 0){
                while($portfolio_data = $portfolio_result->fetch_assoc()){
                    ?>
                    <div class="portfolio-box">
                       <img src="<?=$portfolio_data['p_image']?>" alt="">
                       <div class="portfolio-layer">
                         <h4><?=$portfolio_data['p_name']?></h4>
                         <p><?=$portfolio_data['p_details']?></p>
                         <a href="#"><i class='bx bx-link-external'></i></a>
                       </div>
                    </div>

                    <?php
                }
            }
            else {
                echo "No Project Found";
            }
            ?>






            <!-- <div class="portfolio-box">
                <img src="How-to-create-a-book-order-form-in-WordPress-2-1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed facere fugit, tempora quas totam eligendi minima voluptates qui! Doloremque maiores necessitatibus iure assumenda tenetur. Vel in quod fugiat rem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="employee-travel-management-system-1024x536-1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>C++ Project</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed facere fugit, tempora quas totam eligendi minima voluptates qui! Doloremque maiores necessitatibus iure assumenda tenetur. Vel in quod fugiat rem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="online-bookshop-teens-use-app-for-buying-books-vector-39189660.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Android App</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed facere fugit, tempora quas totam eligendi minima voluptates qui! Doloremque maiores necessitatibus iure assumenda tenetur. Vel in quod fugiat rem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="learn_arduino_breadboard.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Peripheral Project</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed facere fugit, tempora quas totam eligendi minima voluptates qui! Doloremque maiores necessitatibus iure assumenda tenetur. Vel in quod fugiat rem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="fm=f_jpg.jpeg" alt="">
                <div class="portfolio-layer">
                    <h4>Database Project</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed facere fugit, tempora quas totam eligendi minima voluptates qui! Doloremque maiores necessitatibus iure assumenda tenetur. Vel in quod fugiat rem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images.jpeg" alt="">
                <div class="portfolio-layer">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed facere fugit, tempora quas totam eligendi minima voluptates qui! Doloremque maiores necessitatibus iure assumenda tenetur. Vel in quod fugiat rem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div> -->
        </div>
    </section>
                <?php
            }
            ?>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">

            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">

            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Avishek | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    
    <script src="script.js"></script>
    
</body>
</html>