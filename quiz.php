 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Learning Managment System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet"type="text/css" href="main.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    

    <style>
  body{
    
    background-image:url("");
    font-family: 'Raleway', sans-serif;
    cursor:auto;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100%;
    }
       
</style>
     </head>
  



  <body>

 <div class="rows">
      <div class="col-md-12 col-sm-8 col-xs-12">
        
      <h1 style="text-align: center;">Web Development Questions(HTML & CSS)</h1>

<hr>

    <p style="text-align: center;">this quistions for test your knowledge about HTML AND CSS. Answer the all quistions and check your knowledge about HTML and CSS. <br>(Maks are not given.!!)</p>

<hr>


      </div>

</div>
<!--first quiz-->
  <div class="container">
 <table>
  
          <img src="quiz/quiz2.png" alt="quiz1"  >
          <tr><h4>1.Are CSS property names case-sensitive?</h4>  </tr>
          <tr><td><h4 id="numtext1" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
             <tr> 
                <td><button class="btn btn-info" onclick="numclick('yes')">Yes</button></td>
                <td><button class="btn btn-info" onclick="numclick('no')">No</button></td>
              
              <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal('=')">check/clear</button></td></tr>
   

        
</table>
</div>

<hr style="border-color: #292c2f">
<!--second quiz-->
<div class="container">
<table>
  <tr>
    <h4>2.Does setting "padding:top" and "padding:bottom" on a inline elementt add to it dimenslons?</h4> 
    <td><h4 id="numtext2" style="width:200px;float:left;"></h4></td>
  </tr>
  <tr>  
    <td><button class="btn btn-info" onclick="numclick1('yes')">Yes</button></td>
    <td><button class="btn btn-info" onclick="numclick1('no')">No</button></td>
    <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal1('=')">check/clear</button></td>
    

  </tr>
</table>

</div>
<hr>
 <!--third quiz-->
   <div class="container">
 <table>
  
          <img src="quiz/quiz3-red.png" alt="quiz3" >
          <tr><h4>3.What is the colour of the "sausage"?</h4>  </tr>
          <tr><td><h4 id="numtext3" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
             <tr> 
                <td><button class="btn btn-info" onclick="numclick3('red')">Red</button></td>
                <td><button class="btn btn-info" onclick="numclick3('blue')">Blue</button></td>
             
             <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal3('=')">check/clear</button></td></tr>
   

        
</table>
</div>        
 <hr style="border-color: #292c2f">
      
<!--fourth quiz-->
 <div class="container">
 <table>
  
          <img src="quiz/quiz4.png" alt="quiz4"  >
          <tr><h4>4.Are CSS property names case-sensitive?</h4>  </tr>
          <tr><td><h4 id="numtext4" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
             <tr> 
                <td><button class="btn btn-info" onclick="numclick4('1')">It will move 5px downwards</button></td>
                <td><button class="btn btn-info" onclick="numclick4('2')">All element succeeding #example with move 5px upwards</button></td>
             
              <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal4('=')">check/clear</button></td></tr>
   

        
</table>
</div>

 <hr style="border-color: #292c2f">
<!--fifth quiz-->
<div class="container">
 <table>
  
          <img src="quiz/quiz5.png" alt="quiz5"  >
          <tr><h4>5.What will happen thr position of #example?</h4>  </tr>
          <tr><td><h4 id="numtext5" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
             <tr> 
                <td><button class="btn btn-info" onclick="numclick5('1')">It will move 5px left</button></td>
                <td><button class="btn btn-info" onclick="numclick5('2')">Al element preceading #example with move 5px to the right</button></td>
              
              <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal5('=')">check/clear</button></td></tr>
   

        
</table>
</div>
<hr style="border-color: #292c2f">
<!--sixth quiz-->
<div class="container">
 <table>
  
          <img src="quiz/quiz6.png" alt="quiz6"  >
          <tr><h4>6.Are unused style resource still downloaded by the browser?</h4>  </tr>
          <tr><td><h4 id="numtext6" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
             <tr> 
                <td><button class="btn btn-info" onclick="numclick6('yes')">Yes</button></td>
                <td><button class="btn btn-info" onclick="numclick6('no')">No</button></td>
              
             <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal6('=')">check/clear</button></td></tr>
   

        
</table>
</div>
<hr style="border-color: #292c2f">
<!--seventh quiz-->
  <div class="container">
 <table>
  
          <img src="quiz/quiz7.png" alt="quiz7"  >
          <tr><h4>7.On page load will "mypic.jpg" get downloaded by the browser?</h4>  </tr>
          <tr><td><h4 id="numtext7" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
               <tr> 
                <td><button class="btn btn-info" onclick="numclick7('yes')">Yes</button></td>
                <td><button class="btn btn-info" onclick="numclick7('no')">No</button></td><br>
                <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal7('=')">check/clear</button></td>
               </tr>
   

        
</table>
</div>
<hr style="border-color: #292c2f">
<!--eight quiz-->
 <div class="container">
 <table>
  
          <img src="quiz/quiz8.png" alt="quiz8"  >
          <tr><h4>8.Does "overflow:hidden" create a new block formating context?</h4>  </tr>
          <tr><td><h4 id="numtext8" style="width:200px;float:left;border: 2px;"></h4></td></tr>
          
           
             <tr> 
                <td><button class="btn btn-info" onclick="numclick8('yes')">Yes</button></td>
                <td><button class="btn btn-info" onclick="numclick8('no')">No</button></td>
            
              <td style="padding-left: 100px;"><button class="btn btn-delete" onclick="equal8('=')">check/clear</button></td></tr>
   

        
