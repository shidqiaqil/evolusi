<!DOCTYPE html>
<html lang="en">

<head>
	<title>EvoLearning</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/dropdown.css">
</head>
<style>
	.margin1 {
		margin-left: 20px;
	}

	.font1 {
		font-size: 18px;
		font-weight: 500;
	}

	.navbar-nav li.active {
		border-bottom: 5px solid #5BC0EB;
	}
	body{
    font-size: 20px;
    
}

#container{
    margin : 20px auto;
    background-color: white;
    height: 300px;
    width : 700px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 0px;
    position: relative;
}
#start{
    font-size: 1.5em;
    font-weight: bolder;
    word-break: break-all;
    width:90px;
    height:150px;
    border : 2px solid lightgrey;
    text-align: center;
    cursor: pointer;
    position: absolute;
    left:300px;
    top:50px;
    color : lightgrey;
}
#start:hover{
    border: 3px solid lightseagreen;
    color : lightseagreen;
}

#qImg{
    width : 200px;
    height : 200px;
    position: absolute;
    left : 0px;
    top : 0px;
}
#qImg img{
    width : 200px;
    height : 200px;
    border-top-left-radius: 5px;
}

#question{
    width:500px;
    height : 125px;
    position: absolute;
    right:0;
    top:0;
}
#question p{
    margin : 0;
    padding : 15px;
    font-size: 1.25em;
}

#choices{
    width : 480px;
    position: absolute;
    right : 0;
    top : 125px;
    padding : 10px
}
.choice{
    display: inline-block;
    width : 135px;
    text-align: center;
    border : 1px solid grey;
    border-radius: 5px;
    cursor: pointer;
    padding : 5px;
}
.choice:hover{
    border : 2px solid grey;
    font-weight: bold;
}

#timer{
    position: absolute;
    height : 100px;
    width : 200px;
    bottom : 0px;
    text-align: center;
}
#counter{
    font-size: 3em;
}
#btimeGauge{
    width : 150px;
    height : 10px;
    border-radius: 10px;
    background-color: lightgray;
    margin-left : 25px;
}
#timeGauge{
    height : 10px;
    border-radius: 10px;
    background-color: mediumseagreen;
    margin-top : -10px;
    margin-left : 25px;
}
#progress{
    width : 500px;
    position: absolute;
    bottom : 0px;
    right : 0px;
    padding:5px;
    text-align: right;
}
.prog{
    width : 25px;
    height : 25px;
    border: 1px solid #000;
    display: inline-block;
    border-radius: 50%;
    margin-left : 5px;
    margin-right : 5px;
}
#scoreContainer{
    margin : 20px auto;
    background-color: white;
    opacity: 0.8;
    height: 300px;
    width : 700px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 0px;
    position: relative;
    display: none;
}
#scoreContainer img{
    position: absolute;
    top:100px;
    left:325px;
}
#scoreContainer p{
    position: absolute;
    display: block;
    width : 59px;
    height :59px;
    top:130px;
    left:325px;
    font-size: 1.5em;
    font-weight: bold;
    text-align: center;
}

	
</style>

<body>
{elapsed_time}
	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->


			<!-- Header Content -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7">
							<a href="#">
								<div style="margin: 20px 10px;" class="logo_text">Evo<span>Learning</span></div>
							</a>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5">
							<ul class="nav justify-content-end">
								<li class="nav-item">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
								</li>
							</ul>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item margin1">
										<a class="nav-link dropbtn font1"  href="index.php">Beranda <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item dropdown margin1 active">
										<a class="nav-link dropbtn font1" style="color:#14bdee;"  href="soalpretest.php">Materi <span class="sr-only"></span></a>
									</li>
									<li class="nav-item dropdown margin1">
										<a class="nav-link dropbtn font1"  href="profil.php">Profil <span class="sr-only"></span></a>
									</li>
									<li class="nav-item dropdown margin1">
										<a class="nav-link dropbtn font1"  href="contact.php">Contact<span class="sr-only"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
			<!-- <div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Q-LEAR<span>NING</span></div>
								</a>
							</div>
							<nav class="main_nav_container ml-auto navbar-fixed-top">
								<ul class="main_nav">
									<li><a href="index.html">Beranda</a></li>
									<div class="dropdown">
									  <li>
											<a href="#" class="dropbtn ">Materi <i class="fa fa-caret-down"></i></a>
										</li>
									  <div class="dropdown-content">
									    <a href="pengenalan.html">Pengenalan</a>
									    <a href="mater-query-dasar.html">Query Dasar</a>
									    <a href="materi-intermediette-query.html">Intermediete Query</a>

									  </div>
									</div>
									<div class="dropdown">
										<li>
											<a href="#" class="dropbtn"style="color:#14bdee;">Soal <i class="fa fa-caret-down"></i></a>
										</li>
										<div class="dropdown-content">
                      <a href="soal-query-dasar.html"style="color:#14bdee;">Query Dasar</a>
                      <a href="soal-intermediette-query.html">Intermediette Query</a>

										</div>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div> -->

			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form">
									<input type="search" class="search_input" placeholder="Search" required="required">
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>

			<nav class="menu_nav">

			</nav>
		</div>

		<!-- Home -->

		<!-- Home Slider Item -->
		<div class="owl-item">
			<div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
			<div class="home_slider_content">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="home_slider_title">The Premium System Education</div>
							<div class="home_slider_subtitle">Future Of Education Technology</div>
							<div class="home_slider_form_container">
								<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
									<div class="d-flex flex-row align-items-center justify-content-start">
										<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
										<select class="dropdown_item_select home_search_input">
											<option>Category Courses</option>
											<option>Category</option>
											<option>Category</option>
										</select>
										<select class="dropdown_item_select home_search_input">
											<option>Select Price Type</option>
											<option>Price Type</option>
											<option>Price Type</option>
										</select>
									</div>
									<button type="submit" class="home_search_button">search</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Home Slider Item -->
		<div class="owl-item">
			<div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
			<div class="home_slider_content">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="home_slider_title">The Premium System Education</div>
							<div class="home_slider_subtitle">Future Of Education Technology</div>
							<div class="home_slider_form_container">
								<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
									<div class="d-flex flex-row align-items-center justify-content-start">
										<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
										<select class="dropdown_item_select home_search_input">
											<option>Category Courses</option>
											<option>Category</option>
											<option>Category</option>
										</select>
										<select class="dropdown_item_select home_search_input">
											<option>Select Price Type</option>
											<option>Price Type</option>
											<option>Price Type</option>
										</select>
									</div>
									<button type="submit" class="home_search_button">search</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>

	<!-- Home Slider Nav -->


	</div>

	<!-- Features -->


	<html>

	<head>
		<title>multiple-choice quiz form</title>
	</head>

	<body bgcolor=#ffffff>
		<!--onsubmit="return checkSoal(this)"-->
		<div class="container" style="margin-top : 10%">
		<h3 class="text-center">Post test dulu Yuk!</h3>
		<div id="container">
        <div id="start">Start Quiz!</div>
        <div id="quiz" style="display: none">
            <div id="question"></div>
            <div id="qImg"></div>
            <div id="choices">
                <div class="choice" id="A" onclick="checkAnswer('A')"></div>
                <div class="choice" id="B" onclick="checkAnswer('B')"></div>
                <div class="choice" id="C" onclick="checkAnswer('C')"></div>
            </div>
            <div id="timer">
                <div id="counter"></div>
                <div id="btimeGauge"></div>
                <div id="timeGauge"></div>
            </div>
            <div id="progress"></div>
        </div>
        <div id="scoreContainer" style="display: none"></div>
	</div>
