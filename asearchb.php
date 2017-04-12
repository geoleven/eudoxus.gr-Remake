<?php

	session_start(); 
	include ("./db/txt-db-api.php");	
	
	if (!file_exists(DB_DIR . "books")) {
		$db = new Database("books");
		$db->executeQuery("CREATE TABLE books (id inc, name str, ekdotis str, isbn str, writer str, lang str, sxoli str, image str)");
		$db->executeQuery("INSERT INTO books (name, ekdotis, isbn, writer, lang, sxoli, image) VALUES ('ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ: ΜΙΑ ΣΥΓΧΡΟΝΗ ΠΡΟΣΕΓΓΙΣΗ', 'ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ', '960-209-873-2', 'STUART RUSSELL, PETER NORVIG', 'el', 'Φιλοσοφική', 'https://static.eudoxus.gr/books/preview/09/cover-13909.jpg')");
	}
	else {
		$db = new Database("books");
	}
	
	$name = !isset($_POST['name']) ? "" : $_POST['name'];
	$ekdotis = !isset($_POST['ekdotis']) ? "" : $_POST['ekdotis'];
	$isbn = !isset($_POST['isbn']) ? "" : $_POST['isbn'];;
	$writer = !isset($_POST['writer']) ? "" : $_POST['writer'];
	$lang = !isset($_POST['lang']) ? "" : $_POST['lang'];
	$sxoli = !isset($_POST['sxoli']) ? "" : $_POST['sxoli'];
	if ($name == "") {
		$name = "name";
	}
	else {
		$name = "'" . $name . "'";
	}
	if ($ekdotis == "") {
		$ekdotis = "ekdotis";
	}
	else {
		$ekdotis = "'" . $ekdotis . "'";
	}	
	if ($isbn == "") {
		$isbn = "isbn";
	}
	else {
		$isbn = "'" . $isbn . "'";
	}	
	if ($writer == "") {
		$writer = "writer";
	}
	else {
		$writer = "'" . $writer . "'";
	}	
	if ($lang == "") {
		$lang = "lang";
	}
	else {
		$lang = "'" . $lang . "'";
	}	
	if ($sxoli == "") {
		$sxoli = "sxoli";
	}
	else {
		$sxoli = "'" . $sxoli . "'";
	}	
	
	//echo "SELECT * FROM books WHERE name = ".$name." and ekdotis = ".$ekdotis." and isbn = ".$isbn." and writer = ".$writer." and lang = ".$lang." and sxoli = ".$sxoli.";";
	$st = $db->executeQuery("SELECT * FROM books WHERE name = ".$name." and ekdotis = ".$ekdotis." and isbn = ".$isbn." and writer = ".$writer." and lang = ".$lang." and sxoli = ".$sxoli.";");

