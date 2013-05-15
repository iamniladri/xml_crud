<?php require_once 'header.php'?>
<!-- Start Navigation Menu -->
  <div class="verticalmenu">
	   <ul>
	     <li><a href="index.php" >Home</a></li>
	     <li><a href="search.php">Search</a></li>
	     <li><a href="create.php" >Create</a></li>
	     <li><a href="delete.php" id="here">Delete</a></li>
	     <li><a href="xslt.php">Xslt with XML</a></li>
	   
	   </ul>
 </div> 

   </div>

<!-- End Navigation Menu -->

<!-- Start Content Menu -->
        <div id="content">
                <h3>Delete On XML DOM </h3>
		<p>
                 UniqueId:<input type="text" id="cid" size="20" />
              
       		 <div id='deletenode' onclick="deletePro()">
		delete Records</div>
		<hr>
                <div id="txtHint"></div>  
		</p>	
	</div>
<!-- end content -->


		<?php require_once 'footer.php'?>
