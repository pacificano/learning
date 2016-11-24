// destructuring

var foo = {
	bar: 1,
	baz: 2
}

var { bar, baz } = foo;

console.log(bar + " and " + baz);


var tenses = [
	"me", 
	"you",
	"he",
	"she"
];

var [ firstPerson, secondPerson ] = tenses;

console.log(firstPerson);
console.log(secondPerson);



// classes

class Parent{

	foo(name){
		console.log("hello dude " + name);
	}

	static granny(){
		console.log("i'm a granny");
	}
}

let parent = new Parent();

parent.foo("billy");



// extending

class Child extends Parent {
	baz(){
		console.log("my name is barry");
	}
}

let samuel = new Child();
samuel.foo("samuel");
samuel.baz();



// arrow functions
let goob = (a, b) => {
	return a + b;
}

console.log(goob(2, 4));

[0,1,2].map(val => val++); // [1,2,3]

// arrow functions also bind whatever youre doing to this
// lexical binding

var module = {
	age: 35,
	foo: function() {
		setTimeout(() => {
			console.log(this.age);
		}, 100);
	}
};

module.foo();



// es6 module loading
module.exports.foo = function(){

};
module.exports.bar = function(){

};

import myModule from "myModule";












