<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Εύδοξος</title>
        <LINK href="css/style.css" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <?php 
			session_start(); 
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
				<!--<?php echo  $_SERVER['SERVER_NAME']; ?>-->
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
                            
		<p><strong>ΗΛΕΚΤΡΟΝΙΚΗ ΥΠΗΡΕΣΙΑ ΟΛΟΚΛΗΡΩΜΕΝΗΣ ΔΙΑΧΕΙΡΙΣΗΣ ΣΥΓΓΡΑΜΜΑΤΩΝ</strong></p>
<p>Πρόκειται για μία πρωτοποριακή υπηρεσία για την άμεση και ολοκληρωμένη παροχή των Συγγραμμάτων των φοιτητών των Πανεπιστημίων και των ΤΕΙ της επικράτειας.</p>
<p>Η διαδικασία είναι πλήρως αυτοματοποιημένη και προσφέρει:&nbsp; <br>(α) Πλήρη ενημέρωση στους φοιτητές για τα παρεχόμενα Συγγράμματα σε κάθε μάθημα<br>(β) Δυνατότητα άμεσης παραλαβής των Συγγραμμάτων και<br>(γ) Αποτελεσματικούς μηχανισμούς για την ταχεία αποζημίωση των Εκδοτών και για την αποτροπή της καταχρηστικής εκμετάλλευσης των δημόσιων πόρων</p>
<p><br><strong>Περιγραφή φάσεων/διαδικασιών</strong></p>
<p>1. Κάθε Εκδότης περνάει αρχικά μία διαδικασία πιστοποίησης προκειμένου να αποκτήσει πρόσβαση στο σύστημα. Έπειτα μπορεί να προβαίνει στην καταχώριση και τη διαρκή ενημέρωση των στοιχείων των Συγγραμμάτων του στην Κεντρική Βάση Δεδομένων (ΚΒΔ).<br>2. Οι διδάσκοντες των Τμημάτων έχουν πρόσβαση στην Κεντρική Βάση των Συγγραμμάτων και μπορούν να επιλέξουν ποια Συγγράμματα θα προτείνουν για το μάθημά τους.<br>3. Τα Συγγράμματα που εγκρίνονται από τα αρμόδια ακαδημαϊκά όργανα, καταχωρίζονται από τη Γραμματεία του κάθε Τμήματος στην ΚΒΔ, σε αντιστοιχία με τα μαθήματα του Προγράμματος Σπουδών.<br>4.&nbsp; Ο φοιτητής εισέρχεται σε μία κεντρική ιστοσελίδα του Κεντρικού Πληροφοριακού Συστήματος (ΚΠΣ) από όπου γίνεται η πιστοποίησή του (μέσω Shibboleth). Εκεί ενημερώνεται για τα εγκεκριμένα Συγγράμματα των μαθήματων του Τμήματός του και επιλέγει τα Συγγράμματα που δικαιούται.<br>5. Ο φοιτητής λαμβάνει άμεσα από το ΚΠΣ ένα SMS και ένα e-mail με τον κωδικό ΡΙΝ, με τον οποίο και παραλαμβάνει τα Συγγράμματα που επέλεξε.<br>6. Το Υπουργείο Παιδείας ενημερώνεται σε πραγματικό χρόνο για την πορεία του έργου και μεριμνά για την ταχεία αποζημίωση των εκδοτών.</p>
<p>Το έργο εκτελείται για πρώτη φορά το ακαδημαϊκό έτος 2010-11 για όλους τους προπτυχιακούς φοιτητές όλων των Πανεπιστημίων/ΤΕΙ της χώρας.</p>
<p>Για τους φοιτητές των τμημάτων πληροφορικής των Πανεπιστημίων και των ΤΕΙ, θα δοθεί&nbsp;μελλοντικά η δυνατότητα επιλογής Συγγραμμάτων σε ηλεκτρονική μορφή, αφού διασφαλιστεί το απαραβίαστο «κλείδωμα» των ηλεκτρονικών αρχείων.</p>
<p>&nbsp;</p>
<p><strong>Αναμενόμενα Πλεονεκτήματα</strong></p>
<p>Α. Επιταχύνεται η διαδικασία παραλαβής Συγγραμμάτων από τους φοιτητές.<br>Β. Ελαχιστοποιείται ο διαχειριστικός φόρτος στις Γραμματείες των Τμημάτων.<br>Γ. Απλοποιείται η σχέση του Υπουργείου Παιδείας με τους Εκδότες, ελαχιστοποιώντας την ανάγκη ανταλλαγής εγγράφων - λιστών.<br>Δ. Ο χρόνος που μεσολαβεί από την εγγραφή του φοιτητή μέχρι την παραλαβή του Συγγράμματος, μπορεί να περιοριστεί σε ελάχιστες εργάσιμες ημέρες από περισσότερους από δύο μήνες σήμερα.<br>Ε. Η αποζημίωση των Εκδοτών μπορεί να γίνει αμέσως μετά την ολοκλήρωση της παράδοσης των Συγγραμμάτων, ενώ σήμερα πραγματοποιείται τουλάχιστον 12 μήνες μετά τη διανομή.<br>ΣΤ. Ελαχιστοποιούνται τα περιθώρια για καταχρηστική εκμετάλλευση δημόσιων πόρων.<br>Ζ. Εξοικονομούνται σημαντικοί ανθρώπινοι πόροι στις υπηρεσίες των Πανεπιστημίων/ΤΕΙ και του Υπουργείου Παιδείας.<br>Η. Δημιουργούνται οι προϋποθέσεις για την ασφαλή και σταδιακή μετάβαση στην εποχή του ηλεκτρονικού Συγγράμματος</p>
	
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