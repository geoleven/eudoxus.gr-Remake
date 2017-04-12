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
        
        
	<script type="text/javascript">
        function showAll() {
            $(".content-body").show();
        }
        function hideAll() {
            $(".content-body").hide();
        }
    </script>
    
    <script type="text/javascript">
		function slider(id) 
		{
				$('#' + id).slideToggle("fast");
		}
	</script>
			
    
    
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
                            

                                
    <div class="right">
        <a href="javascript:showAll()" class="icon-btn bg-expand">Εμφάνιση Όλων</a> <a href="javascript:hideAll()" class="icon-btn bg-collapse">Aπόκρυψη Όλων</a>
    </div>
    <div class="clear">
    </div>
    
            <div style="border: 1px solid #AAA; padding: 3px; text-align: center; background: rgba(200,227,248,1); margin-bottom: 7px; font-weight: bold;">
                Φοιτητές</div>
            
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem86');">1.Μπορώ να δηλώσω και να παραλάβω Συγγράμματα για μαθήματα προηγούμενων εξαμήνων;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem86"><p>Ναι, εφόσον ο φοιτητής δεν έχει εξεταστεί επιτυχώς στο συγκεκριμένο μάθημα και δεν έχει παραλάβει ήδη σύγγραμμα για το μάθημα αυτό τα προηγούμενα έτη (ακόμη και αν το σύγγραμμα έχει αλλάξει)</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem90');">2.Τι σημαίνει όταν δίπλα σε κάποιο Σύγγραμμα βλέπω την ένδειξη "Διαθεσιμότητα: 0"; </a>
	</div><div class="content-body" style="display:none" id="ContentListItem90"><p>Σημαίνει πως δεν υπάρχουν αντίτυπα του Συγγράμματος στο Σημείο Διανομής και ότι ο Εκδότης θα στείλει σύντομα νέα. Με την άφιξη των νέων αντιτύπων η εφαρμογή ενημερώνεται αυτόματα, οπότε ο Φοιτητής μπορεί ανατρέχοντας στην εφαρμογή να ενημερώνεται για το διαθέσιμο απόθεμα.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem50');">3.Σε περίπτωση απώλειας του προσωπικού κωδικού PIN, πως μπορεί να γίνει η ανάκτησή του;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem50"><p>Ο φοιτητής έχει τη δυνατότητα να επιλέξει επαναποστολή του κωδικού PIN από την εφαρμογή του στο "Εύδοξος". &nbsp;Συγκεκριμένα, από την αρχική σελίδα στην οποία αναγράφονται τα στοιχεία του φοιτητή, πατάει: "Δηλώσεις Συγγραμμάτων" -&gt; "Ενημέρωση τρέχουσας δήλωσης" ή "Επισκόπηση" για παλιότερη δήλωση -&gt; "Συνέχεια" και στη νέα οθόνη θα μπορεί να επιλέξει "Υπενθύμιση του αριθμού ΡΙΝ". Το PIN θα εμφανιστεί στην οθόνη του και θα σταλεί και στο e-mail που έχει ορίσει στο "Εύδοξος".</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem82');">4.Οι φοιτητές που υποβάλλουν αίτηση μετεγγραφής σε ποιο τμήμα δικαιούνται να δηλώσουν Συγγράμματα;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem82"><p>Οι φοιτητές ή σπουδαστές, που υποβάλλουν αίτηση μετεγγραφής στις Γραμματείες των Τμημάτων και επέλεξαν διδακτικά συγγράμματα μέσω του πληροφοριακού συστήματος “ΕΥΔΟΞΟΣ”, τα οποία προμηθεύτηκαν ενόσω φοιτούσαν ή σπούδαζαν στο Τμήμα προέλευσης, έχουν την δυνατότητα αφότου μετεγγραφούν στο Τμήμα υποδοχής να επιλέξουν εκ νέου συγγράμματα μέσω του ιδίου πληροφοριακού συστήματος. Οι μετεγγραφόμενοι φοιτητές ή σπουδαστές, που εξετάστηκαν ήδη στο Τμήμα προέλευσης, οφείλουν να δηλώσουν στο πληροφοριακό σύστημα μόνο τον αριθμό των μαθημάτων για τα οποία έχουν παραλάβει συγγράμματα και κατά την κρίση της Γενικής Συνέλευσης του Τμήματος υποδοχής απαλλάσσονται από την εξέταση τους. Εάν οι υποβάλλοντες αίτηση μετεγγραφής βρίσκονται στο πρώτο εξάμηνο σπουδών και δεν έχουν εξεταστεί στο τμήμα προέλευσης, τότε θα δηλώνουν μηδενικό αριθμό μαθημάτων.</p>
