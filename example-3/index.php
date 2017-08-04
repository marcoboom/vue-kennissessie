<?php require('../header.php'); ?>


<div id="app" class="container">
	<h1 v-show="!edit" @click="edit=!edit">
		{{ title }}
	</h1>
	<input v-show="edit" type="text" class="form-control" v-model="title"  @blur="edit=!edit"/>

</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
			edit: false,
	    	title: 'Welkom bij VueJS'
	  	}
	});
</script>

<?php require('../footer.php'); ?>
