<!DOCTYPE HTML>
<html>
  <head>
     <meta name="description" content="COM214 Airport Finder" />
	 
	 <link rel="stylesheet" type="text/css" href="styles.css" />
	 
	 <script type="text/javascript">
	    window.onload = function() {
	      var canv=document.getElementById("canvas1");
          var c=canv.getContext("2d");      
          var img = new Image();  
          var w, h;            
          img.onload = function(){  			  
            h = this.height;
            w = this.width;
            canv.width = w;		// resize the canvas to the new image size
            canv.height = h;				
				  
            c.drawImage(img, 0, 0, w, h ); 		  
          } 
		  img.src = 'map.png';
        }
	 </script>
  </head>
  <body>
    <div id="top">
	  <header id="header">
	    <h1 id="h1">The COM214 Airport Finder</h1>
		<section id="s1">
		  <form action="finder.php" method="post">
		    <input type="submit" name="button" value="Create"/>
			<input type="submit" name="button" value="Drop"/>
		  </form>
		  <?php
			$link = mysql_connect('localhost','root',''); 
			if (!$link) { 
				die('Could not connect to MySQL: ' . mysql_error()); 
			} 
			echo 'Connection OK'; mysql_close($link);
		  /*
		   if($_POST("button") == "Create") {
			  $db_conn = mysql_connect("localhost", "root", "");
              if (!$db_conn)
                 die("Unable to connect: " . mysql_error());  // die is similar to exit
            
              if (mysql_query("CREATE DATABASE kerr", $db_conn))
                 echo "Database ready";
              else
                 echo "Unable to create database: " . mysql_error();
		   }
             
              mysql_select_db("kerrdb", $db_conn);
              $cmd = "CREATE TABLE airports(
                        stock varchar(5) NOT NULL PRIMARY KEY,
                        low float(4,2),
                        high float(4,2),
                        close float(4,2) 
              )";
              mysql_query($cmd, $db_conn);
			  $cmd = "LOAD DATA LOCAL INFILE 'Airports.csv' INTO TABLE clist
					  FIELDS TERMINATED BY ','";
			  mysql_query($cmd);
		   }
		   if($_POST("button") == "Drop") {
		      $db_conn = mysql_connect("localhost", "root", "com214");
              if (!$db_conn)
                  die("Unable to connect: " . mysql_error());
				
			  $retval = mysql_query( "DROP DATABASE market", $db_conn );
			  if(! $retval )
  				  die('Unable to delete database: ' . mysql_error());

			  echo "Database deleted successfully\n";
		   }
			 */
		  ?>  
		</section>
	  </header>
	  
	  <section id="s2">
	    <canvas id="canvas1">
		  Your browser does not support the canvas element.
		</canvas>
	  </section>
	  
	  
	  <section id="s3">
	    <form>
		  Latitude: <input type="text" name="lat" readonly="readonly"/>
		  Longitude: <input type="text" name="long" readonly="readonly"/>
		  <input type="submit" value="Show Closest Airports" />
		</form>
	  </section>
	
  </body>
</html