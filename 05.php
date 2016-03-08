<!DOCTYPE html>
<html>
<head>
<script src="jquery-2.1.4.min.js"></script>
<script> 


jQuery(function () {
    jQuery('.showSingle').click(function () {
        var index = $(this).index(),
            newTarget = jQuery('.targetDiv').eq(index).slideToggle();
			
      

    });
});



</script>
<style> 

.showSingle
{
  padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;	
	
	
	
}

.targetDiv {
	  padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
	
	
    display: none
}

</style> 
</head>
<body>

<a class="showSingle" target="1">Div 1</a>
<div id="div1" class="targetDiv">Lorum Ipsum1</div><br>
<a class="showSingle" target="2">Div 2</a>
<div id="div2" class="targetDiv">Lorum Ipsum2</div><br>
<a class="showSingle" target="3">Div 3</a>
<div id="div3" class="targetDiv">Lorum Ipsum3</div><br>
<a class="showSingle" target="4">Div 4</a>
<div id="div4" class="targetDiv">Lorum Ipsum4</div><br>




	
	
  jQuery('.targetDiv').not(newTarget).slideUp();	
	
	
	
	
</body>
</html>
