<?php

class Order extends \Eloquent {

	protected $table = 'apps';

	public static $rules = [
		'name' => 'required|min:3|max:30',
		'phone' => 'required|min:3|max:20'
	];

	protected $fillable = [
		'name',
		'phone',
		'it_outsourcing',
		'web_development',
		'seo_smm',
		'training_center'
	];
}