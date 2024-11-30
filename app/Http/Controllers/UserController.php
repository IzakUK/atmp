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
use Illuminate\View\View;
class UserController extends Controller
{
	public $url='';


	 public function index(){

	 	$data=User::paginate(100);
   		return view('user.index',['data'=>$data]);
   }
   public function index2(){
$n=isset($_GET['n'])? $_GET['n']:'';   
if(empty($n)){
$data=News::paginate(100);
}else{
$data=News::where('title',$n)->paginate(100);
}

      return view('user.index2',['data'=>$data]);
   }
   public function index3(){

    $data=Good::paginate(100);
      return view('user.index3',['data'=>$data]);
   }
    public function userindex(){
    $u=session('user'); 
   

      return view('user.userindex',['u'=>$u]);
   }
   public function index5(){

    $data=Users::where('type','1')->paginate(100);

      return view('user.index5',['data'=>$data]);
   }
      public function indexu(){

    $data=Users::where('type','2')->paginate(100);

      return view('user.indexu',['data'=>$data]);
   }

    public function index6(){

    $data=Customers::paginate(100);

      return view('user.index6',['data'=>$data]);
   }
     public function userindex2(){
    $u=session('user'); 
    $data=Db::table('booking')->where('uid',$u->id)->get();
  
      return view('user.userindex2',['data'=>$data]);
   }

   public function add(){
      return view('user.add',['t'=>$_GET['t']]);
   } 
     public function fadd(){
      return view('user.fadd',['t'=>$_GET['t']]);
   } 
       public function kadd(){
      return view('user.kadd',['t'=>$_GET['t']]);
   } 

        public function dadd(){
              $data=News::paginate(100);
              $c=Customers::paginate(100);
      return view('user.dadd',['t'=>$_GET['t'],'d'=>$data,'c'=>$c]);
   } 
 public function uadd(){
      return view('user.uadd',['t'=>$_GET['t']]);
   } 


   public function editu(){
   		return view('user.editu');
   }
    public function uuedit($id){
      $data=Users::find($id);
      return view('user.uuedit',['data'=>$data]);
   }
      public function kedit($id){
      $data=Customers::find($id);
      return view('user.kedit',['data'=>$data]);
   }
       public function sf(){
      $data=DB::table("fee")->find(1);
    
      return view('user.sf',['data'=>$data]);
   }
    public function checkin(){
         return view('user.checkin');
   }
    public function edit($id){
    	$data=User::find($id);
   		return view('user.edit',['data'=>$data]);
   }
    public function fedit($id){
      $data=News::find($id);
      return view('user.fedit',['data'=>$data]);
   }


       public function dedit($id){
            $data=Good::find($id);
           $datas=News::paginate(100);
              $c=Customers::paginate(100);
      return view('user.dedit',['data'=>$data,'d'=>$datas,'c'=>$c]);
   }
public function doadu(Request $request){
      $data=$request->all();
      
      $user=Users::where('username',$data['username'])->first();
      
      if(!empty($user)){
            echo "<script>alert('User name already exists');</script>";
        echo "<script>location.href='{$this->url}/user/index5'</script>";
      }
        $data['type']=2;
        $data['email']=$data['email'];
 
        $res=Users::create($data);
         echo "<script>alert('success');</script>";
         echo "<script>location.href='{$this->url}/user/index5'</script>";
          
        

   }
   public function doadk(Request $request){
      $data=$request->all();
      
      $user=Customers::where('idcard',$data['idcard'])->first();
      
      if(!empty($user)){
            echo "<script>alert('客户信息已存在');</script>";
        echo "<script>location.href='{$this->url}/user/index5'</script>";
      }
       
        $data['email']=$data['email'];
 
        $res=Customers::create($data);
         echo "<script>alert('success');</script>";
         echo "<script>location.href='{$this->url}/user/index6'</script>";
          
        

   }
   
public function dnew(Request $request){
      $input=$request->all();
      $t=$input['t'];

      $input=$request->except('_token');
      $input=$request->except('t');
      $input['status']=1;
       

        
     
          $res=Good::create($input);
       
      
      
     
       if($res){
        return redirect('user/index3');
       }else{
         return back();
       }
   }
   
