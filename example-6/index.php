<?php require('../header.php'); ?>


<div id="app" class="container">


	<div class="panel panel-default">
		<div class="panel-heading">
			TODO'S
		</div>
		<ul class="list-group">
			<li class="list-group-item"  v-for="item in items">
				{{ key }} {{ item }}
			</li>
		</ul>
	</div>


</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
	    	items: [
				'Clean your desk',
				'Pickup your kids',
				'Kiss your wife',
				'Make food',
			]
	  	}
	});
</script>

<?php require('../footer.php'); ?>
