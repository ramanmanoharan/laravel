<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
	protected $table='homes';
    protected $fillable =['name', 'title', 'description', 'image_name'];
}
