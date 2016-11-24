import React from "react";

import Footer from "./Footer";
import Header from "./Header";

export default class Layout extends React.Component {

// EXAMPLE 1
	// constructor(){
	// 	super();
	// 	this.name = "Trey";
	// }

	// render(){
	// 	return(
	// 		<h1>Hey, its {this.name}!</h1>
	// 		);
	// }



// EXAMPLE 2
	// render(){
	// 	let myList = [
	// 		<Header />,
	// 		<Header />,
	// 		<Header />
	// 	];
	// 	return(
	// 		<div>{myList}</div>
	// 		);
	// }



// EXAMPLE 3
	render(){
		return(
			<div>
				<Header />
				<Footer />
			</div>
			);
	}

}