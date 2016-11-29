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
    }]
  }
})

var example = new Vue({
  el: '#example',
  data: {
    message: 'Not working',
  }
})


