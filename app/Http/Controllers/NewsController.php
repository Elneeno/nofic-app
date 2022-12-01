<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image; //Intervention Image

use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = News::all();
        return view('news_list', ['news'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('news_insert');
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

        //print_r($request);
        $request->validate([
            
            'title' => 'required',
            'pictures.*' => 'mimes:jpg,png,jpeg,gif|max:2048'
          ]);
          
          if ($request->hasFile('pictures')) {
 
            foreach($request->file('pictures') as $file){
     
                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();
     
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
                //get file extension
                $extension = $file->getClientOriginalExtension();
     
                //filename to store
                $filenametostore = 'news-'.uniqid().'.'.$extension;

                $names[] = $filenametostore;
     
                #Storage::put('public/project_images/'. $filenametostore, fopen($file, 'r+'));
                #Storage::put('public/project_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));
                Storage::disk('public')->put('news_images/'. $filenametostore, fopen($file, 'r+'));
     
                //Resize image here
                $thumbnailpath = ('news_images/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(800, 600);
                $img->save($thumbnailpath);

                #Storage::disk('public')->delete('uploads/project_images/'.$filenametostore);
            }
            
            $images = implode(",",$names);

            $data = $request->all();
            $data['gallery'] = $images;
            
            $news = News::create($data);
            //return response()->json($news, 201);
            return redirect('news')->with('message', 'Record Created!');
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
        //
        $data = News::find($id);
        $images[] = explode(",", $data->gallery);
    
        return view('news_preview', ['news'=>$data, 'images'=>$images[0]]);
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
}
