

<?php require('../header.php'); ?>


<div id="app" class="container">


	<div class="form-group">
	   <label>Vermenigvuldig</label>
	   <input type="number" v-model="number1" class="form-control">
	 </div>

	 <div class="form-group">
	   <label>Met</label>
	   <input type="number" v-model="number2" class="form-control" >
	 </div>

 	<div class="alert" :class="{'alert-success': isPositive, 'alert-danger': isNegative}" v-if="total">
 		Het resultaat is: <strong>{{ total }}</strong>
 	</div>


</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
	    	number1: null,
			number2: null,
	  	},

		computed: {

			total()
			{
				if (!this.number1 || !this.number2) {
					return null;
				}

				return this.number1 * this.number2;
			},

			isPositive()
			{
				return this.total > 0;
			},

			isNegative()
			{
				return this.total < 0;
			}
		}

	});
</script>

<?php require('../footer.php'); ?>
