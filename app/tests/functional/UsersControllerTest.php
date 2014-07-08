<?php

class UsersControllerTest extends TestCase {

	public function setUp()
	{
	  parent::setUp();
	 
	  $this->mock = $this->mock('Cribbb\Storage\User\UserRepository');
	}
	  
	public function mock($class)
	{
	  $mock = Mockery::mock($class);
	  
	  $this->app->instance($class, $mock);
	  
	  return $mock;
	}

    public function tearDown()
	{
	  Mockery::close();
	}

	public function testAverageTwitterFollowers()
	{
	  $twitter = m::mock('twitter');
	  $twitter->shouldReceive('followers')->times(3)->andReturn(203, 344, 4524);
	  $analytics = new Analytics($twitter);
	  $this->assertEquals(2055, $analytics->average());
	}

/*	public function testIndex()
	{
	  $this->mock->shouldReceive('all')->once();
	 
	  $this->call('GET', 'user');
	 
	  $this->assertResponseOk();
	}*/
}