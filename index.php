<?php include 'css.php'; ?>

<div class="container-fluid" >
<div class="row">

<div class="col-sm-12 col-xs-12">
<div class="panel panel-default">
  <div class="panel-heading">Miniyahil Kebede</div>
  <div class="panel-body">
<div class="row">
<div class="col-md-6 col-xs-12">
  <img class="img-responsive img-thumbnail" src="images/mine.jpg"  alt="image">
  </div>
<div class="col-md-6 col-xs-12">
  <div class="table-responsive">
  <table class="table table-condensed table-striped table-bordered">
    <thead>
    <tr class="text-info bg-info">
    <th>
    info
	</th>
    <th>
	Desc
    </th>
    </tr>
	</thead>
	<tbody>
	<tr>
	<td>
	Full Name
	</td>
	<td>
	Miniyahil kebede
	</td>
	</tr>
	<tr>
	<td>Gender</td>
	<td>Male</td>
	</tr>
	<tr>
	<td>Contact No</td>
	<td>0912345678</td>
	</tr>
	<tr>
	<td>Current Location</td>
	<td>Inside Varnero</td>
	</tr>
	<tr>
	<td>Work</td>
	<td>Student</td>
	</tr>
	
	</tbody>
  </table>
</div>
  </div>
  </div>
  </div>
  <div class="panel-footer">Computer Science Student</div>
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
	
	var name=$('#name').val();
	
	
$.ajax({
url: "backend.php",
type: "POST",
datTaype:'text',
data: {request:name},
success: function(data){
	$('tbody').append(data);
}
});
});
</script>
