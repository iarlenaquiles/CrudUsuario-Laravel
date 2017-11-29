<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Perfil extends Eloquent
{
	protected $collection = 'perfil';

	protected $fillable = ['nome'];

	protected $connection = 'mongodb';
}
