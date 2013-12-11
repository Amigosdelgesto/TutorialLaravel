<?php
class GridElementController extends BaseController {
	public function getMain() {
		$gridElements = GridElement::all();
		return View::make('index',array('elements' => $gridElements));
	}
	public function newElement() {
		return View::make('new_element');
	}
	public function saveNewElement() {
		$validator = Validator::make(
			array('title' => Input::get('title'),'description' => Input::get('description')),
			array('title' => 'required','description' => 'required|min:50'));

		if ($validator->fails()) 
			return Redirect::to('grid');

		$element = GridElement::create(Input::all());
		return Redirect::to('grid');
	}
}