<p>Οι φοιτητές ή σπουδαστές, &nbsp;που υποβάλλουν ηλεκτρονικά αίτηση μετεγγραφής, δικαιούνται να επιλέξουν συγγράμματα μέσω του ίδιου πληροφοριακού συστήματος, μόνο αφού εγγραφούν στο Τμήμα υποδοχής.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem85');">5.Μπορώ να επιλέξω τώρα Συγγράμματα και για το Εαρινό Εξάμηνο;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem85"><p>Όχι, κατά την τρέχουσα περίοδο δήλωσης συγγραμμάτων δηλώνονται μόνο συγγράμματα για το χειμερινό εξάμηνο. Οι δηλώσεις για το εαρινό εξάμηνο θα γίνουν την αντίστοιχη περίοδο.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem83');">6.Πως υπολογίζεται ο αριθμός μαθημάτων για τα οποία έχουν παραληφθεί Συγγράμματα πριν το "Εύδοξος";</a>
	</div><div class="content-body" style="display:none" id="ContentListItem83"><p>Πρόκειται για το συνολικό αριθμό μαθημάτων για τα οποία ο Φοιτητής έχει παραλάβει σύγγραμμα (το οποίο μπορεί να αποτελείται από ένα η περισσότερα βιβλία). Δε συμπεριλαμβάνονται δωρεάν πανεπιστημιακές σημειώσεις ή σημειώσεις εργαστηρίων.</p>
<p>Σε περίπτωση μετεγγραφών συμπεριλαμβάνεται και ο αριθμός συγγραμμάτων που παραλήφθησαν στο τμήμα προέλευσης.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem49');">7.Σε περίπτωση που ένας φοιτητής δε διαθέτει κινητό τηλέφωνο, πως μπορεί να παραλάβει τον προσωπικό κωδικό PIN;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem49"><p>Κατά την τελική υποβολή δήλωσης των Συγγραμμάτων, ο αριθμός PIN εμφανίζεται στην οθόνη του χρήστη και αποστέλλεται μέσω e-mail.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem48');">8.Στο Εύδοξος θα συμμετέχουν και οι νεοεισαχθέντες φοιτητές;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem48"><p>Ναι. Μετά την εγγραφή τους θα πρέπει να λάβουν κωδικούς πιστοποίησης (username, password) από το οικείο ίδρυμα.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem47');">9.Με ποιους κωδικούς μπορούν οι φοιτητές να εισέλθουν στο σύστημα;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem47"><p>Οι φοιτητές μπορούν να πιστοποιηθούν στο ΚΠΣ και να επιλέξουν Συγγράμματα με τους κωδικούς (username, password) που έχουν λάβει από το οικείο ίδρυμα.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem113');">10.Τι πρέπει να προσέξω για την ασφάλειά μου?</a>
	</div><div class="content-body" style="display:none" id="ContentListItem113"><p>
