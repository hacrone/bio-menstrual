<?php

App::uses('AppController', 'Controller');

class CalculatorsController extends AppController {

	public $uses = array();

	function index(){

	}

	public function menstrual_period() {
		if($this->request->isPost()){

			if( ! empty($this->request->data['last_date'])) {
				$last_date = date('d-m-Y', strtotime($this->request->data['last_date']));

				$cal 	= $this->request->data['cal'] > 0 ? $this->request->data['cal'] : 1;
				$len 	= $this->request->data['cycle'];
				$period = $this->request->data['period'];
				$pms 	= $this->request->data['pms'];

				$periodCal[0]['start'] = date('d-m-Y', strtotime($last_date));
				$periodCal[0]['end'] = date('d-m-Y', strtotime($last_date." +".($period-1)." days"));
				$periodCal[0]['pms'] = date('d-m-Y', strtotime($periodCal[0]['start']." -".$pms." days"));

				for($i = 1; $i <= $cal; $i++){
					$periodCal[$i]['start'] = date('d-m-Y', strtotime($periodCal[$i-1]['start']." +".$len." days"));
					$periodCal[$i]['end'] = date('d-m-Y', strtotime($periodCal[$i]['start']." +".($period-1)." days"));
					$periodCal[$i]['pms'] = date('d-m-Y', strtotime($periodCal[$i]['start']." -".$pms." days"));
				}
			}

			$this->set(array('diplay_cycle' => $cal, 'last_date' => $last_date, 'cycle_length' => $len, 'period_length' => $period, 'pms_length' => $pms));
		}

		$range = array(
			'cycle' => array(
				'min' => 20,
				'max' => 45,
				'default' => 28
				),
			'period' => array(
				'min' => 2,
				'max' => 15,
				'default' => 7
				),
			'pms' => array(
				'min' => 0,
				'max' => 5,
				'default' => 0
				),
			'cal' => array(
				'min' => 1,
				'max' => 12,
				'default' => 3
				)
			);

		$this->set(compact('range', 'periodCal', 'cal', 'len', 'period', 'pms'));
	}

	public function ovulation_fertile() {

		if($this->request->isPost()){
			if( ! empty($this->request->data['last_date'])) {
				$last_date = date('d-m-Y', strtotime($this->request->data['last_date']));

				$cal 	= $this->request->data['cal'] > 0 ? $this->request->data['cal'] : 1;
				$len 	= $this->request->data['cycle'];

				for($i = 0; $i < $cal; $i++){
					if($i == 0) {
						$periodCal[$i]['period']		= $last_date;
						$periodCal[$i]['next_period']	= date('d-m-Y', strtotime($last_date . " +".$len." days"));
						$periodCal[$i]['due_date'] 		= date('d-m-Y', strtotime($last_date." +280 days"));
						$periodCal[$i]['ovulation'] 	= date('d-m-Y', strtotime($periodCal[$i]['next_period']." -14 days"));
						$periodCal[$i]['fertile_start'] = date('d-m-Y', strtotime($periodCal[$i]['ovulation'] . "-4 days"));
						$periodCal[$i]['fertile_end'] 	= date('d-m-Y', strtotime($periodCal[$i]['ovulation'] . "+5 days"));
						continue;
					}

					$periodCal[$i]['period']		= $periodCal[$i-1]['next_period'];
					$periodCal[$i]['due_date'] 		= date('d-m-Y', strtotime($periodCal[$i]['period']." +280 days"));
					$periodCal[$i]['next_period']	= date('d-m-Y', strtotime($periodCal[$i-1]['next_period'] . " +".$len." days")); //next cycle
					$periodCal[$i]['ovulation'] 	= date('d-m-Y', strtotime($periodCal[$i]['next_period']." -14 days"));
					$periodCal[$i]['fertile_start'] = date('d-m-Y', strtotime($periodCal[$i]['ovulation'] . "-4 days"));
					$periodCal[$i]['fertile_end'] 	= date('d-m-Y', strtotime($periodCal[$i]['ovulation'] . "+5 days"));
				}
			}

			$this->set(array('diplay_cycle' => $cal, 'last_date' => $last_date, 'cycle_length' => $len));
		}

		$range = array(
			'cycle' => array(
				'min' => 20,
				'max' => 45,
				'default' => 28
				),
			'cal' => array(
				'min' => 1,
				'max' => 12,
				'default' => 5
				)
			);
		$this->set(compact('range', 'periodCal'));
	}

	function menstrual_period_b(){
		
	}
}