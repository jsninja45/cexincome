<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use DB;
use App\Comcurrency;

class CompcurController extends JoshController
{


    /**
     * Declare the rules for the form validation
     *
     * @var array
     */


    /**
     * Show a list of all the users.
     *
     * @return View
     */
    public function getIndex()
    {
        // Grab all the users
        $comcurrency= Comcurrency::All();

        // Show the page
        return View('admin.comcur.index', compact('comcurrency'));
    }

    /**
     * Create new user
     *
     * @return View
     */
    public function getCreate()
    {
      
        return View('admin/comcur/create');
    }

    /**
     * User create form processing.
     *
     * @return Redirect
     */
    public function postCreate()
    {
       
        $comcurrency = new Comcurrency;

        $comcurrency->COMPANY_ID = Input::get('company');
		$comcurrency->CURRENCY = Input::get('currency');
		
		$comcurrency->TO_AMOUNT = Input::get('tamnt');
		
		$comcurrency->FROM_AMOUNT = Input::get('famnt');
		
		$comcurrency->MULTIPLIER = Input::get('exrate');

		$comcurrency->CREATED_BY = Sentinel::getUser()->id;
		$comcurrency->UPDATED_BY = Sentinel::getUser()->id;
		

        $comcurrency->save();
        return Redirect::route("currency")->with('success','Currency created successfully');

       
    }

    /**
     * User update.
     *
     * @param  int  $id
     * @return View
     */
    public function getEdit($id = null)
    {
           $Comcurrency =Comcurrency::find($id);
            if(isset($Comcurrency) && count($Comcurrency)>0)
            {
             

            }
            else
            {
                // Prepare the error message
                $error = Lang::get('Currency not found', compact('id'));

                // Redirect to the user management page
                return Redirect::route('currency')->with('error', $error);
            }

$data['Comcurrency']= $Comcurrency;

        return View('admin/comcur/edit')->with($data);;
    }
	   
	

    /**
     * User update form processing page.
     *
     * @param  int      $id
     * @return Redirect
     */
    public function postEdit($id = null)
    {
         // Declare the rules for the form validation
        

     
       $comcurrency =Comcurrency::find($id);

        $comcurrency->COMPANY_ID = Input::get('company');
		$comcurrency->CURRENCY = Input::get('currency');
		$comcurrency->TO_AMOUNT = Input::get('tamnt');
		
		$comcurrency->FROM_AMOUNT = Input::get('famnt');
		
		$comcurrency->MULTIPLIER = Input::get('exrate');

	
		$comcurrency->UPDATED_BY = Sentinel::getUser()->id;
		

        $comcurrency->save();
        return Redirect::route("currency")->with('success','Currency updated successfully');

       

       
    }

   

}