</p><p>Δε θα πρέπει να αποκαλύπτετε σε κανέναν το Όνομα Χρήστη και τον Κωδικό Πρόσβασης που σας έχουν δοθεί από το Ίδρυμά σας, όπως επίσης και τον προσωπικό κωδικό PIN που παίρνετε κατά τη δήλωση συγγραμμάτων σας.</p>
<p>Επίσης, σε περίπτωση που συνδέεστε στο σύστημα από δημόσιο υπολογιστή, βεβαιωθείτε ότι πατάτε πάντα το κουμπί "Αποσύνδεση" πάνω δεξιά στην οθόνη κατά την έξοδό σας και ότι κλείνετε το φυλλομετρητή.</p>
<p></p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem133');">11.Πως εξαργυρώνω τις πιστωτικές μονάδες;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem133"><p>Εξαργύρωση των πιστωτικών μονάδων μπορείτε να κάνετε μέσα από την εφαρμογή του Ευδόξου κατόπιν της δήλωσης συγγραμμάτων. Αναλυτικές οδηγίες μπορείτε να βρείτε εδώ</a>.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem103');">12.Τι μπορώ να κάνω σε περίπτωση που χάσω τους κωδικούς μου / αντιμετωπίζω πρόβλημα με την είσοδό μου στην εφαρμογή φοιτητών;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem103"><p>Για θέματα που αφορούν την πρόσβασή σας στην εφαμοργή φοιτητών του Ευδόξου (Όνομα Χρήστη/Κωδικός Πρόσβασης) θα πρέπει να απευθυνθείτε στις αντίστοιχες υπηρεσίες του οικείου σας ιδρύματος.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem46');">13.Εάν αλλάξει γνώμη ο φοιτητής για το Σύγγραμμα που έχει δηλώσει μπορεί να αλλάξει τη δήλωσή του;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem46"><p>Εφ' όσον δεν έχει γίνει παραλαβή Συγγράμματος για ένα μάθημα, ο φοιτητής διατηρεί το δικαίωμα να αλλάξει την επιλογή του και στο "Εύδοξος", εντός της σχετικής προθεσμίας. Επισημαίνεται ότι για τα συγγράμματα που αποστέλλονται μέσω ταχυμεταφοράς, αλλαγή επιλογής δεν μπορεί να γίνει μετά την εκκίνηση αποστολής του βιβλίου από τον Εκδότη.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem45');">14.Πόσα βιβλία μπορεί να δηλώσει στο σύστημα και να  παραλάβει ένας φοιτητής για το τρέχον εξάμηνο;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem45"><p>Ο αριθμός των Συγγραμμάτων που μπορεί να παραλάβει ένας φοιτητής κάθε εξάμηνο καθορίζεται από τη σχολή του.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem44');">15.Σε περίπτωση που ένας φοιτητής δεν παραλάβει το Σύγγραμμα για ένα μάθημα που δήλωσε, χάνει το δικαίωμα να επιλέξει Σύγγραμμα για το μάθημα σε άλλο ακαδημαϊκό έτος;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem44"><div style="display: block;">
<p>Εφ' όσον ένα Σύγγραμμα δεν έχει παραληφθεί, ο  φοιτητής διατηρεί το δικαίωμα επιλογής Συγγράμματος στο μέλλον, εφόσον το συμπεριλάβει εκ νέου στη δήλωση μαθημάτων του.</p>
</div></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem58');">16.Τι συμβαίνει εάν ένας εκδότης δεν έχει Σημείο Διανομής συγγραμμάτων στο νομό όπου σπουδάζω;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem58"><p>Στην περίπτωση αυτή το Σύγγραμμα θα παραδίδεται υποχρεωτικά μέσω υπηρεσίας ταχυμεταφοράς, στην πόλη του φοιτητή και σε σημείο παρουσίας της εταιρείας ταχυμεταφοράς, που θα επιλέγεται από τον ίδιο. Σε περίπτωση που ο φοιτητής αμελήσει να παραλάβει το Σύγγραμμα αυτό, χάνει το δικαίωμα παραλαβής για το συγκεκριμένο Σύγγραμμα.</p></div>
</div>
                
            
            <div style="clear: both; padding-bottom: 10px">
            </div>
        
            <div style="border: 1px solid #AAA; padding: 3px; text-align: center; background: rgba(200,227,248,1);; margin-bottom: 7px; font-weight: bold;">
                Εκδότες</div>
            
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem23');">1.Είναι δυνατή η διάθεση Συγγραμμάτων χωρίς να γίνει χρήση της υπηρεσίας «Εύδοξος»;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem23"><p>Απαραίτητη για τη διάθεση Συγγραμμάτων από το ακαδημαϊκό έτος 2010-2011 είναι η χρήση της ηλεκτρονικής υπηρεσίας «Εύδοξος». Η διαδικασία που ακολουθείτο μέχρι τώρα δε θα εφαρμοσθεί για κανένα Δημόσιο Εκπαιδευτικό Ίδρυμα της Τριτοβάθμιας Εκπαίδευσης. Επισημαίνεται ότι στο Εύδοξος δε συμμετέχουν οι Στρατιωτικές Σχολές και τα Τμήματα του Ελληνικού Ανοιχτού Πανεπιστημίου.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem26');">2.Ποιοι έχουν δικαίωμα να καταχωρίσουν Συγγράμματα προς διάθεση;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem26"><p>Δικαίωμα καταχώρισης Συγγραμμάτων προς διάθεση σε Πανεπιστήμια/ΤΕΙ έχουν όσοι είναι δικαιούχοι ή/και έχουν αποκτήσει νομίμως τα δικαιώματα διανομής των αντίστοιχων Συγγραμμάτων.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem28');">3.Πρέπει να δηλωθούν τώρα και τα Συγγράμματα που αφορούν το εαρινό εξάμηνο;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem28"><p>Ναι. Πρέπει να δηλωθούν όλα τα Συγγράμματα για το επόμενο ακαδημαϊκό έτος.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem25');">4.Υπάρχουν περιορισμοί ως προς το μέγεθος ή τον τύπο των αρχείων που καταχωρίζονται για κάθε Σύγγραμμα στο ΚΠΣ;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem25"><p>Στο ΚΠΣ μπορούν να καταχωριστούν ανεξαρτήτως μεγέθους, αρχεία pdf για τον Πίνακα Περιεχομένων και το Ενδεικτικό Απόσπασμα και αρχεία .jpeg, .jpg, png ή .gif για το Εξώφυλλο και το Οπισθόφυλλο.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem24');">5.Υπάρχει περιορισμός στο πλήθος ή στο περιεχόμενο των Συγγραμμάτων που μπορούν να καταχωριστούν στην Κεντρική Βάση Δεδομένων;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem24"><p>Δεν υπάρχει κανένας περιορισμός ως προς τον αριθμό ή το περιεχόμενο των Συγγραμμάτων που μπορεί ένας Εκδότης να καταχωρίσει.<br>Επισημαίνεται ότι είναι άσκοπη η καταχώριση Συγγραμμάτων που δεν παρουσιάζουν διδακτικό ενδιαφέρον αφού για να διατεθούν στους φοιτητές είναι αναγκαίο να προταθούν κατόπιν και από το Διδακτικό Προσωπικό.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem112');">6.Τι πρέπει να προσέξω για την ασφάλειά μου?</a>
	</div><div class="content-body" style="display:none" id="ContentListItem112"><p>
