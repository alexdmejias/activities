<?php

class Main_Controller extends Base_Controller {

	public function action_index() {
		return View::make('main.index');
	}

	public function action_nyt() {
		$resource = 'mostviewed';
		$section = 'all-sections';
		$nyt_key = '5bcba5e98bdb5d5b9641a3efb4c8576c:19:65057713';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.nytimes.com/svc/mostpopular/v2/{$resource}/{$section}/1.json?api-key={$nyt_key}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $output = curl_exec($ch);
        curl_close($ch);

		return View::make('main.nyt', array('output' => $output));
	}

}