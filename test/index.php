<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>Specta</title>

<!-----------------------------------Import Starts-------------------------------->
<link rel="icon" type="image/png" href="index/favico.png">
<link href="css/main.css" type="text/css" rel="stylesheet" />

<script src="script/main-jquery.js" type="text/javascript"></script>
<script src="script/mkawork.js" type="text/javascript"> </script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="script/specta.js" type="text/javascript"></script>
<script src="script/jquery.js" type="text/javascript"></script><!-- -->
<script src="script/scroll.js" type="text/javascript"></script><!-- -->
<script type="text/javascript" src="script/jquery.parallax-1.1.3.js"></script><!-- -->
<script type="text/javascript" src="script/jquery.localscroll-1.2.7-min.js"></script><!-- -->
<script type="text/javascript" src="script/jquery.scrollTo-1.4.2-min.js"></script><!-- -->
<link rel="stylesheet" href="script/formoid-default-skyblue.css" type="text/css" />
<script type="text/javascript" src="script/formoid-default-skyblue.js"></script>



<script type="text/javascript">
$(document).ready(function(){
	$('#menu').localScroll(800);
	$('#work').parallax("50%", 0.1);
	$('#contact').parallax("50%", 0.5);
	//$('.bg').parallax("50%", 0.4);
	//$('#third').parallax("50%", 0.3);

})


</script>


<!-- GOOGLE ANALYTICS Tag -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-50431605-1', 'specta.in');
  ga('send', 'pageview');
</script>
<!-- GOOGLE ANALYTICS Tag END -->
</head>


<body>



<div id="menubar" style="height:80px;width:100%;background-color:#FFF;top:0px; z-index:99;position:fixed;">
<div id="selector" style="background-color:#FFF;">
</div>



<script type="text/javascript">
$(document).ready(function () {

		
	$("#selector").animate({right:"330px"},"slow");

    var $horizontal = $('#selector');

    $(window).scroll(function () {
        var s = $(this).scrollTop(),
            d = $(document).height(),
            c = $(this).height();

        scrollPercent = (s / (d - c));

        var position = (scrollPercent * ($(document).width() - $horizontal.width()));
        
				
				
        $horizontal.css({
			

           'left': position/4
		   
        });
    });
});
</script>

<img id="logo" src="images/specta_small.png" width="113" height="80" style="cursor:pointer;"/>
<ul id="menu">
<li id="homemenu" style="cursor:pointer;">Home</li>
<li id="workmenu" style="cursor:pointer;">Work</li>
<li id="aboutmenu" style="cursor:pointer;">About</li>
<li id="contactmenu" style="cursor:pointer;">Contact</li>
</ul>
</div>
<!--------------------------Menubar Div Ends---------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!------------------------------------------------Home Div starts---------------------------------------- -->
<div align="center" id="home" style="top:0px; position:absolute; width:100%; height:700px; background-color:#FFF; z-index:-1">
<!-------------------------SlideShow Div starts---------------->
    <div align="center" id="slideshow" style="position:relative; width:800px; height:500px; background-color:#FFF; top:100px; ">
    	<!--------------------- slide 1 Bill Gates ------------------>
        <div id="a">
            <div id="colorlegs" class="plot" style="position:absolute; left:143px; top:5px;">
                <img id="bc" src="images/bill color_min.png" />
            </div>
            <div id="bwlegs" class="plot" style="position:absolute; left:143px; top:5px;">
                <img id="bb" src="images/bill black.png" />
            </div>
        </div>
        <!----------------------------------------------------------->
        <!--------------------- slide 2 John Lenon ------------------>
        <!----------------------------------------------------------->
        <div id="b">
            <div id="colorlegs" class="plot">
                <img id="jc" src="images/johncolor_min.png" />
            </div>
            <div id="bwlegs" class="plot">
                <img id="jb" src="images/johnblack.png" />
            </div>
        </div>
        <!--------------------- slide 3 Pablo Picaso------------------>
        <div id="c">
            <div id="colorlegs" class="plot">
                <img id="pc" src="images/pablocolor_min.png" />
            </div>
            
            <div id="bwlegs" class="plot">
                <img id="pb" src="images/pabloblack.png" />
            </div>
        </div>
        <!--------------------- slide 4 Steve Jobs------------------>
        <div id="d">
            <div id="colorlegs" class="plot">
                <img id="sc" src="images/stevecolor_min.png" />
            </div>
            <div id="bwlegs" class="plot">
                <img id="sb" src="images/steveblack.png" />
            </div>
        </div>
