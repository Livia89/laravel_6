<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTourRequest;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{

    protected $request;

    public function __construct(Request $request){
        
        $this->request = $request;
        //$this->middleware('auth');
        //$this->middleware('auth')->only(['create', 'store']);
       // $this->middleware('auth')->except(['index', 'show', 'create']);
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // $tours = Tour::All(); 
        $tours=Tour::Paginate(10);
        return view('admin.pages.tours.index', [
            "tours" => $tours 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   App\Http\Requests\StoreUpdateTourRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateTourRequest $request)
    {

        dd('OK');

        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:10000',
            'photo' => 'required|image'
        ]);*/


        if($request->photo->isValid()){
            //$request->file('photo')->store('products/teste')
           //dd($request->photo->store('tours'));
           $nameFile = $request->name . '.' . $request->photo->extension(); 

           dd($request->photo->storeAs('tours', $nameFile));
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
        return "show" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.tours.edit', compact('id'));
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
        dd("Editando o $id do produto ");
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
