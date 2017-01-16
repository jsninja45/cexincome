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
use App\Qe;
use App\Comcurrency;

class TransController extends JoshController
{
    /**
     * Show a list of all the groups.
     *
     * @return View
     */
	 
	 
	   public function dash()
    {
	 return Redirect::route("dashboard");
	 }

	
	
    public function getIndex()
    {
        	   $qe= Qe::find(1);
			     $sender= Sender::All();
	      $beneficiary= Beneficiary::All();
		  
		   $comcurrency =Comcurrency::where('COMPANY_ID',"=",Sentinel::getUser()->COMPANY_ID )->get();
	
		$data['sender']=  $sender;
			$data['beni']= $beneficiary;
			
			$data['comcurrency']= $comcurrency;
		
			
			$data['qe']=$qe;
     
        return View('admin/trans/create',$data);
		 
    }
	
	
	  public function rateadd()
     {
	 
	 
	  $id=Input::get('trand_id');
	 $transaction = Transaction::find($id);
	

		
		$transaction->BUY_AMOUNT = Input::get('bamnt');
	
	
		
		$transaction->EXCHANAGE_RATE = Input::get('cr');
		$transaction->MID_MARKET_RATE = Input::get('mr');

		$transaction->UPDATED_BY = Sentinel::getUser()->id;
		

        $transaction->save();
		
	
	 }

     public function create()
     {
	 

         $input = Input::all();
		
		

$qe= Qe::find(1);
$tm=time();

$rt=Input::get('countdown1');
$arr=array();

$arr=explode(":",$rt);



$exp=$tm+($arr[0]*60)+$arr[1];

$transaction = new Transaction;

        $transaction->CURRENCY_BUY = Input::get('currencybuy');
		$transaction->CURRENCY_SELL = Input::get('currencysell');
		
		
		$transaction->SELL_AMOUNT = Input::get('amount');
		$transaction->EXP_TIME = $exp;
			
		$transaction->AGENT_ID = Sentinel::getUser()->id;
		
			$transaction->SESSION_TM = Input::get('SESSION_TM');
			
		$transaction->CREATED_BY = Sentinel::getUser()->id;
		$transaction->UPDATED_BY = Sentinel::getUser()->id;
		

        $transaction->save();
		
		echo $transaction->id;

 


//return Redirect::route("Submittransaction.update")->with('success', "Successfully Added Transaction.");

}




public function view($id = null)
    {
$trans=0;
	
	        if(Sentinel::getUser()->ROLE=='ADMIN')
				{
		        $trans = DB::table('transactions')->where("id","=",$id)->get();
				}
				else if(Sentinel::getUser()->ROLE=='AGENT_ADMIN')
				{
				$trans = DB::table('transactions')->where("id","=",$id)->where("COMPANY_ID","=",Sentinel::getUser()->COMPANY_ID)->get();
				}
				else
				{
				$trans = DB::table('transactions')->where("id","=",$id)->where("AGENT_ID","=",Sentinel::getUser()->id)->get();
				}
	if(count($trans)>0)
	{
	
	  $sender= Sender::All();
	      $beneficiary= Beneficiary::All();
		  
		  $payments= Payment::where('TRANSACTION_ID',"=", $id)->get();
		  $tot=0;
		  
		   $qe= Qe::find(1);
		   
		  foreach($payments as $paymentss)
		  {
		  $tot=$tot+$paymentss->AMOUNT;
		  }
	
//$curn = DB::table('countries')
           // ->where('currency_code','!=','')->lists('currency_code');
			
			$data['sender']=  $sender;
			$data['beni']= $beneficiary;
			$data['trans']=$trans;
			$data['payments']=$tot;
			
			$data['qe']=$qe;
			
		$paymen= Payment::where('TRANSACTION_ID',"=",$id )->get();
		
		
		
			$data['paymentlist']=$paymen;
            

		     return View('admin/trans/view',$data);
			 }
			 else
			 {
			    return Redirect::back()->withInput()->with('error', "Access denied");
			 }
    }



public function getEdit($id = null)
    {
$trans=0;
	
	        if(Sentinel::getUser()->ROLE=='ADMIN')
				{
		        $trans = DB::table('transactions')->where("id","=",$id)->get();
				}
				else if(Sentinel::getUser()->ROLE=='AGENT_ADMIN')
				{
				$trans = DB::table('transactions')->where("id","=",$id)->where("COMPANY_ID","=",Sentinel::getUser()->COMPANY_ID)->get();
				}
				else
				{
				$trans = DB::table('transactions')->where("id","=",$id)->where("AGENT_ID","=",Sentinel::getUser()->id)->get();
				}
	if(count($trans)>0)
	{
	
	  $sender= Sender::All();
	      $beneficiary= Beneficiary::All();
		  
		  $payments= Payment::where('TRANSACTION_ID',"=", $id)->get();
		  $tot=0;
		  
		   $qe= Qe::find(1);
		   
		  foreach($payments as $paymentss)
		  {
		  $tot=$tot+$paymentss->AMOUNT;
		  }
	
//$curn = DB::table('countries')
           // ->where('currency_code','!=','')->lists('currency_code');
			
			$data['sender']=  $sender;
			$data['beni']= $beneficiary;
			$data['trans']=$trans;
			$data['payments']=$tot;
			
			$data['qe']=$qe;
            

		     return View('admin/trans/edit',$data);
			 }
			 else
			 {
			    return Redirect::back()->withInput()->with('error', "Access denied");
			 }
    }

