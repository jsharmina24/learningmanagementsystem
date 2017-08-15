<html>
<head>
        <title>NSBM Learning Management System</title>
 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Collapsing Site Navigation with jQuery" />
        <meta name="keywords" content="jquery, navigation, menu, collapsing, accordion, sliding, image, css3"/>
        <link rel="stylesheet" href=".js/style.css" type="text/css" media="screen"/>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src=".js/fancybox/lib/jquery-1.10.1.min.js"></script>
		<script src=".js/cufon-yui.js" type="text/javascript"></script>
		<script src=".js/Liberation_Sans.font.js" type="text/javascript"></script>
<script type="text/javascript">
			Cufon.replace('span');
			Cufon.replace('li');
			Cufon.replace('h1');
			Cufon.replace('p');
		</script>

        <style>
			body{
	margin: 0;
	padding: 0;
	background-image: url(images/EODC77741.jpg);
    background-size: 1270px 600px;
	background-repeat: no-repeat;
	background-position: right top;
			}
			span.reference{
				font-family:Arial;
				text-transform:uppercase;
				position:fixed;
				right:95px;
				bottom:10px;
				font-size:11px;
				text-shadow:1px 1px 1px #000;
			}
			span.reference a{
				color:#aaa;
				text-decoration:none;
				margin-right:20px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			.title{
				position:absolute;
				right:10px;
				top:10px;
				width:91px;
				height:600px;
				background:transparent url(images/title.png) no-repeat top left;
			}
		</style>
        
        
        
        
        
<script type="text/javascript" src=".js/fancybox/lib/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src=".js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>


<link rel="stylesheet" href=".js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src=".js/fancybox/source/jquery.fancybox.pack.js"></script>


<link rel="stylesheet" href=".js/fancybox/source/helpers/jquery.fancybox-buttons.js" type="text/css" media="screen" />
<script type="text/javascript" src=".js/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src=".js/fancybox/source/helpers/jquery.fancybox-media.js"></script>


<link rel="stylesheet" href=".js/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src=".js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    
              
        
</head>

    <body>
        
    
    <div id="cc_menu" class="cc_menu">
		<div class="cc_item" style="z-index:5;">
				<img src="images/1.jpg" height="600" width="140" alt="image" /><span class="cc_title">Menu</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_1">Hall Allocation</li>
						<li class="cc_content_2">Time Table</li>
                        <li class="cc_content_3"></li>
						<li class="cc_content_4">Handbook</li>
                        <li class="cc_content_5">Regulations</li>
				  </ul>
		  </div>
	  </div>
			<div class="cc_item" style="z-index:4;">
            <img src="images/2.jpg" height="600" width="140" alt="image" />
            <span class="cc_title">Programmes</span>
				<div class="cc_submenu">
					<ul>
                        <li class="cc_content_6">Foundation</li>
						<li class="cc_content_7">School of Computing</li>
                        <li class="cc_content_8">School of Business</li>
                        <li class="cc_content_9">School of Engineering</li>
					</ul>
			  </div>
		  </div>
			<div class="cc_item" style="z-index:3;">
				<img src="images/3.jpg" height="600" width="140" alt="image" />
				<span class="cc_title">Life At NSBM</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_10">Clubs & Societies</li>
						<li class="cc_content_11">Sports</li>
                        <li class="cc_content_12">Events</li>
					</ul>
			  </div>
			</div>
			<div class="cc_item" style="z-index:2;">
				<img src="images/4.jpg" height="600" width="140" alt="image" />
				<span class="cc_title">News</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_13">News and Media</li>
					</ul>
			  </div>
			</div>
	  <div class="cc_item" style="z-index:1;">
				<img src="images/5.jpg" height="600" width="140" alt="image" />
				<span class="cc_title">Contact</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_14">Get in touch</li>
					</ul>
			  </div>
			</div>
            
            
            
            
            
            
            
			<div id="cc_content" class="cc_content">
				<span id="cc_back" class="cc_back">&lt;&lt; Go back</span>
				
                <div class="cc_content_1">
					<h1>HALL ALLOCATION</h1>
                    <p></p>
                
                </div>
			  <div class="cc_content_2">
					<h1>TIMETABLE</h1>
				<p>
                </div>
                
                
				<div class="cc_content_3">
					<h1>HANDBOOK</h1>
					<p>
                 </div>
                 
                 
				<div class="cc_content_4">
					<h1>HANDBOOK</h1>
					<p>
                   </div>
                
              <div class="cc_content_5">
					<h1>REGULATIONS</h1>
			    <p>  
                </div>
        <div class="cc_content_6">
	  <h1>Foundation Programme for Bachelors’ Degree</h1>
            <p>Key features of the programe:<br>
                To develop knowledge and understanding of participants on specified subject areas to pursue undergraduate studies,To deliver an acceptable level of English proficiency,To enhance self confidence and learning orientation of participants and To equip participants with appropriate skills for academic success</p>
             <br>
        <br>
        <br>
              <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a> 
                
               <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a>

		<a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a>

      		<a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a>

		<a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a>
                <br>
                <br>
              
                <center><a href="LogList.php" class="button">Login or Sign Up</a></center>
        
        </div>
                  
                  
                  
<div class="cc_content_7">
	  <h1>School Of Computing</h1>
	  <p>Information Technology is now in every facet of life; work, family, sport and leisure. The new ways to use computer technology mean that different roles in this exciting profession are emerging every year.<br>

IT demands creative and curious people; those who like to push boundaries and want to make a difference in society. Those who gain great satisfaction in making the business of government and industry more efficient also find fulfilling roles as technical professionals or as systems designers. IT graduates also have great opportunities to start their own businesses and become tomorrow's great entrepreneurs and innovators.
<br>
Our programs are designed to reflect what employers are telling us they want and expect of our graduates. NSBM is dedicated to creating strong IT leaders through a comprehensive choice of industry-relevant degree programs, which combine real-world experience with the expertise to succeed.</p>
      
      
                  <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a> 
                
                <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                <img src="pics/prints/1.jpg" width="225" height="150" alt="" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/1.JPG">
                <img src="pics/prints/1.JPG" alt="" width="225" height="150" /></a>
                <br>
              
                <center><a href="LogList.php" class="button">Login or Sign Up</a></center>
                </div>
    <div class="cc_content_8">
	  <h1>School Of Business</h1>
	  <p>We are a globally-focussed, locally-engaged institution established on the dual principles of equity and excellence. We provide pathways to higher education and support a diverse student and staff population to engage with a wide range of organisations, local and global.
      </p>
        <br>
        <br>
        <br>
              <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a> 
                
                <a class="fancybox" rel="prints" href="pics/prints/2.jpg">
                <img src="pics/prints/2.jpg" width="225" height="150" alt="" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/3.jpg">
                <img src="pics/prints/3.jpg" alt="" width="225" height="150" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/4.jpg">
                <img src="pics/prints/4.jpg" alt="" width="225" height="150" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/5.JPG">
                <img src="pics/prints/5.JPG" alt="" width="225" height="150" /></a>
                <br>
                <br>
              
                <center><a href="LogList.php" class="button">Login or Sign Up</a></center>
        
    </div>
<div class="cc_content_9">
	  <h1>School Of Engineering</h1>
	  <p>In almost every innovation and development, from turning on a light switch to supplying entire communities with power, you will find an aspect of engineering. At NSBM, we incorporate strong theoretical teaching with experience-based learning and cutting-edge facilities, to offer the ideal academic blend. Our aim is to produce graduates who are prepared to meet the challenges of modern enterprise.
      <br>
     </p>
     <br>
        <br>
        <br>
              <a class="fancybox" rel="prints" href="pics/prints/1.jpg">
                 <img src="pics/prints/1.jpg" alt="" width="225" height="150" /></a> 
                
                <a class="fancybox" rel="prints" href="pics/prints/2.jpg">
                <img src="pics/prints/2.jpg" width="225" height="150" alt="" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/3.jpg">
                <img src="pics/prints/3.jpg" alt="" width="225" height="150" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/4.jpg">
                <img src="pics/prints/4.jpg" alt="" width="225" height="150" /></a>
                
                <a class="fancybox" rel="prints" href="pics/prints/5.JPG">
                <img src="pics/prints/5.JPG" alt="" width="225" height="150" /></a>
                <br>
                <br>
              
                   <center><a href="LogList.php" class="button">Login or Sign Up</a></center>
        
        </div>
    
             
                
			  <div class="cc_content_10">
					<h1>Clubs and Societies</h1>
					<p>
                  <dl>
                  <dt>* Activity based clubs</dt>
  <dd>- Media Club , - Music Club, -Drama Club, -Dancing Club, -Explorers' Club, -Green Task Force, -Nature & Wild Life Club, -Photography Club, -Literature Club, -Graphics and Painting Club, -Debate Club, -Community Service Club, -Aerobics Club</dd>               
  <dt>* Religious societies</dt>
  <dd>- Buddhist Society, -Hindu Society, -Islamic Society, -Catholic Society</dd>
  <dt>* International Clubs</dt>
  <dd> -Rotaract Club, -LEO Club, -AIESEC, -Gavel Club, -Toastmaster Club</dd>
                  </dl></p>
     

				<a class="fancybox" rel="awards" href="pics/awards/1.jpg">
                <img src="pics/awards/1.jpg" width="225" height="150" alt="yj" /></a>
               
                <a class="fancybox" rel="awards" href="pics/awards/2.jpg">
                <img src="pics/awards/2.jpg" width="225" height="150" alt="yu" /></a>
                
                <a class="fancybox" rel="awards" href="pics/awards/3.jpg">
                <img src="pics/awards/3.jpg" width="225" height="150" alt="ui" /></a>
                
                <a class="fancybox" rel="awards" href="pics/awards/5.jpg">
                <img src="pics/awards/5.jpg" width="225" height="150" alt="yy" /></a>
                 <a class="fancybox" rel="prints" href="pics/prints/5.JPG">
                <img src="pics/prints/5.JPG" alt="" width="225" height="150" /></a>
                <br>
                
                </div>
                 
                 
				<div class="cc_content_11"> 
					<h1>Sports</h1>			
   <p>         <class="fancybox" rel="awards" href="images/SwirlNoWords%20new.png">
                <img src="images/SwirlNoWords%20new.png" width="300" height="200" alt="yj" align="right"/>
                    <dl><dt>University Sports Clubs</dt>
                    <dd> NSBM Athletics Club</dd>
                    <dd>NSBM Badminton Club</dd>
                    <dd>NSBM Cricket Club</dd>
                    <dd>NSBM Soccer Club</dd>
                    <dd>NSBM Swimming Club</dd>
                    <dd>NSBM Basketball Club</dd>
                    <dd>NSBM Table Tennis Club</dd>
                    <dd>NSBM Netball Club</dd>
                    <dd>NSBM Rugby Football Club</dd>
                    <dd>NSBM Karate Club</dd>
                    <dd>NSBM Elle Club</dd>
                    <dd>NSBM Hockey Club</dd>
                    </dl> </p>
  
				<a class="fancybox" rel="awards" href="pics/awards/1.jpg">
                <img src="pics/awards/1.jpg" width="225" height="150" alt="yj" /></a>
               
                <a class="fancybox" rel="awards" href="pics/awards/2.jpg">
                <img src="pics/awards/2.jpg" width="225" height="150" alt="yu" /></a>
                
                <a class="fancybox" rel="awards" href="pics/awards/3.jpg">
                <img src="pics/awards/3.jpg" width="225" height="150" alt="ui" /></a>
                
                <a class="fancybox" rel="awards" href="pics/awards/5.jpg">
                <img src="pics/awards/5.jpg" width="225" height="150" alt="yy" /></a>
                  <a class="fancybox" rel="prints" href="pics/prints/5.JPG">
                <img src="pics/prints/5.JPG" alt="" width="225" height="150" /></a>
                <br>
                
                </div>
                
                
                
                
				<div class="cc_content_12">
					<h1>Events</h1>
					<p>This one-of-a-kind university is the place for all students to showcasw their skills in music, dance, art, and theatre. It also provides opportunities for students to get exposure to different ethnic, religious and cultural activities. “We Got Talent”, “Siyapathsiya Udanaya”, Christmas Carols, NSBM Saddharmaloka Vesak Zone, “Aloko Udapadi – Poson Bethi Gee Saraniya” and NSBM Walk are some of those exciting activities. The objective of organizing these events is to provide opportunities for students to develop and identify their skills and creativity while ensuring that NSBM Green University Town produces individuals who respect different cultures.</p>
                    
                    <center>	<a class="fancybox" rel="awards" href="images/nsbm.jpg">
                <img src="images/nsbm.jpg" width="460" height="320" alt="yj" /></a>
                        </center>
             
   
                
                </div>
                
				<!--<div class="cc_content_10">
					<h1>Lonestyle Auction</h1>
					<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
				</div>-->
  <div class="cc_content_13">
      <h1>News and Media</h1></div>
                
             
			  <div class="cc_content_14">
					<h1>Get in touch</h1>
					<p>
                         <a class="fancybox" rel="awards" href="images/logo.png">
                <img src="images/logo.png" width="400" height="350" alt="yj" align="right"/></a>
                        
           


<br />
<br />
NSBM Green University Town<br />
Mahenwaththa, Pitipana,<br />
Homagama<br />
Sri Lanka
 <br />                       
<br />
School Of Business:
<br />
    Tel: +94 (11) 544 5100<br>
Fax: +94 (11) 544 5009                    
<br /><br />
School Of Computing:
<br />
Tel: +94 (11) 544 6000
<br /><br />
NSBM Library:
<br />
Tel: +94 (11) 528 8827
<br /><br />
NSBM Exam Unit:
<br />
Tel: +94 (11) 544 5080
<br/>
                                   
                    <p>Find more about us on social media.
                  <br/><br/>
                  <a href="#"><i class="fa fa-facebook-official" style="font-size: 15;"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-snapchat"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <br/><br/>
  For More Details Visit Our Website <a href="http://nsbm.lk/" target="_blank">www.nsbm.lk</a></p>
                                
                  
                 
                  
				</div>
			</div>
	</div>
    <h5>&nbsp;</h5>
    <div></div>
    
    
    
        <!-- The JavaScript -->
        <script type="text/javascript">
            $(function() {
				//all the menu items
				var $items 		= $('#cc_menu .cc_item');
				//number of menu items
				var cnt_items	= $items.length;
				//if menu is expanded then folded is true
				var folded		= false;
				//timeout to trigger the mouseenter event on the menu items
				var menu_time;
				/**
				bind the mouseenter, mouseleave to each item:
				- shows / hides image and submenu
				bind the click event to the list elements (submenu):
				- hides all items except the clicked one, 
				and shows the content for that item
				*/
				$items.unbind('mouseenter')
					  .bind('mouseenter',m_enter)
				      .unbind('mouseleave')
					  .bind('mouseleave',m_leave)
					  .find('.cc_submenu > ul > li')
					  .bind('click',function(){
					var $li_e = $(this);
						  //if the menu is already folded,
						  //just replace the content
					if(folded){
						hideContent();
						showContent($li_e.attr('class'));
					}	
					      else //fold and show the content
						fold($li_e);
				});
				
				/**
				mouseenter function for the items
				the timeout is used to prevent this event 
				to trigger if the user moves the mouse with 
				a considerable speed through the menu items
				*/
				function m_enter(){
					var $this 	= $(this);
					clearTimeout(menu_time);
					menu_time 	= setTimeout(function(){
					//img
					$this.find('img').stop().animate({'top':'0px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'200px'},400);
					},200);
				}
				
				//mouseleave function for the items
				function m_leave(){
					var $this = $(this);
					clearTimeout(menu_time);
					//img
					$this.find('img').stop().animate({'top':'-600px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'0px'},400);
				}
				
				//back to menu button - unfolds the menu
				$('#cc_back').bind('click',unfold);
				
				/**
				hides all the menu items except the clicked one
				after that, the content is shown
				*/
				function fold($li_e){
					var $item		= $li_e.closest('.cc_item');
					
					var d = 100;
					var step = 0;
					$items.unbind('mouseenter mouseleave');
					$items.not($item).each(function(){
						var $item = $(this);
						$item.stop().animate({
							'marginLeft':'-140px'
						},d += 200,function(){
							++step;
							if(step == cnt_items-1){
								folded = true;
								showContent($li_e.attr('class'));
							}	
						});
					});
				}
				
				/**
				shows all the menu items 
				also hides any item's image / submenu 
				that might be displayed
				*/
				function unfold(){
					$('#cc_content').stop().animate({'left':'-700px'},600,function(){
						var d = 100;
						var step = 0;
					$items.each(function(){
							var $item = $(this);
							
							$item.find('img')
								 .stop()
								 .animate({'top':'-600px'},200)
								 .andSelf()
								 .find('.cc_submenu > ul')
								 .stop()
								 .animate({'height':'0px'},200);
								 
							$item.stop().animate({
							'marginLeft':'0px'
							},d += 200,function(){
								++step;
								if(step == cnt_items-1){
									folded = false;
									$items.unbind('mouseenter')
										  .bind('mouseenter',m_enter)
										  .unbind('mouseleave')
										  .bind('mouseleave',m_leave);
									
									hideContent();
								}		  
							});
						});
					});
				}
				
				//function to show the content
				function showContent(idx){
					$('#cc_content').stop().animate({'left':'140px'},200,function(){
						$(this).find('.'+idx).fadeIn();
					});
				}
				
				//function to hide the content
				function hideContent(){
					$('#cc_content').find('div').hide();
				}
            });
			</script>
            
            
			
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
		
		});
		
		$("a[href$ ='.jpg'],a[href$ ='.png'],a[href$ ='.gif']").fancybox(); 
	
		 
	
</script>
<div class="footer">
	 <p> Copyright &copy;  @ National School of Business Management - Mahenwaththa, Pitipana, Homagama, Sri Lanka. <br>
Telephone: +94(11) 544 5000 - Email:info@nsbm.lk </p> 
	 </div>
</body>
</html>