<?php
    include("../assets/util/pagestart.php");
    
    function sanitize($data,$link){
		$data = trim($data);//remove leading and trailing whitespace
		$data = strip_tags($data);//remove all HTML and PHP tags
		$data = htmlentities($data);//convert chars to html entities
		
		//protect the database
		$data = mysqli_real_escape_string($link,$data);
		return $data;
	}
    //Form processing
    if(isset($_POST["submit"])){
        if(empty($_POST["username"])){
            $errors[] = "Please include a name";   
        }
        if(empty($_POST["comments"])){
            $errors[] = "Please include a comment";   
        }
        if(!empty($_POST)){
		  $query = "INSERT INTO commentsProj 
			SET username = '".sanitize($_POST['username'],$link)."',
				comments = '".sanitize($_POST['comments'],$link)."'";
		  $result = mysqli_query($link,$query);
		  $num_rows = mysqli_affected_rows($link);
		  if($result && $num_rows > 0){
              $msg = "<div style='color:green; font-weight:bold;'>Comment was submitted</div>";
		  }
            else{
                $msg = "<div style='color:red; font-weight:bold;'>Comment was not submitted</div>";   
            }
	    }
    }
	$pagetitle = "Comments";
	include(PATH_INC. "header.php");
?>
	<img src="../assets/images/title/commentsH.jpg" alt="Germany" style="max-width:100%;" />
    <div class="content">
        <h1>Comments</h1>
        <p>
            If you have any questions, concern, comments or just wants to leave a feedback, please enter them below.
        </p>
    </div>
<?php
    if(count($errors) > 0){
	   echo "<div style='color:red;font-weight:bold;'>";
        foreach($errors as $error){
			echo "$errors<br/>";
		}
	}
    echo "</div>";
	echo "$msg";
?>
    <div id-"error-msg"></div>
    <div id="formFormat">
        <form method='POST' action="comments.php" onsubmit="return validate();">
            <span id="namee">Name: </span>
            <input type="text" id="username" name="username" size="30" required/><br/><br/>
            <span id="comment">Comments: </span>
            <textarea id="comments" name="comments" rows="10" col="140" required></textarea> <br/>
            <input id="button" type="submit" name="submit" value="Submit"/>
        </form>
    </div>
	<div class="chat">
<?php
    $query = mysqli_query($link, "SELECT * FROM commentsProj");
    $num_rows = mysqli_affected_rows($link);
    
    if($query && $num_rows > 0){
        while($row = mysqli_fetch_assoc($query)){
            echo "<div class='line'>"."<strong>".$row['username']."</strong>"." -- ". $row['comments']."</div>";
        }
    }
?>
	</div>
<?php
    include(PATH_INC. "footer.php");
?> 