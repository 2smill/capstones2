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
                        <a href="#ADMIN">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Administrator</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu-links">
                    <li class="">
                        <a href="post.php">
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
 
        <div class="text" id="ADMIN">

        <div class="container">
            <h1>Welcome back, Admin<i class='bx bxs-check-shield' ></i></h1>
            <br>
            <p>These are people who have used and created their accounts for our website</p>

        </div>

    </div>
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Users
                        </div>
                        <div class="card-body">
                            <?php echo $userCount; ?>
                            <span class="badge bg-success">New Users</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Job offer
                        </div>
                        <div class="card-body">
                            <?php echo $jobCount; ?>
                            <span class="badge bg-success">New Job Offers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total received applicants
                        </div>
                        <div class="card-body">
                            <?php echo $applicantCount; ?>
                            <span class="badge bg-success">New Applicants</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    

        <div class="container">

            <h2 class="title-received">USER ACCOUNTS</h2>

            <div class="container table-responsive pt-3">

                <table class="table table-striped project-orders-table">

                <thead>

                    <tr>
                    <th class="m1-5">ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>CONTACT</th>
                    <th>BIRTHDATE</th>
                    <th>ACTION</th>
                    </tr>

                </thead>
                
                <tbody>
                    <tr>
                    <input type="text" id="userAccountSearch" placeholder="Search..."><br>
                    <?php
                    include 'account.php'; 
                    ?>
                    <td>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>

        </div>

        <div class="container">

        <h2 class="title-received">ADMIN ACCOUNTS</h2>

        <div class="container table-responsive pt-3">

            <table class="table table-striped project-orders-table">

            <thead>

                <tr>

                <th class="m1-5">ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>CONTACT</th>
                <th>BIRTHDATE</th>
                <th>ACTION</th>
                </tr>

            </thead>
            
            <tbody>
                <tr>
                <input type="text" id="userAdminSearch" placeholder="Search...">
                <?php
                include 'adminaccount.php'; 
                ?>
                </tr>
            </tbody>
            </table>
        </div>

        </div>


        <div class="container">

            <h2 class="title-received">Received Application</h2>

            <div class="container table-responsive pt-3">

                <table class="table table-striped project-orders-table">

                  <thead>

                    <tr>

                      <th class="m1-5">ID</th>
                      <th>FULLNAME</th>
                      <th>COMPANY & JOB OFFER</th>
                      <th>EMAIL</th>
                      <th>PDF</th>
                      <th>ACTION</th>
                    </tr>

                  </thead>
                  
                  <tbody>
                    <tr>
                    <input type="text" id="userResumeSearch" placeholder="Search...">
                    <?php
                    include 'display.php'; 
                    ?>
                    </tr>
                  </tbody>
                </table>
              </div>

        </div>

        <div class="container">

<h2 class="title-received">Job offer</h2>

<div class="container table-responsive pt-3">

    <table class="table table-striped project-orders-table">

      <thead>

        <tr>

          <th class="m1-5">ID</th>
          <th>TITLE</th>
          <th>COMPANY</th>
          <th>DATE & TIME</th>
          <th>REQUIREMENTS</th>
          <th>ACTION</th>
        </tr>

      </thead>
      
      <tbody>
        <tr>
        <input type="text" id="userPostSearch" placeholder="Search...">
        <?php
        include 'displayposts.php'; 
        ?>
        </tr>
      </tbody>
    </table>
  </div>

</div>

        
        </section>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("userAccountSearch").addEventListener("input", function() {
        const searchText = this.value.trim().toLowerCase();
        const rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            let found = false;
            const columns = row.querySelectorAll("td");

            columns.forEach(column => {
                const cellText = column.textContent.trim().toLowerCase();
                if (cellText.includes(searchText)) {
                    found = true;
                }
            });

            if (found) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("userAdminSearch").addEventListener("input", function() {
        const searchText = this.value.trim().toLowerCase();
        const rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            let found = false;
            const columns = row.querySelectorAll("td");

            columns.forEach(column => {
                const cellText = column.textContent.trim().toLowerCase();
                if (cellText.includes(searchText)) {
                    found = true;
                }
            });

            if (found) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("useResumeSearch").addEventListener("input", function() {
        const searchText = this.value.trim().toLowerCase();
        const rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            let found = false;
            const columns = row.querySelectorAll("td");

            columns.forEach(column => {
                const cellText = column.textContent.trim().toLowerCase();
                if (cellText.includes(searchText)) {
                    found = true;
                }
            });

            if (found) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
});
</script>


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


      
