<?php

namespace App\Http\Controllers;

use App\BlogModel;
use Illuminate\Http\Request;

class ApiBlogCT extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $model = BlogModel::all();
        return response()->json($model, 200);
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
        //

        try {
            $model = new BlogModel;
            $model->judul_blog = $request->judul_blog;
            $model->isi_blog = $request->isi_blog;
            $model->kategori = $request->kategori;
            
            $file = $request->file('file');
            $filename = date('YmdHis')."-".str_replace(" ", "_", $file->getClientOriginalName());
            $url = url("/")."/assets/img/".str_replace(" ", "_", $filename);
            $request->file->move(public_path('assets/img/'),$filename);

            $model->img = $url;
            $model->save();
            return response()->json("success", 200);
        } catch (\Throwable $th) {
            return response()->json("failed", 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {
            $model = BlogModel::findOrFail($id);
            return response()->json($model, 200);
        } catch (\Throwable $th) {
            return response()->json("failed", 400);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $model = BlogModel::findOrFail($id);
            return response()->json($model, 200);
        } catch (\Throwable $th) {
            return response()->json("failed", 400);
        }
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


        try {
            $model = BlogModel::find($id);
            $model->judul_blog = $request->judul_blog;
            $model->isi_blog = $request->isi_blog;
            $model->kategori = $request->kategori;
            if ($request->file('file')) {
                $file = $request->file('file');
                $filename = date('YmdHis')."-".str_replace(" ", "_", $file->getClientOriginalName());
                $url = url("/")."/assets/img/".str_replace(" ", "_", $filename);
                $request->file->move(public_path('assets/img/'),$filename);
                $model->img = $url;
            }
            $model->save();
            return response()->json("success", 200);
        } catch (\Throwable $th) {
            return response()->json($th, 400);
        }
       

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


    public function edit2(Request $request,$id){

        try {
            $model = BlogModel::find($id);
            $model->judul_blog = $request->judul_blog;
            $model->isi_blog = $request->isi_blog;
            $model->kategori = $request->kategori;
            if ($request->file('file')) {
                $file = $request->file('file');
                $filename = date('YmdHis')."-".str_replace(" ", "_", $file->getClientOriginalName());
                $url = url("/")."/assets/img/".str_replace(" ", "_", $filename);
                $request->file->move(public_path('assets/img/'),$filename);
                $model->img = $url;
            }
            $model->save();
            return response()->json("success", 200);
        } catch (\Throwable $th) {
            return response()->json($th, 400);
        }
    }

    public function hapus2($id){
        BlogModel::find($id)->delete();
        return response()->json("success", 200);
    }
}
