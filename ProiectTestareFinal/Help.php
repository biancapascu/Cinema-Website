<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Help Center</title>
</head>

<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>


<body>

    <header id="help" class="w3-container w3-center w3-padding-32">
        <h1><b>Lights Off</b></h1>
        <p>  <span class="w3-tag">cinema</span></p>
    </header>
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1 " >
            <h1>Help Center</h1>

            <h2 style=" font-size: 24px !important">FAQ </h2>
            <br>
            <button type="button" class="collapsible">How does "Book a seat" work?<i class="fas fa-chevron-down w3-margin-right" style=" float: right"></i></button>
            <div class="content">
                 <p>The "NOW SHOWING" section of our main page presents the current movies. All you have to do is to click the "Book a seat" button of the desired movie. You will be redirected to our booking page where you will be able to fill in the form displayed with the movie and personal details.</p>
            </div>
            <button type="button" class="collapsible">How can i see all available movies and their description?<i class="fas fa-chevron-down w3-margin-right" style=" float: right"></i></button>
            <div class="content">
                <p>The "EXPLORE MORE" section of our main page shows all available movies and their descriptions. Each movie is assigned a section that contains the movie poster, trailer, release date, genre and duration. The "READ MORE" button displays the program in which the movie will be broadcast.</p>
            </div>
            <button type="button" class="collapsible">How do i search for movies by genre?<i class="fas fa-chevron-down w3-margin-right" style=" float: right"></i></button>
            <div class="content">
                <p>The first item in the "EXPLORE MORE" section of our main page is a search box for available movies. They can be searched by title or genre. To search by genre, you can select a genre from the list of displayed genres.</p>
            </div>
            <br><br>
            <div>
            <h3 style=" font-size: 24px !important">Terms and Conditions</h3>
            <button type="submit" class="w3-button w3-black w3-margin-bottom" id="home" ><a href="Contact.php"><i class="fab fa-readme w3-margin-right"></i>Read More</a></button>
            </div>
            <br>

            <button type="submit" class="w3-button w3-black w3-margin-bottom" id="home" ><a href="Contact.php"><i class="fa fa-paper-plane w3-margin-right"></i>Contact us</a></button>
        </div>
    </div>
    
    <footer></footer>

    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>

</html>