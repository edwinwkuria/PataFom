 <?php

namespace App\Http\Controllers;

use App\userCategories;
use App\categories;
use App\User;
use Illuminate\Http\Request;

class UserdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('auth.registerdetails');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $id = auth()->user()->id;
        $categories =categories::all();
        $usercategories = User::with('categories')->get();
        $user = User::find($id);
        $usercategories =$usercategories ->where('id',$id)->pluck('categories')->first();
        $usercategories= $usercategories->pluck('categoryid')->toArray();
        //$usercategories =$usercategories[0]->categories->pluck('categoryid');
        //return $usercategories;
        return view ('auth.showuserprofile', compact('user','categories','usercategories',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $id = auth()->user()->id;
        $categories =categories::all();
        $usercategories = User::with('categories')->get();
        $user = User::find($id);
        $usercategories =$usercategories ->where('id',$id)->pluck('categories')->first();
        $usercategories= $usercategories->pluck('categoryid')->toArray();
        //return $usercategories;
        return view ('auth.registerdetails', compact('user','categories','usercategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
    	//dd('Hello');
    	$id = auth()->user()->id;
        /*$request = $request->category;
        $request =implode(", ",$request);
        $request =explode(", ",$request);
    	return $request;
    	*/
        $validatedata = $request->validate([
            'gender'=>  ' max:7',
            'occupation' => 'max:255',
            'dateofbirth' => 'max:255',
            'location' => 'max:255',
            'School' => 'max:255',

        ]);
        $deletecategories =userCategories::where('user_id', $id);
        $deletecategories =$deletecategories->delete();
        foreach( $request -> category as $category)
            //return($category);
        $updatecategory = userCategories::create([
            'user_id' => $id, 'category_id'=> $category ]);
        $updateuser = User::find($id);
        $updatenow = $updateuser->update($request->all());
		
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $id = auth()->user()->id;
        $deleteuser =User::find($id);
        $deletenow = $deleteuser->delete();

        return redirect('/');
    }
}
