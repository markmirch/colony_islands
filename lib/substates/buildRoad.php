<?php
	if((FIRST_CHOICE !== $state) && (SECOND_CHOICE !== $state) && (AFTER_ROLL !== $state))
		colonyError("Game $gameID must be in state FIRST_CHOICE, SECOND_CHOICE, or AFTER_ROLL to build a road");

	if((NULL !== $me) && ($activePlayerIndex === $me["playIndex"]))
	{
?>
<form id="selectForm" method="POST" action="act.php">
	<input name="gameID" type="hidden" value="<?php echo($gameID);?>">
	<input name="action" type="hidden" value="buildRoad">
	<input id="selectIDInput" name="roadID" type="hidden">
</form>
<p>Choose the location for your road.</p>
<?php
		if(AFTER_ROLL === $state)
		{
?>
<form method="POST" action="act.php">
	<input name="gameID" type="hidden" value="<?php echo($gameID);?>">
	<input name="action" type="hidden" value="cancel">
	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Cancel">
	</div>
</form>
<?php
		}
	}
	else
	{
?>
<p><?php echo($activePlayer["displayName"]);?> is selecting the location for a road.</p>
<?php
	}
?>
