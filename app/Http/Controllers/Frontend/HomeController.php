<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\User_Login;
use Illuminate\Support\Facades\Validator;

use View;

class HomeController extends Controller
{
    
   
   
   
   // public function UserRegistration()
   //  {
   //     return view('layouts.header');
   //  }

   public function signup(Request $request)
   {
       // Validate the form data
       $validatedData = $request->validate([
           'type' => 'required|in:guest,owner',
           'mobileNumber' => 'required|digits:10',
           'verificationCode' => 'required|digits:6',
           'accept' => 'accepted',
       ]);
   
       try {
           // Create a new Login_User instance and fill it with the validated data
           $user = new User_Login();
           $user->type = $validatedData['type'];
           $user->mobileNumber = $validatedData['mobileNumber'];
           $user->verificationCode = $validatedData['verificationCode'];
           $user->save();
   
           // Your processing logic here
   
           // Return a JSON response indicating success
           return response()->json(['success' => true]);
       } catch (\Exception $e) {
           // Handle any exceptions that occur during the database operation
           return response()->json(['success' => false, 'errors' => ['An error occurred during signup.']]);
       }
   }
   
   
   
// public function signup(Request $request)
// {
//     // Validate the form data
//     $validatedData = $request->validate([
//         'type' => 'required|in:guest,owner',
//         'mobileNumber' => 'required|digits:10',
//         'verificationCode' => 'required|digits:6',
//         'accept' => 'accepted',
//     ]);

//     // Create a new Login_User instance and fill it with the validated data
//     $user = new User_Login();
//     $user->type = $validatedData['type'];
//     $user->mobileNumber = $validatedData['mobileNumber'];
//     $user->verificationCode = $validatedData['verificationCode'];
//     $user->save();

//     // Your processing logic here

//     return redirect()->back()->with('success', 'Form submitted successfully');
// }
   
   public function index()
    {
        $latest_news = Blog::where('category', 'Latest News')->where('status', 1)->orderby('created_at', 'desc')->take(4)->get();
        return View::make('frontend.index', compact('latest_news'));
    }

    public function aboutUs()
    {
       return view('frontend.aboutUs');
    }
    

   public function contactUs()
   {
      return view('frontend.contactUs');
   }
   
   public function addPlace()
   {
      return view('frontend.addPlace');
   }
   
   public function packages()
   {
      return view('frontend.packages');
   }
   
   public function setPassword()
   {
      return view('frontend.setPassword');
   }
   
   public function ownerDashboard()
   {
      return view('frontend.ownerDashboard');
   }
   
   public function businessOwnerPage()
   {
      return view('frontend.businessOwnerPage');
   }

   // public function registration()
   // {
   //    return view('frontend.registration');
   // }

   public function ownerListing()
   {
      return view('frontend.ownerListing');
   }
   
   public function ownerWishlist()
   {
      return view('frontend.ownerWishlist');
   }

   public function ownerProfile()
   {
      return view('frontend.ownerProfile');
   }

   public function ownerLeads()
   {
      return view('frontend.ownerLeads');
   }

}
