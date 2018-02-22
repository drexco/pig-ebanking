<?php

namespace App;

use Eloquent;

	class Account extends Eloquent {
		protected $fillable = ['id','account_number','account_type','account_name','account_balance'];
	}
?>
