<?php
    include("../assets/util/pagestart.php");
    $pagetitle = "England";
    include(PATH_INC. "header.php");
	$loadit = "onload='loadImages();'";
?>
   <img src="../assets/images/title/englandH.jpg" alt="Big Ben" style="max-width:100%;" />
   <div class="content">
        <h1>England</h1>
        <!--Big Pics-->
        <img src="../assets/images/slideshow/England/img01.jpg"  name="UK" onclick="doit(this);" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img01thumb.jpg" class="thumb" title="The Parliment" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img02thumb.jpg" class="thumb" title="Big Ben" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img03thumb.jpg" class="thumb" title="Tower Bridge" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img04thumb.jpg" class="thumb" title="British Museum" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img05thumb.jpg" class="thumb" title="British Museum" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img06thumb.jpg" class="thumb" title="Buckingham Palace" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/England/img07thumb.jpg" class="thumb" title="Buckingham Palace" />
		</div>
        <h2>Activities</h2>
        <h3>The London Eye</h3>
        <p>
            The first place we visited was the London Eye. We had to buy tickets to ride the London eye. There
            was a special offer tickets which could be used in Madame Tussauds and SEA LIFE London. At the top of
            the rotation, we had a beautiful view of London and we had a beautiful view of Palace of Westminster
            which is right across the river. 
        </p>
        <h3>Palace of Westminster and Big Ben</h3>
        <p>
            Since we had taken pictures of the palace from the London Eye, we decided to take pictures with the Big
            Ben from the ground. It was hard to get a good picture in because a lot of people were walking around. 
        </p>
        <h3>Tower Bridge</h3>
        <p>
            We were on a tour in a boat which took us sightseeing famous buildings that can be viewed from the river.
            Down the river, we passed by the Tower Bridge. Afterwards, we passed by British Museum and we decided to
            check it out. 
        </p>
        <h3>British Museum</h3>
        <p>
            British Museum had all kinds of collections from every different eras. Cameras and phones weren't allowed
            into the museum so I couldn't take any pictures but there were a lot of cool things to look at. 
        </p>
        <h3>Buckingham Palace</h3>
        <p>
            We visited the famous Buckingham Palace to visit the guards there and also to watch the change of Guard that
            happens every morning. They really do not move and just stand there even if bothered by others. 
        </p>
        <h3>Madame Tussauds</h3>
        <p>
            We visited Madame Tussauds because it was a part of the special ticket bundle that we got with London Eye ticket. It is a pretty
            cool place. You get to see a lot of famous people's wax sculptor be it actor/actress or even movie characters.
        </p>
        <h3>SEA LIFE London</h3>
        <p>
            SEA LIFE is located right by the London Eye. It has all kinds of fishes on display and you can even pet turtles.
            There are also jellyfish that lights up and a shark!
        </p>
        <h2>Foods!</h2>
		<div id="box">
            <img src="../assets/images/food/e1.jpg" alt="Ravioli Nudi" />
			<h3>Fish and chips</h3>
			<p>
				It is a hot dish with battered fish mostly cod or haddock and deep-fried chips.
				It also comes with mushy peas.
			</p>
		</div>
        <div id="box">
			<img src="../assets/images/food/e3.jpg" alt="Ravioli Nudi" />
			<h3>English Breakfast</h3>
			<p>
				English breakfast consists of bacon, sausages and eggs. It is served with coffee or
				tea. There are other things that be added to but those are the common ones.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/e5.jpg" alt="Ravioli Nudi" />
			<h3>Afternoon tea</h3>
			<p>
				Afternoon tea is really famous in England. Everyone goes to cafes to get afternoon
				teas. You get served cakes, sandwiches and tea.
			</p>
		</div>
		<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 