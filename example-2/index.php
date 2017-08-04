<?php require('../header.php'); ?>


<div id="app" class="container">
	<h1>{{ title }}</h1>

	<div class="panel panel-default">
		<div class="panel-heading">
			Wijzig de title
		</div>
		<div class="panel-body">
			<input type="text" class="form-control" v-model="title" />
		</div>
	</div>

</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
	    	title: 'Welkom bij VueJS'
	  	}
	});
</script>

<?php require('../footer.php'); ?>
