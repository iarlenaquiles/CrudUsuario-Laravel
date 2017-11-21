<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
	protected $collection = 'usuario_collection';

	protected $fillable = ['nome', 'idade'];

	protected $connection = 'mongodb';
}
