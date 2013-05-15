



<?php require_once 'header.php'?>


<!-- Start Navigation Menu -->
	  <div class="verticalmenu">
	   <ul>
	     <li><a href="index.php" >Home</a></li>
	     <li><a href="search.php">Search</a></li>
	     <li><a href="create.php" id="here">Create</a></li>
	     <li><a href="delete.php">Delete</a></li>
	     <li><a href="xslt.php">Xslt with XML</a></li>
	   
	   </ul>
	 </div> 

	</div>

<!-- end Navigation Menu -->	

<!-- Start content -->
 	
<!-- Start content -->
 	<div id="content" align="center"><h3> Create Attribute to Element of CD Stores</h3>
	
	<table id='rounded-corner'>
        <tr>
        <td>UniqueId:</td>
        <td><input type="text" id="cid" size="20" /></td>
        </tr>
       
       <tr>
        <td>Title:</td>
        <td><input type="text" id="title" size="20" /></td>
        </tr>
       <tr>
        <td>Artist:</td>
        <td><input type="text" id="artist" size="20" /></td>
        </tr>

<tr>
        <td>Country:</td>
        <td><input type="text" id="country" size="20" /></td>
        </tr>
<tr>
        <td>Company:</td>
        <td><input type="text" id="company" size="20" /></td>
        </tr>
<tr>
        <td>Price:</td>
        <td><input type="text" id="price" size="20" /></td>
        </tr>
<tr>
        <td>Year:</td>
        <td><input type="text" id="year" size="20" /></td>
        </tr>

	
        </table>
<p onclick="create_process()">Process: </p>

<p>Action Turn Around Response: <span id="txtHint"></span></p>

	</div>

<!-- end content -->
	<?php require_once 'footer.php'?>
