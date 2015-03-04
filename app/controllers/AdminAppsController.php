<?php

class AdminAppsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apps = Order::orderBy('created_at', 'desc')->paginate(30);

		return View::make('admin.apps.index', compact('apps'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$app = Order::find($id);

    	$it_outsourcing = unserialize($app->it_outsourcing);
    	$web_development = unserialize($app->web_development);
    	$seo_smm = unserialize($app->seo_smm);
    	$training_center = unserialize($app->training_center);

		return View::make('admin.apps.show', compact('app', 'it_outsourcing', 'web_development', 'seo_smm', 'training_center'));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Order::destroy($id);

		return Redirect::route('admin.apps.index')->with('global', 'Запись удалена.');
	}


}
