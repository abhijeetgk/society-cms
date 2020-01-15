<?php


namespace App\Http\Controllers;

use App\Http\Requests\AddSocietyRequestValidate;
use App\Society;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SocietyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $society_list = \App\Society::paginate(10);
        return view('society.list', ['society_list' => $society_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AddSocietyRequestValidate $request)
    {
        if ($request->isMethod('post')) {
            $data = [];
            $data = Input::except('_token');
            $validated = $request->validated();
            \App\Society::updateOrCreate(
                ['name' => $data['name']],
                [
                    'name' => $data['name'],
                    'address' => $data['address'],
                ]
            );
            return redirect()->route('societyIndex')->with('status', 'Society Added Successfully');
        }
        return view('society.create');
    }
    public function insert()
    {
        return view('society.create',['society'=>'']);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function show(Society $society)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$soc_id)
    {
        $society = \App\Society::findOrFail($soc_id);
        return view('society.create',['society'=>$society]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Society $society)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function destroy(Society $society)
    {
        //
    }

    /**
     * Select and store society in session
     * required for all other operations
     */
    public function select(Request $request,$soc_id){
        $society = \App\Society::findOrFail($soc_id);
        $request->session()->put('society_id', $soc_id);
        $request->session()->put('society_name', $society->name);
        return redirect()->route('societyIndex');
    }
}
