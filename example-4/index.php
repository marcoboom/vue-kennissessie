
<?php require('../header.php'); ?>


<div id="app" class="container">

	<div class="alert" :class="status">
	<!-- <div :class="classes"> -->
		Geef deze alert een status
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			Wijzig de status
		</div>
		<div class="panel-body">
			<select class="form-control" v-model="status">
				<option v-for="option in options" :value="option">
					{{ option }}
				</option>
			</select>
		</div>
	</div>

</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
	    	status: 'alert-success',
			options: [
				'alert-success',
				'alert-info',
				'alert-warning',
				'alert-danger',
			]
	  	},

		computed: {

			classes()
			{
				let c = {'status': true};
				c[this.status] = true;

				return c;
			}

		}

	});
</script>

<?php require('../footer.php'); ?>
