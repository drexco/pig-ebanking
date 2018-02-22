<?php

namespace App;

use DB;

use Input;

use stdClass;

use App;

use Cache;

use Session;

use Validator;

class AdminModel {

	//Get System Summary
	public static function getSummaryData()
	{
	   $data['total_users'] = DB::table('users')->where('account_type','customer')->count();
	   $data['total_active_users'] = DB::table('users')->where('status', 'Enabled')->where('account_type','customer')->count();
	   $data['total_inactive_users'] = DB::table('users')->where('status', 'Disabled')->where('account_type','customer')->count();

	
       $data['total_transactions'] = DB::table('transactions')->where('status','<>', 'Enabled')->count();

        return $data;
	}

	public static function getReports()
	{
		
	}
	
	//Admin Change Password
	public static function changepassword()
    {
        $rules = array('password'=>'required|alpha_num');
        $validator = Validator::make(Input::all(),$rules);

        if($validator->passes())
        {
            $new_password = Input::get('password');
	       	DB::table('users')->where('id', Session::get('user_id'))->update(array('password' =>md5($new_password)));
	        return 1;
        }
    }

     //Validate User Information
    public static function validateInfo()
    {
        $rules = array(
                        'first_name'=>'required|alpha|max:20',
                        'last_name'=>'required|alpha|max:20',
                        'phone_no'=>'required|alpha'
                      );

        $data = Input::except('email','edit_info');
        $validator = Validator::make(Input::all(),$rules);
        return $validator;
    }

    //Edit Password
    public static function editPassword($user_id)
    {
        $rules = array(
                        'password'=>'required|alpha_num|confirmed',
                        'password_confirmation'=>'required',
                      );

        $validator = Validator::make(Input::all(),$rules);
       
        if ($validator->passes()) {
            $new_password = Input::get('password');
            DB::table('users')->where('id',$user_id)->update(array('password' =>md5($new_password)));
            return 1;
        }

    }

    //Validate Password
    public static function validatePassword()
    {
        $rules = array(
                        'password'=>'required|alpha_num|confirmed',
                        'password_confirmation'=>'required',
                      );

        $validator = Validator::make(Input::all(),$rules);
        return $validator;

    }

    public static function userValidate($inputs)
    {
        
        $rules = array(
                'first_name'=>'required|max:20',
                'last_name'=>'required|max:20',
                'email'=>'required|email',
                'password'=>'required|max:16',
                'phone_no'=>'required|max:20'
            );

        
        $validator = Validator::make($inputs,$rules);
        return $validator;

    }

    public static function addUser($inputs)
    {
        $tempPassword = $inputs['password'];
        $insert_data = array(
                'first_name'=>$inputs['first_name'],
                'last_name'=>$inputs['last_name'],
                'middle_name'=>$inputs['middle_name'],
                'email'=>$inputs['email'],
                'password'=> md5($inputs['password']),
                'temp_password'=> $tempPassword,
                'phone_no'=> $inputs['phone_no'],
                'account_type'=>'customer',
                'last_login' => date('Y-m-d H:i:s'),
                'created_at'=> date('Y-m-d H:i:s'),
                'status' => 'Enabled'
            );
        
        $insert = DB::table('users')->insert($insert_data);
        return $insert_data;
    }

    public static function addAccount($inputs)
    {
        $insert_data = array(
                'user_id'=>$inputs['user_id'],
                'account_name'=>$inputs['account_name'],
                'account_type'=>$inputs['account_type'],
                'account_number'=> $inputs['account_number'],
                'account_balance'=> $inputs['account_balance'],
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at'=> date('Y-m-d H:i:s'),
                'status' => 'Enabled'
            );
        
        $insert = DB::table('accounts')->insert($insert_data);
        return $insert_data;
    }

    public static function accountValidate($inputs)
    {
        
        $rules = array(
                'account_name'=>'required|max:20',
                'account_number'=>'required|max:16',
                'account_balance'=>'required'
            );

        
        $validator = Validator::make($inputs,$rules);
        return $validator;

    }

