<?php include 'inc/header.php'; ?>

 <?php include 'inc/page-header.php'; ?>



<div class="container page-header-container">
	 <div class="row">
				<div class="col-lg-12 text-center">
          <h2>App Design and Database Design</h2>
				</div>
	 </div>
 </div> 
 <div class="container-fluid bg-light">
	 <div class="container page-content">
	 <div class="row">
          <div class="col-xl-9 mx-auto">
	          
	          <h3>Primary Purpose</h3>
						<p>The purpose of this web app is to facilitate MORE RECYCLING! One of the most common questions I hear is "Is this recyclable?".  With this app, I hope to mitigate the confusion behind recycling by providing a clear "Yes" or "No" answer. </p>
						<br>
						<h3>App Function</h3>
						<p>This app should allow you to query any number of common, and some not so common, items to learn if they are recyclable. The returned result should provide a "Yes" or "No" answer, and any special instructions on how to recycle or dispose of the items. 
						</p><br>
						<h3>Minimum Viable Product</h3>
						<p>Because city recycling facilities are the key to what can be recycled, the minimum viable product will consist of recycling standards for the city of the San Antonio. Future scalability options would offer multiple cities and a user interface where city accounts could be created, updated and maintained.
						</p><br>
						<h3>Main Pages (MVP)</h3>
						<p><strong>Whole site will have header that has one main input field to query items table for Boolean</strong></p>
						<p><strong><a href="/">Home</a></strong> - One main input field to query items table for Boolean. Links to other information and resources about recycling. </p>
						<p><strong><a href="result.php">Results</a></strong> - Returns the query result with Boolean for item, short description, and optional media or further resources for item.</p>
						<p><strong><a href="why-recycle/">Why Recycle</a></strong> - Informational page about History and Reasons we recycle and should make goals towards MORE recycling.</p>
						<p><strong><a href="recyclables.php">All Recyclables</a></strong> - List of all Recyclable items</p>
						<p><strong><a href="local-facilities.php">Local Facilities</a></strong> - Informational page about Local Recycling facilities (San Antonio) and why some seemingly recyclable items are NOT recyclable.</p>
						<br>
						<h3>Secondary Pages</h3>
						<p><strong><a href="contact.php">Contact</a></strong> - Information on how to contact </p>
						<p><strong><a href="terms.php">Terms of Use</a></strong> - Law stuff.</p>
						<br>
						<h3>Database Tabels </h3>
						<samp><kbd>Cities Table</kbd> - Table of cities / San Antonio etc.<br>
						- <kbd>id</kbd> -int[] - <code>auto-increment, primary key</code><br>
						- <kbd>name</kbd> - varchar[200]<br>
						- <kbd>recyclables_count</kbd> - int[]<br>
						- <kbd>created</kbd> - datetime[]<br>
						- <kbd>modified</kbd> - datetime[]<br><br>
						
						<kbd>Categories Table</kbd> - Table of categories / Plastics etc.<br>
						- <kbd>id</kbd> -int[] - <code>auto-increment, primary key</code><br>
						- <kbd>name</kbd> - varchar[300]<br>
						- <kbd>items_count</kbd> - int[] <br>
						- <kbd>created</kbd> - datetime[]<br>
						- <kbd>modified</kbd> - datetime[]<br><br>
						
						<kbd>Items Table</kbd> - Table of items / Pizza Box etc.<br>
						- <kbd>id</kbd> -int[] - <code>auto-increment, primary key</code><br>
						- <kbd>name</kbd> - varchar[300]<br>
						- <kbd>description</kbd> - text[]<br>
						- <kbd>recyclable</kbd> - bool[]<br>
						- <kbd>category_id</kbd> - varchar[300] - <code>foreign key - from Categories Table</code><br>
						- <kbd>status</kbd> - varchar[200]<br>
						- <kbd>created</kbd> - datetime[]<br>
						- <kbd>modified</kbd> - datetime[]<br><br>
						
						<kbd>Recyclables Table</kbd> - IF item has a city specific override / In SA, Pizza boxes are not recyclable etc.<br>
						- <kbd>id</kbd> -int[] - <code>auto-increment, primary key</code><br>
						- <kbd>city_id</kbd> - int[] - <code>foreign key - from Cities Table</code><br>
						- <kbd>item_id</kbd> - int[] - <code>foreign key - from Items Table</code><br>
						- <kbd>recyclable</kbd> - bool[]<br>
						- <kbd>description</kbd> - text[]<br>
						- <kbd>created</kbd> - datetime[]<br>
						- <kbd>modified</kbd> - datetime[]</samp><br>
				</div>
				</div>
	 </div>
 </div>     

<?php include 'inc/testimony.php'; ?>

<?php include 'inc/footer.php'; ?>

