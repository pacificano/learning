import React from "react";
import { IndexLink, Link } from "react-router";

import Footer from "../components/Footer";



export default class Layout extends React.Component {

	render(){
		const { location } = this.props;

		return(
			<div>
				<div>
					<IndexLink to="/">Home</IndexLink>
					<Link to="aboutus">About Us</Link>
				</div>

				<div>
					<h1>Hello</h1>
					{this.props.children}
				</div>

				<Footer />

			</div>
			);
	}

}