<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\Product;
use App\auc;
use Carbon\Carbon;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('contactus','contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $categories=categories::all();
   return view('addproducts')->with(['cate'=>$categories]);
    }

    public function Auction()
    {
     $categories=categories::all();
   return view('Acution',compact('categories'));
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
        $request->validate([
            'image' => 'required|mimes:png,jpg|max:2048',
            'Title'=>'required|max:255',
            'Describtion'=>'required|max:2500',
            'Price'=>'required|min:5000|numeric',
            'Address'=>'required',
            'Photo'=>'required|mimes:png,jpg'
        ]);


        $products=new Product;
        $id = Auth::user()->id;
        $products->categories_id=$request->categories;
        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);
        $products->product_img=$fileName;
        $products->Describtion=$request->Describtion;
        $products->StartingPrice=$request->Price;
        $products->title=$request->Title;

        $products->Address=$request->Address;
        $products->user_id=$id;
        $fileNames = time().'.'.$request->Photo->extension();
        $request->Photo->move(public_path('uploads'), $fileNames);
        $products->national_img=$fileNames;
        $endDate = Carbon::today()->addDays(7);
        $products->updated_at=$endDate;

        $products->save();
        return back()->with('message','Request successfully ');
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
        return view('CategoeryDetails',compact('products'));
    }
       public function deletes($id)
       
    {
          $admin=Product::find($id);
        $admin->delete();
       
        return back()->with('message','Request successfully ');
    }
    public function auc($id)
    {
        $products=Product::find($id);

        $AUC_USER=auc::where('product_id',$id)->get();

        return view('auc_send',compact('products','AUC_USER'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function contactus()
    {
        return view('contact');
    }
    public function contact(Request $request)
    {
            $name=$request->name;
            $email=$request->email;
            $subject=$request->subject;
            $message=$request->message;
    
                    Mail::to('msm25112000@gmail.com')->send(new ContactMail($name, $email, $subject, $message));


                    return back()->with('message','Request successfully ');

    }


}
