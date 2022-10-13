<!DOCTYPE html>
<html>
<title>Lights Off Cinema</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="icon" type="image/png" href="logo.png">

<style>
    body {
  background: url("./bg1.png") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>  

<body class=" w3-light-grey">
    <div class="w3-content" style="max-width:1400px">
        <!-- Header -->
        <header id="home1" class="w3-container w3-center w3-padding-32">
            <!--<h1><b>Lights Off</b></h1>
            <p>Welcome to our <span class="w3-tag">cinema</span></p>-->
        </header>
        <div style="margin-left: 1120px;">
        <button type="submit" class="w3-button w3-black w3-margin-bottom" id="home" ><a href="Contact.php"><i class="fa fa-paper-plane w3-margin-right"></i>Contact us</a></button>
        <button type="submit" class="w3-button w3-black w3-margin-bottom" id="help" ><a href="Help.html"><i class="fas fa-question w3-margin-right"></i>Help</a></button>
        </div>
        <h1 style="margin-top: 12%; color:white; margin-left:40%"><b>NOW SHOWING</b></h1>
        <div id="home-section-1" class="movie-show-container">
            <div class="movies-container">
                <?php
                $link = mysqli_connect("localhost", "root", "", "cinema_db");
                $sql = "SELECT * FROM movieTable";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        for ($i = 0; $i <= 11; $i++) {
                            $row = mysqli_fetch_array($result);
                            echo '<div class="movie-box">';
                            echo '<img src="' . $row['movieImg'] . '" alt=" ">';
                            echo '<div class="movie-info ">';
                            echo '<h3>' . $row['movieTitle'] . '</h3>';
                            echo '<a href="Booking.php?id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                        mysqli_free_result($result);
                    } else {
                        echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

                // Close connection
                mysqli_close($link);
                ?>
            </div>
        </div>
        
        <h1 style="margin-top: 5%; color:white; margin-left:40%;"><b>EXPLORE MORE</b></h1>
        <div class="w3-col l4" style="margin-left: 33%;">
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                    <div class="w3-row w3-container">
            <input id="filmSearchInput" list="filmSearchList" class="w3-hover-light-grey" placeholder=" Search for a movie" style="margin-left:40px;padding: 5px; width:270px; border-radius: 30px; ">
            <datalist id="filmSearchList">
            </datalist>
            </div>
                    </div>
                    <div id="tags" class="w3-container w3-white w3-padding-16">
                    </div>
                </div>
            </div>
        </div>
        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12" style="margin-left: 16.5%;">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white" id="film_dune" data-film-title="Dune" data-film-tags="adventure, sci-fi">
                    <div style="display: flex;">
                        <img src="dune.jpg" alt="Dune" style="width: 30%; object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Jd9L79koFkA" title="Dune Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Dune</b></h3>
                        <h5>2021 ‧ Sci-fi/Adventure ‧ 2h 35m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>A mythic and emotionally charged hero's journey, "Dune" tells the story of Paul Atreides, a brilliant and gifted young
                            man born into a great destiny beyond his understanding, who must travel to the most dangerous planet in the universe
                            to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet's exclusive
                            supply of the most precious resource in existence-a commodity capable of unlocking humanity's greatest potential-only those
                            who can conquer their fear will survive.</p>

                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="modal-button w3-hover-opacity" href="#myModal1">READ MORE »</button></p>
                                <!-- The Modal -->
                                <div id="myModal1" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Dune</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP12<span class="popuptext" id="myPopup">Accesul copiilor sub 12 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 2h 35m <i class="fas fa-star"></i> 8.2/10 <i class="fas fa-desktop"></i> 3D
                                        </div>
                                        <div class="modal-body">
                                            <img src="dune.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 22 octombrie 2021 <br>
                                                Director: Denis Villeneuve <br>
                                                Language: EN <br>
                                                Cast: Jason Momoa, Rebecca Ferguson, Zendaya, Timothée Chalamet
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white" id="film_venom" data-film-title="Venom: Let There Be Carnage" data-film-tags="action, adventure">
                    <div style="display: flex;">
                        <img src="venom.jpg" alt="Venom" style="width:30%; object-fit:cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/v0gWtaqQ9QY" title="Venom 2 Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px; align-self:flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Venom: Let There Be Carnage</b></h3>
                        <h5>2021 ‧ Action/Adventure ‧ 1h 37m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>Eddie Brock struggles to adjust to his new life as the host of the alien symbiote Venom, which grants him
                            super-human abilities in order to be a lethal vigilante. Brock attempts to reignite his career by interviewing
                            serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.. </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity " style="margin-bottom:15px; " href="#myModal2">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal2" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Venom 2</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP12<span class="popuptext" id="myPopup">Accesul copiilor sub 12 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 37m <i class="fas fa-star"></i> 6.3/10 <i class="fas fa-desktop"></i> 3D
                                        </div>
                                        <div class="modal-body">
                                            <img src="venom.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 15 octombrie 2021 <br>
                                                Director: Andy Serkis <br>
                                                Language: EN <br>
                                                Cast: Tom Hardy, Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham, Woody Harrelson
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white" id="film_theAddamsFamily2" data-film-title="The Addams Family 2" data-film-tags="comedy, romance">
                    <div style="display: flex;">
                        <img src="TheAddamsFamily2.jpg" alt="TheAddamsFamily2" style="width:35%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Kd82bSBDE84" title="The Addams Family 2 Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>The Addams Family 2</b></h3>
                        <h5>2021 ‧ Comedy/Romance ‧ 1h 33m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>Everyone's favorite spooky family is back in the animated comedy sequel, The Addams Family 2. In this all
                            new movie
                            we find Morticia and Gomez distraught that their children are growing up, skipping family dinners, and
                            totally
                            consumed with "scream time." To reclaim their bond they decide to cram Wednesday, Pugsley, Uncle Fester
                            and the crew
                            into their haunted camper and hit the road for one last miserable family vacation. Their adventure across
                            America
                            takes them out of their element and into hilarious run-ins with their iconic cousin, It, as well as many
                            new kooky
                            characters. What could possibly go wrong?</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal3">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal3" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>The Addams Family 2</h2>
                                            <!--<div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP12<span class="popuptext" id="myPopup">Accesul copiilor sub 12 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                      </div>-->
                                            <i class="far fa-clock"></i> 1h 33m <i class="fas fa-star"></i> 5.4/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="TheAddamsFamily2.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 1 octombrie 2021 <br>
                                                Director: Greg Tiernan, Conrad Vernon <br>
                                                Language: EN <br>
                                                Cast: Chloë Grace Moretz, Charlize Theron, Oscar Isaac, Bill Hader, Nick Kroll
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white" id="film_eternals" data-film-title="Eternals" data-film-tags="action, adventure">
                    <div style="display: flex;">
                        <img src="Eternals.jpg" alt="Eternals" style="width:35%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/x_me3xsvDgk" title="Eternals Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Eternals</b></h3>
                        <h5>2021 ‧ Adventure/Action ‧ 2h 37m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>Following the events of Avengers: Endgame (2019), an unexpected tragedy forces the Eternals, ancient
                            aliens who have been living on Earth in secret for thousands of years, out of the shadows to reunite
                            against mankind's most ancient enemy, the Deviants.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal4">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal4" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Eternals</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP13<span class="popuptext" id="myPopup">Accesul copiilor sub 13 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 2h 36m <i class="fas fa-star"></i> 6.9/10 <i class="fas fa-desktop"></i> 3D
                                        </div>
                                        <div class="modal-body">
                                            <img src="Eternals.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 5 noiembrie 2021 <br>
                                                Director: Chloé Zhao <br>
                                                Language: EN <br>
                                                Cast: Gemma Chan, Richard Madden, Kumail Nanjiani, Lia McHugh, Brian Tyree Henry, Lauren Ridloff, Barry Keoghan, Don Lee
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-card-4 w3-margin w3-white" id="film_loveHard" data-film-title="Love Hard" data-film-tags="comedy, romance">
                    <div style="display: flex;">
                        <img src="LoveHard.jpg" alt="LoveHard" style="width:40%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3boMRfx6cjE" title="Love Hard Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Love Hard</b></h3>
                        <h5>2021 ‧ Comedy/Romance ‧ 1h 45m<span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>Hopeless romantic but eternally single LA journalist Natalie (Nina Dobrev) thinks things are beginning to
                            look up when she
                            swipes right on a dreamy guy from the East Coast, Tag (Darren Barnet). Taking a leap of faith she jumps on
                            a flight to
                            surprise her crush for the holidays, only to discover that she's been catfished by Tag's childhood friend
                            who is equally
                            unlucky in love, Josh (Jimmy O. Yang). This lighthearted romantic comedy chronicles her attempt to reel in
                            love.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal5">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal5" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Love Hard</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP13<span class="popuptext" id="myPopup">Accesul copiilor sub 13 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 45m <i class="fas fa-star"></i> 6.4/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="LoveHard.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 5 noiembrie 2021 <br>
                                                Director: Hernan Jimenez <br>
                                                Language: EN <br>
                                                Cast: Nina Dobrev, Jimmy O. Yang, Darren Barnet
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-card-4 w3-margin w3-white" id="film_intrusion" data-film-title="Intrusion" data-film-tags="thriller">
                    <div style="display: flex;">
                        <img src="Intrusion.jpg" alt="Intrusion" style="width:30%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tAJVDe205tY" title="Intrusion Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Intrusion</b></h3>
                        <h5>2021 ‧ Psychological thriller ‧ 1h 32m<span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>A woman moves to a small town with her husband, but is rattled when she is targeted for a home invasion.
                        </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal6">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal6" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Intrusion</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP14<span class="popuptext" id="myPopup">Accesul copiilor sub 14 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 32m <i class="fas fa-star"></i> 5.2/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="Intrusion.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 22 septembrie 2021 <br>
                                                Director: Adam Salky <br>
                                                Language: EN <br>
                                                Cast: Freida Pinto, Logan Marshall-Green
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-card-4 w3-margin w3-white" id="film_schumacher" data-film-title="Schumacher" data-film-tags="documentary">
                    <div style="display: flex;">
                        <img src="Schumacher.jpg" alt="Schumacher" style="width:37%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OQs9ZtdZjY0" title="Schumacher Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Schumacher</b></h3>
                        <h5>2021 ‧ Documentary ‧ 1h 52m<span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>Followed by millions worldwide. His strong will and triumphant fight to win against all odds put Michael
                            Schumacher at the
                            centre of global attention. Michael Schumacher's journey has captured the imagination of millions, but
                            there is a lot more
                            than motor racing to the success of this very private man. However, it is not only his fighting spirit and
                            striving for
                            perfection that define Michael Schumacher as a person; his self-doubt and insecurities complete the
                            picture of a sensitive
                            and reflected man. At the heart of Michael's story are his parents, his children and Corinna Schumacher,
                            his childhood
                            sweetheart and the love of his life. They are now ready to tell his story.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal7">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal7" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Schumacher</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP12<span class="popuptext" id="myPopup">Accesul copiilor sub 12 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 52m <i class="fas fa-star"></i> 7.5/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="Schumacher.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 15 septembrie 2021 <br>
                                                Director: Hanns-Bruno Kammertöns, Vanessa Nöcker, Michael Wech <br>
                                                Language: EN <br>
                                                Cast: Michael Schumacher, Jean Todt, Mick Schumacher, Sebastian Vettel, Bernie Ecclestone
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-card-4 w3-margin w3-white" id="film_noTimeToDie" data-film-title="No Time To Die" data-film-tags="action, adventure">
                    <div style="display: flex;">
                        <img src="NoTimeToDie.jpg" alt="No Time To Die" style="width:35%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BIhNsAtPbPI" title="No Time To Die Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>No Time To Die</b></h3>
                        <h5>2021 ‧ Action/Adventure ‧ 2h 43m<span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>Bond has left active service and is enjoying a tranquil life in Jamaica. His peace is short-lived when
                            his old friend
                            Felix Leiter from the CIA turns up asking for help. The mission to rescue a kidnapped scientist turns out
                            to be far more
                            treacherous than expected, leading Bond onto the trail of a mysterious villain armed with dangerous new
                            technology.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal8">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal8" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>No Time To Die</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP13<span class="popuptext" id="myPopup">Accesul copiilor sub 13 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 2h 43m <i class="fas fa-star"></i> 7.5/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="NoTimeToDie.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 8 octombrie 2021 <br>
                                                Director: Cary Joji Fukunaga <br>
                                                Language: EN <br>
                                                Cast: Daniel Craig, Rami Malek, Léa Seydoux, Lashana Lynch, Ben Whishaw, Naomie Harris, Jeffrey Wright
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-card-4 w3-margin w3-white" id="film_spiderMan" data-film-title="Spider-Man: No Way Home" data-film-tags="action, adventure">
                    <div style="display: flex;">
                        <img src="Spider-Man.jpg" alt="Spider-Man: No Way Home" style="width:35%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rt-2cxAiPJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Spider-Man: No Way Home</b></h3>
                        <h5>2021 ‧ Action/Adventure ‧ 1h 59m<span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>For the first time in the cinematic history of Spider-Man, our friendly neighborhood hero is unmasked and
                            no longer able
                            to separate his normal life from the high-stakes of being a Super Hero. When he asks for help from Doctor
                            Strange, the
                            stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal9">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal9" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Spider-Man: No Way Home</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP13<span class="popuptext" id="myPopup">Accesul copiilor sub 13 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 59m <i class="fas fa-star"></i> /10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="Spider-Man.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 17 decembrie 2021 <br>
                                                Director: Jon Watts <br>
                                                Language: EN <br>
                                                Cast: Tom Holland, Zendaya, Benedict Cumberbatch
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">10:00 AM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                    <td class="schedule-item">12:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">11:00 AM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white" id="film_lastNightInSoho" data-film-title="Last Night in Soho" data-film-tags="drama, horror">
                    <div style="display: flex;">
                        <img src="LastNightInSoho.jpg" alt="LastNightInSoho" style="width:25.5%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/AcVnFrxjPjI" title="Last Night In Soho Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Last Night in Soho</b></h3>
                        <h5>2021 ‧ Horror/Drama ‧ 1h 56m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>In acclaimed director Edgar Wright's psychological thriller, Eloise, an aspiring fashion designer, is
                            mysteriously
                            able to enter the 1960s where she encounters a dazzling wannabe singer, Sandie. But the glamour is not all
                            it
                            appears to be and the dreams of the past start to crack and splinter into something far darker.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal10">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal10" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Last Night in Soho</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP16<span class="popuptext" id="myPopup">Accesul copiilor sub 16 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 56m <i class="fas fa-star"></i> 7.5/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="LastNightInSoho.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 29 octombrie 2021 <br>
                                                Director: Edgar Wright <br>
                                                Language: EN <br>
                                                Cast: Thomasin McKenzie, Anya Taylor-Joy, Matt Smith, Michael Ajao, Terence Stamp, Diana Rigg
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">09:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Blog entry -->
                 <div class="w3-card-4 w3-margin w3-white" id="film_encanto" data-film-title="Encanto" data-film-tags="adventure, comedy">
                    <div style="display: flex;">
                        <img src="encanto.jpg" alt="Encanto" style="width:25.5%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/CaimKeDcudo" title="Encanto" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>Encanto</b></h3>
                        <h5>2021 ‧ Adventure/Comedy ‧ 1h 42m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>A young Colombian girl has to face the frustration of being the only member of her family without magical powers.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal11">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal11" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>Encanto</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AG<span class="popuptext" id="myPopup">Acces general.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 1h 42m <i class="fas fa-star"></i> 7.6/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="encanto.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 23 september 2021 <br>
                                                Director: Jared Bush, Byron Howard, Charise Castro Smith <br>
                                                Language: EN <br>
                                                Cast: Stephanie Beatriz(voice), María Cecilia Botero(voice), John Leguizamo(voice)
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">01:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">01:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">01:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">01:00 PM</td>
                                                    <td class="schedule-item">05:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">05:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">01:00 PM</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">03:00 PM</td>
                                                    <td class="schedule-item">05:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Blog entry -->
                 <div class="w3-card-4 w3-margin w3-white" id="film_houseOfGucci" data-film-title="House Of Gucci" data-film-tags="action, drama">
                    <div style="display: flex;">
                        <img src="houseofgucci.jpg" alt="HouseOfGucci" style="width:25.5%;object-fit: cover;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pGi3Bgn7U5U" title="House Of Gucci" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 500px; width: 800px;align-self: flex-end;"></iframe>
                    </div>
                    <div class="w3-container w3-light-grey">
                        <h3><b>House Of Gucci</b></h3>
                        <h5>2021 ‧ Action/Drama ‧ 2h 38m <span class="w3-opacity"></span></h5>
                    </div>

                    <div class="w3-container w3-light-grey">
                        <p>When Patrizia Reggiani, an outsider from humble beginnings, marries into the Gucci family, her unbridled ambition begins to unravel their legacy and triggers a reckless spiral of betrayal, decadence, revenge, and ultimately...murder.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="modal-button w3-hover-opacity" style="margin-bottom:15px; " href="#myModal12">READ MORE »</button>
                                <!-- The Modal -->
                                <div id="myModal12" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">×</span>
                                            <h2>House Of Gucci</h2>
                                            <div class="popup" onmouseover="popupShow()" onmouseout="popupHide">AP16<span class="popuptext" id="myPopup">Accesul copiilor sub 16 ani în sala este permis doar cu acordul sau împreună cu un părinte/tutore.</span>
                                            </div>
                                            <i class="far fa-clock"></i> 2h 38m <i class="fas fa-star"></i> 7.0/10 <i class="fas fa-desktop"></i> IMAX
                                        </div>
                                        <div class="modal-body">
                                            <img src="houseofgucci.jpg" class="modal-image">
                                            <div class="modal-title">Details :</div>
                                            <div class="modal-text">
                                                Release date: 7 november 2021 <br>
                                                Director: Ridley Scott <br>
                                                Language: EN <br>
                                                Cast: Adam Driver, Jared Leto, Al Pacino, Lady Gaga, Jack Huston
                                            </div>
                                            <br>
                                            <div class="modal-title">Program :</div>
                                            <table class="schedule-table">
                                                <tr>
                                                    <td>Monday</td>
                                                    <td class="schedule-item">08:30 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Wednesday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuesday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">09:30 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Friday</td>
                                                    <td class="schedule-item">06:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td class="schedule-item">08:00 PM</td>
                                                    <td class="schedule-item">12:00 PM</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- END BLOG ENTRIES -->
            </div>
        </div><br><br>

    <!-- Footer -->
    <footer class="w3-container w3-black w3-padding-32 w3-margin-top">
    <div class="w3-black w3-center w3-padding-24"><a href="#home" class="w3-hover-opacity">Back to Top</a>
    </footer>

    <script>
        // Get the button that opens the modal
        var btn = document.querySelectorAll("button.modal-button");

        // All page modals
        var modals = document.querySelectorAll('.modal');

        // Get the <span> element that closes the modal
        var spans = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal
        for (var i = 0; i < btn.length; i++) {
            btn[i].onclick = function(e) {
                e.preventDefault();
                modal = document.querySelector(e.target.getAttribute("href"));
                modal.style.display = "block";
            }
        }

        // When the user clicks on <span> (x), close the modal
        for (var i = 0; i < spans.length; i++) {
            spans[i].onclick = function() {
                for (var index in modals) {
                    if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                }
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                for (var index in modals) {
                    if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                }
            }
        }

        // When the user clicks on div, open the popup
        function popupShow() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }

        function popupHide() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("hide");
        }

        var datalistEl = document.getElementById("filmSearchList");//in datalistEl se intampla tot

        function appendFilmToDataList(filmId, filmTitle) { //este apelata in functia event listener on load
            var option = document.createElement("option"); //Create a new HTML <option> element
            option.setAttribute("data-film-id", filmId); //Set custom attribute "data-film-id" with value of filmId
            option.value = filmTitle; //Set <option value=filmTitle></option>
            datalistEl.appendChild(option); //Add this new <option> element to the datalist element as a child
        }

        var tagsContainerEl = document.getElementById("tags");
        var tags = ["All", "Action", "Adventure", "Comedy", "Documentary", "Drama", "Horror", "Romance", "Sci-fi", "Thriller"];
        var tagNotSelectedClassList = ["w3-tag", "w3-light-grey", "w3-small", "w3-margin-bottom", "w3-margin-right"]; //Class names for "not selected" tags
        var tagSelectedClassList = ["w3-tag", "w3-black", "w3-margin-bottom", "w3-margin-right"]; //Class names for "selected" tags

        window.onload = function() {
            let films = document.querySelectorAll('[id^="film_"]'); //Gets all html elements with id containing "film_"
            //Add each film as an option to the search input list
            films.forEach(function(film) {
                var filmId = film.id;
                var filmTitle = film.attributes["data-film-title"].value;
                appendFilmToDataList(filmId, filmTitle);
            });

            //programmatically add the tags in the tags container
            tags.forEach(function(tag) {
                var tagEl = document.createElement("div"); //Create a new HTML <div> element
                tagEl.id = tag.toLowerCase(); //Set div element's id=tag.toLowerCase();
                tagEl.innerHTML = tag; //Set div element's innerHTML(text)=tag
                tagEl.style.cursor = "pointer"; //Set cursor styling when hovering over this element
                tagEl.onclick = function() { //Set a click event listener on every tag <div> element, this will execute when you click a tag
                    document.getElementById("filmSearchInput").value = ""; //Delete text in searchbox
                    for (const tagSiblingEl of tagEl.parentElement.children) {
                        if (tagSiblingEl.id !== tagEl.id) {
                            tagSiblingEl.className = tagNotSelectedClassList.join(" "); //Remove selected class list from all other elements(tags), not the clicked one
                        }
                    }
                    tagEl.className = tagSelectedClassList.join(" "); //Add selected class list to the clicked tag

                    let films = document.querySelectorAll('[id^="film_"]');
                    for (const film of films) {
                        film.style.display = (film.attributes["data-film-tags"].value.includes(tagEl.id) || tagEl.id === tags[0].toLowerCase()) ? "block" : "none"; //Display films that have the selected tag by setting the display value of the div to "block"(to be displayed) or "none"(to be hidden)
                    }

                }
                //add classes from the tagClassList
                tagEl.className = tagNotSelectedClassList.join(" ");
                tagsContainerEl.appendChild(tagEl); //Add all tags to the tags container element
            });

            var filmSearchInputEl = document.getElementById("filmSearchInput");

            //check if input is from keyboard or option from list is selected by click
            filmSearchInputEl.addEventListener('keydown', (e) => {
                let allTagEl = document.getElementById("all");
                if (allTagEl.classList.contains("w3-small")) { //If user has tags selected, refresh, and use the "All" tag when searching by text
                    allTagEl.click();
                }
                eventSource = e.key ? 'input' : 'list'; //Check if the user types text to search, or selects option from searchlist
            });

            //do something based on this ^^^
            filmSearchInputEl.addEventListener('input', (e) => {
                value = e.target.value;
                let films = document.querySelectorAll('[id^="film_"]');

                if (eventSource === 'list') {
                    var selectedFilmId = "";
                    for (const optionEl of datalistEl.children) { //Search for the selected film id
                        selectedFilmId = optionEl.value === value ? optionEl.attributes["data-film-id"].value : "";
                        if (selectedFilmId !== "") {
                            break;
                        }
                    }

                    films.forEach(function(film) {
                        if (film.id !== selectedFilmId) { //Hide all the films that don't match the searched film
                            film.style.display = "none";
                        }
                    });
                }

                if (eventSource === 'input') {
                    films.forEach(function(film) {
                        if (film.style.display === "none") {
                            film.style.display = "block";
                        }
                    });
                }
            });
        }


        document.addEventListener('keydown', presshelp);

        function presshelp(e) {
            if(e.ctrlKey && e.keyCode === 112){
                location.href="Help.html";
            }
            
        }
    </script>
</body>

</html>