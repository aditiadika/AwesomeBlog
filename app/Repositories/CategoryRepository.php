<?php

namespace App\Repositories;

use Nicoaudy\Repositories\Eloquent\Repository;

class CategoryRepository extends Repository
{
	public function model()
	{
		return 'App\Category';
	}
}