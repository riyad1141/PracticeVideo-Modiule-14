<?php

namespace App\Http\Controllers;

//use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class demoController extends Controller
{
    function demoAction(Request $request):string{
      $name = $request->name;
      $age = $request->age;
//        return "This is my first request response";
        return "My name is {$name} and my age is {$age}";
    }
/*    function bodyAction(Request $request):array{
//        $name = $request->input('name');
//        $age = $request->input('age');
//        return "My name is {$name} and my age is {$age}";
       return [
     "name is" =>   $request->input('name'),
       "age is" => $request->input('age')
        ];

        return  $request->input();
    }
    */



  /*  function headerAction(Request $request):string{
          $name = $request->header('name');
          $age = $request->header('age');
          return "My name is {$name} and my age is {$age}";
//        return $request->header();
        }
  */


/*function allRequest(Request $request){
   $token = $request->header('token');
 $country =    $request->input('country');
  $city =  $request->input('city');
  $name =  $request->name;
 $age =   $request->age;
 return [
     "name" => $name,
   "age" =>  $age,
   "country" =>  $country,
   "city" =>  $city,
  "token" =>   $token
 ];



}
*/


 /*   function formData(Request $request):array{

//        return $request->input();
        $photo = $request->file('photo');
        $filesize = filesize($photo);
        $filetype = filetype($photo);
        $getClientOriginalName = $photo->getClientOriginalName();
        $getFilename = $photo->getFilename();
        $extension = $photo->extension();

        return [
           "filesize" => $filesize,
            "filetype" => $filetype,
            "getClientOriginalName" => $getClientOriginalName,
            "getFilename" => $getFilename,
            "extension" => $extension
        ];



    }
 */


  /*  function fileUpload(Request $request):bool{
        $photo = $request->file('photo');
        $photo->storeAs('upload',$photo->getClientOriginalName());
        $photo->move(public_path('upload/image'),$photo->getClientOriginalName());

        return true;
    }
*/



 /*   function ipAddress(Request $request){
//        return $request->ip();
//        return $request->getAcceptableContentTypes();

        if ($request->accepts('application/json')){
            return true;
        }else{
            return false;
        }

    }
 */


 /*   function cookieRequest(Request $request){

//        return $request->cookie();
        return $request->cookie('laravel_session');
    }
 */

 /*   function responseFormat(Request $request):string|bool|array|int|null{
//        return null;
//        return "Bangladesh";
//        return 1500000;
//        return array('a','b','c');
//        return true;
     //   return [
       //   "city" => "Dhaka",
       //   "postcode" => 23654,
      //
        //  ];

        $myArray = [
            [
                   "city" => "Dhaka",
                   "postcode" => 23654,
            ],
            [
                "city" => "Dhaka",
                "postcode" => 23654,
            ],
            [
                "city" => "Dhaka",
                "postcode" => 23654,
            ],
        ];
        return $myArray;
    }
 */



//function jsonFormat(Request $request):JsonResponse{
//    $code = 201;
//    $content = [
//      "name" => "Rabbil Hasan",
//      "city" => "Dhaka"
//    ];
//    return \response()->json($content,$code);
//}



//function redirect1(){
//    return redirect('/hello2');
//}
//    function redirect2(){
//      return "Hello everyone how are you";
//    }



//function fileBinary(){
//    $filePath = "upload/image/hello.webp";
//    return response()->file($filePath);
//}
//    function fileDownload(){
//        $filePath = "upload/image/hello.webp";
//        return response()->download($filePath);
//    }


//function demoCookie(){
//    $name = "token";
//    $value = "12345XYZ";
//    $minutes = 120;
//    $path = "/";
//    $domain = $_SERVER['SERVER_NAME'];
//    $secure = true;
//    $httpOnly = true;
//return response("Cookie is done")->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
//}



//function demoHeader(){
//    return response("Header is done")
//        ->header('header33','this is third header')
//        ->header('header22','this is second header')
//        ->header('header11','this is first header');
//}




//function laravelLog(Request $request){
//    $num1 = $request->num1;
//    $num2 = $request->num2;
//    $sum = $num1 + $num2;
////    Log::info($sum);
//    Log::emergency($sum);
//    return $sum;
//}



function sessionPut(Request $request){
    $email = $request->email;
    $request->session()->put('UserName',$email);
    return true;
}
    function sessionPull(Request $request){
        return  $request->session()->pull('UserName','Hello world');
    }
    function sessionGet(Request $request){
        return  $request->session()->get('UserName','Hello world');
    }
    function sessionForget(Request $request){
          $request->session()->forget('UserName');
        return true;
    }
    function sessionFlash(Request $request){
        $request->session()->flush();
        return true;
    }












    }
