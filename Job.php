<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugallon Dashboard</title>
    <link rel="icon" href="Capstone.png" type="image/png">
    <!-- External CSS files -->
    <link rel="stylesheet" href="Job.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php
    session_start();
    // Database connection
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        die("Database Connection Failed: " . mysqli_connect_error());
    }
    $query = "SELECT title, companyname, content, requirements, datetime FROM posts";
    $result = mysqli_query($db, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error($db));
    }
    ?>
    <!-- Sidebar -->
    <nav class="sidebar close">
        <header class="head">
            <div class="image-text">
                <span class="image">
                    <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/383808016_686358216456289_2202587373148100267_n.png?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGaemR7o-mCuPv1661ipvQQEO19i6Kx4RgQ7X2LorHhGHkYWnj81ysBXuKBEofeF0SCN04CR2In1aexMA_L3efl&_nc_ohc=mGW894o9VUkAX_l6FV6&_nc_ht=scontent.fcrk1-4.fna&oh=03_AdQ6m65kffbgJrhkETTQmA2Vn-V94vKveSKVeFKOk2zJDQ&oe=659F02F9" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name">Bugallon</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li>
                        <a href="home.html">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>
                    <li >
                        <a href="about.html">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">About us</span>
                        </a>
                    </li>
                    <li>
                        <a href="Job.php">
                            <i class='bx bx-briefcase icon'></i>
                            <span class="text nav-text">Jobs</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li>
                    <a href="index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="home">
        <header class="dual-logo-header">
            <div class="logo">
                <a href="https://www.facebook.com/onebugallon"></a>
                <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/383808016_686358216456289_2202587373148100267_n.png?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGaemR7o-mCuPv1661ipvQQEO19i6Kx4RgQ7X2LorHhGHkYWnj81ysBXuKBEofeF0SCN04CR2In1aexMA_L3efl&_nc_ohc=mGW894o9VUkAX_l6FV6&_nc_ht=scontent.fcrk1-4.fna&oh=03_AdQ6m65kffbgJrhkETTQmA2Vn-V94vKveSKVeFKOk2zJDQ&oe=659F02F9" alt="Logo 1">
            </div>
            <div class="recent-activity">
                <h4>Municipal Bulletin Board: Connecting Opportunities for Hiring and Growth</h4>
                <h2 class="activity-title">JOB HIRING!</h2>
            </div>
            <div class="logo">
                <a href="https://www.facebook.com/onebugallon"></a>
                <img src="https://new.pangasinan.gov.ph/wp-content/uploads/2023/06/bugallon-seal.png" alt="Logo 2">
            </div>
        </header>
        <div class="container mx-auto p-4">
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Search...">
    <div class="custom-dropdown">
    <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select City
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="home.html">Lingayen</a>
        <a class="dropdown-item" href="#">Aguilar</a>
        <a class="dropdown-item" href="#">Binmaley</a>
      </div>
    </div>
  </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <ul class="post-list">
                    <?php
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                        <li class="post">...
                            <h2 class="post-title"><?php echo $data['title']; ?></h2>
                            <p class="post-company">Company: <?php echo $data['companyname']; ?></p>
                            <p class="post-body"><?php echo $data['content']; ?></p>
                            <p class="post-reqs">Requirements: <br><?php echo $data['requirements']; ?></p>
                            <p class="post-date"><?php echo $data['datetime']; ?></p>
                            <div class="post-actions">
                                <button class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm" data-companyname="<?php echo $data['companyname']; ?>">Send Resume</button>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Submit Resume</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">

                    <form method="post" action="modal.php" enctype="multipart/form-data">
                    <div class="md-form mb-5">
                    <input type="text" id="orangeForm-username" name="name" class="form-control validate" placeholder="Fullname" >
                    </div>
                    <div class="md-form mb-5">
                        <input type="email" id="orangeForm-email" name="email" class="form-control validate" placeholder="Email" >
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" id="titlefield" name="job" class="form-control validate" placeholder="Company" required>
                    </div>
                    <div class="md-form mb-4">
                        <input type="file" id="pdf" name="resume" required><br><br>
                </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-blue-grey">Submit</button>
                    </div>
                </form>
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        // Use PHP to echo user data into JavaScript variables
        var username = "<?php echo $_SESSION['username']; ?>";
        var email = "<?php echo $_SESSION['email']; ?>";

        // Get the form elements by their IDs
        var usernameField = document.getElementById("orangeForm-username");
        var emailField = document.getElementById("orangeForm-email");

        // Set the values of the form fields with the retrieved data
        usernameField.value = username;
        emailField.value = email;
    </script>

<script>
    // Get a reference to the input field
    var companyInput = document.getElementById('titlefield');

    // Add an event listener to open the modal and set the company name
    $('#modalRegisterForm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var companyname = button.data('companyname'); // Get the companyname data from the button
        companyInput.value = companyname; // Set the value of the input field to the companyname
    });
</script>

    
    <script>
    function searchPosts() {
        var searchInput = document.getElementById("searchInput").value.toLowerCase();
        var postTitles = document.getElementsByClassName("post-title");

        for (var i = 0; i < postTitles.length; i++) {
            var title = postTitles[i].textContent.toLowerCase();
            var post = postTitles[i].closest(".post");

            if (searchInput === "" || title.includes(searchInput)) {
                post.style.display = "block"; // Show the post
            } else {
                post.style.display = "none"; // Hide the post
            }
        }
    }

    // Listen for input changes in the search bar
    document.getElementById("searchInput").addEventListener("input", searchPosts);
</script>


    <!-- Sidebar toggle script -->
    <script>
        const body = document.querySelector('body');
        const sidebar = body.querySelector('nav');
        const toggle = body.querySelector(".toggle");
        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

</body>
</html>
