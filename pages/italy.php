<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Italy";
    include(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/florenceH.JPG" alt="Florence" style="max-width:100%;" />
    <div class="content">
        <h1>Italy</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/Italy/img01.jpg" onclick="doit(this)" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img01thumb.jpg" class="thumb" title="Centre of Florence" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img02thumb.jpg" class="thumb" title="Centre of Florence" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img03thumb.jpg" class="thumb" title="Centre of Florence" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img04thumb.jpg" class="thumb" title="Poseidon Statue" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img05thumb.jpg" class="thumb" title="Florence" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img06thumb.jpg" class="thumb" title="Amsterdam City Centre" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Italy/img07thumb.jpg" class="thumb" title="Statue of David" />
		</div>
        <h2>Activities</h2>
        <p>
            There are many places to visit in Italy and most of the attractions dated back to
            the 19th century. The locations for these attractions are in different cities in
            Italy. So we spend a couple of days just being in Italy. The first city we visited
            was Florence and after that was Venice. Then we visited Rome and Pisa.
        </p>
        <h3>Florence</h3>
        <h4>Historic Centre of Florence</h4>
        <p>
            Historic Centre of Florence is a part of the Florence and UNESCO named it a heritage
            site. This city is the representative of the Renaissance era.  
        </p> 
        <h4>Florence Cathedral</h4>
        <p>
            Florence Cathedral has Gothic design and it is the main church in Florence. It can be
            found in HIstoric Center of Florence which is a part of UNESCO World Heritage Site. 
        </p>
        <h4>Statue of David</h4>
        <p>
            The statue is a masterpiece made by Michelangelo and it represents the Biblical hero
            David. This statue is placed in a public squre outside of Palazzo della Signoria. It
            became a symbol of defense in Florence. The original statue was moved to Galleria dell'Accademia
            and the statue standing at the square now is a replica.
        </p>
        <h4>Palazzo Vecchio</h4>
        <p>
            Palazzo Vecchio is the town hall of Florence. It overlooks the Piazza della Signoria,
            the statue of David and the Fountain of Neptune and other naked statues... 
        </p>
        <h2>Food!</h2>
        <div id="box">
			<img src="../assets/images/food/i1.jpg" alt="Ravioli Nudi" />
			<h3>Ravioli nudi</h3>
			<p>
				Direct translation of this is Naked Ravioli. It is a mixed of pasta and spinach shaped
				into little dumplings.
			</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 