?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Εύδοξος</title>
        <LINK href="css/style.css" rel="stylesheet" type="text/css">
        <LINK href="css/asearchb.css" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <?php 
			//session_start(); 
			if (isset($_SESSION["uem"])) {
				$lgbn = "Έξοδος";
				?>
				<script type="text/javascript"> $(function() { $("#inl").hide(); }) </script>
                <?php
			}
			else {
				$lgbn = "Είσοδος";
				?>				
                <script type="text/javascript"> $(function() { $("#outl").hide(); $("wlcmmsg").hide(); }) </script>
                <?php
			}
		?>
    </head>
    
    <body>
        	<div id="header">
            	<a href="index.php"><img id="logo" src="assets/eudoxus-logo.png" alt="Smiley face" height="150" width="150"></a>
		
        		<div id="search">
        			<form id="tfnewsearch" method="post" action="php/bsearch.php">
                    	<input id="topstxt" type="text" class="tftextinput" name="bsearch" size="21" maxlength="120"><input id="topsbt" type="submit" value="search" class="tfbutton">
                	</form>
                    <div class="tfclear"></div>
                    <div id="topbuttons">
                		<a href="./faq.php">F.A.Q.</a>
                    	<a href="./index.php">Επικοινωνία</a>
                   		<a href="./index.php">Feedback</a>
                        <button id="logbut" class="logbutc" style="border-top-left-radius: 5px 5px; border-bottom-left-radius: 5px 5px;"><?php echo $lgbn ?></button>
                	</div><!--topbuttons-->
                    <div id="wlcmmsg">
                    	<?php if (isset($_SESSION["uem"])) { ?> Καλως ήρθες: <span style="display:inline-block; width: 5px;"></span> <a href ="showprof.php" style="font-family: Arial, Helvetica, sans-serif; "> <?php echo $_SESSION["uem"];} ?> <?php if (isset($_SESSION["uem"])) { ?></a>	<?php } ?>
                    </div>
                </div><!--search-->

              <div class="nav-menu">
                	<div id="nav">
                    <ul>
        				<li><a href="index.php">Αρχική</a></li>
        				<li><a href="#">Φοιτητές &#9662;</a>        				
            				<ul>
                			<li><a href="bkdecform.php">Δήλωσεις &#9662;</a>
                            	<ul>
                                	<li><a href="bkdecform.php">Νέα Δήλωση</a></li>
                                    <li><a href="dishis.php">Ιστορικό Δηλώσεων</a></li>
                                </ul>
                            </li>
                			<li><a href="browse.php">Συγγράματα &#9662;</a>
                            	<ul>
                                	<li><a href="./search.php">Αναζήτηση</a></li>
                                    <li><a href="trade.php">Ανταλλαγή Συγγραμμάτων</a></li>
                                </ul>
                            </li>
                			<li><a href="#">Ανακοινώσεις</a></li>
            				</ul>
                        </li>
        				<li><a href="browse.php">Γραμματείες</a></li>
                        <li><a href="browse.php">Εκδότες</a></li>
                        <li><a href="browse.php">Σημεία Διανομής</a></li>
                        <li><a href="browse.php">Βιβλιοθήκες</a></li>
                      </ul>
                    </div><!--nav-->
                 </div><!--nav-menu-->           
			</div><!--header-->
        	<div id="mainsite">
            	<div id ="logbox">
                   <div id="inl">
					<form id="loginf" method="post" action="php/login.php" style="display: inline">
						<br><br>
                        Email: <span style="display:inline-block; width: 50px;"></span><input type="text" class="logtxt" name="email" size="21" maxlength="120">
                        <br><br>
                        Password: <span style="display:inline-block; width: 21px;"></span><input type="password" class="logtxt" name="pass" size="21" maxlength="120">
                        <br><br>
                        <button id="logbut2" class="logbutc" style="border-top-left-radius: 5px 5px; border-bottom-left-radius: 5px 5px;">Είσοδος</button>
                    </form>
                    <button id="canclog" class="logbutc" style="border-top-left-radius: 5px 5px; border-bottom-left-radius: 5px 5px;">Ακύρωση</button>
                    <br><br><a href="register.php">Εάν δεν είστε εγγεγραμμένοι πατήστε εδώ για εγγραφή.</a>
                    </div><!--inl-->
                    <div id="outl">
                    	<form id="logoutf" method="post" action="php/logout.php" style="display: inline">
                        	 <br> <br> <br> <br> Είστε σίγουροι ότι θέλετε να εκτελέσετε έξοδο? <br>
                        	<button id="logbut2" class="logbutc" style="border-top-left-radius: 5px 5px; border-bottom-left-radius: 5px 5px; margin-top: 20px;">Έξοδος</button>
                        </form>
                        <button id="canclog2" class="logbutc" style="border-top-left-radius: 5px 5px; border-bottom-left-radius: 5px 5px;">Ακύρωση</button>
                    </div>
                </div><!--logbox-->
            	<div id="boxes">                        
                 <div class="boxMain">
                         <div class="article">
                         	<?php
								if($st->next() == 0) {
							?>
                            <br><br><br>Δεν υπάρχουν βιβλία που να πληρούν τα κριτήρια που θέσατε!<br><br><br>
                            <?php
								}
								else {
									list($id, $namel, $ekdotisl, $isbnl, $writerl, $langl, $sxolil, $imagel) = $st->getCurrentValues();								
							?>
                            	<br><br>
								<div class="bookbox">
                                	<div class="bookimage">
                                    	<img src="<?php echo $imagel;?>" alt="Book cover image" height="120" width="90"></a>
                                    </div><!--bookimage-->
                                    <div class="bookdetails">
                                    	Όνομα:		<?php echo $namel;?><br>
										Εκδότης:		<?php echo $ekdotisl;?><br>
										ISBN:		<?php echo $isbnl;?><br>
										Συγγραφέας: <?php echo $writerl;?><br>
										Γλώσσα:		<?php if($langl == "el"){echo "Ελληνικά";}elseif($langl == "en"){echo "Αγγλικά";}elseif($langl=="fr"){echo "Γαλλικά";}?><br>
										Σχολή:		<?php echo $sxolil;?><br>
                                    </div><!--bookdetails-->
                                </div><!--bookbox-->
                                <br><br><br>
                                <?php
									while($st->next()) {
										list($id, $namel, $ekdotisl, $isbnl, $writerl, $langl, $sxolil, $imagel) = $st->getCurrentValues();	
								?>
                                <div class="bookbox">
                                	<div class="bookimage">
                                    	<img src="<?php echo $imagel;?>" alt="Book cover image" height="120" width="90"></a>
                                    </div><!--bookimage-->
                                    <div class="bookdetails">
                                    	Όνομα:		<?php echo $namel;?><br>
										Εκδότης:		<?php echo $ekdotisl;?><br>
										ISBN:		<?php echo $isbnl;?><br>
										Συγγραφέας: <?php echo $writerl;?><br>
										Γλώσσα:		<?php if($langl == "el"){echo "Ελληνικά";}elseif($langl == "en"){echo "Αγγλικά";}elseif($langl=="fr"){echo "Γαλλικά";}?><br>
										Σχολή:		<?php echo $sxolil;?><br>
                                    </div><!--bookdetails-->
                                </div><!--bookbox-->
                                <br><br><br>
							<?php
									}
								}
							?>
                          </div><!--article-->
                    </div><!--Box-->
                </div><!--Boxes-->   
            </div><!--mainsite--> 
      
            <div id="footer">
            	<div id="social">
                     <a href="https://www.facebook.com/eudoxus.gr" target="_blank"><img class="logo" src="assets/fb.png" alt="Smiley face" height="50" width="50"></a>
                     <a href="https://twitter.com/eudoxusgr" target="_blank"><img class="logo" src="assets/tw.png" alt="Smiley face" height="50" width="50"></a>
                     <a href="http://www.youtube.com/playlist?list=PLEE96lbT8Igue6r5hGeuaLPM9Pz7j8EW4" target="_blank"><img class="logo" src="assets/yt.png" alt="Smiley face" height="50" width="50"></a>
                </div><!--Social-->
                <div id="sitemap">
                	<br>
                </div><!--sitemap-->
                <div id="sponsor"> 	
           			<div style="text-align: center; padding: 7px 0px 7px 0px;">
                		<div style="float: left; padding-left: 30px;">
                    		<a href="http://www.minedu.gov.gr/" target="_blank">
                        	<img src="assets/minedu_logo_2.png" alt="Υπουργείο Παιδείας" border="0"></a>
                		</div>
                		<div style="float: left; padding-left: 20px;">
                    		<a href="http://www.grnet.gr/" target="_blank">
                        	<img src="assets/grnet_logo_1.png" alt="ΕΔΕΤ" border="0"></a>
                		</div>
                		<div style="float: left; padding-left: 20px;">
                    		<a href="http://europa.eu/" target="_blank">
                        	<img src="assets/ee_1.png" alt="Ευρωπαϊκή Ένωση" border="0"></a>
                		</div>
                		<div style="float: left; padding-left: 20px;">
                    		<a href="http://www.digitalplan.gov.gr/portal/" target="_blank">
                        	<img src="assets/psifiaki_ellada_1.png" alt="Ψηφιακή Σύγκλιση" border="0"></a>
                		</div>
                		<div style="float: left; padding-left: 20px;">
                    		<a href="http://www.espa.gr" target="_blank">
                        	<img src="assets/espa-logo.png" alt="ΕΣΠΑ" border="0"></a>
                		</div>
                	<div class="clear">
               		</div>
               		<br><br><br><br>
                		<div style="float: center; font-weight: bold; font-size: 13px">
                   			 Με τη συγχρηματοδότηση της Ελλάδας &amp; της Ευρωπαϊκής Ένωσης
                		</div>
           		  </div>
                </div><!--sponsor-->
            </div><!--footer-->
    <?php
		if (isset($_SESSION["errmsg1"]) || isset($_SESSION["confmsg1"]) ) {
			if (isset($_SESSION["errmsg1"])) {
				unset($_SESSION["errmsg1"]);
			}
			if (isset($_SESSION["confmsg1"])) {
				unset($_SESSION["confmsg1"]);
			}
		}
	?>
    
    
    <script> 
		$(document).ready(function(){
			$("#logbox").hide();    
			$("#logbut").click(function(){$("#logbox").show();});
			$("#logbut").click(function(){$("#boxes").hide();});            
		 	$("#canclog").click(function(){$("#logbox").hide();});
			$("#canclog").click(function(){$("#boxes").show();});
			$("#canclog2").click(function(){$("#logbox").hide();});
			$("#canclog2").click(function(){$("#boxes").show();});
		 });
	</script>

    </body>
    
</html>
