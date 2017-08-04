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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
	var app = new Vue({
		el: '#app',
		data: {
			newitem: '',
	    	items: []
	  	},

		mounted() {
			this.loadItems();
		},

		methods: {

			loadItems() {
				axios.get('items.json').then(response => {
					this.items = response.data;
				});
			}
		}
	});
</script>

<?php require('../footer.php'); ?>
