<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Rome";
    include(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/romeH.jpg" alt="Rome" style="max-width:100%;" />
    <div class="content">
        <h1>Rome</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/Rome/img01.jpg"  onclick="doit(this)" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Rome/img01thumb.jpg" class="thumb" title="Vatican" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Rome/img02thumb.jpg" class="thumb" title="Trevi Fountain" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Rome/img03thumb.jpg" class="thumb" title="Colosseum" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Rome/img04thumb.jpg" class="thumb" title="Rome" />
		</div>
        <h2>Activities</h2>
        <h3>Vatican City</h3>
        <p>
            I am sure everyone knows what Vatican City is. It is the city within Rome that
            is dedicated to Christianity since ancient time. The head of this independant
            city-state is the Pope. Within Vatican City, there are attractions such
            as St. Peter's Basilica, Sistine Chapen, and Vatican Museum. And it is also considered
            as a UNESCO World Heritage Site. 
        </p>
        <h3>Colosseum</h3>
        <p>
            The Colosseum is one of the largest amphitheatre in Rome and even the world.
            It was used for gladiatorial contests and public spectacles such as dramas, re-enactment
            of famous battle or even executions. Recently it was added into the New Seven Wonders
            of the World and it is part of UNESCO World Heritage site. You need to pay to enter the
            Colosseum.
        </p>
        <h3>Trevi fountain</h3>
        <p>
            It is the largest Baroque fountain in the city and one of the famous fountain in the world.
            It is also a very popular tourist attraction. It is at the junction of three roads. This is also
            the fountain where tourist make a wish and throw coins in.
        </p>
        <h2>Foods!</h2>
		<div id="box">
            <img src="../assets/images/food/i5.jpg" alt="Ravioli Nudi" />
			<h3>Pizza Bianca</h3>
			<p>
				Pizza Bianca is just a normal pizza without the sauce or cheese but you can include other topics on it.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/i7.jpg" alt="Ravioli Nudi" />
			<h3>Carbonara</h3>
			<p>
				It is an Italian pasta dish that has eggs, cheese, and bacon. The pasta used is usually spaghetti but other kind
				can be used as well.
			</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 