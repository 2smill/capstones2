<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugallon Dashboard</title>
    <link rel="icon" href="Capstone.png" type="image/png">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    
    
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/383808016_686358216456289_2202587373148100267_n.png?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGaemR7o-mCuPv1661ipvQQEO19i6Kx4RgQ7X2LorHhGHkYWnj81ysBXuKBEofeF0SCN04CR2In1aexMA_L3efl&_nc_ohc=mGW894o9VUkAX_l6FV6&_nc_ht=scontent.fcrk1-4.fna&oh=03_AdQ6m65kffbgJrhkETTQmA2Vn-V94vKveSKVeFKOk2zJDQ&oe=659F02F9" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name">Administrator</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="">
                        <a href="statistics.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Administrator</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu-links">
                    <li class="">
                        <a href="#POST">
                            <i class='bx bx-repost icon'></i>
                            <span class="text nav-text">Create Post</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu-links">
                    <li class="">
                        <a href="signupAdmin.html">
                            <i class='bx bxs-face icon'></i>
                            <span class="text nav-text">Create Admin</span>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">

        <div class="container">

            <h2 class="Job"><i class='bx bx-repost icon'></i> Create a Job Offer</h2>

        </div>

            <div class="container" id="POST">

                    <form id="postform" action="admin.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">

                            <label for="postTitle">Title:</label>

                            <input type="text" id="postTitle" placeholder="Title" name="title">

                        </div>

                        <div class="form-group">

                            <label for="companyName">Company Name:</label>

                            <input type="text" id="companyName" placeholder="Company name" name="companyname">

                        </div>

                        <div class="form-group">

                            <label for="dateAndTime">Date and Time:</label>

                            <input type="datetime-local" id="date" placeholder="Date" name="datetime">

                        </div>

                        <div class="form-group">

                            <label for="postText">Content:</label>

                            <textarea id="postText" placeholder="Content" name="content" required></textarea>

                        </div>

                        <div class="form-group">

                            <label for="requirements">Requirements:</label>

                            <textarea id="requirements" placeholder="Requirements" name="requirements" required></textarea>

                        </div>              

                    <div class="form-actions">

                        <button type="submit" class="btn btn-success" >Submit</button>

                    </div>

                </form> 
            </div>
        </div>
      
        </section>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        const body = document.querySelector('body');
        const sidebar = body.querySelector('nav');
        const toggle = body.querySelector(".toggle");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
        
        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });
        
    </script>
</body>
</html>
