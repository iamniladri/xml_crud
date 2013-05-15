<?php require_once 'header.php'?>

<!-- Start Navigation Menu -->
  <div class="verticalmenu">
   <ul>
     <li><a href="index.php" >Home</a></li>
     <li><a href="search.php" id="here">Search</a></li>
     <li><a href="create.php" >Create</a></li>
     <li><a href="delete.php" >Delete</a></li>
     <li><a href="xslt.php">Xslt with XML</a></li>
   
</ul>
 </div> 

   		</div>

<!-- End Navigation Menu -->
<!-- Start content -->
   		

           		<div id="content">


Artist Name: <input type="text" id="search_text" onkeyup="showHint(this.value)" size="20" />
</form>
<p>Suggestions: <span id="txtHint"></span></p>


<div id='showCD' align="center" onclick="showdataBYName()">
Show The Records</div>



		</div><!-- end content -->
		<?php require_once 'footer.php'?>