<!-------------------------SlideShow Div ends---------------->
</div>
<!-------------------------Home Div ends--------------------------->
<!-------------------------Woek Div starts------------------------->
<!---------------work div starts------------>
<div align="center" id="work">
  <!-----------mka div starts ---->	
    <div style="height:110px;">
    </div>
  	<table style="position:relative; left:50px;" border="0" bordercolor="#003333">
    	<tr>
       	  <td>
            <div id="macbook" style=" position:relative; width:779px; height:420px; background-image:url(images/Macbook.png); 
            top:10px; left:-15px; z-index:100;">
                    <!--------------------- slide 1 ------------------>
                    <div id="mkalaptop1">
                        <div id="colorlegs" class="mkawork">
                            <img src="images/walk screen.jpg" style="position:absolute; z-index:1; width:534px; height:328px; left:122px; top:30px;" />    
                        </div>
                    </div>
                    <!--------------------- slide 2 ------------------>
                    <div id="mkalaptop2">
                        <div id="colorlegs" class="mkawork">
                            <img src="images/water screen.jpg" style="position:absolute; z-index:1; width:534px; height:328px;left:122px; top:30px;" />    
                        </div>
                    </div>
                    <!-------------------Slide 3-------------------------->
                    <div id="mkalaptop3">
                        <div id="colorlegs" class="mkawork">
                            <img src="images/Eye screen.jpg" style="position:absolute; z-index:1; width:534px; height:328px;left:122px; top:30px;" />    
                        </div>
                    </div>
            </div>
          </td>
          <td style="left:-90px; top:-10px; position:relative;" width="300px">
            <div id="mkatext" style="position:relative; background-color:#F7F7F7; ">
                    <img src="images/mkalogo.png" style="position:relative;" />
                    <div style="height:10px; width:30px;">
                    </div>
                    <p style="position:relative; text-align:left; line-height:23px;">
                    MKA (Maa-Ki-Aankh) is an application aiming to improve your health 
                    related issues caused by sitting in front of computers for long hours via reminders.
                    </p>
                    <div style="height:10px; width:30px;">
                    </div>
                    <p>
                    <div id="readmore" style="position:relative; width:150px; height:30px; top:0px; left:-2px; z-index:200;">
                       <a id="readmore" href="http://www.getmka.in" target="_blank">See more</a>
                    </div>
                    </p>
             </div> 
          </td>
        </tr>
    </table>
      <!-----------mka div ends ---->
  </div>
