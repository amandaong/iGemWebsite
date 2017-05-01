<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset="UTF-8"
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="resources/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="resources/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="resources/favicons/manifest.json">
	<link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#607d8b">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.css">
    
    <!--For accordion styling-->
	<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
    
	<title>Cornell iGEM</title>
</head>
<body>
	<!--/*****------------------------------*** NAVIGATION BAR ***------------------------------*****/ -->
    
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="javascript:window.location.href=window.location.href"><img class="logo" src="resources/logo/Logo-Colored.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a id="navbar-aboutus" onclick="scrollToElem('aboutus')">About Us</a></li>
                    <li><a id="navbar-subteams" onclick="scrollToElem('subteams')">Sub Teams</a></li>
                    <li><a id="navbar-team" onclick="scrollToElem('team')">Members</a></li>
                    <li><a id="navbar-recruiting" onclick="scrollToElem('recruiting')">Recruiting</a></li>
                    <li><a id="navbar-sponsors" onclick="scrollToElem('sponsors')">Sponsors</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div style="height:66px"></div>
    
    
    
	<!--/*****------------------------------*** VIDEO SECTION ***------------------------------*****/ -->
    
	<script src="js/video.js"></script>
    <div id="video-wrapper" align="center" class="row full-width embed-responsive embed-responsive-16by9">
      <div id="player"></div>
      <script>
          // 2. This code loads the IFrame Player API code asynchronously.
          var tag = document.createElement('script');

          tag.src = "https://www.youtube.com/iframe_api";
          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          // 3. This function creates an <iframe> (and YouTube player)
          //    after the API code downloads.
          var player;
          function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
              videoId: 'FwZYu6bpJmc',
              events: {
                'onReady': onPlayerReady,
              }
            });
            player.a.style.display = 'none';
          }
      </script>
      <div class="header-placeholder" onclick='pictureClicked()'>
        <ul>
          <li><span>
            <h1 class="header-title">Find out what Cornell’s only synthetic biology team is all about</h1>
          </span></li>
          <li><span>
            <img class="header-playbutton" src="resources/header/play.png" onclick = 'pictureClicked()'>
          </span></li>
          <li><span>
            <ul class="header-info-buttons-desktop" style="
                margin:  0 auto;
            ">
              <li><div></div></li>
              <li><div></div></li>
              <li><div></div></li>
            </ul>
          </span></li>
        </ul>
      </div>
    </div>
    <div id="video-bottom"></div>
    <div class="container header-info-buttons-mobile">
      <div class="col-sm-4">
        <img class="img-responsive" src="resources/header/button_WL_col.png" style="
            padding-bottom: 40px;
        ">
      </div>
      <div class="col-sm-4">
        <img class="img-responsive" src="resources/header/button_DL_col.png" style="
            padding-bottom: 40px;
        ">
      </div>
      <div class="col-sm-4">
        <img class="img-responsive" src="resources/header/button_PP_col.png" style="
            padding-bottom: 40px;
        ">
      </div>
    </div>

    
    
	<!--/*****------------------------------*** ABOUT US ***------------------------------*****/ -->

    <div class="page-section container-fluid">
    <a name="aboutus" id="aboutus" class="anchor"></a>
    <div class="wrapper">
        <section class="section-header-javascriptTarget">
            <h2>About Us</h2>
        </section>
        <section class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8" style='margin-bottom: 50px;'>
            <big>
                <p>The Cornell iGEM Team is comprised of 32 brilliant and creative undergraduate students motivated to save the world through synthetic biology. The team is comprised of five subteams: Wet Lab, Product Development, CS/ECE Design, Policy and Practices, and Business. The team works tirelessly throughout the school year and summer to solve local and global problems related to medical applications, environmental concerns, and human and animal health. We then compete against 280 multidisciplinary teams from all around the world at the iGEM World Jamboree hosted annually by the International Genetically Engineered Machine (iGEM) Foundation.
                </p>
                <p>Check out the Cornell iGEM Team, 2015 winner of Gold, Best Environmental, Best Supporting Entrepreneurship, and Best Applied Design against 280 other international university teams!
                </p>
            </big>
        </section>
    </div>
    </div>
    
    
    <!--/*****------------------------------*** PROJECTS ***------------------------------*****/ -->

    <a name="projects" id="projects" class="anchor"></a>
    <div class="wrapper">
    <section class="section-header-javascriptTarget">
        <h2>Past Projects and Achievements</h2>
    </section>
    </div>

    <div id="projects-accordion" class="accordion">
        <ul>
            <li style='background-image: url("resources/projects/teamphoto800x350.jpg");'>
                <div>
                    <a href="http://2015.igem.org/Team:Cornell">
                        <h6>fishPHARM - 2015</h6>
                        <p>Novel drug delivery system and probiotic treatment for Bacterial Coldwater Disease and app for monitoring nutrient content in fish hatcheries</p>
                        <b>Achievements</b>
                        <ul>
                            <li>Achieved gold medal for fifth consecutive year</li>
                            <li>Won Best Supporting Entrepreneurship, Best Environmental Project, and Best Applied Design</li>
                        </ul>
                    </a>
                </div>
            </li>
            <li style='background-image: url("resources/projects/grass800x350.jpg");'>
                <div> <a href="http://2014.igem.org/Team:Cornell">
                    <h6>Lead it Go - 2014</h6>
                    <p>Continuous water filtration system to sequester heavy metals</p>
                    <b>Achievements</b>
                    <ul>
                        <li>Achieved gold medal classification for fourth consecutive year in iGEM</li>
                    </ul>
                </a> </div>
            </li>
            <li style='background-image: url("resources/projects/organofoam350x800.jpg");'>
                <div> <a href="http://2013.igem.org/Team:Cornell")>
                    <h6>Organofoam - 2013</h6>
                    <p>Comprehensive genetic toolkit for fungal engineering</p>
                    <b>Achievements</b>
                    <ul>
                        <li>Won Best Human Practices Advance at North American iGEM competition</li>
                        <li>Won Best Human Practices Advance at iGEM international competition</li>
                    </ul>
                </a> </div>
            </li>
            <li style='background-image: url("resources/projects/inriver350.jpg");'>
                <div> <a href="http://2012.igem.org/Team:Cornell")>
                    <h6>Safe Bet - 2012</h6>
                    <p>Real-time arsenic biosensor</p>
                    <b>Achievements</b>
                    <ul>
                        <li>Awarded top 4 finalist regionally, won Best Wiki and Best Human Practices Advance awards</li>
                        <li>Top 16 finalist worldwide, won “Best Solution to an Oil Sands Problem” from the Oil Sands Leadership Initiative</li>
                    </ul>
                </a> </div>
            </li>
        </ul>

    </div>

    
    
    <!--/*****------------------------------*** SUBTEAMS ***------------------------------*****/ -->

	<div class="page-section container-fluid">
    <div class="wrapper">
    <div id="subteams" class="section-header-javascriptTarget">
        <h2>Sub Teams</h2>
    </div>
    </div>
    <div id="subteams-accordion" class="accordion">
      <ul>
        <li style='background-image: url("resources/subteams/wetlab1440x470.jpg");'>
          <div>
            <a>
              <h6>Wet Lab</h6>
              <p>The wet lab subteam integrates myriad ideas and subjects them to rigorous testing and analysis. Using the most advanced techniques in molecular biology and biochemistry, we design novel experiments to purify our therapeutics, to assess their efficacy, and to test their stability. We are committed to making contributions to synthetic biology through the heterologous expression and the characterization of proteins that remain poorly understood.</p>
            </a>
          </div>
        </li>
        <li style='background-image: url("resources/subteams/business1440x470.jpg");'>
          <div> <a>
            <h6>Business</h6>
            <p>The business subteam has two primary roles within Cornell iGEM. First, we establish partnerships and sponsorship with many outside organizations to ensure that the project is financially viable. Second, each year we evaluate the marketability of our project and consider applications of our project to improve existing industry. Our coordination with sponsors and development of business models for Cornell iGEM positions us as the fiscal backbone of the team, helping to bring the team’s project ideas to reality.</p>
          </a> </div>
        </li>
        <li style='background-image: url("resources/subteams/drylab1440x470.jpg");'>
          <div> <a>
            <h6>Product Development</h6>
            <p>The product development subteam is an end-to-end product development team that is user centered and engineering focused, with the end goal of bringing Cornell iGEM's biological engineering technology to the real world. We apply design thinking and various engineering disciplines to explore user needs, generate a problem statement, design and prototype a mechanical solution to the problem, and create product specifications and prepare for manufacture.</p>
          </a> </div>
        </li>
        <li style='background-image: url("resources/subteams/outreach1440x470.jpg");'>
          <div> <a>
            <h6>Policy and Practices</h6>
            <p>The Policy and Practices subteam contextualizes Cornell iGEM's genetic engineering projects and examines its impact through community engagement and collaborations. The subteam coordinates outreach events such as youth mentorship programs, forums, and expos. Policy and Practices also analyzes policies, and connects those who are familiar and unfamiliar to our project. Through interviews with field experts and interactions with the public, we are reminded that the people we meet always have stories to tell. We aim to share our story with them, too.</p>
          </a> </div>
        </li>
        <li style='background-image: url("resources/subteams/cs1440x470.jpg");'>
          <div> <a>
            <h6>CS/ECE Design</h6>
            <p>The CS/ECE Design Team (Computer Science/Electrical and Computer Engineering) operates at the fusion of synthetic biology and technology.  The team works closely with Product Development in the research and design phases and spearheads all the coding and electrical engineering components of the dry lab product that take our project to the next level.  This includes developing smartphone apps, environmental monitoring systems, and biosensor technology.  In addition, the CS/ECE Design Team creates the competition wiki page and sponsorship video.</p>
          </a> </div>
        </li>
      </ul>
    </div>
    </div>

    
    
    <!--/*****------------------------------*** MEMBERS ***------------------------------*****/ -->
    <script>
        function getHTMLStringForBio(bioNum){
            <?php 
                $path = 'resources/team-members/team-member-bios/';
                $files = glob("$path*.{html}", GLOB_BRACE);
                $x = 0;
                foreach($files as $file) {
                    echo "if (bioNum == $x) { return ";
                    // echo "$file";
                    $myfile = fopen($file, "r") or die("Unable to open file!");
                    // $output = fread($myfile,filesize($myfile));
                    $output = json_encode(file_get_contents($file));
                    echo $output;
                    fclose($myfile);
                    // $output = readfile($file);
                    // echo htmlspecialchars($output);
                    echo "};\n";
                    $x++;
                }
                $x1=$x-1;
                echo "}\ndata_highest_bio_num = $x1;\n"
            ?>
            
            function getWrappedBio(bioNum){
                return "<div id='active-bio' class='collapse col-xs-12 col-sm-12 col-md-12 col-lg-12 bio-section'>\n"
                        + getHTMLStringForBio(bioNum)
                        + "\n</div>";
            }
        </script>
        <div class="wrapper">
        <section id="team" class="section-header-javascriptTarget">
            <h2>Our Team</h2>
        </section>
        </div>
        <div class="container">
        </div>
        <div class="container">
            <?php
                $files = glob('resources/team-members/team-members-md/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                function makeBio($num){
                    return
                        "<div id='active-bio' class='collapse col-xs-12 col-sm-12 col-md-12 col-lg-12 bio-section'>
                        </div>";
                }
                $x = 0;
                foreach($files as $file) {
                    echo
                        "<div id='bioholder_$x' onclick='collapseAllBut($x)'>
                            <div class='col-md-2 col-lg-2 col-sm-2 col-xs-4'>
                                <div class='team-member'>
                                    <div class='team-member-mouseover-box'>
                                    </div>
                                    <img id='photo$x' class='img-responsive team-member-photo' src=$file>
                                </div>
                            </div>
                        </div>";
                    $x++;
                }
            ?>
        </div>
        <div style="height: 50px;"></div>

    
    <!--/*****------------------------------*** RECRUITING ***------------------------------*****/ -->
    
    <div class="page-section container-fluid">
    <div class="wrapper">
    <section id="recruiting" class="section-header-javascriptTarget">
        <h2>Recruiting</h2>
    </section>
    <section class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8" style="
        margin-bottom: 40px;
    ">
        <big>
            <p>
                We're looking for excited students to push forth the field of synthetic biology. Our team is made of students from every year, every college, and every major. From gene-splicing in wet lab to pursuing business endeavors to organizing outreach events, bright passionate students make this team thrive.
            </p>
            <p>
                Potential new team members apply in early January and join the team in the spring semester:
            </p>
            <p>
                <lu>
                    </lu></p><li style="margin-left: 20px;">Spring: brainstorm next project and new member training (2 credits, 6-8 hrs/week)</li>
                    <li style="margin-left: 20px;">Summer: on-campus project work (20+ hrs/week) All new team members are expected to stay in Ithaca over the summer</li>
                    <li style="margin-left: 20px;">Fall: finish project and compete at iGEM jamborees (3-4 credits, 12-16 hrs/week)</li>

            <p></p>
            <p>
                <!-- We ask applicants to submit a resume to <a href="mailto:cornelligem@gmail.com?Subject=Joining%20the%20Team">cornelligem@gmail.com</a>. We will also look at any provided supplemental materials and conduct interviews before deciding on new members. -->
                We will be posting the application here during recruitment season.
            </p>
            <p>
                If you have any questions, feel free to send them to <a href="mailto:cornelligem@gmail.com?Subject=Joining%20the%20Team%20Questions">cornelligem@gmail.com</a>.
            </p>
        </big>
    </section>
    </div>
    </div>

    
    <!--/*****------------------------------*** SPONSORS ***------------------------------*****/ -->

    <div class="wrapper">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <!-- <div class="panel-heading"> -->
                <div id="sponsors" class="section-header-javascriptTarget">
                    <a id="toggle" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSponsors" style="text-decoration: none;">
                            <h2>Sponsors
                                    <img id="icon" class="arrow" src="resources/sponsors/expand.png" height="48" style="max-width:100px; margin-top: -2px;">
                            </h2>
                    </a>
                </div>

            <!-- </div> -->
            <div class="container">
            </div>
            <div id="collapseSponsors" class="panel-collapse collapse"><div class="panel-body">
                <div class="container">
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_cornellcrest.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_biobasic.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_corning.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_alfaaesar.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_geneious.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_genscript.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_hardydiagnostics.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_idt.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_mathworks.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_neb.PNG>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_snapgene.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_thermofisher.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/Cornell_vwr.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/DNA20-logo-for-iGEM.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/KS_Logo_Final.png>
                    </div>
                    <div class='col-md-3 col-lg-3 col-sm-3 col-xs-3'>
                        <img class='img-responsive' src=resources/sponsors/version1.0/mendeley-logo-red.png>
                    </div>
                </div>
                <div class="container col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" style="margin-top: 30px; min-wdth: 500px;">
                <a href="resources/sponsors/Sponsorship-Packet.pdf">
                    <img class="img-responsive" src="resources/buttons/download_sp.png" style="
                        max-width: 750px;
                        width: 100%;
                        margin: 0 auto;
                    ">
                </a>
            </div>
            </div></div>

        </div>
    </div>
    </div>

    <script>
        (function(document){
            var div = document.getElementById('toggle');
            var icon = document.getElementById('icon');
            var open = false;

            div.addEventListener('click', function(){
                if(open){
                icon.className = 'arrow';  
                } else{
                icon.className = 'arrow open';
                }

                open = !open;
            });
        })(document);
    </script>

    
    
    <!--/*****------------------------------*** FOOTER ***------------------------------*****/ -->

    <div class="footer">
	<div class="container">
		<ul class='contact-us'>
			<li><h3>Contact Us:</h3></li>
			<li>
				<img src="resources/footer/em.png">
				<a href="mailto:cornelligem@gmail.com">cornelligem@gmail.com</a>
			</li>
			<li>
				<img src="resources/footer/fb.png">
				<a href="http://facebook.com/cornelligem">facebook.com/cornelligem</a>
			</li>
			<li>
				<img src="resources/footer/tw.png">
				<a href="http://twitter.com/cugem">@CUGEM</a>
			</li>
		</ul>
	</div>
        <div class='credit'>
            <p>© Cornell iGEM | Designed By: Tennyson Bardwell and Rishabh Singh</p>
        </div>
    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/team.js"></script>
	<script src="http://www.youtube.com/iframe_api"></script>
</body>
</html>