<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Belgium and Netherland";
    include(PATH_INC. "header.php");
?>
	<!--Picture Header-->
    <img src="../assets/images/title/hollandH.jpg" alt="Belgium" style="max-width:100%;" />
    <div class="content">
        <h1>Belgium and Holland</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/Belgium and Netherland/img01.jpg" onclick="doit(this);" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img01thumb.jpg" class="thumb" title="Chocolate factory" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img02thumb.jpg" class="thumb" title="Cheese Factory" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img03thumb.jpg" class="thumb" title="A bridge in Netherland" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img04thumb.jpg" class="thumb" title="Netherland Shopping District" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img05thumb.jpg" class="thumb" title="A church in Netherland" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img06thumb.jpg" class="thumb" title="Amsterdam City Centre" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img07thumb.jpg" class="thumb" title="Amsterdam City Centre" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img08thumb.jpg" class="thumb" title="Windmill in Netherland" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Belgium and Netherland/img09thumb.jpg" class="thumb" title="City Centre" />
        </div>

        <h2>Activities</h2>
        <h3>Belgium</h3>
        <h4>Chocolate Factory</h4>
        <p>
            It was a quick stop at the chocolate factory but it was probably the best place ever. There were
            all kinds of chocolates in many different shapes. We even got to taste a few. We bought a few boxes
            of chocolate.
        </p>
        <h3>Holland</h3>
        <h4>Cheese Factory</h4>
        <p>
            We got see how cheese was processed and we got the chance to taste some of the cheese fresh from
            the machine. For a cheese lover, it was heaven. 
        </p>
        <h4>Windmills</h4>
        <p>
            Holland or most commonly known as Amsterdam is famous for the windmills because it can only be
            found in Holland and nowhere else. It has a beautiful scenery in a countryside. 
        </p>
        <h4>Amsterdam City Centre</h4>
        <p>
            After visiting the countryside, we went into Amsterdam city centre where we look at the modern city's
            scenery and shop for souvenirs! I got a new Hard Rock City T-shirt.
        </p>
        <h2>Foods!</h2>
		<div id="box">
			<img src="../assets/images/food/b1.jpg" alt="Belgium Chocolate" />
			<h3>Belgium Chocolates</h3>	
				<p>
					Belgium Chocolates are famous around the world. It is known as the most delicious chocolate ever.
				</p>
		</div>			
		<div id="box">
			<img src="../assets/images/food/b4.JPG" alt="Koffie Verkeerd" />
			<h3>Koffie Verkeerd</h3>
				<p>
					Koffie Verkeerd is a Dutch drink for coffee with milk. The direct translation is Coffee Wrong.
				</p>
		</div>
		<div id="box">
			<img src="../assets/images/food/b6.jpg" alt="Stroopwafels" />
			<h3>Stroopwafels</h3>
				<p>
					Stoopwafels is famous food in Holland and the translataion is Syrup Waffle. It is made from two waffles with syrup filling in the middle.
				</p>
		</div>
		<div id="box">
			<img src="../assets/images/food/b7.JPG" alt="Bitterballen" />
			<h3>Bitterballen</h3>
				<p>
					It is a Dutch meat-based snack that contain beef or veal in it. They are usually served with ramekin or a
					small bowl of mustard for dipping. 
				</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?>