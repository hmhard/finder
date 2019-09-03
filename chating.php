<?php include 'css.php'; ?>

<div class="container-fluid" >
<div class="row">

<div class="col-sm-12 col-xs-12 mycontainer">
<div class="container1">
  <img src="assets/img/avatar.jpg" alt="Avatar">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>


<div class="container1 darker">
  <img src="assets/img/avatar.jpg" alt="Avatar" class="right">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>
</div>

</div>
<div class="row">
<div class="col-md-12 col-xs-12" >
<div class="chat-container">
   <div class="form-group" style="width:100%">
  <label for="chat" style="float:left">Request:</label>
  <input type="text" class="form-control input-lg" id="chat" style="width:70%;float:left" autocomplete="off">
  <button type="submit" class="form-control" id="send" name="send" style="width:10%;float:right"> <i class="fa fa-send" style="transform:rotate(50deg)"></i></button></input>
</div>

</div>
</div>
</div>
</div>
<?php include 'js.php'; ?>


<script>
$('document').ready(function(){	
	
	//general cases
	$('a').css('color','white');
	$('#chat').attr('autocomplete','off');
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
