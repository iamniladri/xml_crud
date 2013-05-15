<?php require_once 'header.php'?>

<!-- Start Navigation Menu -->

  <div class="verticalmenu">
   <ul>
     <li><a href="index.php" id="here">Home</a></li>
     <li><a href="search.php">Search</a></li>
     <li><a href="create.php">Create</a></li>
     <li><a href="delete.php">Delete</a></li>
     <li><a href="xslt.php">Xslt with XML</a></li>
   
</ul>
 </div> 
 </div>

<!-- End Navigation Menu -->

		<!-- Start Content div -->

   		<div id="content" ><p align="center"><u>Total Records of CD Store Data:</u></p>
                <div id="totalRecords" align="center" onmouseover="totalrecord()">Get The Total Records
		   </div>

		    <hr>

		<div id='showCD' align="center">
                <u>Mouse on a Table Row to display album information.</u></div><br />
		<script type="text/javascript">
		document.write("<table id='rounded-corner' summary='Results'>");
		for (var i=0;i<x.length;i++)
		  { 
		  document.write("<tr onmouseover='displayCDInfo(" + i + ")'>");
		  document.write("<td>");
		  document.write(x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
		  document.write("</td><td>");
		  document.write(x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue);
		  document.write("</td></tr>");
		  }
		document.write("</table>");
		</script>


		</div><!-- end content -->
		<?php require_once 'footer.php'?>
