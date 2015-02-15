<style type="text/css">
	.tips{
		max-height: 350px;
		overflow-x: hidden;
		overflow-y: auto;
	}
</style>

<div class="tips hidden-print" style="display:none">
	<h4>Menstruation/Period</h4>

	<p>Menstruation or a period is the shedding of the endometrium, woman&#39;s monthly bleeding in a young woman&#39;s life where she can become pregnant. When a woman menstruates, your body sheds the uterus (womb) lining along with blood. Menstrual blood flows from the uterus through the small opening in the cervix, and passes out of the body through the vagina. It lasts from puberty until menopause among non-pregnant women. Normal, regular menstruation that lasts for a few days (usually 3 to 5 days, but anywhere from 2 to 7 days is considered normal). The average blood loss during menstruation is 35 milliliters with 10–80 ml considered normal. Menstruation is also called menstrual bleeding, menses, catamenia and Malaysian people commonly called it as <i>&#39;datang bulan&#39;</i> in their daily life.</p>
	 
	<hr/>

	<h4>Menstrual Cycle</h4>
	<p>A menstrual cycle is counted from the first day of one menstrual period to the first day of the next period.</p>
	
	<hr/>

	<h4>Premenstrual syndrome (PMS)</h4>

	<p>Premenstrual syndrome (PMS) is a collection of somatic and affective symptoms related to a woman&#39;s menstrual cycle. affective symptoms include symptoms like depression, angry outbursts, anxiety, irritability, confusion, and social withdrawal. Somatic symptoms include symptoms like abdominal bloating,breast tenderness, headache, and swelling of hands and feet. PMS symptoms most often begin 1-10 days before your period. The symptoms usually stop soon after your period starts.</p>

	
</div>

<?php echo $this->Form->create('calculator', array('action' => 'menstrual_period', 'id' => 'frmMenstrualPeriod', 'class' => 'hidden-print')); ?>
<fieldset>
	<legend>Menstrual Period Calculator <button type="button" class="info" id="btnTips">Read more</button></legend>
	<div class="input-control select size2" data-role="input-control">
		<label>Menstrual Cycle</label>
		<select name="cycle" class="required">
			<?php 
				$selected = $range['cycle']['default'];
				$selected = !empty($cycle_length) ? $cycle_length : $selected;
			?>
			<?php for($cycle = $range['cycle']['min']; $cycle <= $range['cycle']['max']; $cycle++) : ?>
				<option value="<?php echo $cycle; ?>" <?php echo ($cycle == $selected ? "selected" : "") ?>><?php echo $cycle . " days"; ?></option>
			<?php endfor; ?>
		</select>
	</div>
	<div class="input-control select size2" data-role="input-control">
		<label>Period Length</label>
		<select name="period" class="required">
			<?php 
				$selected = $range['period']['default'];
				$selected = !empty($period_length) ? $period_length : $selected;
			?>
			<?php for($cycle = $range['period']['min']; $cycle <= $range['period']['max']; $cycle++) : ?>
				<option value="<?php echo $cycle; ?>" <?php echo ($cycle == $selected ? "selected" : "") ?>><?php echo $cycle . " days"; ?></option>
			<?php endfor; ?>
		</select>
	</div>
	<div class="input-control select size2" data-role="input-control">
		<label>PMS Days<sup>*</sup></label>
		<select name="pms" class="required">
			<?php 
				$selected = $range['pms']['default'];
				$selected = !empty($pms_length) ? $pms_length : $selected;
			?>
			<?php for($cycle = $range['pms']['min']; $cycle <= $range['pms']['max']; $cycle++) : ?>
				<option value="<?php echo $cycle; ?>" <?php echo ($cycle == $selected ? "selected" : "") ?>><?php echo $cycle; ?></option>
			<?php endfor; ?>
		</select>
	</div>
	<div class="input-control text size3 required" data-role="datepicker" 
		data-format="dd mmmm yyyy"
		data-position="bottom"
		data-effect="fade">
		<label>Last Period Start Date</label>
		<input name="last_date" type="text" class="required" value="<?php echo !empty($last_date) ? date('d M Y', strtotime($last_date)) : ''; ?>">
		<span class="btn-date"></span>
	</div>
	<div class="input-control select size2" data-role="input-control">
		<label>Next cycle</label>
		<select name="cal" class="required">
			<?php 
				$selected = $range['cal']['default'];
				$selected = !empty($diplay_cycle) ? $diplay_cycle : $selected;
			?>
			<?php for($cycle = $range['cal']['min']; $cycle <= $range['cal']['max']; $cycle++) : ?>
				<option value="<?php echo $cycle; ?>" <?php echo ($cycle == $selected ? "selected" : "") ?>><?php echo $cycle . (($cycle > 1) ? " cycles" : " cycle"); ?></option>
			<?php endfor; ?>
		</select>
	</div>
	<button type="submit" class="primary">Calculate</button>
