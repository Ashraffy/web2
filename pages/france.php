<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "France";
    include(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/franceH.jpg" alt="Champs Elyses" style="max-width:100%;" />
    <div class="content">
        <h1>France</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/France/img01.jpg" onclick="doit(this);" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img01thumb.jpg" class="thumb" title="Chocolate factory" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img02thumb.jpg" class="thumb" title="Cheese Factory" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img03thumb.jpg" class="thumb" title="A bridge in Netherland" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img04thumb.jpg" class="thumb" title="Netherland Shopping District" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img05thumb.jpg" class="thumb" title="A church in Netherland" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img06thumb.jpg" class="thumb" title="Amsterdam City Centre" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img07thumb.jpg" class="thumb" title="Amsterdam City Centre" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/France/img08thumb.jpg" class="thumb" title="Windmill in Netherland" />
           
        </div>
		
        <h2>Activities</h2>
        <h3>Eiffel Tower</h3>
        <p>
            If you are in Paris, you can basically see the Eiffel Tower from anywhere within the city.
            At night time, there's a light show that happens and Eiffel Tower lights up! A lot of people
            come to visit Eiffel Tower. To get on it, requires you to pay for tickets and it is expensive.
        </p>
        <h3>Notre Dame Cathedral</h3>
        <p>
            Notre Dame Cathedral is really beautiful to look at and you can tell that it has a great 
            architectual design all over it. The only reason I know of this building is because of
            the movie "The Hunchback of Notre Dame".
        </p>
        <h3>Place de la Concorde</h3>
        <p>
            Place de la Concorde is a famous square that is located at the eastern end of Champs-Elysees.
            Surrounding it are the Obelisk, the Rue Royale and Church of the Madeleine.
        </p>
        <h3>Champs Elysees</h3>
        <p>
            Champs Elysees is a street that is 1.9 km long and it runs between Place de la Concorde and
            Arc de Triomphe. And on this street there are all kinds of expensives stores and tons of
            cinema and cafes. It took us 30 minute to walk from one point to the other. 
        </p>
        <h3>Arc de Triomphe</h3>
        <p>
            Arc de Triomphe was build in honor of the French soldiers who fought and died in the French
            Revolution war and Napoleonic War. Underneath it is a tomb of an unknown soldier during
            World War one. It is really big and there are tons of names on it.  
        </p>
        <h3>Musee du Louvre</h3>
        <p>
            Louvre Museum is one of the world largest museum and the building itself is considered a 
            historic monument. The museum is located within the Louvre Palace. Remnants of the old
            Palace days are still present in the Palace.
        </p>
        <h3>Disneyland Paris</h3>
        <p>
            Disneyland Paris is located 20 miles from Paris and there are two theme parks. One is called
            Walt Disney Studios Park and the other is Disneyland Park. We went to both parks. There was a
            lot of rides that are similar to the ones that can be found in Disneyland FL.
        </p>
        <h2>Foods!</h2>
		<div id="box">
            <img src="../assets/images/food/f1.jpg" alt="Belgium Chocolate" />
			<h3>Baguette</h3>
			<p>
				Baguette is a long thin loaf of French Bread that is commonly known for its length and crisp crust.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/f4.jpg" alt="Belgium Chocolate" />
			<h3>Pain au Chocolat</h3>
			<p>
				Pain au chocolat is a sweet roll with dark chocolate in the center. Direct translation is Chocolate bread.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/f5.jpg" alt="Belgium Chocolate" />
			<h3>Croissant</h3>
			<p>
				It is a crescent shape bread that is buttery and flaky. Anything can be in the center of it such as chocolate,
				ham, cheese and other things.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/f7.jpg" alt="Belgium Chocolate" />
			<h3>Crêpe</h3>
			<p>
				It is a very thin pancake that can have any kind of fillings in it.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/f10.jpg" alt="Belgium Chocolate" />
			<h3>Macaron</h3>
			<p>
				It is two biscuits sandwiching any kind of filings in the middle.
			</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 