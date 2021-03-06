<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Style Guide</title>

	<!-- meta:vp -->
	<!-- <meta name="viewport" content="width=device-width">


	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css"> -->
	<?php include "../parts/meta.php" ?>

	<style>
	h2 {
		margin-top:6em;
		border-bottom:1px solid var(--color-neutral-medium);
		margin-bottom:1em;
	}
	</style>

</head>
<body>

	<header class="container">
		<div class="card">
			<h1>Site Style Guide</h1>
		</div>
	</header>

	<nav class="container">
		<h2>Table of Contents</h2>
		<ul>
			<li><a href="#typography">Typography</a></li>
			<ul>
				<li><a href="#headings">Headings</a></li>
				<li><a href="#paragraphs">Paragraphs</a></li>
				
			</ul>
			<li><a href="#images">Images</a></li>
			<li><a href="#cards">Cards</a></li>
			<li><a href="#viewwindow">View Window</a></li>
			<li><a href="#navigations">Navigations</a></li>
			<li><a href="#tables">Tables</a></li>
			<li><a href="#forms">Forms</a></li>
			<li><a href="#flex">Flex System</a></li>
			<li><a href="#grid">Grid System</a></li>
			<li><a href="#checkboxes">CheckBoxes</a></li>
			<li><a href="#figures">Figures</a></li>
		</ul>
	</nav>

	<section class="container">
		<h2 id="typography">Typography</h2>

		<div class="card">
			<h3 id="headings">Headings</h3>
			<hr>
			<!-- h$*6>{Heading $} -->
			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>

			<code>