</p><p>Για τη δική σας ασφάλεια σας συνιστούμε να επιλέξετε έναν συνδυασμό από γράμματα, αριθμούς και σύμβολα για να δημιουργήσετε ένα μοναδικό κωδικό πρόσβασης που δεν σχετίζεται με τα προσωπικά σας στοιχεία. Μπορείτε για παράδειγμα να επιλέξτε μια τυχαία λέξη ή φράση και εισαγάγετε αριθμούς ή σύμβολα στην αρχή, στη μέση και στο τέλος (για παράδειγμα "m1awra1ap3tal0uda"). Η χρήση απλών λέξεων ή φράσεων όπως "password" ή "12345", θα πρέπει να αποφεύγεται. Επίσης, σε περίπτωση που συνδέεστε στο σύστημα από δημόσιο υπολογιστή, βεβαιωθείτε ότι πάντα πατάτε το κουμπί "Αποσύνδεση" πάνω δεξιά στην οθόνη κατά την έξοδό σας και κλείνετε το φυλλομετρητή.</p>
<div><br></div>
<p></p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem27');">7.Μπορώ να καταχωρίσω στην Κεντρική Βάση Δεδομένων Συγγράμματα, τα οποία δεν έχουν κοστολογηθεί από το Υπουργείο Παιδείας με βάση τις ισχύουσες διατάξεις;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem27"><p>Στην ΚΒΔ μπορούν να συμπεριληφθούν Συγγράμματα, για τα οποία δεν έχει ολοκληρωθεί η διαδικασία της κοστολόγησης. Επισημαίνεται όμως ότι ο Εκδότης με την καταχώριση των Συγγραμμάτων του στο ΚΠΣ δεσμεύεται να τα διαθέσει στους φοιτητές για το επόμενο ακαδημαϊκό έτος, ανεξαρτήτως του αποτελέσματος της κοστολόγησης.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem43');">8.Τι συμβαίνει σε περίπτωση που ένας Εκδότης δε διαθέτει Σημείο Διανομής σε κάποια πόλη που εδρεύει ένα τμήμα Πανεπιστημίου ή ΤΕΙ;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem43"><p>Σε αυτήν την περίπτωση ο Εκδότης δεσμεύεται να στείλει το σύγγραμμα στο φοιτητή που το επέλεξε μέσω υπηρεσίας ταχυμεταφοράς</a>, η οποία έχει επιλεγεί στο πλαίσιο του προγράμματος «Εύδοξος» μέσω μειοδοτικού διαγωνισμού. Ο φοιτητής θα ορίζει εξ'αρχής το επιθυμητό σημείο παραλαβής αυτών των Συγραμμάτων.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem42');">9.Μετά τη λήξη της διανομής των Συγγραμμάτων χρειάζεται ο Εκδότης να καταθέσει τις λίστες των Συγγραμμάτων που παρέλαβαν οι φοιτητές στο Υπουργείο Παιδείας;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem42"><p>Όχι. Το Υπουργείο Παιδείας έχει τη δυνατότητα να παρακολουθεί την πραγματική πορεία διαθέσης όλων των Συγγραμμάτων σε πραγματικό χρόνο.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem10');">10.Είναι δυνατόν να χρησιμοποιηθεί το ίδιο Σημείο Διανομής από δύο ή περισσότερους Εκδότες;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem10"><p>Βεβαίως, αρκεί να συμφωνεί ο υπεύθυνος του Σημείου Διανομής και να δηλωθεί το συγκεκριμένο Σημείο Διανομής από τους αντίστοιχους Εκδότες.</span></p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem41');">11.Πώς θα διατίθενται τα Συγγράμματα που μέχρι σήμερα διανέμονταν εντός του χώρου κάποιας Σχολής (πχ. Σε κάποιο γραφείο ή εργαστήριο);</a>
	</div><div class="content-body" style="display:none" id="ContentListItem41"><p>Οι χώροι αυτοί θα μπορούν να δηλωθούν κανονικά ως "Σημεία Διανομής", τα οποία θα πρέπει να επιλεγούν από τους αντίστοιχους εκδότες.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem31');">12.Σε περίπτωση απώλειας του Ονόματος χρήστη ή/και του Κωδικού πρόσβασης τι μπορώ να κάνω;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem31"><p>Από τη σελίδα όπου συνδέεστε με το ΚΠΣ μπορείτε να επιλέξετε «Υπενθύμιση Κωδικού Πρόσβασης». Στη συνέχεια αφού πληκτρολογήσετε τη διεύθυνση email που είχατε καταχωρίσει κατά την εγγραφή σας στο σύστημα, θα σας αποσταλεί το Όνομα χρήστη σας και ένας νέος Κωδικός πρόσβασης άμεσα.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem32');">13.Σε περίπτωση απώλειας πρόσβασης στην κύρια διεύθυνση e-mail που δηλώθηκε κατά την εγγραφή, τι μπορώ να κάνω;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem32"><p>Θα πρέπει να επικοινωνήσετε με το Γραφείο Αρωγής Χρηστών</a>.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem29');">14.Ποια είναι η διαδικασία μεταβολής στοιχείων του εκδότη πριν ολοκληρωθεί η διαδικασία πιστοποίησης;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem29"><p>Αφού συνδεθείτε με το Όνομα χρήστη και τον Κωδικό πρόσβασης που επιλέξατε κατά την εγγραφή σας, εισέρχεστε στην Κεντρική Σελίδα. Σε αυτήν επιλέγοντας «Στοιχεία Εκδότη», μπορείτε να μεταβάλλετε τα στοιχεία του Εκδότη ή/και του χρήστη.<br>Σε περίπτωση που έχετε ήδη στείλει Βεβαίωση Συμμετοχής μέσω fax είναι απαραίτητο να την εκτυπώσετε εκ νέου και να την στείλετε στο Γραφείο Αρωγής Χρηστών</a> για να μπορέσει να ολοκληρωθεί ορθά η πιστοποίησή σας.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem30');">15.Ποια είναι η διαδικασία μεταβολής στοιχείων του εκδότη αφού ολοκληρωθεί η διαδικασία πιστοποίησης;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem30"><p>Μετά την ολοκλήρωση της πιστοποίησης, ο χρήστης μπορεί να προβεί σε τροποποίηση των δευτερευόντων στοιχείων του λογαριασμού του (πχ. Διευθύνσεις e-mail, url κλπ) επιλέγοντας από την Κεντρική Σελίδα «Στοιχεία Εκδότη».<br>Για να προβείτε σε αλλαγή πρωτευόντων στοιχείων του λογαριασμού σας (π.χ ΔΟΥ, στοιχεία Νόμιμου Εκπροσώπου κλπ), θα πρέπει να επικοινωνήσετε με το Γραφείο Αρωγής Χρηστών</a>.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem33');">16.Πού μπορώ να απευθυνθώ για περαιτέρω βοήθεια ή παράπονα;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem33"><p>Το Γραφείο Αρωγής Χρηστών</a> είναι διαθέσιμο να σας εξυπηρετήσει καθημερινά 9.00-17.00.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem35');">17.Μπορούν να διατεθούν ξενόγλωσσα Συγγράμματα μέσω του "Εύδοξος";</a>
	</div><div class="content-body" style="display:none" id="ContentListItem35"><p>Βεβαίως, αρκεί να υπάρξει κάποιος Εκδότης, ο οποίος θα εγγυηθεί τη διάθεση αυτών των Συγγραμμάτων σύμφωνα με τους ισχύοντες κανόνες κοστολόγησης του Υπουργείου Παιδείας. Ειδικά για τα ξενόγλωσσα Συγγράμματα σε τμήματα Ξένων Φιλολογιών, υπάρχει ειδικό καθεστώς για την προμήθεια αυτών των Συγγραμμάτων από το οικείο ίδρυμα μέσω μειοδοτικών διαγωνισμών.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem37');">18.Πως μπορώ να ορίσω Σημεία Διανομής για τα συγγράμματά μου που έχουν επιλεγεί από ακαδημαϊκά Τμήματα?</a>
	</div><div class="content-body" style="display:none" id="ContentListItem37"><p>Θα πρέπει μέσα από την εφαρμογή Εκδοτών του "Εύδοξος" να επιλέξετε τα συνεργαζόμενα Σημεία Διανομής (καρτέλα "Σημεία Διανομής") καθώς και να τα αντιστοιχίσετε ξεχωριστά σε καθένα από τα μαθήματα για τα οποία αυτά έχουν επιλεγεί (καρτέλα "Επιλεγμένα Βιβλία").</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem36');">19.Μπορώ να επιλέξω οποιοδήποτε από τα πιστοποιημένα για τον Εύδοξο Σημεία Διανομής?</a>
	</div><div class="content-body" style="display:none" id="ContentListItem36"><p>Μπορείτε να επιλέξετε οποιοδήποτε από τα πιστοποιημένα Σημεία Διανομής, αφού όμως πρώτα έρθετε σε συνεννόηση-συμφωνία μαζί του.</p></div>
