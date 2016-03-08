<!DOCTYPE html>
<html>
<head>
<script src="jquery-2.1.4.min.js"></script>
<script> 
$('.first-p').hide();   
$( "div.first" ).click(function() {
    $(this).next().slideToggle(1000);
});

$(".toggle").slideUp();
$(".trigger").click(function(){
    $(this).next(".toggle").slideToggle("slow");
  });





</script>
<style> 

div {float:left;padding:20px}
h3 {font-size:2em;}

</style> 
</head>
<body>
<div class="first">Toggle first</div>
    <p class="first-p">First hidden paragraph.</p>
<div class="first">Toggle second</div>
    <p class="first-p">Second hidden paragraph.</p>
	
	
	
	
	
	<div>
    <h3 class = "trigger">Heading 1</h3> 
    <ul class = "toggle">
        <li>Line One</li>
        <li>Line Two</li>
        <li>Line Three</li>
    </ul>
</div>
<div>
    <h3 class = "trigger">Heading 2</h3>
    <ul class = "toggle">
        <li>Line One</li>
        <li>Line Two</li>
        <li>Line Three</li>
    </ul>
</div>

	
	
	
	
	
	
	
	
	
</body>
</html>