<!---------------work div ends------------>
<!------about div starts---------------------------->
<div align="center" id="about">
    <div style="height:110px;">
    </div>
	<table border="0" bordercolor="#0000"; style="width:500px;">
    	<tr>
       	  <td align="center" width="100%" style="font-size:62px;">Specta</td>
        </tr>
     </table>	 
     <table border="0" bordercolor="#0000"; style="width:500px;">
        <tr>
          <td align="center">We are young crazy and determind to make this world a more beautiful place to live in. We are a DELHI based start up and we are on our way to contribute the difference in technology. Apart from our projects, We love ideas and we love people.From electronics to code and to deisgn we are game for anything and everything that excites us.
          </td>
        </tr>
	  </table>     
      <table border="0" bordercolor="#0000"; style="width:500px;">
       	<tr>
          <td align="center" width="100%" style="font-size:62px;">Team</td>
        </tr>
      </table>  
      <table border="0" bordercolor="#0000" style="width:800px;">
        <tr>
            <td id="ady" width="160px" align="center">
                <img id="adypic" src="images/ady.png" style="display:inline; cursor:pointer;"/>
				<a href="https://www.facebook.com/divya.aditya91" target="_blank"><img id="adycont" src="images/ady fb.png" style="cursor:pointer;"/></a>
            </td>
            <td id="sankalp" width="160px" align="center">
                <img id="spic" src="images/sankalp.png" style="display:inline; cursor:pointer;"/>
                <a href="http://www.sankalpsinha.com/" target="_blank"><img id="scont" src="images/sankalp website.png" style="cursor:pointer;"/></a>
             </td>
            <td id="vishal" width="160px" align="center">
                <img id="vpic" src="images/vishal.png" style="display:inline; cursor:pointer;"/>
                <a href="mailto:vishal@specta.in?subject=Hello" target="_blank" style="color:white;">  
                <img id="vcont" src="images/vishal email.png" style="cursor:pointer;"/></a>
             </td>
            <td id="rahul" width="160px" align="center">
                <img id="rpic" src="images/apic.png" style="display:inline; cursor:pointer;"/>
                <a href="https://www.facebook.com/goodrahstar" target="_blank"> <img id="rcont" src="images/rahul fb.png" style="cursor:pointer;"/></a>
             </td>
            <td id="abhishek" width="160px" align="center">
                <img id="apic" src ="images/rahul.png " style="display:inline; cursor:pointer;"/>
               <a href="mailto:abhishek@specta.in?subject=Hello" target="_blank"> 
               <img id="acont" src="images/vishal email.png" style="cursor:pointer;"/></a>
             </td>
        </tr>
     </table>
    <div style="height:10px;">
    </div>
      <table border="0" bordercolor="#0000"; style="width:800px;">
        <tr>
        	<td width="160px" style="text-align:center;"><strong>Aditya</strong> 
            </br>Web developer</td>
            <td width="160px" style="text-align:center;"><strong>Sankalp</strong> 
            </br>UI Designer</td>
            <td width="160px" style="text-align:center;"><strong>Vishal</strong> 
            </br>Application Developer</td>
            <td width="160px" style="text-align:center;"><strong>Rahul</strong> 
            </br>Developer</td>
            <td width="160px" style="text-align:center;"><strong>Abhishek</strong> 
            </br>Hardware Developer</td>
        </tr>
     </table>
</div>
<!------about div ends------------------------------------>
<!-------contact div starts------------------------------>
<div align="center" id="contact">
	<div style="height:120px;">
    </div>
     <table border="0" bordercolor="#FFF"; style="width:1000px;">
    	<tr>
       	  <td align="center"  style="font-size:62px; color:#FFF;">
          Dreaming something big? Let's talk.
          
          </td>
          
        </tr>
     </table>	 
	<div style="height:40px;">
    </div>
    <table border="0" bordercolor="#FFF"; style="width:1000px;">
    	<tr>
       	  <td align="center" width="500px" height="300px"  style="font-size:62px; color:#FFF;">
          	  <div style="height:103px;">
			  </div>
              <img src="images/Flaticon_43.png" style="position:relative;left:-120px; top:80px;" height="50" width="70" />
              <img src="images/Flaticon_26.png" style="position:relative;left:-200px; top:-50px;" height="100" width="60" / >
              <p style="font-size:30px; position:relative;top:-160px; left:20px;">(+91)&nbsp;880-068-9759</br>(+91)&nbsp;808-721-4508</p>
              <p><u><a href="mailto:hello@specta.in?subject=Hello" target="_blank" style="color:white; font-size:30px; position:relative; top:-60px;">hello@specta.in</a></u></p>
          </td>
<td align="center" ><div id="message">
<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
echo $message;
$con=mysqli_connect("localhost","spectam","spectadb","spectadb");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO dropmessage(name,email,message) VALUES ('$name','$email','$message')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);


} else { ?>

  <form class="formoid-default-skyblue" method="post" action=""><div style="font-size:20px;" class="title">Drop a message</div>
           <div class="element-input" ><label class="title"></label><input class="large" type="text" placeholder="Your name" name="name"  /></div>
           <div class="element-email" ><label class="title"></label><input class="large" type="email" placeholder="Email-id" name="email" /></div>
           <div class="element-textarea" ><label class="title"></label><textarea class="medium" name="message" placeholder="Message" ></textarea></div>
           <div class="submit"><input style="width:365px; left:0px; top:1px;" type="submit" value="Submit" name="submit"/></div></form>

<?php } ?>
		
</td>
        </tr>
     </table>	 
</div>
<!-------contact div ends------------------------------>
<!-------footer div starts------------------------------>
<div align="center" id="footer">
<p>Copyirght @ Specta 2014</p>
</div>
<!-------footer div ends------------------------------>
</body>
</html>