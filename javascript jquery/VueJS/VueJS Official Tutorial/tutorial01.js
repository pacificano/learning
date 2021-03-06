// COMPONENTS
Vue.component('todo-item', {
	template: '<li>This is a todo item</li>'
})

Vue.component('custom-item',{
	props: ['todo'],
	template: '<li>{{ todo.text }}</li>'
})

Vue.component('myDiv', {
  template: '<div v-if="Math.random() > 0.5">Now you see me</div><div v-else>Now you dont</div>'
})

Vue.component('my-if', {
  template: '<p>yoooooo</p>'
})

// DONT USE CAMELCASE. LOWERCASE WITH HYPHENS PLEASE
Vue.component('myRandomText', {
  template: '<h1>Here it is</h1>'
})

// EXAMPLE OF MULTILINE TEMPLATE
Vue.component('list-example', {
  template: 
  '<ul>\
    <li>one</li>\
  </ul>'
})

// CREATE NEW VUE (has to come after the components)
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue.js!',
    groceryList: [{
    	text: 'Vegetables'
    },{
    	text: 'Dogs'
    },{
    	text: 'Hats for summer'
    }],
    cats: [{
      breed: 'Burmese'
    },{
      breed: 'Tabby'
    },{
      breed: 'Siamese'
    }]
  }
})

var example = new Vue({
  el: '#example',
  data: {
    message: 'Not working',
    videoGame: {
      name: 'Final Fantasy 15',
      genre: 'RPG',
      rating: '9/10'
    }
  }
})



Vue.component('my-todo-item', {
  template: '<li>{{ title }}<button v-on:click="$emit(\'remove\')">X</button></li>',
  props: ['title']
})


var todoApp = new Vue({
  el: '#todo-app',
  data: {
    newTodoText: '',
    todos: [
      'Do the dishes',
      'Take out the trash',
      'Mow the lawn'
    ]
  },
  methods: {
    addNewTodo: function () {
      this.todos.push(this.newTodoText)
      this.newTodoText = ''
    }
  }
})