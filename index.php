<?php 
    if(session_status() != PHP_SESSION_ACTIVE)
       session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Högquadteret</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans|Cinzel' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
		<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="javascript.js"></script>
        <script type="text/javascript" src="includes/functions.js"></script>
		<!--<link rel="shortcut icon" href="img/favicon.ico">-->
	</head>
    <?php require_once "includes/functions.php" ?>
    <body>
        <div class="flex">
			<div id="top">
				<div id="topcontent">
					<img src="img/whiteicon.png" style="width: 100px; height: 100px;"/>
					<a style="text-style: none; color: white;" href="index.php"><h1>Högquadteret</h1></a>
						<div id="nav">
							<ul id="navUl">
								<li pos="0" id="noll" style="border-bottom: #ff7d00 solid 4px;">Stream</li>
								<li pos="1" id="ett" >Helikoptern</li>
								<li pos="2" id="två" >Projektet</li>
								<li pos="3" id="tre" >Medverkande</li>
								<?php
									if ($_SESSION['admin']){
										echo 
											"<li pos=\"4\" id=\"fyra\" >Adminverktyg</li>";
									}
								?>
							</ul>
							<div id="loginArea">
								<?php
									if(empty($_SESSION['user_id']) || $_SESSION['user_id']==0)
										require 'includes/login.php';

									else
										require 'includes/loggedIn.php';
								?>
							</div>
						</div>
				</div>
			</div>
            <div id="container">
                <div id="wrapper">
                    <div class="page" id="Stream">
                        <div class="content">
                            <div class="centerContent">
                                <!--div id="streamwindow">
                                    
                                </div-->
                                <div id="takeControl">
                                    <div id="userControlling">
										
                                    </div>
                                    <div id="takeControlButton">
                                        Ta kontroll!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page" id="Helikoptern">
                        <div class="content">
                            <div class="flexContainer">
                                <div class="contentItem">
                                    <p>
                                        Här borde det finnas bilder och en beskrivning av quadcoptern och dess specifikationer.
                                        <br/><br/>
                                        bakgrundsgrå: #262626
                                        <br/>
                                        den andra grå: #515151
                                        <br/>
                                        blå: #00b3fd
                                        <br/>
                                        orange: #ff7d00
                                    </p>
                                </div>
                                <div class="contentItem">
                                    <img src="img/pic1.JPG" style="width:100%;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page" id="Projektet">
                        <div class="content">
                            <p>
                                Kanske en länk till projektrapporten och några bilder för att visa bygget kort.
                                <br/>
                                <br/>
                                
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur sem eget dolor eleifend, ac pulvinar ex aliquet. Curabitur sed urna quis justo sodales consectetur sed sed lorem. Fusce facilisis ipsum vel nisi euismod, ut lacinia justo finibus. Aliquam mollis magna id tellus pharetra commodo. Donec pretium venenatis massa, sed elementum ante sagittis at. Duis sodales, tellus id auctor fringilla, ligula magna vehicula urna, ac aliquet enim nunc sed enim. Ut ut volutpat tellus, pretium pellentesque quam. Nulla tincidunt molestie ipsum, sed laoreet lorem dictum in. Morbi a tristique lectus. Proin porta accumsan porta. Suspendisse sagittis felis et mauris pulvinar pretium. Aenean tincidunt vulputate nisl vel consequat. Pellentesque ut nisi at magna faucibus accumsan quis id nisl.
                                </br>
                                <br/>
Phasellus sit amet ornare justo. Maecenas dignissim diam eget risus fringilla luctus. Etiam id metus scelerisque, varius odio a, vehicula nulla. Quisque porttitor dolor porta, lobortis leo eget, hendrerit risus. Donec eu leo sit amet est viverra porta. Nam facilisis aliquam fermentum. Praesent pretium metus vitae consequat molestie. Praesent tincidunt augue dolor, eu rutrum orci accumsan eu. Duis iaculis non ex non condimentum. Quisque efficitur non eros eu sagittis. In tincidunt velit eu neque feugiat suscipit. Phasellus vitae commodo dolor, tempor imperdiet mi. Praesent vel mi ac eros commodo ultricies.
                                <br/>
                                <br/>
Proin porttitor diam in metus varius, quis elementum mauris finibus. Quisque luctus sagittis imperdiet. Donec in elit dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce dignissim, nisl eu venenatis ornare, mauris dolor pharetra est, vel dignissim velit lacus a sem. Donec quis eros mattis, hendrerit nibh et, maximus urna. Mauris metus urna, lacinia et tortor id, sollicitudin varius mauris. Sed mattis, quam et ornare gravida, eros diam elementum nulla, quis viverra dui purus eu ipsum. Phasellus purus elit, mollis nec aliquet eu, sodales vel ipsum. Curabitur congue eu velit ac placerat.
                                <br/>
                                <br/>
