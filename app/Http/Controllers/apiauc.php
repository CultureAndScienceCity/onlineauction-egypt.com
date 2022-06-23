<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\auc;
use App\info_card;
use DB;
use App\categories;
use App\Product;
use Carbon\Carbon;
use Mail;
use App\Mail\ContactMail;
class apiauc extends Controller
{
        public function __construct()
    {
        $this->middleware('auth')->except('index','show','contact');
    }
    public function index()
    {
     $categories=categories::all();
     return response()->json(['message'=>'success','categories',$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

        $products=new Product;
        // $id = Auth::user()->id;
        $products->categories_id=$request->categories_id;
        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);
        $products->product_img=$fileName;
        $products->Describtion=$request->Describtion;
        $products->StartingPrice=$request->Price;
        $products->title=$request->Title;

        $products->Address=$request->Address;
        $products->user_id=$request->id;
        $fileNames = time().'.'.$request->Photo->extension();
        $request->Photo->move(public_path('uploads'), $fileNames);
        $products->national_img=$fileNames;
        $products->save();
        return response()->json(['message'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Product::where('categories_id',$id)->orderBy('id','ASC')->paginate(9);
     //   >where('created_at', '>=', Carbon::now()->subMinutes(15)->toDateTimeString())-
     return response()->json(['message'=>'success','products'=>$products]);


    }
    public function auc($id)
    {
        $products=Product::find($id);

        $AUC_USER=auc::where('product_id',$id)->get();
        return response()->json(['message'=>'success','product'=>$products,'user'=>$AUC_USER]);

    }

    public function add_auc(Request $request)
    {
        //DB::getPdo()->lastInsertId();
       // $name= Auth::user()->name;
        // $id= Auth::user()->id;
             //DB::getPdo()->lastInsertId();
        // $name= Auth::user()->name;
        // $id= Auth::user()->id;
        // $price = DB::table('aucs')->where('product_id',$request->product_id)->max('StartingPrice');
        // if($price==null){

        // $prices= DB::table('products')->where('id',$request->product_id)->get(['StartingPrice']);
        // if($prices[0]->StartingPrice<$request->price){
        //     $auc=new auc;
        //     $auc->name=$name;
        //     $auc->StartingPrice=$request->price;
        //     $auc->product_id=$request->product_id;
        //     $auc->save();

        //     $info_card=new info_card;
        //     $info_card->user_id=$id;
        //     $info_card->numbercard=$request->numbercard;
        //     $info_card->date_end=$request->date_end;
        //     $info_card->codecard=$request->codecard;
        //     $info_card->auc_id=$auc->id;
        //     $info_card->save();
        //     return response()->json(['message','Request successfully']);

        // }else{
        //   return response()->json(['error','should price more then price product']);
        // }

        // }else if($price<$request->price){
        //     $auc=new auc;
        //     $auc->name=$name;
        //     $auc->StartingPrice=$request->price;

        //     $auc->product_id=$request->product_id;
        //     $auc->save();

        //     $info_card=new info_card;
        //     $info_card->user_id=$id;
        //     $info_card->numbercard=$request->numbercard;
        //     $info_card->date_end=$request->date_end;
        //     $info_card->codecard=$request->codecard;
        //     $info_card->auc_id=$auc->id;
        //     $info_card->save();
        //   return response()->json(['message','Request successfully']);

        // }else{
        //   return response()->json(['error','There is a higher price']);

        // }
        
            $price = DB::table('aucs')->where('product_id',$request->product_id)->max('StartingPrice');
        if($price==null){


            $prices= DB::table('products')->where('id',$request->product_id)->get(['StartingPrice']);
            if($prices[0]->StartingPrice<$request->price){
                $auc=new auc;
                    $auc->name=$request->name;
                $auc->StartingPrice=$request->price;
                $auc->product_id=$request->product_id;
                $auc->save();

                $info_card=new info_card;
                $info_card->user_id=$request->user_id;
                $info_card->numbercard=$request->numbercard;
                $info_card->date_end=$request->date_end;
                $info_card->codecard=$request->codecard;
                $info_card->auc_id=$auc->id;
                $info_card->save();
      return response()->json(['message'=>'success']);
    }
      else{
        return response()->json(['message'=>'error']);

      }

        }else if($price<$request->price){
            $auc=new auc;
            $auc->name=$name;
            $auc->StartingPrice=$request->price;

            $auc->product_id=$request->product_id;
            $auc->save();

            $info_card=new info_card;
            $info_card->user_id=$id;
            $info_card->numbercard=$request->numbercard;
            $info_card->date_end=$request->date_end;
            $info_card->codecard=$request->codecard;
            $info_card->auc_id=$auc->id;
            $info_card->save();
     return response()->json(['message'=>'success']);
        }else{
            return response()->json(['message'=>'error']);
        }

    }
    public function delete($id){
          $admin=Product::find($id);
        $admin->delete();
                    return response()->json(['message'=>'success']);

    }
      public function contact(Request $request)
    {
            $name=$request->name;
            $email=$request->email;
            $subject=$request->subject;
            $message=$request->message;
    
                    Mail::to('msm25112000@gmail.com')->send(new ContactMail($name, $email, $subject, $message));


                    return response()->json(['message','Request successfully ']);

    }

}
