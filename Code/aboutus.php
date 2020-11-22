<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	<title>Our Team Section</title>
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'Josefin Sans', sans-serif;background-image:url('../Base/asset/product image/back.jpg');
    background-repeat: no-repeat;
  background-attachment: fixed;
}
.container
    {
        width: 100;
        height: auto;
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
    }
    
    .about
    {
        width: 100%;
        height: 100%;
        margin-top: 5rem;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }
    .text
    {
        font-family:  sans-serif;
        font-size: 30px;
        color:#81c644 ;
        text-shadow: 0px,15px,12px,#000;
    }
    .line
    {
        width: 200px;
        height: 8px;
        display: block;
        position: relative;
        left: 10%;
        box-shadow: 0px,15px,12px,0px;
        border-radius: 5px;
        
    }
    .content
    {
        width: 100%;
        height: auto;
        font-size: 25px;
        font-family: sans-serif;
        line-height: 30px;
        text-align-last: center;
        padding-left: 15px;
        padding-right: 15px;
        color: whitesmoke;
        
    }
    footer
    {
        width: 100%;
        height: auto;
        background-color: darkseagreen;
        font-size: 25px;
        text-align: center;
        line-height: 50px;
    }

.wrapper{
  margin-top: 10%;
   
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}
    
    img{
        border-radius: 50%;
        
        
    }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="about">
                <div class="text">
                    <h1>About us</h1>
                    <br>
                    <div class="line">
                    </div>
                </div>
            </div>
            <div class="content">
                <p>We are proud to be different and we work differently too.We improvise, experiment and listen to our customers.
                We bring together teams to collaborate in an inclusive environment where all voices are heard.
                Our purpose is to empower people to upgrade their lives.
                Our ambition is to help BHU people exchange goods and services through products and services customers love.</p>

            </div>
        </div>
        <div class="wrapper">
  <h1 style="color: #81c644;">Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="asset/product%20image/a7.jpg" alt="A">
      </div>
      <h3>Anupam</h3>
      <p class="role">UI developer</p>
      <p>Anupam is our UI developer. He is very good at photo editing, logo making, vector art and also a very good gamer. Tho he is very lazy but he does his work quickly and nicely. For now he is working on <span style="color:skyblue; font-weight:bold;"><i>latest web development frameworks</i></span>. Currently he is pursuing Master of Computer Application at BHU.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="asset/product%20image/r2.jpg" alt="R">
      </div>
      <h3>Rohit</h3>
      <p class="role">Front-end developer</p>
      <p>Rohit is our Front-end developer. He is good at Java, python and other programming languages. Despite of wearing spectacles his vision is very sharp and clear. For now he is working on <span style="color:skyblue; font-weight:bold;"><i>Face recognition</i></span> which is a Machine learning project. Currently he is pursuing Master of Computer Application at BHU.</p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="asset/product%20image/s1.jpg" alt="S">
      </div>
      <h3>Shubham</h3>
      <p class="role">Back-end developer</p>
      <p>Shubham is our Back-end developer. He is good at C, python, c++ and php. Shubham always pays alot of attention to the work and he does it properly. He is a very hard working collegue. for now he is working on <span style="color:skyblue; font-weight:bold;"><i>Java Projects</i></span>. Currently he is pursuing Master of Computer Application at BHU. </p>
    </div>
      <div class="team_member">
      <div class="team_img">
        <img src="asset/product%20image/sa5.jpg" alt="S">
      </div>
      <h3>Saurabh</h3>
      <p class="role">Back-end developer</p>
      <p>Saurabh is also a Back-end developer. He is good at C, C++, Java, Logical thinking and he catches the problems very quickly. For now he is working on <span style="color:skyblue; font-weight:bold;"><i>Face recognition</i></span> which is a Machine learning project. Currently he is pursuing Master of Computer Application at BHU. </p>
    </div>
      <div class="team_member">
      <div class="team_img">
        <img src="asset/product%20image/aa2.jpg" alt="A">
      </div>
      <h3>Aayush</h3>
      <p class="role">Support Lead</p>
      <p>Aayush is our supporting leader, whenever someone needs any help they just call Aayush and he is there for better advices. For now he is working on <span style="color:skyblue; font-weight:bold;"><i>Artifical Intelligence and Machine learning</i></span>. Currently he is pursuing Master of Computer Application at BHU. </p>
    </div>
      <div class="team_member">
      <div class="team_img">
        <img  src="asset/product%20image/vivek3.jpg" alt="V">
      </div>
      <h3>Vivek</h3>
      <p class="role">Tester</p>
      <p>Vivek is our tester and debugger. If there is a bug, Vivek is there for resolving it without any trouble. For now he is working on <span style="color:skyblue; font-weight:bold;"><i>Finding malaria disease through CNN</i></span> which is a Data Science Project. Currently he is pursuing Master of Computer Application at BHU.  </p>
    
  </div>
</div>	
            <footer>
                <a href="index.php">Home</a>
                <a>|</a>
                <a href="login.php">Login</a>
                <a>|</a>
                 <a href="signup.php">Signup</a>
                <a>|</a>
                <a href="sell.php">sell<br></a>
                
                <a>Contact us:</a>
                <a style="color:primary;">shuklasaurabh534@gmail.com&nbsp;|</a>
                <a style="color:primary;">vivekkumar0252525@gmail.com&nbsp;<br></a>
                <a>Telephone:</a>
                <a style="color:primary;">9935620733<br></a>
                <a>Follow us on:</a>                
                <a><i class="fa fa-facebook"></i>&nbsp;<i class="fa fa-twitter"></i>&nbsp;<i class="fa fa-instagram"></i>&nbsp;<i class="fa fa-google-plus"></i></a>
                
                <p>copyright &copy; 2019 @MCA Students<br></p>
                
            </footer>

    </body>
</html>