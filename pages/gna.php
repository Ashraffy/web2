<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Germany and Austria";
    require(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/germanyH.jpg" alt="Germany" style="max-width:100%;"/>
    <div class="content">
        <h1>Germany and Austria</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/Germany and Austria/img01.jpg" onclick="doit(this)" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img01thumb.jpg" class="thumb" title="Some church" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img02thumb.jpg" class="thumb" title="Pretty scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img03thumb.jpg" class="thumb" title="Neuchwanstein Castle" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img04thumb.jpg" class="thumb" title="Netherland Shopping District" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img05thumb.jpg" class="thumb" title="Neuchwanstein Castle" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img06thumb.jpg" class="thumb" title="Scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img07thumb.jpg" class="thumb" title="Wertheim Village" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img08thumb.jpg" class="thumb" title="Neuchwanstein Castle" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Germany and Austria/img09thumb.jpg" class="thumb" title="Neuchwanstein Castle" />
		</div>
        <h2>Activities</h2>
        <h3>Berlin</h3>
        <p>
            In Berlin, we visited the Kaiser Wilheml Memorial Chruch and the Berlin Cathedral.
            We were not in Germany  for very long, so we couldn't visit a lot of places. 
        </p>
        <h3>Austria</h3>
        <h4>Neuchwanstein castle</h4>
        <p>
            It is a 19th century Romanesque Revival palace on a hill above Hohenschwangau Village
            which is near Fussen. It was first build as a personal refuge castle for the king but
            later the public was allowed to enter. Walt Disney build the Disney castle based on
            this castle.
        </p>
        <h4>Goldenes Dachl</h4>
        <p>
            Golden Dachl is more commonly known as the Golden Roof or Golden Balcony and it is 
            Innsbruck's most famous symbol. This balcony was used by Emperor Maximilian I to 
            watch festivals and other festivities that happen in the square below. 
        </p>
        <h4>Swarovski store</h4>
        <p>
            The SWAROVSKI store in Innsbruck offers tourism service through their store. We get to
            see learn about Swarovski art and the history. You also get to see all the accesories
            that they have made over the years. In the end of the tour, we got a small crystal to
            take back.
        </p>
        <h4>Sky jump ramp</h4>
        <p>
            Innsbruck is also where the Winter Olympic took place in 1964. We visited the sky jump ramp
            that is still around and still in used in the winter. 
        </p>
        <h2>Foods!</h2>
		<div id="box">
            <img src="../assets/images/food/g1.jpg" alt="Belgium Chocolate" />
			<h3>Bratwurst</h3>
			<p>
				It is a sausage that is made out of veal, prok or beef. Bratwurst is translated to finly
				chopped sausage.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/g3.jpg" alt="Belgium Chocolate" />
			<h3>Kartoffelpuffer</h3>
			<p>
				Kartoffelpuffer are fried potato pancakes. 
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/g5.jpg" alt="Belgium Chocolate" />
			<h3>Erdapfelsalat</h3>
			<p>
				Erdapfelsalat are more commonly known as potato salads. 
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/g7.JPG" alt="Belgium Chocolate" />
			<h3>Salzburger Nockerln</h3>
			<p>
				It is a sweet souffle in Austria.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/g9.jpg" alt="Belgium Chocolate" />
			<h3>Schnitzel</h3>
			<p>
				It is a fired boneless meat coated with flour. It is made out of veal, mutton, chicken, 
				beef, turkey or pork.
			</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 