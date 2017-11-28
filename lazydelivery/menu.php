<?php
	define('TITTLE','Menu');
	require('templates/header.html');
?>


<div>
<article>
<!--<img src="menufood/nasilemak.jpg" alt="Nasi Lemak" width="300" height="300">-->
<!--<p>Nasi Lemak<p>-->


<main role="main">
	
	<head>
<style>
* {box-sizing: border-box}
body {
	font-family: sans-serif;
	
}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 100%px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 30px 30px;
    width: 80%;
    border-left: none;
}  
 
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="menuList(event, 'Bundle')" id="defaultOpen">Bundle</button>
  <!--<button class="tablinks" onclick="menuList(event, 'AlaCart')">Ala Cart</button>
  <button class="tablinks" onclick="menuList(event, 'Side')">Side</button>
  <button class="tablinks" onclick="menuList(event, 'Drink')">Drink</button>-->
</div>

<div id="Bundle" class="tabcontent">
  <h3>Bundle</h3>
  <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card">
              <img src="menufood/bundle1.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text"><h5>Bundle A</h5><br>Egg : 2<br>Set Toast : 1<br>Coffee : 1</p>
            </div>
            <div class="card">
              <img src="menufood/bundle2.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text"><h5>Bundle B</h5><br>Egg : 2<br>Set Toast : 1<br>Coffee : 1<br>Nasi Lemak : 1</p>
            </div>
            <div class="card">
              <img src="menufood/bundle3.jpeg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text"><h5>Bundle C</h5><br>Chiken Rice : 1<br>Side : 1<br>Soup : 1</p>
            </div>

            <div class="card">
              <img src="menufood/bundle4.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text"><h5>Bundle D</h5><br>Fried Rice : 1<br>Soup : 1</p>
            </div>
            <div class="card">
              <img src="menufood/bundle5.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text"><h5>Bundle E</h5><br>Fried Chiken : 1<br>Drink : 1</p>
            </div>
            <div class="card">
              <img src="menufood/bundle6.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text"><h5>Bundle F</h5><br>Fried Chiken : 1<br>French Fries : 1 </p>
            </div>

           
          </div>

        </div>
      </div>
</div>
<!--
<div id="AlaCart" class="tabcontent">
  <h3>Ala Cart</h3>
  <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card">
              <img src="menufood/nasilemak.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Nasi Lemak</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
            <div class="card">
              <img src="menufood/chikenrice.png" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Chiken Rice</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
            <div class="card">
              <img src="menufood/ramen.jpeg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Ramen</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>

            <div class="card">
              <img src="menufood/tomyammee.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Tom Yam Mee</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
            <div class="card">
              <img src="menufood/pizza.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Pizza</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
            <div class="card">
              <img src="menufood/friedchiken.jpeg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Fried Chicken</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>

          </div>

        </div>
      </div> 
</div>

<div id="Side" class="tabcontent">
  <h3>Side</h3>
  <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card">
              <img src="menufood/nugget.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Nugget</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
			<div class="card">
              <img src="menufood/fries.gif" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">French Freis</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
			<div class="card">
              <img src="menufood/icecream.webp" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Ice Cream</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
            </div>
          </div>

        </div>
      </div>


<div id="Drink" class="tabcontent">
  <h3>Drink</h3>
  <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card">
              <img src="menufood/coke.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Coke</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
			<div class="card">
              <img src="menufood/lemontea.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Lemon Tea</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
			<div class="card">
              <img src="menufood/coffee.jpg" alt="Card image cap" style="width:128px;height:128px;">
              <p class="card-text">Coffee</p>
			  <a href="#" class="btn btn-dark">ADD</a>
            </div>
            </div>
          </div>

        </div>
      </div>-->
</div>
</div>

<script>
function menuList(evt, foodName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(foodName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
	

      

    </main>
</article>

</div>








	
<?php
	require('templates/footer.html');
?>