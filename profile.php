

<!DOCTYPE html>
<html>
<style>

*{
   position:relative ; 
   box-sizing:border-box;
   font-size: 20px;
   font-family: 'roboto',sans-serif;
}
.content {
   max-width: 1110px;
   padding: 8px;
   margin: auto;
}
a {
   text-decoration: none;
}
header{
   width:100%; 
   height: 200px;
   box-shadow: 0 2px 10px 0 rgba(25,25,25,0.5), 0 4px 13px 0 rgba(25,25,25,0.2);
   background:teal;
   display: table;

}
header .name{
   display: table-cell;
   vertical-align: middle;
   font-size: 25px;
   color: white;
   text-align:center;
}
.ava{
   overflow: auto;
   display: table-cell;
   vertical-align: middle;
   width:50%;
}
.ava img{
   position: relative;
   float: right;
   right: 0.5em;
   border: 2px solid white;
   width:180px;   
   height: auto;
   border-radius: 100px; 
}

aside{
   float: left;
   width:30%; 
   margin-top: 10px;

}
aside .name{
   width:30%;
   display:inline-block;
}
aside .vl{
   width:68%;
   display:inline-block;
}

aside .skill{
   width: 85%;
   height: 10px;
   margin-bottom: 20px;
   background: lightgray;
   border-radius: 5px;
}
p{
   display: block;
   clear:both;
   word-wrap: break-word;
   margin-top: 0px; 
}


aside .skill-right {
   position: absolute;
   width: 80%;
   height: 10px;
   background: teal;
   border-radius: 5px;
   margin: 0;
   padding: 0;  
   left: 0;
}
div.r1{
   width:90%;
}
div.r2{
   width:75%;
}
div.r3{
   width:40%;
}
div.r4{
   width:90%;
}
div.r5{
   width:70%;
}
div.r6{
   width:65%;
}
div.r7{
   width:80%;
}

section{
   float: left;
   width:69%; 
   margin-top:10px ;
   margin-left:8px;
}
.box{
   display:block; 
   padding:14px;
   margin: 8px 0;
   background:white;
   width:100%;
   box-shadow:0 0 5px rgba(25,25,25,0.3), 0 0 8px rgba(25,25,25,0.1) ;
}

.title{
   position: absolute;
   width: 100%;
   top: 0px;
   left: 0;
   background: #d1d1d1;
   padding: 5px;
   font-size: 20px;
   color: teal;
}
.title >i{
   font-size:26px!important;
}
i{
   font-size:18px!important;
   color: teal;
   margin-right: 10px;

}
ul{
   padding-left: 16px;
}
.padd-top {
   padding-top: 35px;
}
.padd-left{
   padding-left: 25px;
   word-wrap: break-word;
}

@media only screen and (max-width:1000px){
   aside, section {
      width:100%;
      margin-left: 0;
   }

}
@media only screen and (max-width:500px){
   .ava{
      width:100%;
      position: relative;
      top:50px;
      clear: both;
      overflow: auto;
      display: block;
   }
   .ava img{
      float: none;
      right: 0;
      border: 6px solid white;
      margin:auto;
      width:180px;   
      height: auto;
      border-radius: 100px; 
      position: relative;
      left: 50%;
      transform: translateX(-50%);
   }
   header .name{
      text-shadow: 0 0 3px white;
      color: teal;
      width: 100%;
      position: absolute;
      bottom: -70px;
      text-align: center;
      font-weight: bolder;

   }
   


   .content {
      margin-top: 60px;
   }

}

footer{
   width: 100%;
   height: 60px;
   clear: both;
   background: teal;
   box-shadow: 0 -2px 10px gray;
   text-align: center;
}


</style>
<head>
  
    <title>About me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <header>
    
        <div class="name " >
           
           	 <?php
             session_start(); 
             echo $_SESSION['first_name']." ".$_SESSION['last_name'];

             ?>

        
        </div>

        <div class="ava">
            <img src="/Base/asset/avatar.png" alt="avatar" >
        </div>    

    </header>


    
    <div class="content" align="center">
        <aside class="info ">
            <div class="box">
                <p class="title">
                    <i class="fa fa-info-circle"></i>User Details
                </p><br><br>


               

                <p> <b>Mobile no:</b><br> <?php
              echo $_SESSION['contact_no'];
             ?></p>            

                
                  <p>  
                    <b>Email Id:</b>
                      <?php
                      echo $_SESSION['email'];
                      ?>
                   </p> 

                  <a href="editdetails.php">
                	Edit Details</a>             

            </div> 

            

          
            
        
    <footer>    </footer>
</body>
</html>