<!DOCTYPE html>
<html>
<head>
<meta charset="UTF=8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/new.css">
<style>
body {font-family: serif,sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid RGB(107, 151, 226);
    background-color: rgba(130, 170, 241, 0.53);
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 20px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: RGBA(152, 107, 138, 0.48);
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid rgba(204, 204, 204, 0.02);
     background-color: #4a42374d;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 20px;
}

.topright:hover {color: red;}
</style>
</head>




<body>
          <div id="div2">
            <div id="nav_wrapper">
  
                <head><marquee width="80%"><font face="verdana" size="8" color="white"><b>YEAR ONE - MODULES</b></font>
                </marquee></head>

            </div>
        </div>


<div class="tab">
  <button class="tablinks" onclick="opc(event, 'LMS1')" id="defaultOpen">Page 1</button>
  <button class="tablinks" onclick="opc(event, 'LMS2')">Page 2</button>
    <button class="tablinks" onclick="opc(event, 'LMS3')">Page 3</button>
    
    <h3 style="float: right;"><button class="button button5">Logout</button></h3>
  
</div>

<div id="LMS1" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  
  
  <div class="col">
<ul class="mlms">
<li class="header header-green">Modules</li>
 
<li><a href="#"><center><strong>SE102.3</strong><br>WEB BASED APPLICATION DEVELOPMENT</center></a></li>
<li><a href="#"><center><strong>CN101.3</strong><br>DATA COMMUNICATION AND NETWORKS</center></a></li>
<li><a href="#"><center><strong>CS104.3</strong><br>COMPUTER ARCHITECTURE</center></a></li>
<li><a href="#"><center><strong>SE101.3</strong><br>OBJECT ORIENTED PROGRAMMING WITH JAVA</center></a></li>
<li><a href="#"><center><strong>SE103.3</strong><br>SYSTEM ANALYSIS AND DESIGN</center></a></li>
</ul> <br>     
    </div>
    
</div>

<div id="LMS2" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>

    
  <div class="col">
<ul class="mlms">
<li class="header header-green">Modules</li>
 
<li><a href="#"><center><strong>SE103.3</strong><br>SYSTEM ANALYSIS AND DESIGN</center></a></li>
<li><a href="#"><center><strong>SE102.3</strong><br>WEB BASED APPLICATION DEVELOPMENT</center></a></li>
<li><a href="#"><center><strong>CN101.3</strong><br>DATA COMMUNICATION AND NETWORKS</center></a></li>
<li><a href="#"><center><strong>CS104.3</strong><br>COMPUTER ARCHITECTURE</center></a></li>
<li><a href="#"><center><strong>SE101.3</strong><br>OBJECT ORIENTED PROGRAMMING WITH JAVA</center></a></li>

</ul> <br>     
    </div>
    
</div>
    
<div id="LMS3" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>

    
  <div class="col">
<ul class="mlms">
<li class="header header-green">Modules</li>
 
<li><a href="#"><center><strong>CS104.3</strong><br>COMPUTER ARCHITECTURE</center></a></li>
<li><a href="#"><center><strong>SE102.3</strong><br>WEB BASED APPLICATION DEVELOPMENT</center></a></li>
<li><a href="#"><center><strong>CN101.3</strong><br>DATA COMMUNICATION AND NETWORKS</center></a></li>
<li><a href="#"><center><strong>SE101.3</strong><br>OBJECT ORIENTED PROGRAMMING WITH JAVA</center></a></li>
<li><a href="#"><center><strong>SE103.3</strong><br>SYSTEM ANALYSIS AND DESIGN</center></a></li>
</ul> <br>     
    </div>
    
</div>

<script>
function opc(evt, cin) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cin).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