&lt;h1>Heading 1&lt;/h1>
&lt;h2>Heading 2&lt;/h2>
&lt;h3>Heading 3&lt;/h3>
&lt;h4>Heading 4&lt;/h4>
&lt;h5>Heading 5&lt;/h5>
&lt;h6>Heading 6&lt;/h6>
			</code>
		</div>

		<div class="card">
			<h3 id="paragraphs">Paragraphs</h3>
			<hr>
			<!-- p*3>lorem20 -->
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quisquam saepe quae quam dolores rem omnis est recusandae ullam asperiores.</p>
			<p>Saepe ratione quidem neque dolores nobis harum cum, numquam, unde pariatur rem possimus itaque non recusandae tempora amet laudantium et.</p>
			<p>Ipsa officiis necessitatibus perspiciatis vero, porro soluta temporibus quod ut dignissimos earum a optio dolorum, pariatur sed harum quaerat! Deleniti.</p>
		</div>
	</section>



	<section class="container">
		<h2 id="navigations">Navigations</h2>

	<script>
	const makeNav = (classes='') => {
		const links = ['home','store','about'];
		let ran = Math.floor(Math.random()*links.length);
		return `
		<div>
			<nav class="${classes}">
				<ul>
				${links.reduce((r,o,i)=>{
				return r+`<li class="${ran==i?'active':''}">
				<a href="#">${o}</a>
				</li>`;
				},'')}
				</ul>
			</nav>
		</div>
		`;
	}
	</script>

		<div class="card">
			<h3>Basic Nav</h3>

			<script>document.write(makeNav("nav"))</script>
		</div>
		<div class="card">
			<h3>Flex Nav</h3>

			<script>document.write(makeNav("nav-flex"))</script>
		</div>
		<div class="card">
			<h3>Stretch Nav</h3>

			<script>document.write(makeNav("nav-stretch"))</script>
		</div>
		<div class="card">
			<h3>Pills Nav</h3>

			<script>document.write(makeNav("nav-pills"))</script>
		</div>
		<div class="card">
			<h3>Breadcrumb Nav</h3>

			<script>document.write(makeNav("nav-crumbs"))</script>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
	$("[class^='nav'] a").on("click",function(e){
		e.preventDefault();
		$(this).closest('li').addClass("active")
			.siblings().removeClass("active")
	})
	// document.querySelectorAll('nav a').forEach(o=>{
	// 	o.addEventListener("click",function(e){
	// 		e.preventDefault();
	// 		this.classList.add("active");
	// 		[...this.parentElement.children].forEach(a=>{
	// 			console.log(a,o)
	// 			if(a!==o) a.classList.remove("active")
	// 		})
	// 	})
	// })
	</script>



	<script>
	const makeTable = (classes='') => {
		const head = ['ID','Office','Name','Email','Phone'];
		const body = [
			['522',"Hamilton Cline",'hcline@academyart.edu','555-2424'],
			['512',"Fred McHale",'fmchale@academyart.edu','555-2424'],
			['522',"Michael Catanzaro",'mcatanzaro@academyart.edu','555-2424'],
			['514',"Andrea Pimentel",'apimentel@academyart.edu','555-2424'],
			['516',"DC Scarpelli",'dscarpelli@academyart.edu','555-2424'],
		];

		// let ran = Math.floor(Math.random()*links.length);
		return `
		<table class="${classes}">
			<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
			<tbody>${body.reduce((r,o,i)=>r+
				`<tr>${
					[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
				}</tr>`,'')
			}</tbody>
		</table>
		`;
	}
	</script>
	<section class="container">
		<h2 id="tables">Tables</h2>


		<div class="card">
			<h3>Basic Table</h3>

			<script>document.write(makeTable('table'))</script>
		</div>


		<div class="card">
			<h3>Striped Table</h3>

			<script>document.write(makeTable('table striped'))</script>
		</div>


		<div class="card">
			<h3>Horizontal Lined Table</h3>

			<script>document.write(makeTable('table lined horizontal'))</script>
		</div>


		<div class="card">
			<h3>Vertical Lined Table</h3>

			<script>document.write(makeTable('table lined vertical'))</script>
		</div>


		<div class="card">
			<h3>Horizontal Outlined Lined Table</h3>

			<script>document.write(makeTable('table lined outline horizontal'))</script>
		</div>

		<div class="card">
			<h3>All Lined Table</h3>

			<script>document.write(makeTable('table lined all'))</script>
		</div>

		<div class="card">
			<h3>Striped with Vertical and Outlines Table</h3>

			<script>document.write(makeTable('table lined vertical outline striped'))</script>
		</div>
	</section>



	<section class="container">
		<h2 id="forms">Forms</h2>

		<div class="card">
			<h2>Form Input</h2>

			<input type="text" class="form-input" placeholder="Text">
			<input type="password" class="form-input" placeholder="Password">
			<input type="number" class="form-input" placeholder="Number">
			<input type="search" class="form-input" placeholder="Search">
		</div>

		<div class="card">
			<h2>Form Label</h2>

			<label class="form-label" for="input-example1">Example</label>
			<input type="text" class="form-input" placeholder="Text" id="input-example1">

			<label class="form-label" for="input-example2">Example</label>
			<input type="text" class="form-input" placeholder="Text" id="input-example2">

			<label class="form-label" for="input-example3">Example</label>
			<input type="text" class="form-input" placeholder="Text" id="input-example3">
		</div>

		<div class="card">
			<h2>Form Control</h2>

			<div class="form-control">
				<label class="form-label" for="input-example1">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>

			<div class="form-control">
				<label class="form-label" for="input-example2">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example2">
			</div>

			<div class="form-control">
				<label class="form-label" for="input-example3">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example3">
			</div>
		</div>

		<div class="card">
			<h2>Form Button</h2>

			<div class="form-control">
				<input type="submit" class="form-button" />
			</div>

			<div class="form-control">
				<button type="button" class="form-button">Button</button>
			</div>

			<div class="form-control">
				<a href="#" class="form-button">Anchor</a>
			</div>
		</div>

		<div class="card">
			<h2>Hotdog</h2>
			
			<div class="form-control">
				<input type="search" class="hotdog" placeholder="Search" />
			</div>
			
			<div class="form-control">
				<label class="hotdog">
					<div class="flex-none icon">
						🔍
					</div>
					<div class="flex-stretch">
						<input type="search" placeholder="Search" />
					</div>
				</label>
			</div>

			<div class="display-flex">
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<div class="form-control">
						<input type="search" class="hotdog" placeholder="Search" />
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="container">
		<h2 id="checkboxes">Check Boxes</h2>

		<div class="card">
			<h3>Basic Checkbox</h3>

			<div>
				<label for="check-example1">Checkbox</label>
				<label>
					<input type="checkbox" id="check-example1">
					Checkbox
				</label>
			</div>

			<h3>Heart Checkbox</h3>

			<div>
				<div class="heart-toggle">
					<input type="checkbox" id="heart-example" class="hidden">
					<label for="heart-example">&hearts;</label>
				</div>
			</div>

			<h3>Toggle Checkbox</h3>

			<div>
				<div class="toggle">
					<input type="checkbox" id="toggle1" class="hidden">
					<label for="toggle1"></label>
				</div>
				<div class="toggle" style="font-size:2em">
					<input type="checkbox" id="toggle2" class="hidden">
					<label for="toggle2"></label>
				</div>
			</div>
		</div>
	</section>


	<section class="container">
		<h2 id="checkboxes">Select Dropdown</h2>

		<div class="card">
			<h3>Basic Select</h3>
			<div class="form-select">
				<select>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
		</div>
	</section>


	<section class="container">
		<h2 id="figures">Figures</h2>

		<div class="card">
			<h3>Basic Figure</h3>

			<div>
				<!-- figure>img+figcaption -->
				<figure class="product-figure">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>
						Product
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="card">
			<h3>Soft Figure</h3>

			<div>
				<!-- figure>img+figcaption -->
				<figure class="product-figure soft">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>
						Product
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="card">
			<h3>Overlay Figure</h3>

			<a href="#" class="display-block">
				<!-- figure>img+figcaption -->
				<figure class="product-figure overlay">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>
						Product
					</figcaption>
				</figure>
			</a>
		</div>

		<h3>Gridded Figures</h3>

		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				

			<div>
				<!-- figure>img+figcaption -->
				<figure class="product-figure soft">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>
						Product
					</figcaption>
				</figure>
			</div>
			</div>
			<div class="col-xs-12 col-md-4">
				

			<div>
				<!-- figure>img+figcaption -->
				<figure class="product-figure soft">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>
						Product
					</figcaption>
				</figure>
			</div>
			</div>
			<div class="col-xs-12 col-md-4">
				

			<div>
				<!-- figure>img+figcaption -->
				<figure class="product-figure soft">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>
						Product
					</figcaption>
				</figure>
			</div>
			</div>
		</div>


		<h3>Product Figures</h3>
		<div class="grid gap">
			<div class="col-xs-6 col-md-4">
				<a href="#" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image"><img src="https://via.placeholder.com/300" alt=""></div>
						<figcaption class="product-description">
							<div class="product-price">&dollar;5</div>
							<div class="product-title">Product</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-6 col-md-4">
				<a href="#" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image"><img src="https://via.placeholder.com/250" alt=""></div>
						<figcaption class="product-description">
							<div class="product-price">&dollar;25</div>
							<div class="product-title">Product</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-6 col-md-4">
				<a href="#" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image"><img src="https://via.placeholder.com/310" alt=""></div>
						<figcaption class="product-description">
							<div class="product-price">&dollar;15</div>
							<div class="product-title">Product</div>
						</figcaption>
					</figure>
				</a>
			</div>
		</div>
	</section>
	
</body>
</html>