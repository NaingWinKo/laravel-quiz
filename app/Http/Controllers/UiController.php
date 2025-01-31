<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Option;
use App\Models\Result;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UiController extends Controller
{

    public function contact(){
        return view('ui.contact');
    }
    public function about(){
        return view('ui.about');
    }
    public function editPassword(){
        $id=Auth::user()->id;
        $user=User::findOrfail($id);
        return view('ui.editPassword',compact('user'));
    }
    public function changePassword(){
        
        
    return "change password successfully";
    
    }


    //To show categoriees to user panel
    public function userCategories(){

        $categories = Category::all();
        return view('ui.categories',compact('categories'));
    }

    //start test after choosing category
    public function testStart(Request $request, $id){

    $category = Category::with(['questions' => function ($query) {
        $query->inRandomOrder()
            ->with(['options' => function ($query) {
                $query->inRandomOrder();
            }]);
    }])->findOrFail($id);
       return view('ui.test', compact('category'));


    }



 //toshow results user already answered

 public function history(){
    $id=Auth::user()->id;
    $scores=Result::with(['user','category'])->where('user_id',$id)->paginate(5);


    return view('ui.history',compact('scores'));

 }



}
