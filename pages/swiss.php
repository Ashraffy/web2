<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Switzerland";
    include(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/swissH.jpg" alt="Switzerland" style="max-width:100%;" />
   
    <div class="content">
        <h1>Switzerland</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/Switzerland/img01.jpg" onclick="doit(this)" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img01thumb.jpg" class="thumb" title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img02thumb.jpg" class="thumb" " title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img03thumb.jpg" class="thumb" kies" title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img04thumb.jpg" class="thumb"  title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img05thumb.jpg" class="thumb" title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img06thumb.jpg" class="thumb"  title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img07thumb.jpg" class="thumb" ="Amsterdam City Centre" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img08thumb.jpg" class="thumb" title="Swiss scenery" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Switzerland/img09thumb.jpg" class="thumb" title="Swiss scenery" />

		</div>
        <h2>Activities</h2>
        <h3>Jungfrau Mountain</h3>
        <p>
            Jungfrau Mountain is one the main summits of Bernese Alps. From the top
            of the summit, we could see beautiful scenery of the Swiss Alps. This
            mountain was declared as a World Heritage Site in 2001. We could ski/snowboard
            up on the mountain and there is an Ice Palace which has all kinds of ice
            sculptures.
        </p>
        <h3>Switzerland beautiful scenery</h3>
        <p>
            We just walked around the country side to look at the beautiful scenery and
            going into stores where we could buy Swiss watches(swatch) and also swiss
            army knife.
        </p>
        <h2>Foods!</h2>
		<div id="box">
            <img src="../assets/images/food/s1.jpg" alt="Ravioli Nudi" />
			<h3>Fondue</h3>
			<p>
				It is a dish of melted cheese served in a pot and bread is dipped in it. 
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/s3.jpg" alt="Ravioli Nudi" />
			<h3>Raclette</h3>
			<p>
				It is a type of cheese based on heating the cheese and scraping off the melted parts.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/s5.jpg" alt="Ravioli Nudi" />
			<h3>Rosti</h3>
			<p>
				It is like a hashbrown but swiss and it is bigger than a hashbrown.
			</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 