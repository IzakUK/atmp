<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
	public $url='';
    public function index(){

   		return view('login.index');
   }
   public function reg(){

      return view('login.reg');
   }

 public function userlogin(){

      return view('login.userlogin');
   }
   public function userreg(){

      return view('login.userreg');
   }


   public function dologin(Request $request){
   		$data=$request->all();
   		
    	$user=Users::where('username',$data['username'])->first();
    	
    	if(empty($user)){
    			  echo "<script>alert('Account does not exist');</script>";
			  echo "<script>location.href='{$this->url}/login'</script>";
    	}
    	if($user->password != $request['password']){
    		 
    		     echo "<script>alert('wrong password');</script>";
			  echo "<script>location.href='{$this->url}/login'</script>";
    	}
     

    	   echo "<script>alert('success');</script>";
          if($user->type==1){
             session(['user'=>$user]);
            echo "<script>location.href='{$this->url}'</script>";
          }else{
             session(['cus'=>$user]);
            echo "<script>location.href='{$this->url}'</script>";
          }
			  

   }

   public function dologin2(Request $request){
      $data=$request->all();
      
      $user=Users::where('username',$data['username'])->first();
      
      if(empty($user)){
            echo "<script>alert('Account does not exist');</script>";
        echo "<script>location.href='{$this->url}/userlogin'</script>";
      }
      if($user->password != $request['password']){
         
             echo "<script>alert('wrong password');</script>";
        echo "<script>location.href='{$this->url}/userlogin'</script>";
      }
     

         echo "<script>alert('success');</script>";
         
             session(['cus'=>$user]);

            echo "<script>location.href='/'</script>";
          
        

   }

      public function dologin3(Request $request){
      $data=$request->all();
      
      $user=Users::where('username',$data['username'])->first();
      
      if(empty($user)){
            echo "<script>alert('Account does not exist');</script>";
        echo "<script>location.href='{$this->url}/userlogin'</script>";
      }
      if($user->email != $request['email']){
         
             echo "<script>alert('wrong email');</script>";
        echo "<script>location.href='{$this->url}/userlogin'</script>";
      }else{
      	$u=[
   			'password'=>$data['password'],
   			
   		];
   	  $res=DB::table("users")->where('id',$user->id)->update($u);
      }
     

         echo "<script>alert('success');</script>";
         
             session(['cus'=>$user]);

            echo "<script>location.href='/'</script>";
          
        

   }
    public function doreg(Request $request){
      $data=$request->all();
      
      $user=Users::where('username',$data['username'])->first();
      
      if(!empty($user)){
            echo "<script>alert('Account already exists');</script>";
        echo "<script>location.href='{$this->url}/reg'</script>";
      }
      if($request['qpassword'] != $request['password']){
         
             echo "<script>alert('Confirm password error');</script>";
        echo "<script>location.href='{$this->url}/login'</script>";
      }
        $data['type']=2;
        $res=Users::create($data);
         echo "<script>alert('successful');</script>";
         
            echo "<script>location.href='{$this->url}/login'</script>";
          
        

   }



    public function doreg2(Request $request){
      $data=$request->all();
      
      $user=Users::where('username',$data['username'])->first();
      
      if(!empty($user)){
            echo "<script>alert('Account already exists');</script>";
        echo "<script>location.href='{$this->url}/userreg'</script>";
      }
  
        $data['type']=2;
        $res=Users::create($data);
         echo "<script>alert('successful');</script>";
         
            echo "<script>location.href='{$this->url}/userlogin'</script>";
          
        

   }
   public function logout(){
     session(['user'=>'']);
 echo "<script>alert('Exit successfully');</script>";
         
            echo "<script>location.href='{$this->url}/login'</script>";

   }


}
