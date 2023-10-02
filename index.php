
<?php include 'Header.php'; ?>

<script type="text/javascript">
$(document).ready(function () {
	function sendLock() {
    var link = "mailto:cchaithanya83@gmail.com"
             + "&subject=" + escape("Door lock conformation")
             + "&body=" + escape("Your door has been locked. \r\n\n Thank you.")
    ;
	// Mail sent confermation
	alert("Message has been delivered.");
}
}
</script>

<script type="text/javascript">
	function sendUnlock() {
    var link = "mailto:cchaithanya83@gmail.com"
             + "&subject=" + escape("Door unlock conformation")
             + "&body=" + escape("Your door has been unlocked. \r\n\n Thank you.")
    ;
	// Mail sent confermation
	alert("Message has been delivered.");
}
</script>

<script type="text/javascript">
	function sendOpen() {
    var link = "mailto:cchaithanya83@gmail.com"
             + "&subject=" + escape("Door open conformation")
             + "&body=" + escape("Your door is opening. \r\n\n Thank you.")
    ;
	// Mail sent confermation
	alert("Message has been delivered.");
}
</script>

<script type="text/javascript">
	function sendClose() {
    var link = "mailto:cchaithanya83@gmail.com"
             + "&subject=" + escape("Door close conformation")
             + "&body=" + escape("Your is closing. \r\n\n Thank you.")
    ;
	// Mail sent confermation
	alert("Message has been delivered.");
}
</script>


<div class="container body-subtitle">
	
	<div class="row">
		<h2 class="col-sm-12 header-space bold center">Actions</h2>
		
		<div class="col-sm-6">
		<div class="center button-space">
			<button name="Lock" onclick="sendLock(); return false" class="btn btn-primary bold" value="Lock">Lock</button>
		</div>
		</div>
		
		<div class="col-sm-6">
		<div class="center button-space">
			<button name="Unlock" onclick="sendUnlock(); return false" class="btn btn-primary bold" value="Unlock">Unlock</button>
		</div>
		</div>
	
		<div class="col-sm-6">
		<div class="center button-space">
			<button name="Open" onclick="sendOpen(); return false" class="btn btn-primary bold" value="Open">Open</button>
		</div>
		</div>
		
		<div class="col-sm-6">
		<div class="center button-space">
			<button name="Close" onclick="sendClose(); return false" class="btn btn-primary bold" value="Close">Close</button>
		</div>
		</div>	
	</div>
	
</div>


<?php include 'Footer.php'; ?>



	