    public static function addTransaction($inputs)
    {
        $insert_data = array(
                'user_id'=>$inputs['user_id'],
                'account_id'=>$inputs['account_id'],
                'amount'=>$inputs['amount'],
                'description'=>$inputs['description'],
                'charges'=> $inputs['charges'],
                'updated_at' => date('Y-m-d H:i:s'),
                'transaction_date'=> date('Y-m-d H:i:s'),
                'status' => 'Enabled'
            );
        
        $insert = DB::table('transactions')->insert($insert_data);
        return $insert_data;
    }

    public static function transactionValidate($inputs)
    {
        
        $rules = array(
                'description'=>'required|max:100',
                'charges'=>'required',
                'amount'=>'required'
            );

        
        $validator = Validator::make($inputs,$rules);
        return $validator;

    }

    //Get Messages
    public static function getMessages()
    {
        $cache_key = 'getMessages';
        $data = Cache::remember($cache_key,5,function() 
        {
            $data = DB::table('support')
                                ->select('id','first_name','last_name','email','message','intel')
                                ->orderBy('id','DESC')
                                ->get();
            return $data;
         });

            return  $data;
    }

    public static function viewMessage($message_id)
    {
        $cache_key = 'viewMessage'.$message_id;
        $data = Cache::remember($cache_key,5,function() use ($message_id) 
        {
             $support = DB::table('support')
                            ->where('id',$message_id)
                            ->select('id','first_name','last_name','email','message','intel')
                            ->get();

            return $support;
        });

        if($data)
            return $data;
        else
            return null;

    }

    //Get Users
    public static function getUsers()
    {
        $cache_key = 'getUsers';
        $data = Cache::remember($cache_key,5,function() 
        {
            $data = DB::table('users')
                        ->where('account_type','customer')
                                ->select('id','first_name','last_name','email','phone_no','status')
                                ->orderBy('created_at','DESC')
                                ->get();
            return $data;
         });

            return  $data;
    }

    /*public static function viewUser($id)
    {
        $cache_key = 'viewUser'.$id;
        $data = Cache::remember($cache_key,5,function() use ($id) 
        {
             $user = DB::table('users')
                            ->join('countries', 'users.country_id', '=', 'countries.id')
                            ->join('states', 'users.state_id', '=', 'states.id')
                            ->where('users.id',$id)
                            ->select('users.*', 'states.state', 'countries.country')
                            ->get();

            return $user;
        });

        if($data)
            return $data;
        else
            return null;

    }*/


     //Get User Data
    public static function getUserData($user_id)
    {
        $user = DB::table('users')
                            ->where('id',$user_id)
                            ->select('first_name', 'last_name','email','phone_no', 'account_type')
                            ->first();

        $total_transactions = count(DB::table('transactions')
                                ->where('status', '<>', 'Enabled')
                                ->orderBy('created_at','DESC')
                                ->get());

        $data['info'] = $user;
        $data['transactionsTotal'] = $total_transactions;
        return $data;
    }
    
    //Edit User Information
    public static function editUserInfo($user_id)
    {
        DB::table('users')
                    ->where('id',$user_id)
                    ->update(
                                array(
                                        'first_name' => Input::get('first_name'),
                                        'last_name' => Input::get('last_name'),
                                        'middle_name' => Input::get('middle_name'),
                                        'phone_no' => Input::get('phone_no'),
                                        'email' => Session::get('email')
                                    )       
                             );

        Session::put('first_name',Input::get('first_name'));
        Session::put('last_name',Input::get('last_name'));
        Session::put('phone_no',Input::get('phone_no'));
        Session::put('email',Session::get('email'));
    }