</div>
	<div class="container-fluid" style=" margin-top: 5em">
		<a href="kesimpulan.php"><button type="button" class="btn btn-warning offset-md-10" style="width:150px; height:50px;">Kesimpulan</button></a>
	</div>
	<div style="margin-bottom: 5em">
		
	</div>

	</body>

	


	<!-- Features Item -->


	</div>
	</div>
	</div>

	<!-- Popular Courses -->

	<footer class="footer">
		<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
			<div class="cr_text offset-md-5">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;
				<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved </a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</div>
		</div>

	</footer>
</html>


	
	<script>
		const start = document.getElementById("start");
		const quiz = document.getElementById("quiz");
		const question = document.getElementById("question");
		const qImg = document.getElementById("qImg");
		const choiceA = document.getElementById("A");
		const choiceB = document.getElementById("B");
		const choiceC = document.getElementById("C");
		const counter = document.getElementById("counter");
		const timeGauge = document.getElementById("timeGauge");
		const progress = document.getElementById("progress");
		const scoreDiv = document.getElementById("scoreContainer");

// create our questions
let questions = [
    {
        question : "Pada industry 4.0 memanfaatkan Iot(internet of things)untuk ? ",
        imgSrc : "img/course_4.jpg",
        choiceA : "memungkinan setiap instrumen terkoneksi",
        choiceB : "Teknologi konstruksi dan medis",
        choiceC : "CyberSecurity",
        correct : "A"
    },{
        question : "Berikut merupakan contoh  industri 4.0",
        imgSrc : "img/course_5.jpg",
        choiceA : "internet",
        choiceB : "Playstation",
        choiceC : "e-commerce",
        correct : "C"
    },{
        question : "Pada industry 4.0 ada dua teknologi yang di gabungkan ,ialah?",
        imgSrc : "img/gallery_4.jpg",
        choiceA : "Teknologi otomatisasi dengan teknologi cyber",
        choiceB : "Teknologi informasi dan teknologi komunikasi",
        choiceC : "Teknologi konstruksi dan medis",
        correct : "A"
    }
	,{
        question : "kehadiran gojek dalam revolusi industry ada pada tahap revolusi industri ke ?",
        imgSrc : "img/gallery_5.jpg",
        choiceA : "revolusi industry 2.0",
        choiceB : "revolusi industry 3.0",
        choiceC : "revolusi industry 4.0",
        correct : "C"
    }
	,{
        question : "Dengan kehadiran revolusi industry maka yang harus di tingkatkan adalah ?",
        imgSrc : "img/latest_3.jpg",
        choiceA : "Skill",
        choiceB : "uang jajan",
        choiceC : "main game",
        correct : "A"
    }
];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 10; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    qImg.innerHTML = "<img src="+ q.imgSrc +">";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    }
}

// counter render

function renderCounter(){
    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        // change progress color to red
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    }else{
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}

// answer is correct
function answerIsCorrect(){
    document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
}

// answer is Wrong
function answerIsWrong(){
    document.getElementById(runningQuestion).style.backgroundColor = "#f00";
}

// score render
function scoreRender(){
    scoreDiv.style.display = "block";
    
    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score/questions.length);
    
    // choose the image based on the scorePerCent
    let img = (scorePerCent >= 80) ? "img/5.png" :
              (scorePerCent >= 60) ? "img/4.png" :
              (scorePerCent >= 40) ? "img/3.png" :
              (scorePerCent >= 20) ? "img/2.png" :
              "img/1.png";
    
    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
}

	</script>
</body>

</html>