  public function postEdit($id = null)
    {
	
	
	//$input = Input::all();
//		 
//		 if($input['ttype']=="Cash")
//		 {
//         
//             DB::table('Senders')->where('id',$input['sid'])->update(
//    ['FIRST_NAME' => $input['sname'],'LAST_NAME'=> $input['sadd'],'ACCOUNT_NAME'=>'' ,'ACCOUNT_NUMBER'=>'','BSB'=>'','BANK'=>'','UPDATED_AT'=> date('Y-m-d H:i:s'),'UPDATED_BY'=>Sentinel::getUser()->id]
//   
//);
//}
//else
//{
//DB::table('Senders')->where('id',$input['sid'])->update(
//    ['FIRST_NAME' =>'','LAST_NAME'=>'','ACCOUNT_NAME'=> $input['acnm'] ,'ACCOUNT_NUMBER'=> $input['acnmum'],'BSB'=> $input['bsb'],'BANK'=> $input['bnk'],'UPDATED_AT'=> date('Y-m-d H:i:s'),'UPDATED_BY'=>Sentinel::getUser()->id]
//   
//);
//}
//             
//             
//             
//               DB::table('Beneficiaries')->where('id',$input['bid'])->update(
//    ['FIRST_NAME' => $input['bfn'],'LAST_NAME'=> $input['bln'],'ADDRESS'=> $input['badd'] ,'CITY'=> $input['city'],'STATE'=> $input['state'],'POSTCODE'=> $input['zip'],'CONTACT_NUMBER'=>$input['bcn'],'UPDATED_AT'=> date('Y-m-d H:i:s'),'UPDATED_BY'=>Sentinel::getUser()->id]
//   
//);
//         
//     
//         
//         
//    DB::table('transactions')->where('id',$id)->update(
//    ['CURRENCY_BUY' => $input['currencybuy'],'CURRENCY_SELL'=> $input['currencysell'],'EXCHANAGE_RATE'=> $input['cr'] ,'MID_MARKET_RATE'=> $input['mr'],'TRANSFER_TYPE'=> $input['ttype'],'AGENT_ID'=>Sentinel::getUser()->id,'PURPOSE'=> $input['pots'],'BUY_AMOUNT'=> $input['bamnt'],'SELL_AMOUNT'=> $input['amount'],'PAYOUT_AMOUNT'=> $input['pamount'],'DELIVERY_DATE'=> $input['ddate'],'QUOTE_EXPIRY_DATETIME'=>$input['ddate'],'UPDATED_AT'=> date('Y-m-d H:i:s'),'UPDATED_BY'=> 1,'COMPANY_ID'=>Sentinel::getUser()->COMPANY_ID,'PAYMENT'=>$input['payment']]
//   
//);
//return Redirect::route("dashboard")->with('success', "Successfully Upadted Transaction.");
	
	}



}