<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');

		# process variable data or params
		# talk to the model
		# recieve from the model
		# copile or process data from the model if needed
		# pass that data to the correct view
	}

	public function getAbout() {
		$first = 'Martin';
		$last = 'Rakovicky';

		$fullname = $first . " " . $last;
		$email = "rakovicky.martin@gmail.com";
		$data = [];
		$data ['email'] = $email;
		$data ['fullname'] = $fullname;

		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

}

?>