</div>
                
            
            <div style="clear: both; padding-bottom: 10px">
            </div>
        
            <div style="border: 1px solid #AAA; padding: 3px; text-align: center; background: rgba(200,227,248,1);; margin-bottom: 7px; font-weight: bold;">
                Γραμματείες</div>
            
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem111');">1.Τι πρέπει να προσέξω για την ασφάλειά μου?</a>
	</div><div class="content-body" style="display:none" id="ContentListItem111"><p>
</p><div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<p>Για τη δική σας ασφάλεια σας συνιστούμε να επιλέξετε έναν συνδυασμό από γράμματα, αριθμούς και σύμβολα για να δημιουργήσετε ένα μοναδικό κωδικό πρόσβασης που δεν σχετίζεται με τα προσωπικά σας στοιχεία. Μπορείτε για παράδειγμα να επιλέξτε μια τυχαία λέξη ή φράση και εισαγάγετε αριθμούς ή σύμβολα στην αρχή, στη μέση και στο τέλος (για παράδειγμα "m1awra1ap3tal0uda"). Η χρήση απλών λέξεων ή φράσεων όπως "password" ή "12345", θα πρέπει να αποφεύγεται. Επίσης, σε περίπτωση που συνδέεστε στο σύστημα από δημόσιο υπολογιστή, βεβαιωθείτε ότι πάντα πατάτε το κουμπί "Αποσύνδεση" πάνω δεξιά στην οθόνη κατά την έξοδό σας και κλείνετε το φυλλομετρητή.</p>
<div><br></div>
</div>
<p>&nbsp;</p>
<p></p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem69');">2.Πως καταχωρίζονται τα μαθήματα που έχουν Θεωρητικό και Εργαστηριακό μέρος;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem69"><p>Κάθε τέτοιο μάθημα θα πρέπει να καταχωριστεί οπωσδήποτε ως ενιαίο μάθημα στο Εύδοξος.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem65');">3.Πώς καταχωρίζονται τα υποχρεωτικά βοηθήματα, δηλαδή εκείνα για τα οποία οι φοιτητές δεν έχουν δυνατότητα εναλλακτικής επιλογής;</a>
	</div><div class="content-body" style="display:none" id="ContentListItem65"><p>Τα υποχρεωτικά βοηθήματα πρέπει να δηλώνονται σε όλες τις Επιλογές που  θα δημιουργηθούν για το αντίστοιχο μάθημα. Έτσι, εξασφαλίζεται ότι με  οποιαδήποτε Επιλογή ο φοιτητής θα λάβει το συγκεκριμένο βοήθημα. Τα  βοηθήματα αυτά πρέπει, προφανώς, να είναι καταχωρισμένα στην βάση του  ΕΥΔΟΞΟΣ και να έχουν μοναδικό Κωδικό.</p></div>
