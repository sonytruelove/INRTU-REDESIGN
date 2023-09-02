			   var indexValue = 1;
			  showImg(indexValue);
			  function btm_slide(e){showImg(indexValue = e);}
			  function 

side_slide(e){showImg(indexValue += e);}
			  function 
		
		showImg(e){
			  var i;
			  const img = 

document.querySelectorAll('.slider__item img');
		  const b = document.querySelectorAll('.slider__item b');
			  const calendar = 
		
		

document.querySelectorAll('.slider__item .news-list-icon');
	  const date = 
		
		document.querySelectorAll('.slider__item .news-date-time');
			
const s = 
		
		document.querySelectorAll('.slider__item span');
		 const tags = document.querySelectorAll('.news-tags');
			  const 

slider = document.querySelectorAll('.btm-slides span');
			  if(e > img.length){indexValue = 1}
			  if(e < 1){indexValue = 
		
		

img.length}
			  for(i = 0; i < img.length; i++){
			  img[i].style.display = "none";
			  }
			  for(i = 0; i < 

b.length; i++){
			  b[i].style.display = "none";
			  }
			  
		
		for(i = 0; i < s.length; i++){
			  

s[i].style.display = "none";
			  }
			  for(i = 0; i < slider.length; i++){
			  slider[i].style.background = "rgba(255,255,255,0.1)";
		

	  }
			  for(i = 0; i < tags.length; i++){
			  tags[i].style.display = "none";
			  }
			  img[indexValue-

1].style.display = "block";
			  b[indexValue-1].style.display = "block";
			  calendar[indexValue-1].style.display = "block"; 
date[indexValue-

1].style.display = "block";
		    			  slider[indexValue-1].style.background = "white";
		    			  let tags_now=document.querySelectorAll('.news-tags'+indexValue);
		    			  tags_now=Array.from(tags_now);
		    			   tags_now.forEach((span)=>span.style.display = "inline-block");
			
		
		  }
		
setInterval(()=>
side_slide(1),50000);

if(window.outerWidth<1000)
document.querySelectorAll(".news-list .slider")[0].style.display="none";
