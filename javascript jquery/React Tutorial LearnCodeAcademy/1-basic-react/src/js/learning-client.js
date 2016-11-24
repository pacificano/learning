import React from "react";
import ReactDOM from "react-dom";

class Layout extends React.Component {
	getTheTime() {
		var d = new Date();
		var n = d.getTime();
		return n;
	}

	constructor(){
		super(); // must have this in react
		this.age = 35;
	}

	render() {
		const name = "TRigga";

		return (
			<h1>Its workinggg {name + " and the time is: " + this.getTheTime() + " you are " + this.name + " years old..." }!</h1>
		);
	}
}

const app = document.getElementById('app');

ReactDOM.render(<Layout/>, app);