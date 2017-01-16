<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use DB;
use App\Transaction;  
use App\Beneficiary;
use App\Sender;
use App\Payment;

class PaymentController extends JoshController
{
    /**
     * Show a list of all the groups.
     *
     * @return View
     */

     public function create()
     {
	 

         $input = Input::all();
		$alerts="";
$alertb="";
$alerta="";
		
if(Input::get('sender'.Input::get('cntj'))=='')
{
$alerts="Sender field required";
}
if(Input::get('beneficiary'.Input::get('cntj'))=='')
{
$alertb="Beneficiary field required";
}
if(Input::get('amount_ts'.Input::get('cntj'))=='' || Input::get('amount_ts'.Input::get('cntj'))<=0)
{
$alerta="Amount Must be grater than 0";
}	

if($alerts=="" && $alertb=="" && $alerta=="")
{
$payment = new Payment;

        $payment->SENDER_ID = Input::get('sender'.Input::get('cntj'));
		$payment->BENEFICIARY_ID = Input::get('beneficiary'.Input::get('cntj'));
		
		$payment->AMOUNT = Input::get('amount_ts'.Input::get('cntj'));
		$payment->TRANSACTION_ID = Input::get('trand_id');

		
		$payment->CREATED_BY = Sentinel::getUser()->id;
		$payment->UPDATED_BY = Sentinel::getUser()->id;
		

        $payment->save();
		
		$payments= Payment::where('TRANSACTION_ID',"=", Input::get('trand_id'))->get();
		
		
		
			$data['payments']=$payments;
            

		     return View('admin/trans/payment',$data);
		
		}
           else
		   {
$upt=array();
$upt['alerts']=$alerts;
$upt['alertb']=$alertb;
$upt['alerta']=$alerta;
echo json_encode($upt);
}




}
        public function pview()
     {
	
 $id=Input::get('trand_ids');
	 		$paymen= Payment::where('TRANSACTION_ID',"=",$id )->get();
		
		
		
			$data['payments']=$paymen;
            

		     return View('admin/trans/payment',$data);
	 }
	         public function pviewdit()
     {
	
 $id=Input::get('trand_ids');
	 		$paymen= Payment::where('TRANSACTION_ID',"=",$id )->get();
		
		
		
			$data['payments']=$paymen;
            

		     return View('admin/trans/paymentview',$data);
	 }
	        public function delpay()
     {
	
 $pid=$_GET['pid'];
 
 $id=Payment::find($pid);
 
 $tid=$id->TRANSACTION_ID;
 $id->delete();
 
	 		$paymen= Payment::where('TRANSACTION_ID',"=",$tid )->get();
		
	
		
			$data['payments']=$paymen;
            

		     return View('admin/trans/payment',$data);
	 } 



}