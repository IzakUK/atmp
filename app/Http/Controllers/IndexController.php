<?php

namespace App\Http\Controllers;
use App\User;
use App\Users;
use App\Booking;
use App\Good;
use App\News;
use App\Customers;
use App\Webset;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{

    public function index(){
  $data3=Webset::find(1);
    $data=User::paginate(4);
  
    $data2=User::limit('rand')->first();

      return view('index.index',['data'=>$data,'data2'=>$data2,'data3'=>$data3]);
   
   	
   }
   public function list(){

    $data=User::paginate(100);
   
      return view('index.list',['data'=>$data]);
   
   	
   }
     public function list2(){

     $data=DB::table("fee")->find(1);

      return view('index.list2',['data'=>$data]);
   
   	
   }
    public function list3(){

    $data=Good::paginate(100);
   
      return view('index.list3',['data'=>$data]);
   
   	
   }

     public function detail($id){
     	$t=$_GET['t'];
     	switch ($t) {
     		case '1':
     		$data=User::find($id);
     			break;
     		
     		case '2':
     		$data=News::find($id);
     			break;
     		case '3':
     		$data=Good::find($id);
     			break;
     	}
    	
   		return view('index.detail',['data'=>$data]);
   }

    public function about(){

    $data=Webset::find(1);
   
      return view('index.about',['data'=>$data]);
   
   	
   }
    public function center(){
    $u=session('cus');
   
    if(empty($u)){
         echo "<script>alert('Please login');</script>";
        echo "<script>location.href='/userlogin'</script>";
    }
      return view('index.center',['data'=>$u]);
   
    
   }
   
  
}
