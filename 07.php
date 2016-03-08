<!DOCTYPE html>
<html>
<head>
<script src="jquery-2.1.4.min.js"></script>
<script> 
$(document).ready(function(){
	var obj={'1':'1','2':'2','3':'3','4':'4','5':'5'};
  $.each(obj,function(i,value){	
	
  $("#flip"+i).click(function(){
      $("#panel"+i).slideToggle("slow");  
	    }); 

 });
	});
</script>
<style>
.box2 {
  display: inline-block;
  width: 55%;
  height: 200px;
  margin: 1em;
  
  } 
</style> 
</head>
<body>

<div  align="center" >
<div   class="box2"  >
<?php  
$a = range(1, 5);
foreach ($a as $i)
{

echo   "<div   style='background-color: #e5eecc;border: solid 1px #c3c3c3;text-align: left;padding: 5px;'                id=flip".$i.">Click to slide the panel down or up</div>";
echo   "<div   style='display: none;background-color: #e5eecc;border: solid 1px #c3c3c3;text-align: left;padding: 5px;'  id=panel".$i.">Hello world!</div>";
    
}

?>
</div>
</div>
<!------------  

<div id="flip2">222Click to slide the panel down or up</div>
<div id="panel2">222Hello world!</div>
<div id="flip3">222Click to slide the panel down or up</div>
<div id="panel3">222Hello world!</div>




      
 $("#flip2").click(function(){
      $("#panel2").slideToggle("slow");  
	
    }); 
<style> 
#panel1, #flip1 {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel1 {
    padding: 50px;
    display: none;
}
#panel2, #flip2 {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel2 {
    padding: 50px;
    display: none;
}


</style>	
	
---------->




</body>
</html>
