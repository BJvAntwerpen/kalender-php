<h1>HoI!!</h1>
<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="person" placeholder="john">
		<select name="day">
			<option value="day1">1</option>
			<option value="day2">2</option>
			<option value="day3">3</option>
			<option value="day4">4</option>
			<option value="day5">5</option>
			<option value="day6">6</option>
			<option value="day7">7</option>
			<option value="day8">8</option>
			<option value="day9">9</option>
			<option value="day10">10</option>
			<option value="day11">11</option>
			<option value="day12">12</option>
			<option value="day13">13</option>
			<option value="day14">14</option>
			<option value="day15">15</option>
			<option value="day16">16</option>
			<option value="day17">17</option>
			<option value="day18">18</option>
			<option value="day19">19</option>
			<option value="day20">20</option>
			<option value="day21">21</option>
			<option value="day22">22</option>
			<option value="day23">23</option>
			<option value="day24">24</option>
			<option value="day25">25</option>
			<option value="day26">26</option>
			<option value="day27">27</option>
			<option value="day28">28</option>
			<option value="day29">29</option>
			<option value="day30">30</option>
			<option value="day31">31</option>
		</select>
		<select name="month">
			<option value="month1">januari</option>
			<option value="month2">februari</option>
			<option value="month3">maart</option>
			<option value="month4">april</option>
			<option value="month5">mei</option>
			<option value="month6">juni</option>
			<option value="month7">juli</option>
			<option value="month8">augustus</option>
			<option value="month9">september</option>
			<option value="month10">oktober</option>
			<option value="month11">november</option>
			<option value="month12">december</option>
		</select>
		<input type="text" name="year" placeholder="<?= date(m)?>">

		<input type="submit" value="Verzenden">
	
	</form>

</div>