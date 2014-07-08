<?php
use LaravelBook\Ardent\Ardent;

class Comment extends Eloquent {

  protected $table = 'comments';

  protected $fillable = array('body');
 
  public function commentable()
  {
    return $this->morphTo();
  }
 
}