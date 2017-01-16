<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use DB;
use App\Sender;

class SendersController extends JoshController
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
        $sender= Sender::All();

        // Show the page
        return View('admin.senders.index', compact('sender'));
    }

    /**
     * Create new user
     *
     * @return View
     */
    public function getCreate()
    {
      
        return View('admin/senders/create');
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
		   
         
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $sender = new Sender;

        $sender->FIRST_NAME = Input::get('first_name');
		$sender->LAST_NAME = Input::get('last_name');
		$sender->ADDRESS = Input::get('address');
		$sender->CITY = Input::get('city');
		$sender->STATE = Input::get('state');
		$sender->COUNTRY = Input::get('country');
		$sender->POST_CODE = Input::get('postal');
		$sender->CONTACT_NO = Input::get('contact_number');
		$sender->CREATED_BY = Sentinel::getUser()->id;
		$sender->UPDATED_BY = Sentinel::getUser()->id;
		

        $sender->save();
        return Redirect::route("senders")->with('success','Sender created successfully');

       
    }

    /**
     * User update.
     *
     * @param  int  $id
     * @return View
     */
    public function getEdit($id = null)
    {
           $sender =Sender::find($id);
            if(isset($sender) && count($sender)>0)
            {
             

            }
            else
            {
                // Prepare the error message
                $error = Lang::get('Sender not found', compact('id'));

                // Redirect to the user management page
                return Redirect::route('senders')->with('error', $error);
            }

$data['sender_data']= $sender;

        return View('admin/senders/edit')->with($data);;
    }
	    public function view($id = null)
    {
           $sender =Sender::find($id);
            if(isset($sender) && count($sender)>0)
            {
             

            }
            else
            {
                // Prepare the error message
                $error = Lang::get('Sender not found', compact('id'));

                // Redirect to the user management page
                return Redirect::route('senders')->with('error', $error);
            }

$data['sender_data']= $sender;

        return View('admin/senders/view')->with($data);;
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
		   
         
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

      $sender = Sender::find($id);

        $sender->FIRST_NAME = Input::get('first_name');
		$sender->LAST_NAME = Input::get('last_name');
		$sender->ADDRESS = Input::get('address');
		$sender->CITY = Input::get('city');
		$sender->STATE = Input::get('state');
		$sender->COUNTRY = Input::get('country');
		$sender->POST_CODE = Input::get('postal');
		$sender->CONTACT_NO = Input::get('contact_number');
		$sender->CREATED_BY = Sentinel::getUser()->id;
		$sender->UPDATED_BY = Sentinel::getUser()->id;
		

        $sender->save();
		
        return Redirect::route("senders")->with('success','Sender updated successfully');

       
    }

   

}
