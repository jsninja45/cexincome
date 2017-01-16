<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use App\Comcurrency;
class ApiController extends JoshController
{
    /**
     * Show a list of all the groups.
     *
     * @return View
     */
    public function curcheck()
    {
      
if(isset($_GET['buy']) && isset($_GET['sell']))
{
    $cmd='curl -X POST -d "login_id=mukthar.shiek@gmail.com&api_key=307058ae5f0bfd657d442862226e16af3724af857e8b0d608cc17f0337ca3c27" https://devapi.thecurrencycloud.com/api/en/v1.0/authentication/token/new';
     exec($cmd,$result);
                
     $res=json_decode($result[0]);
         
               
                
      $final='curl -X POST -d "buy_currency='.$_GET['buy'].'&sell_currency='.$_GET['sell'].'&fixed_side=buy&amount=10000&reason=test&term_agreement=true" --header "X-Auth-Token: '.$res->data.'" https://devapi.thecurrencycloud.com/v2/conversions/create'
                       ;
       exec($final,$cur);
              
                
 echo $cur[0];
}
                        
    }
    
        public function getIndex()
    {
	
      
            $sell="USD";
            if(isset($_GET['buy']) && $_GET['buy']=='USD')
            {
                $sell="GBP";
            }
            
         
               if(isset($_GET['sell'])&& $_GET['sell']!='')
            {
             $sell=$_GET['sell'];
            }
            
            
             $buy="GBP";
              if(isset($_GET['sell']) && $_GET['sell']=='GBP')
            {
               $buy="USD";
            }
            if(isset($_GET['buy'])&& $_GET['buy']!='')
            {
            $buy=$_GET['buy'];
            }
         

    $cmd='curl -X POST -d "login_id=mukthar.shiek@gmail.com&api_key=307058ae5f0bfd657d442862226e16af3724af857e8b0d608cc17f0337ca3c27" https://devapi.thecurrencycloud.com/api/en/v1.0/authentication/token/new';
     exec($cmd,$result);
                
     $res=json_decode($result[0]);
                
               
                
      $final='curl -X POST -d "buy_currency='.$buy.'&sell_currency='.$sell.'&fixed_side=buy&amount=10000&reason=test&term_agreement=true" --header "X-Auth-Token: '.$res->data.'" https://devapi.thecurrencycloud.com/v2/conversions/create'
                       ;
       exec($final,$cur);
              
                
 $rescur=json_decode($cur[0]);
                        
 


$cmp=Sentinel::getUser()->COMPANY_ID;
$cur=$_GET['sell'];
$amnt=$_GET['amnt'];

$com_rate =Comcurrency::where('COMPANY_ID',"=",Sentinel::getUser()->COMPANY_ID )->where('CURRENCY',"=",$cur)->where('FROM_AMOUNT',"<",$amnt)->where('TO_AMOUNT',">=",$amnt)->first();
if(isset($com_rate))
{
$data['core_rate']=$com_rate->MULTIPLIER*$rescur->mid_market_rate;;
$data['mid_market_rate']=$rescur->mid_market_rate;
}
else
{
$data['core_rate']=$rescur->mid_market_rate;;
$data['mid_market_rate']=$rescur->mid_market_rate;
}
echo json_encode($data);
}
}
