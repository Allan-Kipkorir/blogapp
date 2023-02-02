<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //home
    public function home(){
        $blogs=Blogs::all();
        return view('home', ['blogs'=>$blogs] );
    }

    //viewing a single blog
    public function show($id){
        $blog=Blogs::find($id);
        if(!$blog){
            return response()->json(['message'=>'Blog not Found'], 404);
        }
        return view('blog', ['blog'=>$blog]);

    }

    //storing blogs
    public function store(Request $request){
        //validate incoming data
        $formFields = $request->validate([
            'title'=>'required|max:100',
            'description'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg'

        ]);
        //storing an image
        if ($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('image', 'public');
        }
        //storing the data into the database
        Blogs::create($formFields);

        //returning a success response
        // return response()->json(['message'=>'Blog Created Successfully.'], 201);
        return redirect('/blog');
    }
    //show edit page of blog
    public function edit($id){
        $blog=Blogs::find($id);
        return view('edit', ['blog'=>$blog]);
    }
    //update store to database
    public function update(Request $request, Blogs $blog)
    {
        $validatedData = $request->validate([
            'title',
            'description',
        ]);

        $requestData = $request->except(['_token', '_method']);
        $formFields = array_merge($validatedData, $requestData, [
            'image' => $blog->image
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $blog->image);
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $blog->update($formFields);
        // dd($requestData);

        return redirect('/blog');
    }

    //Delete function
    public function delete(Blogs $blog){
        $blog->delete();
        return redirect('/blog');

    }



}




// $data =[];
// $data['twitter'] = $request->get('twitter');

// $customuser = Customuser::find($request->customeruserID);

// $customeruser->update($data);
