<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Pisa";
    include(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/pisaH.jpg" alt="Pisa" style="max-width:100%;" />
    <div class="content">
        <h1>Pisa</h1>
        <!--Big Pic Display-->
        <img src="../assets/images/slideshow/Pisa/img01.jpg"  onclick="doit(this);" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Pisa/img01thumb.jpg" class="thumb" title="Piazza dei Miracoli" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Pisa/img02thumb.jpg" class="thumb" title="Leaning Tower of Pisa" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Pisa/img03thumb.jpg" class="thumb" title="Leaning Tower of Pisa" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Pisa/img04thumb.jpg" class="thumb" title="Piazza dei Miracoli" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Pisa/img05thumb.jpg" class="thumb" title="Piazza dei Miracoli" />
		</div>
		<!--Move this section for DHTML-->
        <div id="target-div" onclick="move(this)">
			<h2>Activities</h2>
			<h3>Leaning Tower of Pisa</h3>
			<p>
				The leaning tower of Pisa is a freestanding bell tower of the cathedral in Pisa.
				It is most famous for being tilting on one side by itself. It is located behind the
				Cathedral. It is now tilting at a 3.99 degrees after it was reworked but before it
				was tilting at 5.5 degrees.
			</p>
			<h3>Piazza dei Miracoli</h3>
			<p>
				This piazza was recognized as a center for European medieval arts. The Catholic Church
				consider it as a sacred ground since it is dominated by four religious edifices which
				are Pisa Cathedral, Pisa Baptistry, The leaning tower of Pisa, Camposanto Monumentale.
				The square was later considered one of UNESCO World Heritage Site.
			</p>
			<h2>Foods!</h2>
			<p>
				There are no local Pisa cuisine since most of the cuisine they have can be found in other
				cities throughout Italy.
			</p>
		</div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 