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

	render(){
		setTimeout(()=>{
			this.setState({title: "Welcome Jognn!"});
		}, 2000);
		return(
			<div>
				<Header title={this.state.title} />
				<Header title="billytitle" />
				<Footer />
			</div>
			);
	}

}