</table>
</div>

<hr style="border-color: #292c2f">

<!--footer-->

<footer class="footer-full">
  <hr style="border-color: #292c2f">

            <div class="footer-right">

                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
                

            </div>

            <div class="footer-left">

                <p id="footer_desc">

                 57, Ramakrishna Road, <br>Colombo – 06, Sri Lanka.<br>
                 Hotline: +94(0) 722 727272<br>
        E-mail: admission@iit.ac.lk
                </p>

                <p class="footer-links">
                    <a href="https://localhost/nsbm/index.php">Home</a>
                    ·
                    <a href="#">Our Courses</a>
                    ·
                    <a href="https://localhost/nsbm/about.php">About Us</a>
                    
                  </p>

                <p style="font-weight: bold;text-align: center;color:#292c2f"> NSBM Team_Veilux &copy; 2017</p>
            </div>


<!--script part-->

    <!--first script-->
              <script type="text/javascript">
              function numclick(nu)
              { 
              document.getElementById("numtext1").innerHTML+=nu; 
              }
              function equal(){
              var answer=document.getElementById("numtext1").innerHTML;
              var answer; 
              if (answer=='yes')
                {
                answer="Answer is wrong";
                }

                else if(answer=='no')
                {
                answer="answer is correct";
                }
                else
                {
                answer="";
                } 
                document.getElementById("numtext1").innerHTML=answer;
                
               
            }
            
            </script>
<!--second script-->
       
               <script type="text/javascript">
              function numclick1(nu)
              { 
              document.getElementById("numtext2").innerHTML+=nu; 
              }
              function equal1(){
              var answer1=document.getElementById("numtext2").innerHTML;
              var answer1; 
              if (answer1=='yes')
                {
                answer1="Answer is wrong";
                }

                else if(answer1=='no')
                {
                answer1="answer is correct";
                }
                else
                {
                answer1="";
                } 
                document.getElementById("numtext2").innerHTML=answer1;
                
               
            }
            
            </script>
<!--third script-->

 <script type="text/javascript">
              function numclick3(nu)
              { 
              document.getElementById("numtext3").innerHTML+=nu; 
              }
              function equal3(){
              var answer3=document.getElementById("numtext3").innerHTML;
              var answer3; 
              if (answer3=='blue')
                {
                answer3="Answer is wrong";
                }

                else if(answer3=='red')
                {
                answer3="answer is correct";
                }
                else
                {
                answer3="";
                } 
                document.getElementById("numtext3").innerHTML=answer3;
                
}
</script>
<!--fourth script-->
<script type="text/javascript">
              function numclick4(nu)
              { 
              document.getElementById("numtext4").innerHTML+=nu; 
              }
              function equal4(){
              var answer4=document.getElementById("numtext4").innerHTML;
              var answer4; 
              if (answer4=='1')
                {
                answer4="Answer is wrong";
                }

                else if(answer4=='2')
                {
                answer4="answer is correct";
                }
                else
                {
                answer4="";
                } 
                document.getElementById("numtext4").innerHTML=answer4;
                
               
            }
            
            </script>

<!--fifth script-->
<script type="text/javascript">
              function numclick5(nu)
              { 
              document.getElementById("numtext5").innerHTML+=nu; 
              }
              function equal5(){
              var answer5=document.getElementById("numtext5").innerHTML;
              var answer5; 
              if (answer5=='1')
                {
                answer5="Answer is correct";
                }

                else if(answer5=='2')
                {
                answer5="answer is wrong";
                }
                else
                {
                answer5="";
                } 
                document.getElementById("numtext5").innerHTML=answer5;
                
               
            }
            
            </script>
<!--sixth script-->
  <script type="text/javascript">
              function numclick6(nu)
              { 
              document.getElementById("numtext6").innerHTML+=nu; 
              }
              function equal6(){
              var answer6=document.getElementById("numtext6").innerHTML;
              var answer6; 
              if (answer6=='yes')
                {
                answer6="Answer is wrong";
                }

                else if(answer6=='no')
                {
                answer6="answer is correct";
                }
                else
                {
                answer6="";
                } 
                document.getElementById("numtext6").innerHTML=answer6;
                
               
            }
            
            </script>
<!--seventh script-->
 <script type="text/javascript">
              function numclick7(nu)
              { 
              document.getElementById("numtext7").innerHTML+=nu; 
              }
              function equal7(){
              var answer7=document.getElementById("numtext7").innerHTML;
              var answer7; 

              if (answer7=='no')
                {
                answer7="Answer is wrong";
                }

                else if(answer7=='yes')
                {
                answer7="Answer is correct";
                }
                else
                {
                answer7="";
                } 
                document.getElementById("numtext7").innerHTML=answer7;
                
               
            }
            
            </script>
<!--eight script-->
<script type="text/javascript">
              function numclick8(nu)
              { 
              document.getElementById("numtext8").innerHTML+=nu; 
              }
              function equal8(){
              var answer8=document.getElementById("numtext8").innerHTML;
              var answer8; 
              if (answer8=='yes')
                {
                answer8="Answer is correct";
                }

                else if(answer8=='no')
                {
                answer8="answer is wrong";
                }
                else
                {
                answer8="";
                } 
                document.getElementById("numtext8").innerHTML=answer8;
                
               
            }
            
            </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>