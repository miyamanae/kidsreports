<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kid;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kid.create');
        //resources/views/postの中の
        //create.blade.phpファイルを使って、ブラウザに返答する画面を作成する
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs=$request->validate([
            'name'=>'required|max:20',
            'age'=>'required|numeric',
            'gender'=>'required|numeric',
            'parent_name'=>'required|max:20',
        ]);


        $kid=new Kid();
        $kid->name=$inputs['name'];
        $kid->age=$inputs['age'];
        $kid->gender=$inputs['gender'];
        $kid->parent_name=$inputs['parent_name'];
        $kid->user_id=auth()->user()->id;
        $kid->save();
        return back()->with('message', '園児を追加しました');



        //auth()->user()->id
        //認証済みのログイン中のユーザーのid
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kid $kid)
    {
        return view('kid.show', compact('kid'));
        //ンク元から渡されたパラメータ情報 を受け取ることができる
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kid $kid)
    {
        return view('kid.edit', compact('kid'));
        //リンク元から受け取った $kid->id を渡しeditを表示する
        $this->authorize('update', $kid);

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Kid $kid)
    {
        $inputs=$request->validate([
            'name'=>'required|max:20',
            'age'=>'required|numeric',
            'gender'=>'required|numeric',
            'parent_name'=>'required|max:20',
        ]);

        $kid->name=$inputs['name'];
        $kid->age=$inputs['age'];
        $kid->gender=$inputs['gender'];
        $kid->parent_name=$inputs['parent_name'];
        $kid->save();

        return back()->with('message', '園児情報を更新しました');
        $this->authorize('update', $kid);



        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kid $kid)
    { $kid->diaries()->delete();
        $kid->delete();
        return redirect()->route('home')->with('message', '削除しました');
        //
        $this->authorize('delete', $kid);

    }
}