Nullam malesuada, mi quis sollicitudin egestas, neque libero hendrerit justo, sed commodo ipsum metus sed magna. Maecenas aliquam turpis velit, sed laoreet massa consequat sit amet. Nulla facilisi. Integer ut pharetra nisi. Phasellus nisl velit, condimentum ac gravida quis, dictum id sem. Proin sit amet neque et ipsum ultricies bibendum id vitae augue. Pellentesque quis tortor suscipit, laoreet nulla sed, facilisis ligula. Proin sollicitudin mollis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec dolor lorem, porttitor vitae suscipit eu, dignissim et arcu. Mauris a nisl lacinia, malesuada dui accumsan, placerat arcu. Praesent accumsan ex massa, a aliquam ligula commodo at.
                                <br/>
                                <br/>
Pellentesque consequat tortor ut arcu auctor, a congue est vehicula. Nunc nisi metus, pellentesque ac lorem maximus, commodo sagittis tellus. Nam in velit sit amet orci imperdiet pretium pharetra non orci. Nullam egestas, diam iaculis mattis porta, purus sapien congue augue, ut ornare lorem nunc in odio. Etiam at laoreet lacus. Quisque molestie euismod felis at fringilla. Phasellus et risus a massa hendrerit consequat vel et orci. Nulla tortor mauris, imperdiet eget enim non, laoreet posuere purus. Proin pulvinar augue feugiat, volutpat ante non, suscipit justo. Etiam aliquam leo in consequat posuere. Nullam non ultricies nulla. Proin fringilla fermentum quam, ut sagittis erat malesuada vel.</br>
                                <br/>
Phasellus sit amet ornare justo. Maecenas dignissim diam eget risus fringilla luctus. Etiam id metus scelerisque, varius odio a, vehicula nulla. Quisque porttitor dolor porta, lobortis leo eget, hendrerit risus. Donec eu leo sit amet est viverra porta. Nam facilisis aliquam fermentum. Praesent pretium metus vitae consequat molestie. Praesent tincidunt augue dolor, eu rutrum orci accumsan eu. Duis iaculis non ex non condimentum. Quisque efficitur non eros eu sagittis. In tincidunt velit eu neque feugiat suscipit. Phasellus vitae commodo dolor, tempor imperdiet mi. Praesent vel mi ac eros commodo ultricies.
                                <br/>
                                <br/>
Proin porttitor diam in metus varius, quis elementum mauris finibus. Quisque luctus sagittis imperdiet. Donec in elit dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce dignissim, nisl eu venenatis ornare, mauris dolor pharetra est, vel dignissim velit lacus a sem. Donec quis eros mattis, hendrerit nibh et, maximus urna. Mauris metus urna, lacinia et tortor id, sollicitudin varius mauris. Sed mattis, quam et ornare gravida, eros diam elementum nulla, quis viverra dui purus eu ipsum. Phasellus purus elit, mollis nec aliquet eu, sodales vel ipsum. Curabitur congue eu velit ac placerat.
                                <br/>
                                <br/>
Nullam malesuada, mi quis sollicitudin egestas, neque libero hendrerit justo, sed commodo ipsum metus sed magna. Maecenas aliquam turpis velit, sed laoreet massa consequat sit amet. Nulla facilisi. Integer ut pharetra nisi. Phasellus nisl velit, condimentum ac gravida quis, dictum id sem. Proin sit amet neque et ipsum ultricies bibendum id vitae augue. Pellentesque quis tortor suscipit, laoreet nulla sed, facilisis ligula. Proin sollicitudin mollis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec dolor lorem, porttitor vitae suscipit eu, dignissim et arcu. Mauris a nisl lacinia, malesuada dui accumsan, placerat arcu. Praesent accumsan ex massa, a aliquam ligula commodo at.
                                <br/>
                                <br/>
