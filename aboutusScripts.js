// aboutusScripts.js

function changeContent(contentType) {
  // Get the content div
  var contentDiv = document.getElementById("aboutUscontent");

  // Clear previous content
  contentDiv.innerHTML = "";

  // Dynamically update content based on the button pressed
  if (contentType === "Introduction") {
    contentDiv.innerHTML = `
      <div class="container">
        <div class="contentText" role="alert">
          <h1 class="aboutUs-titles"><b>Welcome to Bugallon Municipal Bulletin Board</b></h1>
          <p>
            At Bugallon Municipal Bulletin Board, we strive to be the bridge between talented individuals and companies seeking skilled professionals. Our platform is designed to foster connections, simplify the hiring process, and empower businesses to find the right talent.
          </p>
          <p>
            Whether you are a job seeker exploring new opportunities or a company looking to expand your team, Bugallon Municipal Bulletin Board is here to make the journey seamless. Join us in creating a vibrant community where careers flourish and businesses thrive.
          </p>
        </div>
      </div>
    `;
  } else if (contentType === "Future Goals") {
    contentDiv.innerHTML = `
      <div class="container">
        <div class="" role="alert">
          <h1 class="aboutUs-titles">Our Future Goals</h1>
          <p>
            Bugallon Municipal Bulletin Board is committed to shaping the future of employment by providing innovative solutions for job seekers and employers. Our key goals include:
          </p>
          <ol>
            <li>
              <strong class="aboutUs-inner-titles">Facilitating Job Discovery:</strong> We aim to enhance the job-seeking experience by offering a user-friendly platform that enables individuals to discover relevant job opportunities quickly and efficiently.
            </li>
            <li>
              <strong class="aboutUs-inner-titles">Streamlining the Hiring Process:</strong> For businesses, we aspire to streamline the hiring process, making it easier for companies to connect with qualified candidates and build successful teams.
            </li>
            <li>
              <strong class="aboutUs-inner-titles">Promoting Inclusivity:</strong> Bugallon Municipal Bulletin Board is dedicated to fostering diversity and inclusivity in the workforce. We actively promote opportunities for individuals from various backgrounds and experiences.
            </li>
            <li>
              <strong class="aboutUs-inner-titles">Continuous Innovation:</strong> To stay at the forefront of the job market, we are committed to continuous innovation. We aim to integrate new technologies and features that enhance the overall experience for both job seekers and employers.
            </li>
          </ol>
          <p>
            Join us on our journey to create a dynamic and thriving job ecosystem. Bugallon Municipal Bulletin Board is more than a platform; it's a commitment to the future of employment.
          </p>
        </div>
      </div>
    `;
  } else if (contentType === "Team Members") {
    contentDiv.innerHTML = `
      <div class="container">
      <h1 class="aboutUs-titles"><b>Team Members</b></h1>
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <img src="/assets/pfp.jpg" class="card-img-top" alt="Sherwin Lopez">
              <div class="card-body">
                <p class="card-text memberName">Sherwin Lopez</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <img src="/assets/pfp.jpg" class="card-img-top" alt="Charles Cabo">
              <div class="card-body">
                <p class="card-text memberName">Charles Cabo</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <img src="/assets/pfp.jpg" class="card-img-top" alt="Joey Torio">
              <div class="card-body">
                <p class="card-text memberName">Joey Torio</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <img src="/assets/pfp.jpg" class="card-img-top" alt="Ashly Aficial">
              <div class="card-body memberName">
                <p class="card-text">Ashly Aficial</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    `;
  }
}
