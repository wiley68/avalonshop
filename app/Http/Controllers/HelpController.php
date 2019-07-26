<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Category;
use App\Project;
use App\Support;

class HelpController extends Controller
{
    public static function getExcerpt($str, $startPos=0, $maxLength=100) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength-3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= '...';
        } else {
            $excerpt = $str;
        }
        
        return $excerpt;
    }

    public function submit_contactus(Request $request){
        $this->validate($request, [
			'cf_name' => 'required',
			'cf_email' => 'required',
			'cf_message' => 'required'
        ]);

        $name = $request->input('cf_name');
        $email = $request->input('cf_email');
        $message = $request->input('cf_message');
        
        //to admin
		$objMailAdmin = new \stdClass();
		$objMailAdmin->app_name = env('APP_NAME','Авалон Магазин');
		$objMailAdmin->name = $name;
		$objMailAdmin->email = $email;
		$objMailAdmin->message = $message;
		$objMailAdmin->sender = env('MAIL_USERNAME','ilko.iv@gmail.com');
        $objMailAdmin->receiver = 'Администратор Авалон Магазин';
 
        Mail::to('home@avalonbg.com')->send(new ContactUs($objMailAdmin));
        
        $root_categories = Category::where(['parent_id' => 0])->get();
        $webprojects = Project::all();
        $supports_gamings = Support::where(['category_id' => 'gamings'])->get();
        $supports_offices = Support::where(['category_id' => 'offices'])->get();
        $supports_printers = Support::where(['category_id' => 'printers'])->get();
        $supports_instalations = Support::where(['category_id' => 'instalations'])->get();
        $supports_networks = Support::where(['category_id' => 'networks'])->get();
        $supports_cameras = Support::where(['category_id' => 'cameras'])->get();
        $supports_softwares = Support::where(['category_id' => 'softwares'])->get();
        return view('index')->with([
            'title' => 'Софтуер - продажба на компютърна техника | Авалон',
            'description' => 'Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи',
            'root_categories' => $root_categories,
            'webprojects' => $webprojects,
            'supports_gamings' => $supports_gamings,
            'supports_offices' => $supports_offices,
            'supports_printers' => $supports_printers,
            'supports_instalations' => $supports_instalations,
            'supports_networks' => $supports_networks,
            'supports_cameras' => $supports_cameras,
            'supports_softwares' => $supports_softwares,
            'message' => '<b>Благодарим Ви!</b> Вашето съобщение е получено от екипа на Авалон ООД.'
        ]);
    }

}
