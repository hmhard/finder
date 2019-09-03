
<?php include 'css.php'; ?>
<style>

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}

</style>


<div class="container" >
<div class="row">
</div>
<div class="row">
<div class="col-md-6 col-xs-6" >

  <img src="assets/img/avatar.jpg" class="img-responsive" height="100px" width="200px"  alt="Chaltu" >
  <h1>Chaltu Chala</h1>
  <p class="title">Developer of Chatbot</p>
  <p>Jimma University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
</div>
<div class="col-md-6 col-xs-6" >

  <img src="assets/img/avatar.jpg" class="img-responsive" height="100px" width="200px"  alt="Chaltu" >
  <h1>Chaltu Chala</h1>
  <p class="title">Developer of Chatbot</p>
  <p>Jimma University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
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

