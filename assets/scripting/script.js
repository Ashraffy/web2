//preload big images
    var path = "../assets/images/slideshow/";

    var imgArr = [];
  	function loadImages(ele){
		var path = "../assets/images/slideshow/" + ele +"/";
    	for(var i = 1; i <= document.images.length-1; i++){
    		//accommodate initial zeros
    		var x=("0" + i).slice(-2);
    		//create image in memory
    		imgArr[i] = new Image();
    		imgArr[i].src = path + "img" + x + ".jpg";
    		console.log(imgArr[i]);
    	}
    }

	function swapMe(imgEle){
		//look for the /imgNum
    	var start = imgEle.src.indexOf("img") + 4;
		//end of file name
    	var stop = imgEle.src.indexOf("thumb.jpg");
    	//combine them
    	var num = imgEle.src.substring(start, stop);
    	document.images[1].src = imgArr[parseInt(num)].src;
	}

	function validate(){
		var errorMsg ="";
		//if name is empty
		if(document.getElementById("name").value = ""){
			document.getElementById("namee").style.color += "red";
            errorMsg += "Must include a Name <br/>";
		}
		//if comments is empty
		if(document.getElementById("comments").value = ""){
			document.getElementById("comment").style.color += "red";
            errorMsg += "Must include comments <br/>";
		}
	}
	var timeoutHandle = null;
    function move(ele){
    	if(timeoutHandle){
    		clearTimeout(timeoutHandle);
    	}
    	var curLeft = window.getComputedStyle(ele).left;
    	curLeft = parseInt (curLeft);
    	
    	var newLeft = curLeft + 5;
    	
    	if(newLeft < 300){
    		ele.style.left = newLeft + "px";
    	
    		timeoutHandle = setTimeout(function(){move(ele);}, 100);
    	}
    }