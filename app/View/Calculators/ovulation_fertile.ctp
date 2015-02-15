<style type="text/css">
	.tips{
		max-height: 350px;
		overflow-x: hidden;
		overflow-y: auto;
	}
</style>

<div class="tips hidden-print" style="display:none;">
	<h4>Ovulation Date</h4>

	<p>Ovulation is the release of a mature egg (ovum) from the ovarian follicle. It occurs 14 days before your period was due. If you are trying to get pregnant, you have probably asked when the best time to get pregnant is. Obviously, the period of ovulation in your menstrual cycle is the best time.</p>
	<hr/>

	<h4>How to calculate ovulation date?</h4>

	<p>Most women experience ovulation mid-cycle, which is usually on the 14th day of the 28 day cycle. ovulation before or after their 14th day based on an irregular cycle or for many other reasons.</p>
	<hr/>

	<h4>Calendar-based methods</h4>

	<p>Calendar-based methods are various methods of estimating a woman&#39;s probability of fertility, based on a  record of the length of previous regular menstrual cycles. Track your fertility, learn how you ovulate and menstruate and plan activities to match your ebb and flow. You can use the calendar to track your return to fertility while nursing.</p>
	<hr/>

	<h4>Regular cycles</h4>

	<p>If your cycle is about the same stable number of days every month, you have a regular cycle. Most women have their own regular cycle length with almost always-similar body changes during every cycle. Women who are of child bearing ages will generally see a pattern develop and will begin to expect their menstrual cycle at about the same time every month, give or take a day or two. </p>
	<hr/>

	<h4>Fertility days</h4>

	<p>Your fertile days refer to the time period where sex may lead to pregnancy. As you might already know, in order for conception to take place, at least one healthy and vigorous sperm must be waiting in the Fallopian tube at the moment that ovulation occurs, sperm can only live up to six days, and must be able to fertilize the egg within 12-24 hours of the egg being released from the ovary. Sex during this time period is the most likely you&#39;ll pregnant.</p>
	<hr/>

	<h4>Pregnancy Due Date</h4>

	<p>In human beings, pregnancy lasts an average of about 40 weeks from the start of the womans last menstrual period. The date near which a pregnant woman is expected to give birth, known as the &quot;due date&quot;. An average human pregnancy lasts for about 280 days or 40 weeks from the date of the last menstrual period. It can be hard to predict the exact date. Only 5 percent of babies are born on their due dates. Due to the fact that most babys are born within 2 weeks of the date.
	</p>

	<br/>
</div>

<?php echo $this->Form->create('calculator', array('action' => 'ovulation_fertile', 'id' => 'frmOvulation', 'class' => 'hidden-print')); ?>
<fieldset>
	<legend>Ovulation Calculator <button type="button" class="info" id="btnTips">Read more</button></legend>
	<div class="input-control text size3 required" data-role="datepicker" 
		data-format="dd mmmm yyyy"
		data-position="bottom"
		data-effect="fade">
		<label>Last Period Start Date</label>
		<input name="last_date" type="text" class="required" value="<?php echo !empty($last_date) ? date('d M Y', strtotime($last_date)) : ''; ?>">
		<span class="btn-date"></span>
	</div>

	<div class="input-control select size2" data-role="input-control">
		<label>Menstrual Cycle Length</label>
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
		<label>Next cycle</label>
		<select name="cal" class="required">
			<?php 
				$selected = $range['cal']['default'];
				$selected = !empty($diplay_cycle) ? $diplay_cycle : $selected;
			?>
			<?php for($cycle = $range['cal']['min']; $cycle <= $range['cal']['max']; $cycle++) : ?>
				<option value="<?php echo $cycle; ?>" <?php echo ($cycle == $selected ? "selected" : ""); ?>><?php echo $cycle . (($cycle > 1) ? " cycles" : " cycle"); ?></option>
			<?php endfor; ?>
		</select>
	</div>
	<button type="submit" class="primary">Calculate</button>
</fieldset>
<?php echo $this->Form->end(); ?>

<?php if( ! empty($periodCal)) : ?>
<hr/>

