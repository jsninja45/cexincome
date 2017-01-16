<?php namespace App\Http\Controllers;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Sentinel;
use View;
use DB;
use App\Sest;
class JoshController extends Controller {

	/**
	* Crop Demo
	*/
	public function crop_demo()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$targ_w = $targ_h = 150;
			$jpeg_quality = 99;

			$src = base_path().'/public/assets/img/cropping-image.jpg';
		//dd($src);
			$img_r = imagecreatefromjpeg($src);

			$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

			imagecopyresampled($dst_r,$img_r,0,0,intval($_POST['x']),intval($_POST['y']), $targ_w,$targ_h, intval($_POST['w']),intval($_POST['h']));

			header('Content-type: image/jpeg');
			imagejpeg($dst_r,null,$jpeg_quality);

			exit;
		}
	}

	/**
     * Message bag.
     *
     * @var Illuminate\Support\MessageBag
     */
    protected $messageBag = null;

    /**
     * Initializer.
     *
     * @return void
     */
    public function __construct()
    {
        // CSRF Protection
        $this->beforeFilter('csrf', array('on' => 'post'));

        //
        $this->messageBag = new MessageBag;
    }

    public function showHome()
    {
	
	//$users = Sest::all();
	
       // print_r($users);
    	if(Sentinel::check())
		{
		        if(Sentinel::getUser()->ROLE=='ADMIN')
				{
		        $trans = DB::table('transactions')->get();
				}
				else if(Sentinel::getUser()->ROLE=='AGENT_ADMIN')
				{
				$trans = DB::table('transactions')->where("COMPANY_ID","=",Sentinel::getUser()->COMPANY_ID)->get();
				}
				else
				{
				$trans = DB::table('transactions')->where("AGENT_ID","=",Sentinel::getUser()->id)->get();
				}
	
			
			$data['trans']= $trans;
			
			return View('admin/index')->with($data);
			}
		else
		{
			return Redirect::to('admin/signin')->with('error', 'You must be logged in!');
			}
    }

    public function showView($name=null)
    {

    	if(View::exists('admin/'.$name))
		{
			if(Sentinel::check())
				return View('admin/'.$name);
			else
				return Redirect::to('admin/signin')->with('error', 'You must be logged in!');
		}
		else
		{
			return View('admin/404');
		}
    }

    public function showFrontEndView($name=null)
    {

        if(View::exists($name))
        {
            return View($name);
        }
        else
        {
            return View('admin/404');
        }
    }


}