<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];

        $query = "INSERT INTO contact (Name,Email,Message) VALUES ('$Name','$Email','$Message')";

        $result = mysqli_query($con,$query);
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippians 4:13</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="screen and (max-width:800px)" href="tablet.css">
    <link rel="stylesheet" href="screen and (max-width:530px)" href="phone.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    </head>
    <body>
      
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#About">About me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#Information">Information</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>

        <section id="home">
            <div class="main">
                <h1 class="headings">I AM <br>CHRISTIAN GEORGE SANTOS</h1>
                <button class="btn">
                   INFORMATION TECHNOLOGY THIRD YEAR COLLEGE 
                </button>
                <br>
                
                <p><span class="auto-type"></span></p>
            </div>

            <section id="Video">
                <video src="My.mp4" width="640" height="360" autoplay loop controls></video>
            </section>
         

            </section>
            

            <section id="About">
                    <h1 class="headings">ABOUT ME</h1>
                    <div id="pic">
                    <img src="Xtian.jpg" alt="">
                    <div id="intro">
                        <h2>You can call me George</h2>
                        <p>I am Christian George Santos, currently living at Batasan Bata, San Miguel, Bulacan and I am 22 years old. <br>
                            I am the second child among four children and I am playing taekwondo for sports. 
                            My family is my strength and weakness. <br>
                            They give me hope whenever I feel tired already and when I look at them, 
                            they are giving me so much reason to work hard and strive harder to give them the life that they truly deserve. 
                            When I see them sad, it makes me sad also that is why I am always trying to make them happy and proud even with the little things that I am doing.</p>
                            <p>We surpassed lots of problem before and I know that we are more ready today to face all the problems that is coming. I love helping people with the best of my ability because it makes me happy when I made someone's day by giving them an act of kindness. Maybe for me it is just a little thing but for them it means a lot. We don't know. I truly appreciate kindness and my heart becomes happy whenever someone compliments me. I always look on the positive side of life because there are so much negative people nowadays who thinks negatively so I shouldn't be one. Sometimes, I make decisions without thinking about it twice that is why I always come up with a wrong one.
                                And about in our new normal and new normal of study I have a good relationship with my classmates and teachers as I am generally sociable in personality. I am thoughtful and helpful in school. As for my study. I pay special attention to the development of my thinking manners so that I become quick in thinking and broad in knowledge. Seeking reality and progress, I Have achieved excellence in my study. Morally I may say I am also excellent, because I am strict with myself, following the school’s rules and regulations, taking active part in various activities. In addition, I have developed many hobbies in my life. For example, I love reading, computer internet, music and sports. I have been a champion several times in Taekwondo and others sports like football, sepak takraw, touch football. 
                                   In short, as a student studying at BASC I am determined to make my own contribution to our school. Because someday I want to become a professional person and be successful in my dreams in life. I want to help my family so I can lift them out of poverty. To do that I will try and do my best to fulfill that. No matter how hard life is now I will try my best to make it happen. Because nothing is impossible for the person who tries and pay attention to their dreams. Poverty is not an obstacle to give up, there is poverty to test us so that we can be strong and learn from the things we do wrong and when you learn that the day will come in your life, it will not so difficult because you have learned and passed through first and you also know that with every trial and difficulty there is God who will help to lift us up and lift us out of poverty.</p>
                    </div>
                </div>
            </section>


            <section id="portfolio">
                <h1 class="headings">PORTFOLIO</h1>
                <div class="gallery">
                    <img src="Chan1.jpeg" alt="">
                    <img src="Chan4.jpeg" alt="">
                    <img src="Chan3.jpeg" alt="">
                    <img src="Chan7.jpg" alt="">
                    <img src="Chan5.jpeg" alt="">
                    <img src="Chan6_n.jpg" alt="">
                    
                </div>
            </section>

            <section id="Information">
                <h1 class="headings">INFORMATION</h1>
                <div class="row">
                    <div class="box">
                        <img src="ha.png" alt="">
                        <h1 class="headings">Personal Information</h1>
                        <strong>•Your First Name:</strong> Christian George</p>
                        <strong>My Birthday</strong> October 19, 2000</p>
                        <strong>•My Age</strong> 2 Years Old.</p>
                        <strong>•Resident of</strong> 176 Acasia St. Purok 7</p>
                        

                    </div>

                    <div class="box">
                        <img src="ha.png" alt="">
                        <h1 class="headings">Educational Background </h1>
                        <strong>•Tertiary Education</strong> Bulacan Agricultural State College </p>
                        <p>Bachelor Of Science Information Technology</p>
                        <p>2020 - Present</p>
                        <strong>•Secondary Education</strong> San Miguel National High School </p>
                        <p>2019 - 2020</p>
                        <p>St. Paul University at San Miguel</p>
                        <p>2018</p>
                    </div>
                    <div class="box">
                        <img src="ha.png" alt="">
                        <h1 class="headings">My Bible Verse</h1>
                        <h2>'I can do all things through Christ who Strengthens Me' </h2>
                        <p>(Philippians 4:13).”</p>
                    </div>
                    

                </div>
            </section>

            <section id="contact">
                <h1 class="heading">CONTACT</h1>
                <form method="post" class="form">
                    
                <input type="text" name="Name" class="input" placeholder="Enter Your Name">
                <input type="Email" name="Email" class="input" placeholder="Enter Your Email">
                <textarea name="Message" id="msg" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn2" name="submit">Submit</button>

            </section>
        </form>

      <script src="Index.js"></script>

    

        </script>
  </body>
</html>
