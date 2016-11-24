import React from "react";

import Footer from "./Footer";
import Header from "./Header";

export default class Layout extends React.Component {

	// EXAMPLE OF STATE
	// constructor(){
	// 	super();
	// 	this.state = {name: "Trey"};
	// }

	// render(){
	// 	setTimeout(() => {
	// 		this.setState({name: "Trilly"});
	// 	}, 1000)
	// 	return(
	// 		<div>
	// 			{this.state.name}
	// 			<Header />
	// 			<Footer />
	// 		</div>
	// 		);
	// }


	// EXAMPLE OF PROP
	// render(){
	// 	const title = "Welcome Trey";
	// 	return(
	// 		<div>
	// 			<Header title={title} />
	// 			<Header title="billytitle" />
	// 			<Footer />
	// 		</div>
	// 		);
	// }



	constructor(){
		super();
		this.state = {
			title: "Welcome",
		};
	}

	changeTitle(title){
		this.setState({title});
	}

	render(){
		// setTimeout(()=>{
		// 	this.setState({title: "Welcome Jognn!"});
		// }, 2000);
		return(
			<div>
				<Header changeTitle={this.changeTitle.bind(this)} title={this.state.title} />
				<Footer />
			</div>
			);
	}

}