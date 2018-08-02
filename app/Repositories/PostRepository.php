<?php

namespace App\Repositories;

use Nicoaudy\Repositories\Eloquent\Repository;

class PostRepository extends Repository
{
	public function model()
	{
		return 'App\Post';
	}
}