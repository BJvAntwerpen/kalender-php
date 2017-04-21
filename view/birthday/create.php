<h1>HoI!!</h1>
<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="person" placeholder="Name">
		<input type="text" name="day" placeholder="day">
		<select name="month">
			<option value="1">januari</option>
			<option value="2">februari</option>
			<option value="3">maart</option>
			<option value="4">april</option>
			<option value="5">mei</option>
			<option value="6">juni</option>
			<option value="7">juli</option>
			<option value="8">augustus</option>
			<option value="9">september</option>
			<option value="10">oktober</option>
			<option value="11">november</option>
			<option value="12">december</option>
		</select>
		<input type="text" name="year" placeholder="year">
		<input type="submit" value="Verzenden">
	
	</form>

</div>