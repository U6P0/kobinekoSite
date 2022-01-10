<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//使うClassを宣言:自分で追加
use App\Models\Climedmountain;   
use Validator;  //バリデーションを使えるようにする
use Auth;       //認証モデルを使用する


class RegisterController extends Controller
{
    //
    public function index() {

        return view('register');
        
    }
    
    //登録
    public function store(Request $request) {
       
        // TODO validation
        /*
        //バリデーション
        $validator = Validator::make($request->all(), [
                'item_name' => 'required|min:3|max:255',
                'item_number' => 'required|min:1|max:3',
                'item_amount' => 'required|max:6',
                'published' => 'required',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        */
       
        //dd($request);
        
        
        $climedmountains = array();
        
        for($mountainIndex =1;$mountainIndex<=100;$mountainIndex++)
        {
            // mountainnumberString
            // mountainnumber1(大菩薩嶺)など
            // mountainIndex = 1 は大菩薩嶺など 
            $mountainnumberString = "mountainnumber" . (string)$mountainIndex;
            
            if($request->$mountainnumberString === "1")
            {
                $updateData = array(
                    "user_id" => Auth::user()->id,
                    "mountainnumber" => $mountainIndex,
                    );
                array_push($climedmountains, $updateData);
            }
        }

        
        Climedmountain::where('user_id', Auth::user()->id)->delete();
        Climedmountain::insert($climedmountains);
        
        return redirect('/');
        // return redirect('/')->with('message', '本登録が完了しました');
    }
    
}
