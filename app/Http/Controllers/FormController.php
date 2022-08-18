<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FormController extends Controller
{
    public function index()
    {
        $data['form']=Form::all();
        return view('index',$data);
    }

    public function create()
    {
        $data = Form::all();
        foreach($data as $user){
            $new_data[] = array(
                'id' => $user->id,
                'name' => $user->name,
                'email_id' =>$user->email_id,
                'contact' => $user->contact,
                'address' => $user->address,
                'city' => $user->city,
                'state' => $user->state,
                'image' => env('WS_URL').'/image/'.$user->image,
            );
        }
        return response()->json([
            'return' => $new_data,
        ],200);
        return view('insert_form');
    }

    public function store(Request $request)
    {
        // dd($request);die;
        // $data = $request->validate([
        //     'name'=>'required',
        //     'address'=>'required',
        //     'city'=>'required',
        //     'state'=>'required',
        //     'contact'=>'required',
        //     'image'=>'required',
        //     'email_id'=>'required'
        // ]);
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'contact'=>'required',
            'image'=>'required',
            'email_id'=>'required'
        ],[
            'name.required' => ':attribute',
            'contact.required' => ':attribute',
            'email_id.required' => ':attribute',
            'address.required' => ':attribute',
            'state.required' => ':attribute',
            'city.required' => ':attribute',
            'image.required' => ':attribute',
        ]);
        if($validator->fails()){
            $error = json_decode($validator->errors());
            $fiedls = [];
            foreach($errors as $error){
                $fiedls = [];
            };
                $errorFiedls = implode(",", $fiedls);
                $errorMessage = [
                    'error' => 'This fields are required :'.$errorFiedls,
                ];
                return response()->json($errorMassage,422);
        }
            try{
                if($request->hasFile('image')){
                    $file= $request->file('image');
                    $coverName = rand().'_'.time().'_'.$file->getClientOriginalName();
                    $file->move(\public_path("image/"),$coverName);
    
                $data = new Form();
                $data->name = $request->name;
                $data->address = $request->address;
                $data->city = $request->city;
                $data->state = $request->state;
                $data->contact = $request->contact;
                $data->email_id = $request->email_id;
                $data->image=$coverName;
            }
            $result = $data->save();
            if($result){
                return response()->json([
                    'result'=>$data, 
                    'message'=>'Data is save'
                ],200);
            }
            else{
                return response()->json([
                    'result' =>$data,
                    'message'=>'Data is not save'
                ],201);
            }
            }catch(\Throwable $th){
                return response()->json([
                    'result'=>$th,
                    'massage'=>'date is not save'
                ],201);
            }
        return redirect()->route('index')->with('success','Wow! data is inserted successfulley');
        // return response()->json($errorMassage,422);
    }

    public function singleView($form)
    {
        $data['form']=Form::find($form);
        return view('single',$data);
    }


}
