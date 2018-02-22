<?php

namespace App;

use DB;

use Cache;

use Input;

use Session;

use stdClass;

use Validator;

use App;

class UserModel {


     //Get Summary Data
    public static function getSummaryData($user_id)
    {
        $cache_key = 'getUserSummary'.$user_id;
        $data = [];
        
        $transactions = Cache::remember($cache_key,5,function() use($user_id){
            $transactions = DB::table('transactions')
                                ->join('accounts', 'transactions.account_id', '=', 'accounts.id')
                                ->where('user_id',$user_id)
                                ->where('status', '<>', 'Enabled')
                                ->select('id','accounts.account_number','amount','description','charges','transaction_date')
                                ->take(5)
                                ->orderBy('transaction_date','DESC')
                                ->get();

            return $transactions;
        });

        $account_details = DB::table('accounts')
                            ->where('users.id',$user_id)
                            ->select('account_balance', 'account_type')
                            ->get();

        $data['first_name'] = Session::get('first_name');
        $data['last_name'] = Session::get('last_name');
        $data['last_login'] = Session::get('last_login');
        $data['account_details'] = $account_details;
        $data['transactions'] = $transactions;
        $data['messages'] = $notifications;

        return $data;
    }

    //Get Transactions
    public static function getTransactions($user_id)
    {

        $cache_key = 'getUserTransactions'.$user_id;
        $data = Cache::remember($cache_key,5,function() use($user_id)
        {
            $data = DB::table('transactions')
                                ->join('accounts', 'transactions.account_id', '=', 'accounts.id')
                                ->where('user_id',$user_id)
                                ->where('status', '<>', 'Enabled')
                                ->select('id','accounts.account_number','amount','description','charges','transaction_date')
                                ->orderBy('transaction_date','DESC')
                                ->limit(20)
                                ->get();
            return $data;
        });
        return $data; 
    }

    //Get Transaction
    public static function getTransaction($user_id, $transaction_id)
    {
        $data = DB::table('transactions')
                                ->join('accounts', 'transactions.account_id', '=', 'accounts.id')
                                ->where('user_id',$user_id)
                                ->where('status','<>', 'Initiated')
                                ->where('id',$transaction_id)
                               ->select('id','accounts.account_number','amount','description','charges','transaction_date')
                                ->orderBy('transaction_date','DESC')
                                ->first();
        return $data;
    }

    //Get User Data
    public static function getUserData($user_id)
    {
        $user = DB::table('users')
                            ->where('id',$user_id)
                            ->select('first_name', 'last_name','email','phone_no', 'account_type')
                            ->first();

        $data['info'] = $user;
        return $data;
    }

    //Edit User Information
    public static function editUserInfo($user_id)
    {

        $update_data = array(
                         'first_name' => Input::get('first_name'),
                         'last_name' => Input::get('last_name'),
                         'middle_name' => Input::get('middle_name'),
                         'phone_no' => Input::get('phone_no'),
                         'email' => Session::get('email')
                        );

       $update = DB::table('users')
                    ->where('id',$user_id)
                    ->update($update_data);  

        Session::put('first_name',Input::get('first_name'));
        Session::put('last_name',Input::get('last_name'));
        Session::put('phone_no',Input::get('phone_no'));
        Session::put('email',Session::get('email'));

        return $update_data;
    }

     //Validate User Information
    public static function validateInfo()
    {
        $rules = array(
                        'first_name'=>'required|alpha|max:20|min:3',
                        'last_name'=>'required|alpha|max:20|min:3',
                        'phone_no'=>'required|max:20|min:11'
                      );

        $data = Input::except('email','edit_info');
        $validator = Validator::make($data,$rules);
        return $validator;
    }

    //Edit Password
    public static function editPassword($user_id)
    {
    
        $new_password = Input::get('new_password');
        $old_password = Input::get('old_password');

        $get_password = DB::table('users')->where('id',$user_id)->select('password')->first();

        $update_data = array(
                         'password' =>md5($new_password),
                         'first_name' => Session::get('first_name'),
                         'last_name' => Session::get('last_name'),
                         'email' => Session::get('email')
                        );

        if(md5($old_password)==$get_password->password)
        {
            $update = DB::table('users')->where('id',$user_id)->update($update_data);
            return true; 
        }
        else
        {
            return false;
        }

        Session::put('email',Session::get('email'));
        Session::put('first_name',Session::get('first_name'));
        Session::put('last_name',Session::get('last_name'));
    }

    //Edited Password
    public static function editedPassword($user_id)
    {
        $updated_data = array(
                         'first_name' => Session::get('first_name'),
                         'last_name' => Session::get('last_name'),
                         'email' => Session::get('email')
                        );

        $update = DB::table('users')->where('id',$user_id)->update($updated_data); 

        Session::put('email',Session::get('email'));
        Session::put('first_name',Session::get('first_name'));
        Session::put('last_name',Session::get('last_name'));

        return $updated_data;
    }

    //Validate Password
    public static function validatePassword()
    {
        $rules = array(
                        'old_password'=>'required',
                        'new_password'=>'required|min:8|max:20',
                      );

        $validator = Validator::make(Input::all(),$rules);
        return $validator;

    }

}
