<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "Venice";
    include_once(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/veniceH.jpg" alt="Venice" style="max-width:100%;" />
    <div class="content">
        <h1>Venice, Italy</h1>
        <!--Big Pics Display-->
        <img src="../assets/images/slideshow/Venice/img01.jpg"  onclick="doit(this)" id="big-pic" />
  
        <!--Thumbnail Strip-->
        <div class="strip-div">
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Venice/img01thumb.jpg" class="thumb" title="Doge Palace" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Venice/img02thumb.jpg" class="thumb" title="St. Marks Basilica" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Venice/img03thumb.jpg" class="thumb" title="Dogee Palace" />
            <img onclick="swapMe(this);" src="../assets/images/slideshow/Venice/img04thumb.jpg" class="thumb" title="Bridge of Sighs" />
		</div>
        <h2>Activities</h2>
        <h3>St. Marks Square</h3>
        <p>
            One of the famous squares in Venice is the St. Marks Square. This square connects all the 
            important landmarks of Venice.
        </p>
        <h3>St. Marks Basilica</h3>
        <p>
            It is the Cathedral of the Roman Catholic Archdiocese of Venice. It is
            one of the city's most famous churches. This building follows the Italo-Byzantine architecture style.
        </p>
        <h3>Doge's Palace</h3>
        <p>
            Doge's Palace was built following the Venetian Gothic style and it is one of the mostt imporant
            landmark in Venice. It is now used as a museum. 
        </p>
        <h3>Bridges of Sighs</h3>
        <p>
            It is a bridge that has windows with stone bars around it. It passes over the Rio di
            Palazzo and it connects Prigioni Nuove(New Prison) and the Doge's Palace. This bridge was the last
            view convicts see before heading to prison. The stories goes that the prisoner's would
            sigh after seeing the beautiful scenery of Venice for the last time before heading to
            prison.
        </p>
        <h3>Gondolas</h3>
        <p>
            Gondolas are famoous in Venice. It is one of the mode of transportation there since the city
            is surrounded by water. It is also used a romantic getaway for couples. There is a local
            legend that says if a young couple who kiss on a gondola under the Bridges of Sighs will
            be grand an eternal love.
        </p>
        <h2>Foods!</h2>
		<div id="box">
            <img src="../assets/images/food/i9.jpg" alt="Ravioli Nudi" />
			<h3>Baccala' Mantecato</h3>
			<p>
				It is made out of rehydrated, pulverized codfish after being  whipped. It can be served on
				bread or chips.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/i11.jpg" alt="Ravioli Nudi" />
			<h3>Sarde in Saor</h3>
			<p>
				It is fried sardines mixed with onions and beans.
			</p>
		</div>
		<div id="box">
            <img src="../assets/images/food/i13.jpg" alt="Ravioli Nudi" />
			<h3>Polenta</h3>
			<p>
				It is a cornmeal boiled into porridge. 
			</p>
		</div>
	<div class="clear"></div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 