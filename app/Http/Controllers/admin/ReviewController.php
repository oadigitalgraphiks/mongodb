<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Review::orderBy('created_at', 'desc');
        if ($request->has('search') && $request->search  != ''){
            $search = $request->search;
            $data = $data->where('message', 'like', '%'.$search.'%');
        }

        $data = $data->with(['product','user'])->paginate(10);
        return view('admin.reviews.index', compact('data'));

    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
        $data = Review::findOrFail($id);
        return view('admin.reviews.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              

        $data = Review::findOrFail($id);
        $data->message = $request->message;
        $data->save();

        return back()->with('success', translate('Record Updated'));
    }

 
    /*
     * Remove the specified resource from storage.
     */
    public function bulk(Request $request)
    {
        if($request->has('idz') && $request->has('action') && $request->has('value')){
          
            switch ($request->action) {
               
                case 'delete':

                    $idz = explode(',',$request->idz);    
                    Review::whereIn('_id',$idz)->delete();
                    return response()->json(['message' => translate('Record Deleted')],200);

                    break;

                case 'status':

                    $idz = explode(',',$request->idz);    
                    $reviews = Review::whereIn('_id',$idz)->get();
                    foreach ($reviews as $item) {
                        
                        $item->status = $request->value;
                        $item->save();
                        // dd($item->toArray());
                    }                    
                    return response()->json(['message' => translate('Record Updated')],200);

                default:
                    # code...
                    break;
            }

        }

        return response()->json(['message' => translate('Error Found')],400);

      }

}