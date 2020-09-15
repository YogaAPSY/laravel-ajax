<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Contact::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    return view('contacts.action', ['row' => $row])->render();
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('home');
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


        // $contact = new Contact();
        // $contact->name = $request->input('name');
        // $contact->gender = $request->input('gender');
        // $contact->phone = $request->input('phone');

        // $contact->save();

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:2',
                'city' => 'required|min:2',
                'address' => 'required|min:3',
                'phone_office' => 'required|integer|min:11|unique:contacts,phone_office|unique:contacts,phone_mobile',
                'phone_mobile' => 'required|integer|min:11|unique:contacts,phone_mobile|unique:contacts,phone_office',
                'pic' => 'required|min:2',
                'section' => 'required|min:2',
                'email' => 'required|email|unique:users,email|unique:contacts,email',
                'retail' => 'required',
                'active' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data gagal diinput',
                    'data' => $validator->getMessageBag()->toArray()
                ]
            );
        } else {

            $contact = Contact::create($request->all());

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data berhasil diinput',
                    'data' => $contact
                ]
            );
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

        $validator = Validator::make(
            $request->all(),
            [
                'editname' => 'required|min:2',
                'editcity' => 'required|min:2',
                'editaddress' => 'required|min:3',
                'editphone_office' => 'required|integer|min:11|unique:contacts,phone_office,' . $id,
                'editphone_mobile' => 'required|integer|min:11|unique:contacts,phone_mobile,' . $id,
                'editpic' => 'required|min:2',
                'editsection' => 'required:min:2',
                'editemail' => 'required|email|unique:contacts,email,' . $id,
                'editretail' => 'required',
                'editactive' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data gagal diedit',
                    'data' => $validator->getMessageBag()->toArray()
                ]
            );
        } else {

            $contact = Contact::find($id);
            $contact->name = $request->input('editname');
            $contact->city = $request->input('editcity');
            $contact->address = $request->input('editaddress');
            $contact->phone_office = $request->input('editphone_office');
            $contact->phone_mobile = $request->input('editphone_mobile');
            $contact->pic = $request->input('editpic');
            $contact->section = $request->input('editsection');
            $contact->email = $request->input('editemail');
            $contact->retail = $request->input('editretail');
            $contact->active = $request->input('editactive');
            $contact->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data inserted successfully',
                    'data' => $contact
                ]
            );
        }

        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = Contact::find($id);
        $companies->delete();

        return response()->json(
            [
                'success' => true,
                'message' => 'Data deleted successfully',
                // 'data' => $contact
            ]
        );
    }
}
