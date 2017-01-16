<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use DB;
use App\Qe;  
class QeController extends JoshController
{
  
    public function getEdit($id = null)
    {

  $qe= Qe::find(1);
  $data['qe']=$qe;
  
        return View('admin/qe/edit', $data);
    }

   
    public function postEdit($id = null)
    {
 
	    $qe = Qe::find($id);

        $qe->QE_TIME = Input::get('qetime');
		
		
		
		$qe->CREATED_BY = Sentinel::getUser()->id;
		$qe->UPDATED_BY = Sentinel::getUser()->id;
		

        $qe->save();

 




return Redirect::back()->withInput()->with('success', "Successfully updated Quote Expiry Time.");

    }

}
