<?php


include 'connect.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialSyllabus-scale=1.0">
    <title>Student Blog | Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="./index.php">
                <h2 class="logo"><Strong>BICTINFOO</Strong></h2>
            </a>

            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="index.php" class="list-link current">Home</a>
                    </li>
                    
                    
                    <li>
                        <label for="btn-2" class="show">Categories</label>
                        <a href="#">Categories</a>
                        <input type="checkbox" id="btn-2">
                        <ul>
                          <li>
                            <label for="btn-3" class="show">Subject</label>
                            <a href="#">Subject <span class="fa fa-plus"></span></a>
                            <input type="checkbox" id="btn-3"> 
                            <ul>
                        <?php
                        $result = $db->prepare("SELECT * FROM subject");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                        ?>
                              <li><a  href="subject.php?id=<?php echo $row['id']?>"><?php echo $row['s_name']?> </a></li>
                        <?php } ?>
                              
                            </ul>
                      </li> 

                          <li>
                            <label for="btn-3" class="show">Semester</label>
                            <a href="#">Semester <span class="fa fa-plus"></span></a>
                            <input type="checkbox" id="btn-3"> 
                            <ul>
                            <?php
                        $result = $db->prepare("SELECT * FROM semester");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                        ?>
                              <li><a  href="semester.php?id=<?php echo $row['id']?>"><?php echo $row['s_name']?> </a></li>
                        <?php } ?>
                              
                            </ul>
                          </li> 
                        </ul>





                      </li>


                      
                        

                      <li>
                        <label for="btn-2" class="show">Model Question</label>
                        <a href="model_question.php">Model Question</a>
                        </li>



                          <li>
                            <label for="btn-2" class="show">Notes</label>
                            <a href="notes.php">Notes</a>
                          </li>

                

                              <li>
                                <label for="btn-2" class="show">Project</label>
                                <a href="project.php">Project Example</a>
                              </li>

                              

                          <li>
                            <label for="btn-2" class="show">More</label>
                            <a href="#">More</a>
                            <input type="checkbox" id="btn-2">
                            <ul>
                              <li>
                                <label for="btn-3" class="show">1st sem</label>
                                <a href="presentation.php">Presentation <span class="fa fa-plus"></span></a>
                                <a href="syllabus.php">Syllabus<span class="fa fa-plus"></span></a>
                              </li> 
                              </ul>
                          </li>
                   
                   <!--- </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Model Question</a>
                    </li>-->


                    
     </ul>

     </div>

              <div class="list list-right">
                  <button class="btn place-items-center" id="theme-toggle-btn">
                      <i class="ri-sun-line sun-icon"></i>
                      <i class="ri-moon-line moon-icon"></i>
                  </button>

                  <button class="btn place-items-center" id="search-icon">
                      <i class="ri-search-line"></i>
                  </button>

                  <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                      <i class="ri-menu-3-line open-menu-icon"></i>
                      <i class="ri-close-line close-menu-icon"></i>
                  </button>

              </div>
            </div>

        </nav>
    </header>

     <!-- Search -->
     <div class="search-form-container container" id="search-form-container">

<div class="form-container-inner">

    <form action="" class="form">
        <input class="form-input" type="text" placeholder="What are you looking for?">
        <button class="btn form-btn" type="submit">
            <i class="ri-search-line"></i>
        </button>
    </form>
    <span class="form-note">Or press ESC to close.</span>

</div>

<button class="btn form-close-btn place-items-center" id="form-close-btn">
    <i class="ri-close-line"></i>
</button>

</div>