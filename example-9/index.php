<?php require('../header.php'); ?>


<div id="app" class="container">

	<div class="panel panel-default">
		<div class="panel-heading">
			TODO'S
		</div>
		<ul class="list-group">
			<li v-for="item in items" class="list-group-item" :class="{'list-group-item-success': item.done}">
				{{ item.title }} <a href="#" @click.prevent="deleteItem(item)">delete</a>
			</li>
		</ul>
	</div>

</div>

<script src="https://unpkg.com/vue"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
			newitem: '',
	    	items: [
				{done:false, title: 'Clean your desk'},
				{done:false, title: 'Pickup your kids'},
				{done:false, title: 'Kiss your wife'},
				{done:false, title: 'Make food'},
			]
	  	},

		methods: {

			deleteItem(item) {
				this.items.splice(this.items.indexOf(item),1);
			}
		}
	});
</script>

<?php require('../footer.php'); ?>