</fieldset>
<small>*PMS Days - Select how many days PMS symptoms usually occur before your period starts.</small>
<?php echo $this->Form->end(); ?>

<?php if(!empty($periodCal)) : ?>
	<div class="hidden-print">
		<hr/>
		<?php echo $this->Form->create('calculator', array('action' => 'ref', 'id' => 'frmRef', 'class' => 'hidden-print')); ?>
		<div class="input-control text size3 required">
			<label></label>
			<input name="last_date" type="text" class="required" value="<?php echo !empty($last_date) ? date('d M Y', strtotime($last_date)) : ''; ?>">
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
	<hr/>
	<h2>Menstrual Period (Estimated Date)</h2>
	<table class="table bordered hovered">
		<thead>
			<tr>
			<th>Cycle Month</th>
				<th>Start Date</th>
				<th>Last Period</th>
				<th>Average Cycle</th>
				<th>Period Length</th>
				<th>PMS Length</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($periodCal as $ind => $per) : ?>
				<?php if($ind == 0) : ?>
					<tr class="warning">
				<?php else : ?>
				<?php echo "<tr>"; ?>
				<?php endif; ?>
						<td><?php echo date('M', strtotime($per['start'])) . " - " . date('M', strtotime($per['end']))?></td>
						<td><?php echo $per['start']; ?></td>
						<td><?php echo $per['end']; ?></td>
						<td><?php echo $len ?> days</td>
						<td><?php echo $period ?> days</td>
						<td><?php echo $pms ?> day(s)</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<small style="font-size:11px">** Estimated the first day of menstrual cycle(+/- 1 day)</small>
	<div class="results">
		<div class="grid ">				
			<?php foreach ($periodCal as $ind => $per) : ?>
				<div class="row">
					<?php 
						if($ind == 0) continue; 

						$intervalMonth 	= (int) date("m", strtotime($per['end'])) - (int) date("m", strtotime($per['start']));

						$day_in_week = date('w', strtotime('First day of '.date('M Y', strtotime($per['start']))));
						$max_day = date('j', strtotime('last day of '.date('M Y', strtotime($per['start']))));

						$estPrev = strtotime($per['start']." -1 days");
						$estNext = strtotime($per['end']." +1 days");

						$pmsStart = strtotime($per['pms']);
						$endOfWeek = 1 + $day_in_week;
					?>
					<div class="span4">
						<h3>Cycle <?php echo $ind; ?></h3>
						<div class="calendar small">
							<table class="bordered">
								<tbody>
								<tr class="calendar-header">
									<td colspan="7" class="text-center"><a class="btn-select-month"><?php echo date('M Y', strtotime($per['start'])); ?></a></td>
								</tr>
								<tr class="calendar-subheader">
									<td class="text-center day-of-week">Mon</td>
									<td class="text-center day-of-week">Tue</td>
									<td class="text-center day-of-week">Wed</td>
									<td class="text-center day-of-week">Thu</td>
									<td class="text-center day-of-week">Fri</td>
									<td class="text-center day-of-week">Sat</td>
									<td class="text-center day-of-week">Sun</td>
								</tr>
								<tr>
									<?php for($n=0; $n<$day_in_week; $n++): ?>
										<td class="empty"><small class="other-day"></small></td>
									<?php endfor; ?>
									<?php for($day = 1; $day <= $max_day; $day++, $endOfWeek++) : ?>
										<?php 
										
										$currDate = strtotime($day."-".date('m-Y', strtotime($per['start'])));

										$color = null;
										if($currDate >= $pmsStart && $currDate < strtotime($per['start'])){
											// pms
											$color = "bg-orange fg-white";
										} elseif ($currDate >= strtotime($per['start']) && $currDate <= strtotime($per['end'])) {
											// period
											$color = "bg-crimson fg-white";
										} elseif($currDate >= $estPrev && $currDate <= strtotime($per['start'])) {
											// early estimate
											$color = "bg-lightPink fg-white";
										} elseif($currDate <= $estNext && $currDate >= strtotime($per['end'])) {
											// late estimate
											$color = "bg-lightPink fg-white";
										}
										?>
										<td class="text-center day <?php echo $color; ?>"><?php echo $day; ?></td>
										<?php if($endOfWeek >= 7) {
												echo "</tr><tr>";
												$endOfWeek = 0;
											}
										?>
									<?php endfor; ?>
									 <?php for (; $endOfWeek <= 7 ; $endOfWeek++) : ?>
										<td class="empty"><small class="other-day"></small></td>
									<?php endfor; ?>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					<?php if($intervalMonth != 0) : ?>
					<?php
						$day_in_week = date('w', strtotime('First day of '.date('M Y', strtotime($per['end']))));
						$max_day = date('j', strtotime('last day of '.date('M Y', strtotime($per['end']))));
						$endOfWeek = 1 + $day_in_week;
					?>
					<div class="span4">
					<h3>&nbsp;</h3>
						<div class="calendar small">
							<table class="bordered">
								<tbody>
								<tr class="calendar-header">
									<td colspan="7" class="text-center"><a class="btn-select-month"><?php echo date('M Y', strtotime($per['end'])); ?></a></td>
								</tr>
								<tr class="calendar-subheader">
									<td class="text-center day-of-week">Mon</td>
									<td class="text-center day-of-week">Tue</td>
									<td class="text-center day-of-week">Wed</td>
									<td class="text-center day-of-week">Thu</td>
									<td class="text-center day-of-week">Fri</td>
									<td class="text-center day-of-week">Sat</td>
									<td class="text-center day-of-week">Sun</td>
								</tr>
								<tr>
									<?php for($n=0; $n<$day_in_week; $n++): ?>
										<td class="empty"><small class="other-day"></small></td>
									<?php endfor; ?>
									<?php for($day = 1; $day <= $max_day; $day++, $endOfWeek++) : ?>
										<?php 
										
										$currDate = strtotime($day."-".date('m-Y', strtotime($per['end'])));

										$color = null;
										if ($currDate >= strtotime($per['start']) && $currDate <= strtotime($per['end'])) {
											// range
											$color = "bg-crimson fg-white";
										} elseif($currDate <= $estNext && $currDate >= strtotime($per['end'])) {
											// late estimate
											$color = "bg-lightPink fg-white";
										}
										?>
										<td class="text-center day <?php echo $color; ?>"><?php echo $day; ?></td>
										<?php if($endOfWeek >= 7) {
												echo "</tr><tr>";
												$endOfWeek = 0;
											}
										?>
									<?php endfor; ?>
									 <?php for (; $endOfWeek <= 7 ; $endOfWeek++) : ?>
										<td class="empty"><small class="other-day"></small></td>
									<?php endfor; ?>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="row">
				<fieldset class="span8">
				<legend>Legend</legend>
					<ul class="unstyled three-columns color-stack">
                    <li><span class="square10 inline-block bg-orange on-left"></span>PMS</li>
                    <li><span class="square10 inline-block bg-crimson on-left"></span>Menstrual Dates</li>
                    <li><span class="square10 inline-block bg-lightPink on-left"></span>Estimation early/late</li>
                </ul>
                </fieldset>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php else: ?>
		<div class="visible-print">
			Nothing to display
		</div>
	<?php endif; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#frmMenstrualPeriod").submit(function(){
				return validateMe("#frmMenstrualPeriod");
			});

			function validateMe(id){
				if(id == null || id == undefined || id.length == 0) {
					console.log('validation failed, expecting 1 parameter. eg: validateMe("#testForm")');
					return false;
				}
				var return_me = true;

			//assign error messages
			required = '<?php echo __('*This field is required');?>';
			number = '<?php echo __('*This field must contain number only');?>';
			alphaNumeric = '<?php echo __('*This field only contain A-Z and 0-9');?>';
			email = '<?php echo __('*This is not a valid email address');?>';
			minLength = '<?php echo __('*Minimum 6 characters');?>';
			
			$(id +' .required').each(function(){
				$(this).removeAttr('placeholder').parent().removeClass('error-state');
			});

			//validate required field
			$(id + " input[class~=required]").each(function(){

				current_value = $(this).val();
				if ((current_value == '') || (current_value == null)) {
					$(this).attr('placeholder',required).parent().addClass('error-state');
					return_me = false;
				}
			});
			
			return return_me;
		}

		$(".tips").hide();

		$('#btnTips').click(function(){
			$(".tips").slideToggle( "slow", function() {
			});
		});
	});
</script>