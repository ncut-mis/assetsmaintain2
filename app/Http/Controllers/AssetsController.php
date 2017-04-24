<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{
    //新增資產   抓取資產表單
    public function create()
    {
      //  return view('assets.create');
    }
    //儲存資產createAssetRequest
    public function store( $request)
    {
        Assets::create($request->all());
      //  return redirect()->route('admin.posts.index');
    }

    /*
    //抓取更改資產表單
    public function edit(editAssetRequest $request,$id)
    {
        $asset=Assets::find($id);
        $data = ['assets' => $asset];
      //  return view('admin.posts.edit', $data);
    }
    //更新資產
    public function update(updateAssetRequest $request, $id)
    {
        $asset=Assets::find($id);
        $asset->update($request->all());
       // return redirect()->route('admin.posts.index');
    }
    //刪除資產 二次刪除!
    public function destroy(destoryAssetsRequest $request,$id)
    {
        Post::destroy($id);
      //  return redirect()->route('admin.posts.index');
    }
    */


/*
    public function index()
    {
        $post=Post::orderBy('created_at', 'DESC')->get();
        $data=['posts'=>$post];
        return view('admin.posts.index', $data);
    }
    public function create()
    {
        return view('admin.posts.create');
    }
    public function edit($id)
    {
        $post=Post::find($id);
        $data = ['post' => $post];
        return view('admin.posts.edit', $data);
    }
    public function update(PostRequest $request, $id)
    {
        $post=Post::find($id);
        $post->update($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function store(PostRequest $request)
    {
        Post::create($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index');
    }
    */
}
