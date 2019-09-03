
<?php include 'css.php'; ?>



<div class="container" >
<div class="row">
<div class="col-md-12 col-xs-10" >
<div class="chat-container">
 <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
</div>
</div>
</div>
<?php include 'js.php'; ?>


<script>
$('document').ready(function(){
	
	
	//general cases
	$('a').css('color','white');
	$('.darker').addClass('alert alert-info');
	$('i').addClass('text-primary');
	
});
	
	
	

$('#send').click(function(){
	
	var chat=$('#chat').val();
	var d=new Date();
	var h=d.getHours();
	var m=d.getMinutes();
	var s=d.getSeconds();
	
	var dat=h+':'+m+':'+s;
	//alert(chat);
	
	
	$('.mycontainer').append('<div class="container1"><img src="assets/img/avatar.jpg" alt="You"><p >'+chat+'</p><span class="time-eight">'+dat+'</span></div>');
$.ajax({
url: "backend.php",
type: "POST",
datTaype:'text',
data: {request:chat},
success: function(data){
	//alert(chat);
	var dd=new Date();
	var h=dd.getHours();
	var m=dd.getMinutes();
	var s=dd.getSeconds();
	
	var dat2=h+':'+m+':'+s;
	
	$('.mycontainer').append('<div class="container1 darker alert alert-success"><img src="assets/img/avatar.jpg" alt="ChatBot" style="float:right;"><p>'+data+'</p><span class="time-right">'+dat2+'</span></div>');
}
});
	
	
	
});

</script>

