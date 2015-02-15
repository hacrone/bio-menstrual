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

<form action="/bio-menstrual/calculators/menstrual_period" id="frmMenstrualPeriod" class="hidden-print" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><fieldset>
	<legend>Menstrual Period Calculator <button type="button" class="info" id="btnTips">Read more</button></legend>
	<div class="input-control select size2" data-role="input-control">
		<label>Menstrual Cycle</label>
		<select name="cycle" class="required">
										<option value="20">20 days</option>
							<option value="21">21 days</option>
							<option value="22">22 days</option>
							<option value="23">23 days</option>
							<option value="24">24 days</option>
							<option value="25">25 days</option>
							<option value="26">26 days</option>
							<option value="27">27 days</option>
							<option value="28" selected="">28 days</option>
							<option value="29">29 days</option>
							<option value="30">30 days</option>
							<option value="31">31 days</option>
							<option value="32">32 days</option>
							<option value="33">33 days</option>
							<option value="34">34 days</option>
							<option value="35">35 days</option>
							<option value="36">36 days</option>
							<option value="37">37 days</option>
							<option value="38">38 days</option>
							<option value="39">39 days</option>
							<option value="40">40 days</option>
							<option value="41">41 days</option>
							<option value="42">42 days</option>
							<option value="43">43 days</option>
							<option value="44">44 days</option>
							<option value="45">45 days</option>
					</select>
	</div>
	<div class="input-control select size2" data-role="input-control">
		<label>Period Length</label>
		<select name="period" class="required">
										<option value="2">2 days</option>
							<option value="3">3 days</option>
							<option value="4">4 days</option>
							<option value="5">5 days</option>
							<option value="6">6 days</option>
							<option value="7" selected="">7 days</option>
							<option value="8">8 days</option>
							<option value="9">9 days</option>
							<option value="10">10 days</option>
							<option value="11">11 days</option>
							<option value="12">12 days</option>
							<option value="13">13 days</option>
							<option value="14">14 days</option>
							<option value="15">15 days</option>
					</select>
	</div>
	<div class="input-control select size2" data-role="input-control">
		<label>PMS Days<sup>*</sup></label>
		<select name="pms" class="required">
										<option value="0" selected="">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
					</select>
	</div>
	<div class="input-control text size3 required" data-role="datepicker" data-format="dd mmmm yyyy" data-position="bottom" data-effect="fade">
		<label>Last Period Start Date</label>
		<input name="last_date" type="text" class="required" value="" readonly="readonly">
		<span class="btn-date"></span>
	<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 260px; z-index: 1000; top: 100%; left: 0px;"><table class="bordered"><tbody><tr class="calendar-header"><td class="text-center"><a class="btn-previous-year" href="#"><i class="icon-previous"></i></a></td><td class="text-center"><a class="btn-previous-month" href="#"><i class="icon-arrow-left-4"></i></a></td><td colspan="3" class="text-center"><a class="btn-select-month" href="#">February 2014</a></td><td class="text-center"><a class="btn-next-month" href="#"><i class="icon-arrow-right-4"></i></a></td><td class="text-center"><a class="btn-next-year" href="#"><i class="icon-next"></i></a></td></tr><tr class="calendar-subheader"><td class="text-center day-of-week">Su</td><td class="text-center day-of-week">Mo</td><td class="text-center day-of-week">Tu</td><td class="text-center day-of-week">We</td><td class="text-center day-of-week">Th</td><td class="text-center day-of-week">Fr</td><td class="text-center day-of-week">Sa</td></tr><tr><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="empty"><small class="other-day"></small></td><td class="text-center day"><a href="#">1</a></td></tr><tr><td class="text-center day"><a href="#">2</a></td><td class="text-center day"><a href="#">3</a></td><td class="text-center day"><a href="#">4</a></td><td class="text-center day"><a href="#">5</a></td><td class="text-center day"><a href="#">6</a></td><td class="text-center day"><a href="#">7</a></td><td class="text-center day"><a href="#">8</a></td></tr><tr><td class="text-center day"><a href="#">9</a></td><td class="text-center day"><a href="#">10</a></td><td class="text-center day"><a href="#">11</a></td><td class="text-center day"><a href="#">12</a></td><td class="text-center day"><a href="#">13</a></td><td class="text-center day"><a href="#">14</a></td><td class="text-center day today"><a href="#">15</a></td></tr><tr><td class="text-center day"><a href="#">16</a></td><td class="text-center day"><a href="#">17</a></td><td class="text-center day"><a href="#">18</a></td><td class="text-center day"><a href="#">19</a></td><td class="text-center day"><a href="#">20</a></td><td class="text-center day"><a href="#">21</a></td><td class="text-center day"><a href="#">22</a></td></tr><tr><td class="text-center day"><a href="#">23</a></td><td class="text-center day"><a href="#">24</a></td><td class="text-center day"><a href="#">25</a></td><td class="text-center day"><a href="#">26</a></td><td class="text-center day"><a href="#">27</a></td><td class="text-center day"><a href="#">28</a></td><td class="empty"><small class="other-day"></small></td></tr></tbody></table></div></div>
	<div class="input-control select size2" data-role="input-control">
		<label>Next cycle</label>
		<select name="cal" class="required">
										<option value="1">1 cycle</option>
							<option value="2">2 cycles</option>
							<option value="3" selected="">3 cycles</option>
							<option value="4">4 cycles</option>
							<option value="5">5 cycles</option>
							<option value="6">6 cycles</option>
							<option value="7">7 cycles</option>
							<option value="8">8 cycles</option>
							<option value="9">9 cycles</option>
							<option value="10">10 cycles</option>
							<option value="11">11 cycles</option>
							<option value="12">12 cycles</option>
					</select>
	</div>
	<button type="submit" class="primary">Calculate</button>
</fieldset>
<small>*PMS Days - Select how many days PMS symptoms usually occur before your period starts.</small>
</form>

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