<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
   // inertia 
   public function index(){
    $meta = [
      'title' => 'This is Home Page'
    ];
     return Inertia::render('Index')->withViewData(['meta' => $meta]);
   }
   public function page1(){
     $data = [
       'title' => 'Page 1',
       'description' => 'This is page 1',
       'url' => 'page1',
       'child' => [
         'title' => 'Child 1',
         'url' => 'page1/child1',
         'description' => 'This is child 1'

       ]
     ];
     $meta = [
      'title' => 'This is page 1'
     ];
     return Inertia::render('Page1',compact('data'))->withViewData(['meta' => $meta]);
   }
   public function page2(){
     $meta = [
       'title' => 'This is page 25'
     ];
     return Inertia::render('Page2')->withViewData(['meta' => $meta]);
   }
   public function page3(){
     $data = [
       'message' => 'Logged in Successfully!',
       'status' => 'success',
       'share_data' => 'Shared Data'
     ];
     return Inertia::render('Page3')->with('data', $data);
   }
   public function page4(){
     return Inertia::render('Page4');
   }
   
   public function postBackRequest(Request $request){
   
     
    $data = [
      'message' => 'Logged in Successfully!',
      'status' => 'success',
      'share_data' => 'Shared Data'
    ];
    Session::flash('flash', $data); // Flash the data to the session
    \Log::info('data', $data);
     return redirect()->route('page5')->with($data);
   }

   public function page5(){
     return Inertia::render('Page5');
   }
}
