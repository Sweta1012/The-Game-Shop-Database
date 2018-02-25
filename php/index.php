<?php 

?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home | Database Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/style.css" media="screen">
<!-- other stuff here -->

</head>


<body>
	<div>
    
    <!-- Main Body Section-->
    
    	<div id="header">
    		<div id="container">
            	<div>
                	<a href="index.php"><div style="padding-top:3px;  width:200px; display:inline-block;">
                    	<font style="font-family:'Arial Black', Gadget, sans-serif; font-size:30px; color:#FFF;">G</font>
                        <font style="font-family:'Arial Black', Gadget, sans-serif; font-size:30px; color:#0AF;">M</font>
                        <font style="font-family:'Arial Black', Gadget, sans-serif; font-size:20px; color:#FFF;">SHOP</font>
                    </div></a>
                        <div style="margin:0px 0 0 0; height:50px; display:inline-block; float:right; width:950px;">
                        <a href="login.php"><div id="menu" class="login">
                            <b>Login</b>
                        </div></a>
                        <a href="contactus.php"><div id="menu">
                            <b>Contact Us</b>
                        </div></a>
                        <a href="newrelease.php"><div id="menu" >
                            <b>New Release</b>
                        </div></a>
                        <a href="movies.php"><div id="menu">
                            <b>Movie</b>
                        </div></a>
                        <a href="games.php">
                        <div id="menu" >
                            <b>Game</b>
                        </div></a>
                        <a href="index.php"><div id="menu" class="menu_active">
                            <b>Home</b>
                        </div></a>
                        
                    </div>
                </div>
            </div>
        </div>
    
    
        <div id="status_panel" style="height:30px; width:100%; background-color:#EEE;">
            <div id="container" style=" padding-top:5px; font-family:Verdana, Geneva, sans-serif; color:#08D;" >
            	Login For Better Suggestions and features...
                <input type="text" placeholder="Search" style="border:1px solid #ddd; border-radius:5px; height:22px; width:600px; padding:5px 10px;"/>
                <input type="button" value="Search" style="color:#FFF; background-size:contain; padding:5px; background-color:#0aF; border-radius:5px; border:1px solid #EEE; "/>
                
                <a href="login.php"><font style="float:right;">Add New User | Existing User</font></a>
            </div>
        </div>
        
    
    <!-- Main Body Section-->
    
    
        <div id="body">
        	<div id="container">
           	  <div id="main_Movies" style="height:550px; margin-top:5px;">
       	    	<iframe class="slide" width="1295" height="545" src="https://www.youtube.com/embed/QNO9n9TthZg" frameborder="0" allowfullscreen></iframe>
                <iframe class="slide" width="1295" height="545" src="https://www.youtube.com/embed/z33Mjdg7BBY" frameborder="0" allowfullscreen></iframe>
                <iframe class="slide" width="1295" height="545" src="https://www.youtube.com/embed/_7SbgvtBDCQ" frameborder="0" allowfullscreen></iframe>
                <iframe class="slide" width="1295" height="545" src="https://www.youtube.com/embed/nFBrgeSjj-0" frameborder="0" allowfullscreen></iframe>                
                
                    <button style="position:absolute; top:350px; border-radius:25px; border:none; height:50px; width:50px; display:inline-block;" onClick="plusIndex(1);">&#10094;</button>
                    <button style="position:relative; top:250px;  border-radius:25px; border:none; height:50px; width:50px;  display:inline-block;float:right;" onClick="plusIndex(-1);">&#10095;</button>
                
                </div>
                
                <hr style="margin:20px auto;">
                
                
                <div id="suggestions" style="height:600px;  margin-top:10px;">
                	<div id="main_heading" style="height:70px; padding-left:10px; font-family:Verdana, Geneva, sans-serif;  color:#0AF;">
                    
                    
                    	<div id="button" style="padding:10px 15px; font-size:25px; display:inline-block; float:left; margin-right:30px;">Suggestions</div>
                        
                        <div id="small_button">Top rated</div>
                        <div id="small_button">Top viewed today</div>
                        <div id="small_button">Most Fevorite</div>
                        <div id="small_button">Featured</div>
                        
                       	<a><div style="float:right; display:inline-block; margin-top:12px;">View All</div></a>
                  </div>
                  
                  
                  <div style=" height:450px; padding:20px;">
                  
                      <div style="font-family:Verdana, Geneva, sans-serif; color:#0AF; font-size:18px;">Movies</div>
                        
                        <a href="Movie_product.php"><div id="thumbnails" style="background-image: url(images/bahu.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                            
                            <div id="name"> 
                            <div id="play_tag"></div>
                            Bahubali 2 
                            </div>
                        </div></a>
                        
                        <div id="thumbnails" style="background-image: url(images/beforifall.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                            <div id="name"> 
                            <div id="play_tag"></div>
                            Before I Fall 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image:url(images/beauty.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                           Beauty And Beast 
                            </div>
                            
                        </div>
                        <div id="thumbnails" style="background-image: url(images/darker.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Fifty Shades Of Gray 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image: url(images/life.png); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            L I F E 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image:url(images/logan.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Logan 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image: url(images/power.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Power Rangers 
                            </div>
                        </div>
                        
                    
                    
                    
                    <div style="font-family:Verdana, Geneva, sans-serif; color:#0AF; margin-top:5px; font-size:18px;">Games</div>
                    
                    <a href="game_product.php"><div id="thumbnails" style="background-image: url(images/images.jpeg); background-size:cover; background-repeat:no-repeat; background-position:0px 0px;">
                    	
                        <div id="name"> 
                        <div id="play_tag"></div>
                        Call of Duty: Infinite Warfare 
                        </div>
                    </div></a>
                    
                    <div id="thumbnails" style="background-image:url(images/mars.jpg); background-size:cover;">
                    	
                        <div id="name"> 
                        <div id="play_tag"></div>
                        Mars 
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/Neir.jpg); background-size:cover;">
                    	 <div id="name"> 
                        <div id="play_tag"></div>
                       Neir Automata
                        </div>
                        
                    </div>
                    <div id="thumbnails" style="background-image: url(images/outlast.jpg);background-size:cover;">
                    	 <div id="name"> 
                        <div id="play_tag"></div>
                        OUT LAST
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/battele.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Battle Field 1
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/sniper.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Sniper: Ghost Warrior 3
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/Ryse_box_art.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Ryse: Son of Rome
                        </div>
                    </div>
                    
                  </div>
              </div>;
               
        <hr style="margin:20px auto;">
               
                
                <div id="Movie" style="height:600px;  margin-top:10px;">
                	<div id="main_heading" style="height:70px; padding-left:10px; font-family:Verdana, Geneva, sans-serif;  color:#0AF;">
                    
                    
                    	<div id="button" style="padding:10px 15px; font-size:25px; display:inline-block; float:left; margin-right:30px;">Movies</div>
                        
                        <div id="small_button">Top rated</div>
                        <div id="small_button">Top viewed today</div>
                        <div id="small_button">Most Fevorite</div>
                        <div id="small_button">Featured</div>
                        
                       	<a><div style="float:right; display:inline-block; margin-top:12px;">View All</div></a>
                  </div>
                  
                  <div style="height:500px; padding:10px;">
                        <div id="thumbnails" style="background-image:url(images/gardian.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                            
                            <div id="name"> 
                            <div id="play_tag"></div>
                            Guarians of Galaxy 2 
                            </div>
                        </div>
                        
                        <div id="thumbnails" style="background-image: url(images/beforifall.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                            <div id="name"> 
                            <div id="play_tag"></div>
                            Before I Fall 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image:url(images/beauty.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                           Beauty And Beast 
                            </div>
                            
                        </div>
                        <div id="thumbnails" style="background-image: url(images/darker.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Fifty Shades Of Gray 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image: url(images/life.png); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            L I F E 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image:url(images/logan.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Logan 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image: url(images/power.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Power Rangers 
                            </div>
                        </div>
                                                
                        <div id="thumbnails" style="background-image:url(images/gardian.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                            
                            <div id="name"> 
                            <div id="play_tag"></div>
                            Guarians of Galaxy 2 
                            </div>
                        </div>
                        
                        <div id="thumbnails" style="background-image: url(images/beforifall.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                            <div id="name"> 
                            <div id="play_tag"></div>
                            Before I Fall 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image:url(images/beauty.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                           Beauty And Beast 
                            </div>
                            
                        </div>
                        <div id="thumbnails" style="background-image: url(images/darker.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Fifty Shades Of Gray 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image: url(images/life.png); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            L I F E 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image:url(images/logan.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Logan 
                            </div>
                        </div>
                        <div id="thumbnails" style="background-image: url(images/power.jpg); background-size:cover;">
                            <div id="HD_tag">HD</div>
                             <div id="name"> 
                            <div id="play_tag"></div>
                            Power Rangers 
                            </div>
                        </div>
                        
                  </div>
              </div>
                
                <hr style="margin:20px auto;">
                
                <div id="games" style="height:600px;  margin-top:10px;">
                	<div id="main_heading" style="height:70px; padding-left:10px; font-family:Verdana, Geneva, sans-serif;  color:#0AF;">
                    
                    
                    	<div id="button" style="padding:10px 15px; font-size:25px; display:inline-block; float:left; margin-right:30px;">Games</div>
                        
                        <div id="small_button">Top rated</div>
                        <div id="small_button">Top viewed today</div>
                        <div id="small_button">Most Fevorite</div>
                        <div id="small_button">Featured</div>
                        
                       	<a><div style="float:right; display:inline-block; margin-top:12px;">View All</div></a>
                  </div>
                  
                  
                  <div style="height:500px; padding:10px;">
                  	 <div id="thumbnails" style="background-image:url(images/prey.jpg); background-size:cover; background-position:-40px 0px;">
                    	
                        <div id="name"> 
                        <div id="play_tag"></div>
                        PRAY 
                        </div>
                    </div>
                    
                    <div id="thumbnails" style="background-image:url(images/mars.jpg); background-size:cover;">
                    	
                        <div id="name"> 
                        <div id="play_tag"></div>
                        Mars 
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/Neir.jpg); background-size:cover;">
                    	 <div id="name"> 
                        <div id="play_tag"></div>
                       Neir Automata
                        </div>
                        
                    </div>
                    <div id="thumbnails" style="background-image: url(images/outlast.jpg);background-size:cover;">
                    	 <div id="name"> 
                        <div id="play_tag"></div>
                        OUT LAST
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/battele.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Battle Field 1
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/sniper.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Sniper: Ghost Warrior 3
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/Ryse_box_art.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Ryse: Son of Rome
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/prey.jpg); background-size:cover; background-position:-40px 0px;">
                    	
                        <div id="name"> 
                        <div id="play_tag"></div>
                        PRAY 
                        </div>
                    </div>
                    
                    <div id="thumbnails" style="background-image:url(images/mars.jpg); background-size:cover;">
                    	
                        <div id="name"> 
                        <div id="play_tag"></div>
                        Mars 
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/Neir.jpg); background-size:cover;">
                    	 <div id="name"> 
                        <div id="play_tag"></div>
                       Neir Automata
                        </div>
                        
                    </div>
                    <div id="thumbnails" style="background-image: url(images/outlast.jpg);background-size:cover;">
                    	 <div id="name"> 
                        <div id="play_tag"></div>
                        OUT LAST
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/battele.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Battle Field 1
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/sniper.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Sniper: Ghost Warrior 3
                        </div>
                    </div>
                    <div id="thumbnails" style="background-image:url(images/Ryse_box_art.jpg); background-size:cover;">
                    	<div id="name"> 
                        <div id="play_tag"></div>
                        Ryse: Son of Rome
                        </div>
                    </div>
                   
                  </div>
              </div>
               
               </br></br></br></br></br></br>
               
               
            </div>
        </div>
        
        <div id="footer">
        	<div id="container" style=" color:#FFF; text-align:center;">
                <div id="left">
                	<font style="font-family: Verdana, Geneva, sans-serif; font-size:14px;"> <b>CONTACT US</b></font>
                    <font style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:#CCC;">
                    	</br></br></br><t><b>Email :</b> contact@gmshop.com</br>
                        </br><t><b>Fax :</b> 361-99-9999</br>
                        </br><t><b>Phone :</b> 361-99-9999</br>
                    </font>
                </div>
            	<div id="right">
                <font style="font-family: Verdana, Geneva, sans-serif; font-size:14px; font-style: bold;"> <b>About GM-SHOP</b></font>
                    <font style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:#CCC;">
                        </br></br></br><t><b>Buy Movie</b></br>
                        </br><t><b>Rent Movie</b></br>
                        </br><t><b>Buy Game</b></br>
                        </br><t><b>Rent Game</b></br>
                    </font>
                </div>
                <div id="center">
                <font style="font-family: Verdana, Geneva, sans-serif; font-size:14px; font-style: bold;"> <b>Buy and Rent</b></font>
                  <font style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:#CCC;">
                    	</br></br></br><t><b>About us</b></br>
                        </br><t><b>Privacy</b></br>
                        </br><t><b>Employee</b></br>
                        </br><t><b>Developers</b></br>
                    </font>
                </div>

            </div>
        </div>
    </div>
    <script>
		var index = 1;
		function plusIndex(n){
			index = index + n;
			showImage(index);
			}
		showImage(1);
		function clear(){
			clearTimeout(myvar);
			}
		function showImage(n){
			var i;
			var x = document.getElementsByClassName("slide");
			if(n > x.length){ index = 1;}
			if(n < 1){ index = x.length;}
			for(i=0; i<x.length;i++){
				x[i].style.display = "none";
				}
			x[index-1].style.display = "block";
			
			}
		//autoSlide();
		function autoSlide(){
			var i;
			var x=document.getElementsByClassName("slide");
			for(i=0; i<x.length;i++){
					x[i].style.display = "none";
				}
				if(index > x.length){index = 1}
				x[index - 1].style.display = "block";
				index++;
			myvar = setTimeout(autoSlide, 4000);
			}
    </script>
</body>
</html>