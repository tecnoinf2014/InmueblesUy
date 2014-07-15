<div id="add-event-form" title="Add New Event">
	<p class="validateTips">All form fields are required.</p>
	<form>
		<fieldset>
			<label for="name">What?</label> <input type="text" name="what"
				id="what" class="text ui-widget-content ui-corner-all"
				style="margin-bottom: 12px; width: 95%; padding: .4em;" />
			<table style="width: 100%; padding: 5px;">
				<tr>
					<td><label>Start Date</label> <input type="text" name="startDate"
						id="startDate" value=""
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;" /></td>
					<td>&nbsp;</td>
					<td><label>Start Hour</label> <select id="startHour"
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;">
							<option value="12" SELECTED>12</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
					</select>
					
					<td>
					
					<td><label>Start Minute</label> <select id="startMin"
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;">
							<option value="00" SELECTED>00</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option value="40">40</option>
							<option value="50">50</option>
					</select>
					
					<td>
					
					<td><label>Start AM/PM</label> <select id="startMeridiem"
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;">
							<option value="AM" SELECTED>AM</option>
							<option value="PM">PM</option>
					</select></td>
				</tr>
				<tr>
					<td><label>End Date</label> <input type="text" name="endDate"
						id="endDate" value="" class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;" /></td>
					<td>&nbsp;</td>
					<td><label>End Hour</label> <select id="endHour"
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;">
							<option value="12" SELECTED>12</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
					</select>
					
					<td>
					
					<td><label>End Minute</label> <select id="endMin"
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;">
							<option value="00" SELECTED>00</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option value="40">40</option>
							<option value="50">50</option>
					</select>
					
					<td>
					
					<td><label>End AM/PM</label> <select id="endMeridiem"
						class="text ui-widget-content ui-corner-all"
						style="margin-bottom: 12px; width: 95%; padding: .4em;">
							<option value="AM" SELECTED>AM</option>
							<option value="PM">PM</option>
					</select></td>
				</tr>
			</table>
			<table>
				<tr>
					<td><label>Background Color</label></td>
					<td>
						<div id="colorSelectorBackground">
							<div
								style="background-color: #333333; width: 30px; height: 30px; border: 2px solid #000000;"></div>
						</div> <input type="hidden" id="colorBackground" value="#333333">
					</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td><label>Text Color</label></td>
					<td>
						<div id="colorSelectorForeground">
							<div
								style="background-color: #ffffff; width: 30px; height: 30px; border: 2px solid #000000;"></div>
						</div> <input type="hidden" id="colorForeground" value="#ffffff">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>