    public static function getUserDetails($user_id)
    {
        $cache_key = 'getUser'.$user_id;
        $data = Cache::remember($cache_key, 5, function() use ($user_id) {
            $users = DB::table('users')
                ->where('id', $user_id)
                ->select('id','first_name', 'middle_name', 'last_name', 'phone_no', 'email', 'last_login', 'status', 'created_at')
                ->first();
            return $users;
        });
        if ($data) {
            return $data;
        }
        return null;
    }

    public static function viewUser($id)
    {
        $cache_key = 'viewUser'.$id;
        $data = Cache::remember($cache_key,5,function() use ($id) 
        {
             $user = DB::table('users')
                            ->where('id',$id)
                            ->select('id','first_name', 'middle_name', 'last_name', 'phone_no', 'email', 'last_login', 'status', 'created_at')
                            ->get();

            return $user;
        });

        if($data)
            return $data;
        else
            return null;

    }

    //Get Accounts
    public static function getAccounts()
    {
        $cache_key = 'getAccounts';
        $data = Cache::remember($cache_key,5,function() 
        {
            $data = DB::table('accounts')
                                ->join('users', 'accounts.user_id', '=', 'users.id')
                                ->select('accounts.id','accounts.account_name','accounts.account_number','accounts.account_balance','accounts.account_type', 'users.email', 'accounts.status')
                                ->orderBy('accounts.created_at','DESC')
                                ->get();
            return $data;
         });

            return  $data;
    }

    public static function getAccountDetails($acct_id)
    {
        $cache_key = 'getAccount'.$acct_id;
        $data = Cache::remember($cache_key, 5, function() use ($acct_id) {
            $users = DB::table('accounts')
                ->where('id', $user_id)
                ->select('id','account_name', 'account_number', 'account_balance')
                ->first();
            return $users;
        });
        if ($data) {
            return $data;
        }
        return null;
    }

    public static function viewAccount($id)
    {
        $cache_key = 'viewAccount'.$id;
        $data = Cache::remember($cache_key,5,function() use ($id) 
        {
             $account = DB::table('accounts')
                                ->join('users', 'accounts.user_id', '=', 'users.id')
                                ->select('accounts.id','accounts.account_name','accounts.account_number','accounts.account_balance','accounts.account_type', 'users.email', 'accounts.status')
                                ->orderBy('accounts.created_at','DESC')
                                ->get();

            return $account;
        });

        if($data)
            return $data;
        else
            return null;

    }

    //Get Transactions
    public static function getTransactions()
    {
        $cache_key = 'getTransactions';
        $data = Cache::remember($cache_key,5,function() 
        {
            $data = DB::table('transactions')
                                ->join('users', 'accounts.user_id', '=', 'users.id')
                                ->join('accounts', 'transactions.account_id', '=', 'accounts.id')
                                ->select('transactions.id','transactions.amount','transactions.description','transactions.charges','accounts.account_number', 'users.email', 'transactions.status', 'transactions.transaction_date')
                                ->orderBy('accounts.created_at','DESC')
                                ->get();
            return $data;
         });

            return  $data;
    }

    public static function getAccountDetails($acct_id)
    {
        $cache_key = 'getAccount'.$acct_id;
        $data = Cache::remember($cache_key, 5, function() use ($acct_id) {
            $users = DB::table('accounts')
                ->where('id', $user_id)
                ->select('id','account_name', 'account_number', 'account_balance')
                ->first();
            return $users;
        });
        if ($data) {
            return $data;
        }
        return null;
    }

    public static function viewAccount($id)
    {
        $cache_key = 'viewAccount'.$id;
        $data = Cache::remember($cache_key,5,function() use ($id) 
        {
             $account = DB::table('accounts')
                                ->join('users', 'accounts.user_id', '=', 'users.id')
                                ->select('accounts.id','accounts.account_name','accounts.account_number','accounts.account_balance','accounts.account_type', 'users.email', 'accounts.status')
                                ->orderBy('accounts.created_at','DESC')
                                ->get();

            return $account;
        });

        if($data)
            return $data;
        else
            return null;

    }
}