
<div class="listview grid">
	<div class="row">
		<a href="<?php echo $this->Html->url(array('controller' => 'calculators', 'action' => 'menstrual_period'),true);?>" class="list span5">
			<div class="list-content">
				<span class="icon icon-calculate fg-orange"></span>
				<div class="data">
					<span class="list-title">Menstrual Period Calculator</span>
					<span class="list-remark">Calculate your Menstrual Period &amp; PMS days</span>
				</div>
			</div>
		</a>

		 <a href="<?php echo $this->Html->url(array('controller' => 'calculators', 'action' => 'ovulation_fertile'),true);?>" class="list span5">
			<div class="list-content">
				<span class="icon icon-calculate fg-lightBlue"></span>
				<div class="data">
					<span class="list-title">Ovulation Calculator</span>
					<span class="list-remark">Calculate Ovulation Date &amp; Fertile Dates</span>
				</div>
			</div>
		</a>
	</div>
</div>