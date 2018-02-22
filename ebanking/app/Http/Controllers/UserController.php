<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\UserModel;

use App\Country;

use App\State;

use App;

use Session;

use View;

use Redirect;

use Input;

use Response;

use Mail;

class userController extends Controller {

	//Summary View
	public function summary()
	{
		if(Session::get('user_id'))
		{
			if(Session::get('account_type')=='user')
			{
				$user_id = Session::get('user_id');
				$data = UserModel::getSummaryData($user_id);
				return View::make('user.summary')->with(array('data'=>$data));	
			}
			App::abort(403);
		}
		return Redirect::guest('/login');
	}

	//Transactions
	public function transactions()
	{
		if(Session::get('user_id'))
		{
			if(Session::get('account_type')=='user')
			{
				$user_id = Session::get('user_id');
				$data = UserModel::getTransactions($user_id);
				return View::make('user.transactions')->with('data',$data);
			}
			App::abort(403);
		}
		return Redirect::guest('/login');
	}

	//Transaction View
	public function viewTransaction($transaction_id)
	{
		if(Session::get('user_id'))
		{
			if(Session::get('account_type')=='user')
			{
				$user_id = Session::get('user_id');
				$data = UserModel::getTransaction($user_id, $transaction_id);
				return View::make('user.transactionView')->with('data',$data);
			}
			App::abort(403);
		}
		return Redirect::guest('/login');
	}

	//Settings View
	public function userSettingsView()
	{

		if(Session::get('user_id'))
		{
			if(Session::get('account_type')=='user')
			{
				$user_id = Session::get('user_id');
		 		$data = UserModel::getUserData($user_id);
                $countries = Country::all();
		 		return View::make('user.settings')->with('data',$data);
		 	}
			App::abort(403);
		}
		App::abort(403);
	}


	//Edit Users informations 
	public function editInfo()
	{
		if(Session::get('user_id'))
		{
			if(Session::get('account_type')=='user')
			{
				$user_id = Session::get('user_id');
				$validator = UserModel::validateInfo();

				if($validator->passes())
				{
					$details = UserModel::editUserInfo($user_id);
					Mail::send('emails.personalInfoSettings', $details, function($message) use ($details)
								 	{
								 	  $message->from('support@ntradex.com', 'Ntradex Suppport');
								 	  $message->to($details['email'])->subject('Profile Update');
								 	});
					Session::flash('editInfo_message','Changes were successful.');
					return Redirect::to('/users/settings');
				}
				else
				{
	             	Session::flash('editInfo_message','Something went wrong, please correct your inputs.');
					return Redirect::to('/users/settings')->withErrors($validator)->withInput();   
				}
			}
			App::abort(403);
		}
		App::abort(403);
	}

	//Edit Password
	public function editPassword()
	{
		if(Session::get('user_id') )
		{
			if(Session::get('account_type')=='user')
				{
					$user_id = Session::get('user_id');
					$validator = UserModel::validatePassword();

				 	if($validator->passes())
					{
						$state = UserModel::editPassword($user_id);
						if($state)
						{
							$details = UserModel::editedPassword($user_id);
							Mail::send('emails.passwordSettings', $details, function($message) use ($details)
								 	{
								 	  $message->from('support@ntradex.com', 'Ntradex Suppport');
								 	  $message->to($details['email'])->subject('Password Update');
								 	});
							Session::flash('editPassword_message','Changes were successful.');	
							return Redirect::to('/users/settings');						
						}
						else
						{
							Session::flash('editPassword_message','Oops, The old password provided is wrong.');
							return Redirect::to('/users/settings');
						}
						
					}
					else
					{
		             	Session::flash('editPassword_message','Something went wrong, please correct your inputs.');
						return Redirect::to('/users/settings')->withErrors($validator)->withInput();   
					}
				}
				App::abort(403);
 		}
 		App::abort(403);
 	}

 	//Search View
 	public function userSearch()
	{
          return View::make('user.search');	
	}

	//Search View
 	public function userSearchView()
	{
          return View::make('user.search');	
	}
}