Pellentesque consequat tortor ut arcu auctor, a congue est vehicula. Nunc nisi metus, pellentesque ac lorem maximus, commodo sagittis tellus. Nam in velit sit amet orci imperdiet pretium pharetra non orci. Nullam egestas, diam iaculis mattis porta, purus sapien congue augue, ut ornare lorem nunc in odio. Etiam at laoreet lacus. Quisque molestie euismod felis at fringilla. Phasellus et risus a massa hendrerit consequat vel et orci. Nulla tortor mauris, imperdiet eget enim non, laoreet posuere purus. Proin pulvinar augue feugiat, volutpat ante non, suscipit justo. Etiam aliquam leo in consequat posuere. Nullam non ultricies nulla. Proin fringilla fermentum quam, ut sagittis erat malesuada vel.</br>
                                <br/>
                                Phasellus sit amet ornare justo. Maecenas dignissim diam eget risus fringilla luctus. Etiam id metus scelerisque, varius odio a, vehicula nulla. Quisque porttitor dolor porta, lobortis leo eget, hendrerit risus. Donec eu leo sit amet est viverra porta. Nam facilisis aliquam fermentum. Praesent pretium metus vitae consequat molestie. Praesent tincidunt augue dolor, eu rutrum orci accumsan eu. Duis iaculis non ex non condimentum. Quisque efficitur non eros eu sagittis. In tincidunt velit eu neque feugiat suscipit. Phasellus vitae commodo dolor, tempor imperdiet mi. Praesent vel mi ac eros commodo ultricies.
                                <br/>
                                <br/>
                                Proin porttitor diam in metus varius, quis elementum mauris finibus. Quisque luctus sagittis imperdiet. Donec in elit dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce dignissim, nisl eu venenatis ornare, mauris dolor pharetra est, vel dignissim velit lacus a sem. Donec quis eros mattis, hendrerit nibh et, maximus urna. Mauris metus urna, lacinia et tortor id, sollicitudin varius mauris. Sed mattis, quam et ornare gravida, eros diam elementum nulla, quis viverra dui purus eu ipsum. Phasellus purus elit, mollis nec aliquet eu, sodales vel ipsum. Curabitur congue eu velit ac placerat.
                                <br/>
                                <br/>
                                Nullam malesuada, mi quis sollicitudin egestas, neque libero hendrerit justo, sed commodo ipsum metus sed magna. Maecenas aliquam turpis velit, sed laoreet massa consequat sit amet. Nulla facilisi. Integer ut pharetra nisi. Phasellus nisl velit, condimentum ac gravida quis, dictum id sem. Proin sit amet neque et ipsum ultricies bibendum id vitae augue. Pellentesque quis tortor suscipit, laoreet nulla sed, facilisis ligula. Proin sollicitudin mollis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec dolor lorem, porttitor vitae suscipit eu, dignissim et arcu. Mauris a nisl lacinia, malesuada dui accumsan, placerat arcu. Praesent accumsan ex massa, a aliquam ligula commodo at.
                                <br/>
                                <br/>
                                Pellentesque consequat tortor ut arcu auctor, a congue est vehicula. Nunc nisi metus, pellentesque ac lorem maximus, commodo sagittis tellus. Nam in velit sit amet orci imperdiet pretium pharetra non orci. Nullam egestas, diam iaculis mattis porta, purus sapien congue augue, ut ornare lorem nunc in odio. Etiam at laoreet lacus. Quisque molestie euismod felis at fringilla. Phasellus et risus a massa hendrerit consequat vel et orci. Nulla tortor mauris, imperdiet eget enim non, laoreet posuere purus. Proin pulvinar augue feugiat, volutpat ante non, suscipit justo. Etiam aliquam leo in consequat posuere. Nullam non ultricies nulla. Proin fringilla fermentum quam, ut sagittis erat malesuada vel.
                            </p>
                        </div>
                        </div>
                    <div class="page" id="Medverkande">
                        <div class="content">
                            <table>
                                <tr>
                                    <td>Peter Kjellén:</td>
                                    <td>Huvudansvaring för hemsida samt styrning av quadcoptern.</td>
                                </tr> 
                                <tr>
                                    <td>Jesper Larsson:</td> 
                                    <td>Huvudansvarig för lokal mjukvara på quadcoptern.</td>
                                </tr>
                                <tr>
                                    <td>Viktor Landemoo:</td>
                                    <td>Huvudansvarig för hårdvara och bygge av quadcoptern.</td>
                                </tr>
                                <tr>
                                    <td>Annat:</td>
                                </tr>
                                <tr>
                                    <td>Quadcopter ikon:</td>
                                    <td>Quadcopter designed by <a href="http://www.thenounproject.com/nithindavis">Nithin Davis Nanthikkara</a> from the <a href="http://www.thenounproject.com">Noun Project</a></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <?php
                        if ($_SESSION['admin']){
                            include "includes/AdminTools.php";
                        }
                    ?>
                </div>
            </div>
        </div>
	</body>
</html>