</div>
                
                    <div class="content" id="ContentDetailsObjectItem">
	<div class="content-title">
		<a href="javascript:slider('ContentListItem51');">4.Μπορούν να διατεθούν ξενόγλωσσα Συγγράμματα μέσω του "Εύδοξος";</a>
	</div><div class="content-body" style="display:none" id="ContentListItem51"><p>Βεβαίως, αρκεί να υπάρξει κάποιος Εκδότης, ο οποίος θα εγγυηθεί τη διάθεση αυτών των Συγγραμμάτων σύμφωνα με τους ισχύοντες κανόνες κοστολόγησης του Υπουργείου Παιδείας. Ειδικά για τα ξενόγλωσσα Συγγράμματα σε τμήματα Ξένων Φιλολογιών, υπάρχει ειδικό καθεστώς για την προμήθεια αυτών των Συγγραμμάτων από το οικείο ίδρυμα μέσω μειοδοτικών διαγωνισμών.</p></div>
</div>
                
            
            <div style="clear: both; padding-bottom: 10px">
            </div>
        
            <div style="border: 1px solid #AAA; padding: 3px; text-align: center; background: rgba(200,227,248,1);; margin-bottom: 7px; font-weight: bold;">
                Σημεία Διανομής</div>
            
            
            <div style="clear: both; padding-bottom: 10px">
            </div>
        
            <div style="border: 1px solid #AAA; padding: 3px; text-align: center; background: rgba(200,227,248,1);; margin-bottom: 7px; font-weight: bold;">
                Διαθέτες Δωρεάν Ηλεκτρονικών Βοηθημάτων και Σημειώσεων</div>
            
            
            <div style="clear: both; padding-bottom: 10px">
            </div>
        

                            
	
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