<?php namespace App\Http\Controllers;
use Sentinel;
use View;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use DB;
class CompanyController extends JoshController
{
    /**
     * Show a list of all the groups.
     *
     * @return View
     */  
    public function getIndex()
    {
        // Grab all the groups
       // $roles = Sentinel::getRoleRepository()->all();
	   $companys = DB::table('company')->get();
	   
	   $data['companys']=$companys;

        // Show the page
        return View('admin/company/index', $data);
    }

    /**
     * Group create.
     *
     * @return View
     */
    public function getCreate()
    {
        // Show the page
        return View('admin/company/create');
    }

    /**
     * Group create form processing.
     *
     * @return Redirect
     */
    public function postCreate()
    {
        // Declare the rules for the form validation
        $rules = array(
            'name' => 'required',
            'slug' => 'required|unique:roles'
        );

        //manually add slug to Input array for validation
        Input::merge(array('slug' => str_slug(Input::get('name'))));

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }
		
		$dup = DB::table('company')->where("name","=",Input::get('name'))->count();
		if($dup>0)
		{
		 return Redirect::route('create/company')->with('error', Lang::get('Company name already exist.'));
		}
		else
		{
		
		 DB::table('company')->insert([
    ['name' =>Input::get('name'),'slug' => str_slug(Input::get('name')),'created_at'=> date('Y-m-d H:i:s')]
   
]);
}

        // Redirect to the group create page
    return Redirect::route('companyes')->with('success', Lang::get('Record Added successfully.'));
      
    }

    /**
     * Group update.
     *
     * @param  int  $id
     * @return View
     */
    public function getEdit($id = null)
    {


        
        try {
            // Get the group information
           // $role = Sentinel::findRoleById($id);
		   $company = DB::table('company')->where('id',"=",$id)->first();
		   $data['company']=$company;

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Redirect::route('companyes')->with('error', Lang::get('Error in update', compact('id')));
        }

        // Show the page
        return View('admin/company/edit', $data);
    }

    /**
     * Group update form processing page.
     *
     * @param  int      $id
     * @return Redirect
     */
    public function postEdit($id = null)
    {
        try {
            // Get the group information
            //$group = Sentinel::findRoleById($id);
        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Rediret::route('companyes')->with('error', Lang::get('Error in update', compact('id')));
        }

        // Declare the rules for the form validation
        $rules = array(
            'name' => 'required',
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

        // Update the group data
       // $group->name        = Input::get('name');

        // Was the group updated?
			
		$dup = DB::table('company')->where("name","=",Input::get('name'))->where("id","!=",$id)->count();
		if($dup>0)
		{
		 return Redirect::route('create/company')->with('error', Lang::get('Company name already exist.'));
		}
		else
		{
      DB::table('company')
            ->where('id', $id )
            ->update( ['name' =>Input::get('name'),'slug' => str_slug(Input::get('name')),'updated_at'=> date('Y-m-d H:i:s')]);
            // Redirect to the group page
            return Redirect::route('companyes')->with('success', Lang::get('Record updated successfully.'));
      }

    }

    /**
     * Delete confirmation for the given group.
     *
     * @param  int      $id
     * @return View
     */
    public function getModalDelete($id = null)
    {
        $model = 'company';
        $confirm_route = $error = null;
        try {
            // Get group information
            //$role = Sentinel::findRoleById($id);


            $confirm_route =  route('delete/company',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Delete the given group.
     *
     * @param  int      $id
     * @return Redirect
     */
    public function getDelete($id = null)
    {
        try {
            // Get group information
            //$role = Sentinel::findRoleById($id);

            // Delete the group
           // $role->delete();
DB::table('company')->where('id', '=', $id)->delete();
            // Redirect to the group management page
            return Redirect::route('companys')->with('success', Lang::get('Record deleted successfully.'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('companys')->with('error', Lang::get('Error in delete', compact('id')));
        }
    }

}
