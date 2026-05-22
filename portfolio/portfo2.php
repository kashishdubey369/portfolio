<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Kashish Dubey — Portfolio</title>
    <meta name="description" content="BSc CS student building web apps. GitHub: YOUR_GITHUB" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="margin:0; font-family:Arial, sans-serif; background-color: rgb(0, 0, 25);">
    <!-- Navbar -->
    <!-- background:linear-gradient(to right,#d16ba5,#86a8e7,#5ffbf1); -->
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(2, 2, 51); padding:15px 0;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo fw-bold text-white">MyPortfolio</div>
            <ul class="d-flex list-unstyled mb-0">
                <li class="mx-3"><a href="#home" class="nav-link" style="color:white; font-weight:500;">Home</a></li>
                <li class="mx-3"><a href="#about" class="nav-link" style="color:white; font-weight:500;">About</a></li>
                <li class="mx-3"><a href="#projects" class="nav-link" style="color:white; font-weight:500;">Projects</a>
                </li>
                <li class="mx-3"><a href="#skills" class="nav-link" style="color:white; font-weight:500;">Skills</a>
                </li>
                <li class="mx-3"><a href="#contact" class="nav-link" style="color:white; font-weight:500;">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <!-- background:linear-gradient(to right,#ff9a9e,#fad0c4); color:#222; -->
    <section id="home" class="d-flex align-items-center justify-content-center text-center"
        style="height:100vh; background-color: rgb(0, 0, 25); color:white;">
        <div class="container">
            <h1 class="fw-bold display-4" style="color:#fff; text-shadow:2px 2px 8px rgba(0,0,0,0.4);">Hi, I'm Kashish
                Dubey</h1>
            <p class="lead mt-3">I may be in the learning stage, but I’m highly adaptable and motivated to grow into a
                top‑tier developer.</p>
            <p class="mt-2">Aspiring frontend developer learning to build responsive websites and exploring creative
                design.</p>
            <div class="mt-4">
                <a href="#projects" class="btn me-2"
                    style="background:#fee6f8; color:#222; border-radius:30px; padding:10px 25px; font-weight:600;">View
                    My Work</a>
                <a href="#contact" class="btn btn-outline-light btn-lg">Hire Me</a>
            </div>
        </div>
    </section>

    <hr style="border: 0; background-color: #7770f5; height: 1px; margin: 40px auto; width: 80%;">

    <!-- About Section -->
    <!-- style="background:linear-gradient(to right,#a18cd1,#fbc2eb); color:#222; padding:80px 0;" -->
    <section id="about" style="background-color: rgb(0, 0, 25); color:white; padding:80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="image/girl.jpg" alt="Profile Photo" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-7">
                    <h2 class="fw-bold mb-3 text-danger" style="color:#fff;">Discover</h2>
                    <h3 class="fw-bold mb-4" style="color:#fff;">About Me</h3>
                    <p class="lead">
                        My name is Kashish Dubey. I’m an aspiring Web Developer from India, currently sharpening my
                        skills in frontend and exploring MERN/MEAN stacks.
                        Though I’m in the learning stage, I bring adaptability, creativity, and a growth mindset.
                        My vision is to transform this journey into expertise and stand among the top developers who
                        create impactful digital experiences.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p><strong>Name:</strong> Kashish Dubey</p>
                            <p><strong>Age:</strong> 20</p>
                            <p><strong>Phone:</strong> 8433518094 </p>
                            <p><strong>Address:</strong> Dombivli, India</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Experience:</strong> Frasher</p>
                            <p><strong>Freelance:</strong> Available</p>
                            <p><strong>GitHub:</strong><a style="text-decoration: none;  color: #000;"
                                    href="https://github.com/kashishdubey369" target="_blank"> github.com/yourusername
                            </p>
                            <p><strong>LinkedIn:</strong><a style="text-decoration: none;  color: #000;"
                                    href="https://www.linkedin.com/in/kashishdubey369" target="_blank">
                                    linkedin.com/in/yourprofile</p>
                        </div>
                    </div>
                    <a href="resume2.pdf" download="" class="btn btn-danger mt-4" target="_blank">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <hr style="border: 0; background-color: #7770f5; height: 1px; margin: 40px auto; width: 80%;">

    <!-- Projects Section -->
    <!-- style="background:linear-gradient(to right,#fbc2eb,#a6c1ee); color:#222; padding:80px 0;" -->
    <section id="projects" style="background-color: rgb(0, 0, 25); color:white; padding:80px 0;">
        <div class="container">
            <h2 class="fw-bold text-center mb-5 text-danger">Projects</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100" style="border-radius:12px; transition:transform 0.3s ease;">
                        <img src="image/ecom.jpg" class="card-img-top" alt="E-commerce Project">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Website</h5>
                            <p class="card-text">Technologies: HTML5, CSS3, JavaScript, php, Bootstrap</p>
                            <a href="https://github.com/kashishdubey369/Ecommerce"
                                class="btn btn-outline-danger btn-sm">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other projects -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100" style="border-radius:12px; transition:transform 0.3s ease;">
                        <img src="image/note.jpg" class="card-img-top" alt="E-commerce Project">
                        <div class="card-body">
                            <h5 class="card-title">Note Taking Website</h5>
                            <p class="card-text">Technologies: HTML5, CSS3, JavaScript </p>
                            <a href="https://github.com/kashishdubey369/Note_app"
                                class="btn btn-outline-danger btn-sm">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100" style="border-radius:12px; transition:transform 0.3s ease;">
                        <img src="image/school.jpg" class="card-img-top" alt="E-commerce Project">
                        <div class="card-body">
                            <h5 class="card-title">School Website</h5>
                            <p class="card-text">Technologies: HTML5, CSS3, JavaScript, MongoDB, Angular, Nodejs </p>
                            <a href="https://github.com/kashishdubey369/School_site"
                                class="btn btn-outline-danger btn-sm">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100" style="border-radius:12px; transition:transform 0.3s ease;">
                        <img src="image/prompt.jpg" class="card-img-top" alt="E-commerce Project">
                        <div class="card-body">
                            <h5 class="card-title">AI_Prompt Website</h5>
                            <p class="card-text">Technologies: HTML5, CSS3, PHP </p>
                            <a href="https://github.com/kashishdubey369/AI_Prompts"
                                class="btn btn-outline-danger btn-sm">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr style="border: 0; background-color: #7770f5; height: 1px; margin: 40px auto; width: 80%;">

    <!-- Skills Section -->
    <!-- style="background:linear-gradient(to right,#ffecd2,#fcb69f); color:#222; padding:80px 0;" -->
    <section id="skills" style="background-color: rgb(0, 0, 25); color:white; padding:80px 0;">
        <div class="container">
            <h2 class="fw-bold text-center mb-5 text-danger">Skills</h2>
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <h5>HTML / CSS</h5>
                    <div class="progress mb-4"
                        style="height:25px; border-radius:50px; overflow:hidden; background:#eee;">
                        <div class="progress-bar" role="progressbar"
                            style="width:95%; background:linear-gradient(to right,#ff6ec4,#7873f5); border-radius:50px;">
                            95%</div>
                    </div>

                    <h5>JavaScript</h5>
                    <div class="progress mb-4"
                        style="height:25px; border-radius:50px; overflow:hidden; background:#eee;">
                        <div class="progress-bar" role="progressbar"
                            style="width:50%; background:linear-gradient(to right,#ff6ec4,#7873f5); border-radius:50px;">
                            50%</div>
                    </div>

                    <h5>Bootstrap</h5>
                    <div class="progress mb-4"
                        style="height:25px; border-radius:70px; overflow:hidden; background:#eee;">
                        <div class="progress-bar" role="progressbar"
                            style="width:95%; background:linear-gradient(to right,#ff6ec4,#7873f5); border-radius:50px;">
                            70%</div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <h5>Node.js / Express</h5>
                    <div class="progress mb-4"
                        style="height:25px; border-radius:50px; overflow:hidden; background:#eee;">
                        <div class="progress-bar" role="progressbar"
                            style="width:40%; background:linear-gradient(to right,#ff6ec4,#7873f5); border-radius:50px;">
                            40%</div>
                    </div>

                    <h5>PHP</h5>
                    <div class="progress mb-4"
                        style="height:25px; border-radius:50px; overflow:hidden; background:#eee;">
                        <div class="progress-bar" role="progressbar"
                            style="width:75%; background:linear-gradient(to right,#ff6ec4,#7873f5); border-radius:50px;">
                            75%</div>
                    </div>

                    <h5>Angular</h5>
                    <div class="progress mb-4"
                        style="height:25px; border-radius:50px; overflow:hidden; background:#eee;">
                        <div class="progress-bar" role="progressbar"
                            style="width:35%; background:linear-gradient(to right,#ff6ec4,#7873f5); border-radius:50px;">
                            35%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr style="border: 0; background-color: #7770f5; height: 1px; margin: 40px auto; width: 80%;">

    <!-- Contact Section -->
    <!-- style="background:linear-gradient(to right,#43cea2,#185a9d); color:#fff; padding:80px 0;" -->
    <section id="contact" style="background-color: rgb(0, 0, 25); color:#fff; padding:80px 0;">
        <div class="container">
            <h2 class="fw-bold text-center mb-4 text-danger">Contact Me</h2>
            <form action="userinfo2.php" method="post" class="mx-auto" style="max-width:600px;">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" name="name" type="text" class="form-control"
                        style="border-radius:8px; border:none; box-shadow:0 2px 6px rgba(0,0,0,0.2);" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control"
                        style="border-radius:8px; border:none; box-shadow:0 2px 6px rgba(0,0,0,0.2);" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" rows="5" class="form-control"
                        style="border-radius:8px; border:none; box-shadow:0 2px 6px rgba(0,0,0,0.2);"
                        required></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-lg" type="submit"
                        style="background:#ff6ec4; border:none; border-radius:30px; padding:10px 30px;">Send
                        Message</button>
                </div>
            </form>
        </div>