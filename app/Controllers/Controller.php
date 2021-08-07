<?php

namespace App\Controllers;

class Controller {
	public function index() {
		return view('home.php');
	}
	public function docs() {
		return view('docs.php');
	}
	public function installation() {
		return view('installation.php');
	}
	public function tags() {
		return view('tags.php');
	}
	public function looping() {
		return view('looping.php');
	}
	public function statement() {
		return view('statement.php');
	}
	public function filters() {
		return view('filters.php');
	}
	public function formats() {
		return view('formats.php');
	}
	public function functions() {
		return view('functions.php');
	}
	public function operators() {
		return view('operators.php');
	}
	public function objects() {
		return view('objects.php');
	}
	public function templating() {
		return view('templating.php');
	}

}