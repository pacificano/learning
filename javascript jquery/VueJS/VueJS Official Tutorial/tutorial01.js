// COMPONENTS
Vue.component('todo-item', {
	template: '<li>This is a todo item</li>'
})

Vue.component('custom-item',{
	props: ['todo'],
	template: '<li>{{ todo.text }}</li>'
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
    }]
  }
})




