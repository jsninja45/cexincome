<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use DB;
use App\Beneficiary;

class BeneficiaryController extends JoshController
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
        $beneficiary= Beneficiary::All();

        // Show the page
        return View('admin.beneficiaries.index', compact('beneficiary'));
    }

    /**
     * Create new user
     *
     * @return View
     */
    public function getCreate()
    {
      
        return View('admin/beneficiaries/create');
    }

    /**
     * User create form processing.
     *
     * @return Redirect
     */
    public function postCreate()
    {
        // Declare the rules for the form validation
        $rules = array(
            'first_name'       => 'required',
            'last_name'        => 'required',
			'address'       => 'required',
            'city'        => 'required',
			'state'       => 'required',
           'country'        => 'required',
           'postal'       => 'required',
		   'contact_number'       => 'required',
		    'ttype'       => 'required',
		   		
         
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }
		$acnm="";
		$acnmum="";
		$bsb="";
		$bnk="";
		if(Input::get('ttype')=='Account Transfer')
		{
		
		$acnm=Input::get('acnm');
		$acnmum=Input::get('acnmum');
		$bsb=Input::get('bsb');
		$bnk=Input::get('bnk');
		
		}

        $beneficiary = new Beneficiary;

        $beneficiary->FIRST_NAME = Input::get('first_name');
		$beneficiary->LAST_NAME = Input::get('last_name');
		$beneficiary->ADDRESS = Input::get('address');
		$beneficiary->CITY = Input::get('city');
		$beneficiary->STATE = Input::get('state');
		$beneficiary->COUNTRY = Input::get('country');
		$beneficiary->POSTCODE = Input::get('postal');
		$beneficiary->CONTACT_NUMBER = Input::get('contact_number');
		
		$beneficiary->TRANSFER_TYPE = Input::get('ttype');
		$beneficiary->ACCOUNT_NAME = $acnm;
		$beneficiary->ACCOUNT_NO = $acnmum;
		$beneficiary->BSB = $bsb;
		$beneficiary->BANK = $bnk;
		
		
		$beneficiary->CREATED_BY = Sentinel::getUser()->id;
		$beneficiary->UPDATED_BY = Sentinel::getUser()->id;
		

        $beneficiary->save();
        return Redirect::route("beneficiaries")->with('success','Beneficiary created successfully');

       
    }

    /**
     * User update.
     *
     * @param  int  $id
     * @return View
     */
    public function getEdit($id = null)
    {
           $beneficiary =Beneficiary::find($id);
            if(isset($beneficiary) && count($beneficiary)>0)
            {
             

            }
            else
            {
                // Prepare the error message
                $error = Lang::get('Beneficiary not found', compact('id'));

                // Redirect to the user management page
                return Redirect::route('beneficiaries')->with('error', $error);
            }

$data['beneficiaries_data']= $beneficiary;

        return View('admin/beneficiaries/edit')->with($data);;
    }


    public function view($id = null)
    {
           $beneficiary =Beneficiary::find($id);
            if(isset($beneficiary) && count($beneficiary)>0)
            {
             

            }
            else
            {
                // Prepare the error message
                $error = Lang::get('Beneficiary not found', compact('id'));

                // Redirect to the user management page
                return Redirect::route('beneficiaries')->with('error', $error);
            }

$data['beneficiaries_data']= $beneficiary;

        return View('admin/beneficiaries/view')->with($data);;
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
        $rules = array(
            'first_name'       => 'required',
            'last_name'        => 'required',
			'address'       => 'required',
            'city'        => 'required',
			'state'       => 'required',
           'country'        => 'required',
           'postal'       => 'required',
		   'contact_number'       => 'required',
		    'ttype'       => 'required',
		   		
         
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }
		$acnm="";
		$acnmum="";
		$bsb="";
		$bnk="";
		if(Input::get('ttype')=='Account Transfer')
		{
		
		$acnm=Input::get('acnm');
		$acnmum=Input::get('acnmum');
		$bsb=Input::get('bsb');
		$bnk=Input::get('bnk');
		
		}

           $beneficiary = Beneficiary::find($id);
        $beneficiary->FIRST_NAME = Input::get('first_name');
		$beneficiary->LAST_NAME = Input::get('last_name');
		$beneficiary->ADDRESS = Input::get('address');
		$beneficiary->CITY = Input::get('city');
		$beneficiary->STATE = Input::get('state');
		$beneficiary->COUNTRY = Input::get('country');
			$beneficiary->POSTCODE = Input::get('postal');
		$beneficiary->CONTACT_NUMBER = Input::get('contact_number');
		
		$beneficiary->TRANSFER_TYPE = Input::get('ttype');
		$beneficiary->ACCOUNT_NAME = $acnm;
		$beneficiary->ACCOUNT_NO = $acnmum;
		$beneficiary->BSB = $bsb;
		$beneficiary->BANK = $bnk;
		
		
		$beneficiary->CREATED_BY = Sentinel::getUser()->id;
		$beneficiary->UPDATED_BY = Sentinel::getUser()->id;
		

        $beneficiary->save();
		
        return Redirect::route("beneficiaries")->with('success','Beneficiary updated successfully');

       
    }

   

}
