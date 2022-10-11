<?php

namespace App\Http\Controllers;

use App\Models\Bulletin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BulletinController extends Controller
{
    //

    public function index() {
        //
        
        $data = Bulletin::all();
        return view("bulletin", ["data"=>$data]);
    }

    public function create() {
        //
        return view("insert_bulletin");
    }

    public function store(Request $request) {
        //

        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'document' => 'required|mimes:doc,xlx,xls,docx,zip,pdf',
        ]);

        if ($request->hasFile('document')) {

            $file = $request->file('document');
            //get filename with extension
            $filenamewithextension = $file->getClientOriginalName();
     
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
 
            //get file extension
            $extension = $file->getClientOriginalExtension();
 
            //filename to store
            $filenametostore = 'bulletin-'.uniqid().'.'.$extension;

           // $names = $filenametostore;
 
           Storage::disk('public')->put('bulletins/'. $filenametostore, fopen($file, 'r+'));

        }

        $data = $request->all();
        $data['pdf'] =  $filenametostore;
        //print_r($data);
        $doc = Bulletin::create($data);
       
        return redirect('bulletin')->with('message', 'Bulletin Uploaded!');
 
    }

    public function update() {
        //

    }

    public function destroy() {
        //

    }
}
