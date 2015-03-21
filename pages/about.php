<?php
    include("../assets/util/pagestart.php");
    
    $pagetitle = "England";
    include(PATH_INC. "header.php");
?>
    <img src="../assets/images/title/aboutH.jpg" alt="pretty header" style="max-width:100%;" />
    
    <div class="content">
        <h1>About</h1>
        <h2>Why does the website look like this?</h2>
        <p>
            Well at first, I was having problems thinking of a topic for this websites since I 
            have visited so many countries and I enjoyed visiting all of them. Then I remembered
            that I actually visited a lot of countries in about two weeks so why not just do a website
            about that trip. So that's how I decided to this topic for a website.
            <br/>
            <br/>
            The next problem I encounter with this is how do I break apart the information to put
            on the website. At first I thought about breaking up the content in days but that is too boring.
            People won't know what country I visited on what day so they can't jump around the navigation if
            they were only interested in the country not days. Then I came up with the idea to seperate
            it by countries since I spend at least a day in each country. So I broke it up into its respective
            countries and then I combined a few together since I didn't have much to say about that country.
            <br />
            <br />
            For the design, I went with white-ish background and black font. For headers, I decided to put a
            picture of a gondola for the index because I thought that was a little symbolize for journey and my
            website is about a journey. For the other pages, I put up pictures of each countrie's famous landmarks.
            I was thinking of putting sliders for the headers but I can't do it yet since Javascript isn't graded,
            for this project. For the color scheme, I chose blue and yellow for the navigation because blue and yellow are the color
            of the European Union. For the list of pictures, I will put it in a slider at that location, but since again,
            javascript isn't graded, I didn't put it up.
            <br />
            <br />
            Most of the landmark's pictures were taken by me when I went to the trip and some are from a family
            friend's since she is doing a European trip while I was doing this assignment so good timing I guess.
            The history of the landmarks were from what I could remember from my trip and also my family's friends
            trip and some were taken from Wikipedia. I couldn't remember the order of the countries that I went to
            so I looked up my travel agents website to look at the schedule. The site is <a href="http://www.kelanaconvoy.co.uk/itinerary15.htm">
            Travel Agents</a>. In Amsterdam, I didn't actually ate any traditional food but ended up eating some
            McDonald's so I looked it up online. Here is the site: <a href="http://www.awesomeamsterdam.com/articles/55/dutch-foods-you-should-try">
            Top 10 dutch food</a>. Some of the food pictures were taken off google. I will have the list before this
            paragraph. I guess that is all. Hope you enjoyed it. 
        </p>
		<h2>Original Javascript Componenents</h2>
		<p>
			I added in some Image Sliders for my javascript components. I put them in every page other than index, about, and comment. There is a little
			slider under the main screen image. It is just listed without any scrolling functionality since there isn't a lot of images to begin with. You can
			simply click on an image and it will display on the main image box. I used the page title and run it through the loadImages so that it would be able
			to run on all the pages since I had trouble running it.
		</p>
		<h2>DHTML component</h2>
		<p>
			I added a moving text box for Pisa since I didn't have any food section for Pisa so I decided to play around with that page a little bit. My original
			plan was to put it with the food gallery for other pages but it didn't look as nice so I just decided to move the text box in Pisa page around.
		</p>
		<h2>Corrections from Project 1</h2>
		<p>
			I added a site title to every page so that everyone knows you are still in the same site. I took out all the underline word. I also added a fixed
			navigation bar so that you can switch between pages without having to scroll all the way to the top. I added more yellow and blue so that it seems
			like this website true color scheme is yellow and blue. I also added PHP include so there isn't a lot of repeating codes. I also made all the images
			the same height. I fixed most of my spelling and grammar mistake, but I am sure I still have plenty that are wrong. 
		</p>
		<h2>Extras</h2>
		<div class="clear"></div>
		<div id="list">
		<ul>
			<li>Favicon: Shape of Europe</li>
			<li>Transition on Navigation</li>
		</ul>
		<h2>Citations</h2>
        <ul>
            <li><a href="https://www.vebu.de/attachments/Kartoffelpuffer%20ohne%20Ei%20mit%20Apfelmus_gro%C3%9F.Copyright_Daniel%20Heinzelmann.jpg">Kartoffelpuffer</a></li>
            <li><a href="http://3.bp.blogspot.com/_KJ7GO8pmxGI/S83NWe42wrI/AAAAAAAAASk/2KebDMg4IH0/s1600/tmpphpykvE4w.jpg">Venice foods</a></li>
            <li><a href="http://4.bp.blogspot.com/_thN96R5n6jY/S8zpVIOV4yI/AAAAAAAAAHc/l5xsIA8Ou5c/s1600/DSCN8394+copy.JPG">English Breakfast</a></li>
			<li><a href="https://www.theinternationalkitchen.com/tik_content/images/recipes/sarde_in_saor.jpg">Sardine</a></li>
			<li><a href="http://upload.wikimedia.org/wikipedia/commons/0/0c/Cotechino-Servito-Polenta-Lenticchie.jpg">Polenta</a></li>
			<li><a href="http://www.cibochepassione.com/img/Cucina/Veneto_RIC_371.jpg">Baccalla</a></li>
			<li><a href="http://upload.wikimedia.org/wikipedia/commons/f/ff/Fish_and_Chips_Ocean_Foods_Drummoyne.jpg">Fish and Chips</a></li>
			<li><a href="http://tangoitalia.com/recipes/images/spaghetti_alla_carbonara.jpg">Carabona</a></li>
        </ul>
		</div>
    </div>
<?php
    include(PATH_INC. "footer.php");
?> 