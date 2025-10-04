<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persobal Web - <?php echo "Dhifulloh Dhiya Ulhaq"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nama = "Dhifulloh Dhiya Ulhaq";
        $nim = "1202220139";
        $fakultas = "Fakultas Rekayasa Industri";
        $prodi = "S1 Sistem Informasi";
        $about = "My journey includes being part of Bangkit Academy 2024 (Machine Learning cohort by Google, GoTo, and Traveloka), participating in the Google Developer Student Club, and contributing to the Data Research Division at Central Computer Improvement Telkom University. I am also a member of the Enterprise Data Management (EDM) Laboratory Study Group, where I focus on learning and developing projects in data science. In addition, I gained hands-on industry experience as a Data Protection Intern at Telkom Indonesia, where I built an AI agent–based chatbot prototype using RAG, prompt engineering, and workflow automation on n8n. These experiences have equipped me with practical skills in AI model development, deep learning, and data-driven solutions, while reinforcing my commitment to leveraging technology to create real-world impact for businesses and society.";
    ?>

    <div class="container">
        <div class="profile">
            <img src="img/profile_photo.png" alt="profile_picture" class="photo">
            <h1><?php echo $nama; ?></h1>
            <p><?php echo "$nim | $fakultas | $prodi"; ?></p>
        </div>

    <div class="about">
        <h2>About</h2>
        <p><?php echo $about; ?></p>
    </div>

    <div class="socmed">
        <a href="https://github.com/ulhaqdhifulloh" target="_blank">
            <img src="img/github.png" alt="github">
        </a>
        <a href="https://instagram.com/ulhaq25_" target="_blank">
            <img src="img/instagram.webp" alt="instagram">
        </a>
        <a href="https://linkedin.com/in/ulhaqdhifulloh">
            <img src="img/linkedin.png" alt="">
        </a>
    </div>

    <footer>
        <p><?php echo "©" . date("Y") . " Dhifulloh Dhiya Ulhaq. All Rights Reserved." ?></p>
    </footer>
    </div>
</body>
</html>