<h2>Ovulation Estimated Date</h2>
	<table class="table bordered striped hovered">
		<thead>
			<tr>
				<th>Cycle</th>
				<th>Period Start Date</th>
				<th>Fertile Date</th>
				<th>Ovulation Date</th>
				<th>End Fertile Date</th>
				<th>Next Start Period Date</th>
				<th>Estimation Pregnancy Due Date</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($periodCal as $ind => $value) : ?>
				<tr>
					<td><?php echo $ind+1; ?></td>

					<td class="hidden-print"><?php echo date('D d-m-Y', strtotime($value['period'])); ?></td>
					<td class="hidden-print"><?php echo date('D d-m-Y', strtotime($value['fertile_start'])); ?></td>
					<td class="hidden-print"><?php echo date('D d-m-Y', strtotime($value['ovulation'])); ?></td>
					<td class="hidden-print"><?php echo date('D d-m-Y', strtotime($value['fertile_end'])); ?></td>
					<td class="hidden-print"><?php echo date('D d-m-Y', strtotime($value['next_period'])); ?></td>
					<td class="hidden-print"><?php echo date('D d-m-Y', strtotime($value['due_date'])); ?></td>

					<td class="visible-print" width="16.6%"><?php echo date('d-m-Y', strtotime($value['period'])); ?></td>
					<td class="visible-print" width="16.6%"><?php echo date('d-m-Y', strtotime($value['fertile_start'])); ?></td>
					<td class="visible-print" width="16.6%"><?php echo date('d-m-Y', strtotime($value['ovulation'])); ?></td>
					<td class="visible-print" width="16.6%"><?php echo date('d-m-Y', strtotime($value['fertile_end'])); ?></td>
					<td class="visible-print" width="16.6%"><?php echo date('d-m-Y', strtotime($value['next_period'])); ?></td>
					<td class="visible-print" width="16.6%"><?php echo date('d-m-Y', strtotime($value['due_date'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<small>* Estimation Pregnancy Due Date calculated about 280 days or 40 weeks from the date of the last menstrual period if you having sex in ovulation cycle.</small>

	<div class="results">
		<div class="grid ">				
			<?php foreach ($periodCal as $ind => $value) : ?>
				<div class="row">
					<?php 
						$intervalMonth 	= (int) date("m", strtotime($value['fertile_end'])) - (int) date("m", strtotime($value['fertile_start']));

						$day_in_week = date('w', strtotime('First day of '.date('M Y', strtotime($value['fertile_start']))));
						$max_day = date('j', strtotime('last day of '.date('M Y', strtotime($value['fertile_start']))));

						$fertile_start 	= strtotime($value['fertile_start']);
						$ovulationEarly	= strtotime($value['ovulation'] . " -1 day");
						$ovulation 		= strtotime($value['ovulation']);
						$ovulationLate	= strtotime($value['ovulation'] . " +1 day");
						$fertile_end 	= strtotime($value['fertile_end']);
						$endOfWeek = 1 + $day_in_week;
					?>
					<div class="span4">
						<h3>Cycle <?php echo $ind+1; ?></h3>
						<div class="calendar small">
							<table class="bordered">
								<tbody>
								<tr class="calendar-header">
									<td colspan="7" class="text-center"><a class="btn-select-month"><?php echo date('M Y', strtotime($value['fertile_start'])); ?></a></td>
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
										
											$currDate = strtotime($day."-".date('m-Y', strtotime($value['fertile_start'])));

											$color = null;
											if ($currDate == $ovulation) {
												// ovulation
												$color = "bg-emerald fg-white";
											} elseif ($currDate == $ovulationEarly || $currDate == $ovulationLate) {
												// estimate +/- 1day
												$color = "bg-green fg-white";
											} elseif($currDate >= $fertile_start && $currDate <= $fertile_end) {
												// fertile range
												$color = "bg-lime fg-white";
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

						$day_in_week = date('w', strtotime('First day of '.date('M Y', strtotime($value['fertile_end']))));
						$max_day = date('j', strtotime('last day of '.date('M Y', strtotime($value['fertile_end']))));
						$endOfWeek = 1 + $day_in_week;
					?>
					<div class="span4">
					<h3>&nbsp;</h3>
						<div class="calendar small">
							<table class="bordered">
								<tbody>
								<tr class="calendar-header">
									<td colspan="7" class="text-center"><a class="btn-select-month"><?php echo date('M Y', strtotime($value['fertile_end'])); ?></a></td>
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
											
											$currDate = strtotime($day."-".date('m-Y', strtotime($value['fertile_end'])));

											$color = null;
											if ($currDate == $ovulation) {
												// ovulation
												$color = "bg-emerald fg-white";
											} elseif ($currDate == $ovulationEarly || $currDate == $ovulationLate) {
												// estimate +/- 1day
												$color = "bg-green fg-white";
											} elseif($currDate >= $fertile_start && $currDate <= $fertile_end) {
												// fertile date
												$color = "bg-lime fg-white";
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
					<li><span class="square10 inline-block bg-emerald on-left"></span>Ovulation Date</li>
					<li><span class="square10 inline-block bg-green on-left"></span>Ovulation Early/Late</li>
					<li><span class="square10 inline-block bg-lime on-left"></span>Fertile Dates</li>
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
			$("#frmOvulation").submit(function(){
				return validateMe("#frmOvulation");
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