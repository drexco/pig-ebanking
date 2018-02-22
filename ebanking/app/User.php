<?php

namespace App;

use Eloquent;

	class User extends Eloquent {
		protected $fillable = ['id','email'];
	}
?>
