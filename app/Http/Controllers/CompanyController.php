<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;


class CompanyController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	  public function index(Request $request)
	  {
	   		$companies =  Company::orderBy('id','DESC')->paginate(5);

	   		//dd($companies);
	   		return view('company.index',compact('companies'))->with('i', ($request->input('page', 1) - 1) * 5);;
	   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       return view('company.create');
     }

     public function store(Request $request)
    {

    	//dd($request->all(['name','details']));
         $this->validate($request, [
             'name' => 'required',
            'details' => 'required',
        ]);

         
         Company::create($request->all('name','details'));
         return redirect()->route('company.index')
                       ->with('success','Company created successfully');
    } 
    public function edit(Company $company,$id)
    {
    	//echo '<pre>';
    	//print_r( $company);
    	$company = Company::findOrFail($id);
    	//print_r($company);
    	        return view('company.edit',compact('company'));

    }

    public function update(Request $request,$id)
    {
    	//dd($id);
    	  $this->validate($request, [
             'name' => 'required',
            'details' => 'required',
        ]);
    	$company = Company::findOrFail($id);
   		$company->update($request->all('name','details'));
   		 return redirect()->route('company.index')
                        ->with('success','Product updated successfully');
;
    }

    public function delete($id)
    {
    	
    	$company = Company::findOrFail($id);
   		$company->delete();
   		 return redirect()->route('company.index')
                        ->with('success','Product deleted successfully');
    }

}
