<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;

class HTMLFormat implements ProfileFormatter
{
    private $response;

    public function setData($profile)
    {
        $output = "<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset=\"utf-8\" />
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
		<link rel=\"stylesheet\" href=\"/assets/css/main.css\" />
		<noscript><link rel=\"stylesheet\" href=\"/assets/css/noscript.css\" /></noscript>
	</head>
	<body class=\"is-preload\">

		<!-- Wrapper -->
			<div id=\"wrapper\" class=\"divided\">

				<!-- Banner -->
					<section class=\"banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right\">
						<div class=\"content\">
							<h1>The Founder</h1>
							<p class=\"major\">".$profile->getFullName()."</p>
							<p>".$profile->getParagraph1()."</p>
						</div>
						<div class=\"image\">
							<img src=\"/assets/bya.jpg\" alt=\"\" />
						</div>
					</section>

				<!-- Spotlight -->
					<section class=\"spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in\" id=\"first\">
						<div class=\"content\">
							<h2>Inspiration</h2>
							<p>".$profile->getParagraph2()."</p>
						</div>
						<div class=\"image\">
							<img src=\"/assets/EC.jpg\" alt=\"\" />
						</div>
					</section>

				<!-- Spotlight -->
					<section class=\"spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Pursuing Education in CEU</h2>
							<p>".$profile->getParagraph3()."</p>
						</div>
						<div class=\"image\">
							<img src=\"/assets/CEU.jpg\" alt=\"\" />
						</div>
					</section>

				<!-- Spotlight -->
					<section class=\"spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Family Support</h2>
							<p>".$profile->getParagraph4()."</p>
						</div>
						<div class=\"image\">
							<img src=\"/assets/AUFNOW.jpg\" alt=\"\" />
						</div>
					</section>

                <!-- Spotlight -->
					<section class=\"spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>The Location</h2>
							<p>".$profile->getParagraph5()."</p>
						</div>
						<div class=\"image\">
							<img src=\"\" alt=\"\" />
						</div>
					</section>

                <!-- Spotlight -->
					<section class=\"spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Meeting more Colleagues</h2>
							<p>".$profile->getParagraph6()."</p>
						</div>
						<div class=\"image\">
							<img src=\"\" alt=\"\" />
						</div>
					</section>

                <!-- Spotlight -->
					<section class=\"spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Challenges and Betrayals</h2>
							<p>".$profile->getParagraph7()."</p>
						</div>
						<div class=\"image\">
							<img src=\"\" alt=\"\" />
						</div>
					</section>

                <!-- Spotlight -->
					<section class=\"spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Angeles Institute of Technology</h2>
							<p>".$profile->getParagraph8()."</p>
						</div>
						<div class=\"image\">
							<img src=\"\" alt=\"\" />
						</div>
					</section>

                <!-- Spotlight -->
					<section class=\"spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Reaching Out</h2>
							<p>".$profile->getParagraph9()."</p>
						</div>
						<div class=\"image\">
							<img src=\"\" alt=\"\" />
						</div>
					</section>

                <!-- Spotlight -->
					<section class=\"spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in\">
						<div class=\"content\">
							<h2>Dauntless</h2>
							<p>".$profile->getParagraph10()."</p>
						</div>
						<div class=\"image\">
							<img src=\"\" alt=\"\" />
						</div>
					</section>

				<!-- Footer -->
					<footer class=\"wrapper style1 align-center\">
						<div class=\"inner\">
							<ul class=\"icons\">
								<li><a href=\"#\" class=\"icon brands style2 fa-twitter\"><span class=\"label\">Twitter</span></a></li>
								<li><a href=\"#\" class=\"icon brands style2 fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
								<li><a href=\"#\" class=\"icon brands style2 fa-instagram\"><span class=\"label\">Instagram</span></a></li>
								<li><a href=\"#\" class=\"icon brands style2 fa-linkedin\"><span class=\"label\">LinkedIn</span></a></li>
								<li><a href=\"#\" class=\"icon style2 fa-envelope\"><span class=\"label\">Email</span></a></li>
							</ul>
							<p>&copy; Untitled. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src=\"/assets/js/jquery.min.js\"></script>
			<script src=\"/assets/js/jquery.scrollex.min.js\"></script>
			<script src=\"/assets/js/jquery.scrolly.min.js\"></script>
			<script src=\"/assets/js/browser.min.js\"></script>
			<script src=\"/assets/js/breakpoints.min.js\"></script>
			<script src=\"/assets/js/util.js\"></script>
			<script src=\"/assets/js/main.js\"></script>

		<!-- Note: Only needed for demo purposes. Delete for production sites. -->
			<script src=\"/assets/js/demo.js\"></script>

	</body>
</html>
";
        // $output = "<h1>Profile of " . $profile->getFullName() . "</h1>";
        // $output .= "<p>Email: " . $profile->getContactDetails()['email'] . "</p>";
        // $output .= "<p>Phone: " . $profile->getContactDetails()['phone_number'] . "</p>";
        // $output .= "<h2>Education</h2>";
        // $output .= "<p>" . $profile->getEducation()['degree'] . " at " . $profile->getEducation()['university'] . "</p>";
        // $output .= "<h2>Skills</h2>";
        // $output .= "<p>" . implode(", ", $profile->getSkills()) . "</p>";
        // $output .= "<h2>Experience</h2><ul>";

        // foreach ($profile->getExperience() as $job) {
        //     $output .= "<li>" . $job['job_title'] . " at " . $job['company'] . " (" . $job['start_date'] . " to " . $job['end_date'] . ")</li>";
        // }

        // $output .= "</ul>";
        // $output .= "<h2>Certifications</h2><ul>";
        // foreach( $profile->getCertifications() as $certificates) {
        //     $output .= "<li>".$certificates["name"]."(".$certificates["date_earned"].")"."</li>";
        // }
        // $output .= "</ul>";
        // $output .= "<h2>Extracurricular Activities</h2><ul>";
        // foreach( $profile->getExtracurricularActivities() as $activities) {
        //     $output .=  "<li>".$activities["role"]." of ".
        //     $activities["organization"]." (".
        //     $activities["start_date"]." to ".
        //     $activities["end_date"].") ".
        //     $activities["description"]."</li>";
        // }
        // $output .= "</ul><h2>Languages</h2><ul>";
        // foreach( $profile->getLanguages() as $language) {
        //     $output .=  "<li>".$language["language"]."--".$language["proficiency"]."</li>";
        // }
        // $output .= "</ul><h2>References</h2>";
        // foreach( $profile->getReferences() as $refs) {
        //     $output .=  "<p>Name: ".$refs["name"]."<br>Position: ".
        //     $refs["position"]."<br>Company: ".
        //     $refs["company"]."<br>Email: ".
        //     $refs["email"]."<br>Phone: ".
        //     $refs["phone_number"]."</p>";
        // }
        $this->response = $output;
    }

    public function render()
    {
        return $this->response;
    }
}