   public function dupd(Request $request){
      $input=$request->all();
      /*$input=$request->except('_token');*/ 
      $u=[
        'title'=>$input['title'],
        'content'=>$input['content'],
        'fen'=>$input['fen'],
        'semester'=>$input['semester'],
      
        'times'=>$input['times'],
      ];
      $res=DB::table("goods")->where('id',$input['id'])->update($u);
       if($res){
        return redirect('user/index3');
       }else{
         return back();
       }
   }
    public function doedu(Request $request){
      $input=$request->all();
      /*$input=$request->except('_token');*/ 
      $u=[
        'username'=>$input['username'],
        'password'=>$input['password'],
        'email'=>$input['email'],
      ];
      $res=DB::table("users")->where('id',$input['id'])->update($u);
       if($res){
        return redirect('user/index5');
       }else{
         return back();
       }
   }

     public function doedk(Request $request){
      $input=$request->all();
      /*$input=$request->except('_token');*/ 
      $u=[
        'name'=>$input['name'],
        'idcard'=>$input['idcard'],
        'type'=>$input['type'],
        'email'=>$input['email'],
      ];
      $res=DB::table("customer")->where('id',$input['id'])->update($u);
       if($res){
        return redirect('user/index6');
       }else{
         return back();
       }
   }
  public function upp(Request $request){
      $input=$request->all();
       $uu=session('user');
     
       if($input['ym']!=$uu->password){
         echo "<script>alert('The old password is wrong.');</script>";
          echo "<script>location.href='{$this->url}/user/editu'</script>";die;
       }
      /*$input=$request->except('_token');*/
      $u=[
        'password'=>$input['xm'],
        
      ];
      $res=DB::table("users")->where('id',$uu->id)->update($u);
       if($res){
        echo "<script>alert('modify successfully');</script>";
          echo "<script>location.href='{$this->url}/user/editu'</script>";die;
       }else{
         return back();
       }
   } 

    public function delete($id){
   		
   	  $res=DB::table("stclass")->where('id',$id)->delete();
   	   if($res){
   	   	return redirect('user/index');
   	   }else{
   	   	 return back();
   	   }
   }
       public function fdelete($id){
      
      $res=DB::table("news")->where('id',$id)->delete();
       if($res){
        return redirect('user/index2');
       }else{
         return back();
       }
   }

         public function ddelete($id){
      
      $res=DB::table("goods")->where('id',$id)->delete();
       if($res){
        return redirect('user/index3');
       }else{
         return back();
       }
   }

  public function udelete($id){
      
      $res=DB::table("users")->where('id',$id)->delete();
       if($res){
        return redirect('user/index5');
       }else{
         return back();
       }
   }
  public function kdelete($id){
      
      $res=DB::table("customer")->where('id',$id)->delete();
       if($res){
        return redirect('user/index6');
       }else{
         return back();
       }
   }

    public function deleteall(Request $request){
    	$input=$request->except('_token');
   		foreach ($input['id'] as  $v) {
   		 $res=DB::table("stclass")->where('id',$v)->delete();
   		}
   	 
   	   if($res){
   	   	return redirect('user/index');
   	   }else{
   	   	 return back();
   	   }
   }


    public function booking($id){
      $u=session('user');
      if(empty($u)){
           echo "<script>alert('please login');</script>";
        echo "<script>location.href='{$this->url}/login'</script>";
      }
      $s=DB::table("stclass")->where('id',$id)->first();
     

      $arr['uid']=$u->id;
      $arr['sid']=$id;
      $arr['created']=date('Y-m-d H:i',time());
      $arr['flag']=1;
      $arr['t']=$s->title;

      $res=Booking::create($arr);
       $s2=DB::table("stclass")->where('id',$id)->update(['status'=>2]);
       if($res){
        return redirect('user/userindex');
       }else{
         return back();
       }
   }
    public function hs($id){
      $u=session('user');
      if(empty($u)){
           echo "<script>alert('please login');</script>";
        echo "<script>location.href='{$this->url}/login'</script>";
      }
      $s=DB::table("booking")->where('id',$id)->first();

     $s2=DB::table("stclass")->where('id',$s->sid)->update(['status'=>1]);
     $s3=DB::table("booking")->where('id',$id)->update(['flag'=>2]);

  
       
       if($s3){
       return back();
       }else{
         return back();
       }
   }
 public function dosf(Request $request){
      $input=$request->all();
     
      $u=[
        'content'=>$input['editorValue'],
        
      ];
      $res=DB::table("fee")->where('id',1)->update($u);
       if($res){
        return redirect('user/sf');
       }else{
         return back();
       }
   }


}
