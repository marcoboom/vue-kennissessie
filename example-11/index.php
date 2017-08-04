<?php require('../header.php'); ?>


<div id="app" class="container">

	<div class="panel panel-default">
		<div class="panel-heading">
			Add todo
		</div>
		<div class="panel-body">
			<input type="text" class="form-control" id="newitem" v-model="newitem" @change.prevent="addItem"/>
		</div>
	</div>

	<todo-item v-for="(item, key) in items" :index="key+1" :item="item" @delete="deleteItem" />
</div>

<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>

	Vue.component('todo-item', {
		template: `
			<div class="panel" :class="item.done ? 'panel-primary' : 'panel-default'">
				<div class="panel-heading">
					Todo {{ index }}
				</div>
				<div class="panel-body">
					{{ item.title }}
				</div>
				<div class="panel-footer">
					<a href="#" @click.prevent="$emit('delete', item)" class="btn btn-danger">delete</a>
					<a href="#" @click.prevent="complete()" class="btn" v-text="item.done ? 'undone' : 'done'"  :class="item.done ? 'btn-muted' : 'btn-success'"/>
				</div>
			</div>
		`,
		props: ['item','index'],
		methods: {
			complete() {
				this.item.done = !this.item.done;
			},
		}
	})

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
			},

			deleteItem(item) {
				this.items.splice(this.items.indexOf(item),1);
			},

			addItem() {
				this.items.unshift({done:false, title: this.newitem});
				this.newitem = '';

				document.getElementById('newitem').focus();
			}
		}
	});
</script>

<?php require('../footer.php'); ?>
