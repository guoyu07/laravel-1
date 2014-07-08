<?php

use LaravelBook\Ardent\Ardent;
class Post extends Ardent {
 
    protected $fillable = array('body');

    /**
	 * Ardent validation rules
	 */
	public static $rules = array(
	    'body' => 'required',
	    'user_id' => 'required'
	);

	/**
	 * Factory
	 */
	public static $factory = array(
	    'body' => 'text',
	    'user_id' => 'factory|User',
	);
 
    public function user()
    {
        return $this->belongsTo('User');
    }
   
}