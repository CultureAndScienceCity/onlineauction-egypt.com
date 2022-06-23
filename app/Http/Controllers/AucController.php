<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\auc;
use App\info_card;
use DB;

class AucController extends Controller
{
    public function add_auc(Request $request)
    {
        //DB::getPdo()->lastInsertId();
        $name= Auth::user()->name;
        $id= Auth::user()->id;
        $price = DB::table('aucs')->where('product_id',$request->product_id)->max('StartingPrice');
        if($price==null){

        $prices= DB::table('products')->where('id',$request->product_id)->get(['StartingPrice']);
        if($prices[0]->StartingPrice<$request->price){
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
            return back()->with('message','Request successfully ');

        }else{
            return back()->with('error','less in prices');
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
            return back()->with('message','Request successfully ');

        }else{
            return back()->with('error','less in prices');

        }


        // $auc=new auc;
        // $auc->name=$name;
        // $auc->StartingPrice=$request->price;

        // $auc->product_id=$request->product_id;
        // $auc->save();

        // $info_card=new info_card;
        // $info_card->user_id=$id;
        // $info_card->numbercard=$request->numbercard;
        // $info_card->date_end=$request->date_end;
        // $info_card->codecard=$request->codecard;
        // $info_card->auc_id=$auc->id;
        // $info_card->save();
        // return back()->with('message','Request successfully ');
        dd($price);
    }
}
