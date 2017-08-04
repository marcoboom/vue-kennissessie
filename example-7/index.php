<?php require('../header.php'); ?>


<div id="app" class="container">

	<div class="panel panel-default">
		<div class="panel-heading">
			TODO'S
		</div>
		<ul class="list-group">
			<li class="list-group-item"  v-for="item in items">
				{{ item }}
			</li>
		</ul>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			Add to list
		</div>
		<div class="panel-body">
			<input type="text" class="form-control" id="newitem" v-model="newitem" @change.prevent="addItem"/>
		</div>
	</div>

</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
			newitem: '',
	    	items: [
				'Clean your desk',
				'Pickup your kids',
				'Kiss your wife',
				'Make food',
			]
	  	},

		methods: {

			addItem() {
				this.items.push(this.newitem);
				this.newitem = '';

				document.getElementById('newitem').focus();
			}
		}
	});
</script>

<?php require('../footer.php'); ?>
