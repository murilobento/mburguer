@if($errors->any())
<div class="">
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<h4 class="alert-heading font-18">OPS! Temos um problema!</h4>
		@foreach ($errors->all() as $error) 
		<p>* {{ $error }}</p>
		@endforeach  
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>										
	</div>
</div>
@endif