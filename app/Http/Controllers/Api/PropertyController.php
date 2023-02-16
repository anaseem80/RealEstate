<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catogery;
use App\Models\enquiry;
use App\Models\Property;
use App\Models\Report;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query to retrieve the most countries where properties are established
        $mostCountries = DB::table('properties')
            ->select(Property::raw('count(*) as count, country'))
            ->groupBy('country')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();

        return response()->json($mostCountries);
    }



    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $properties = Property::where('name', 'LIKE', '%'.$searchTerm.'%')
                            ->orWhere('country', 'LIKE', '%'.$searchTerm.'%')
                            ->paginate(10);
    
        return response()->json([ 
            'status_code' => 200,
            'message' => 'Success',
            'properties' => $properties->where('status',1), 
           
    ]);
    }




    public function filter(Request $request)
     {
         $query = Property::query();
 
         // Apply filter by name
         if ($request->has('name')) {
             $query->where('name', 'like', '%' . $request->input('name') . '%');
         }
 
         // Apply filter by country
         if ($request->has('country')) {
             $query->where('country', $request->input('country'));
         }
 
         // Apply filter by status
         if ($request->has('status')) {
             $query->where('status', $request->input('status'));
         }
 
         // Apply filter by category
         if ($request->has('category_id')) {
             $query->where('category_id', $request->input('category_id'));
         }
 
         // Apply filter by rental term
         if ($request->has('rental_term')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('rental_term', $request->input('rental_term'));
             });
         }
 
         // Apply filter by building type
         if ($request->has('building_type')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('building_type', $request->input('building_type'));
             });
         }
 
         // Apply filter by property direction
         if ($request->has('property_direction')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('property_direction', $request->input('property_direction'));
             });
         }
 
         // Apply filter by number of rooms
         if ($request->has('numbeer_room')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('numbeer_room', $request->input('numbeer_room'));
             });
         }
 
         // Apply filter by number of toilets
         if ($request->has('numbeer_room')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('numbeer_room', $request->input('numbeer_room'));
             });
         }
     // Apply filter by price range
        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereHas('property_details', function ($q) use ($request) {
                $q->whereBetween('price', [$request->input('price_min'), $request->input('price_max')]);
            });
        }
            $properties = $query->where('status',1)->get();
    
            return response()->json([ 
                'status_code' => 200,
                'message' => 'Success',
                'properties' => $properties->where('status',1), 
               
        ]);
        }
    
 
        public function settinges()
        {
            $settinge= Setting::first();
            return response()->json($settinge);
        }

        
        public function addreport(Request $request)
        {
            $report = new Report(); 
            $report->username = $request->username; 
            $report->userphone = $request->userphone;
            $report->useremail = $request->useremail;
            $report->description = $request->description;
            $report->property_id = $request->property_id;
            $report->save();




            return response()->json(['message' => 'Views updated successfully']);
        }
        public function addenqueris(Request $request)
        {
            $enquiry = new Enquiry(); 
            $enquiry->username = $request->username; 
            $enquiry->userphone = $request->userphone;
            $enquiry->useremail = $request->useremail;
            $enquiry->description = $request->description;
            $enquiry->property_id = $request->property_id;
            $enquiry->save();




            return response()->json(['message' => 'Views updated successfully']);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catogerys= Catogery::all();
        return response()->json([
            'status_code' => 200,
            'message' => 'Success',
            'catogerys'=>  $catogerys
        
        ]);
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
    public function getMostViewedProperties() {
        $properties = Property::orderBy('views', 'desc')->take(10)->get();

        return response()->json( [            
            'status_code' => 200,
            'message' => 'Success',
            'properties' => $properties->where('status',1)],200,[],200);
       
    
    }

    public function recommendhotel() {
        $properties = Property::where('recommended',1)->get();

        return response()->json([            
        'status_code' => 200,
        'message' => 'Success',
        'properties' => $properties->where('status',1)], 200);
    
    }



    public function updateViews($id)
    {

        
        $property = Property::find($id);
        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }
    
        $property->views += 1;
        $property->save();
    
        return response()->json(['message' => 'تم تحديث المشاهده بنجاح']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $newProperties = Property::orderBy('created_at', 'desc')->where('status',1)->limit(10)->get();
        return response()->json( [          
        'status_code' => 200,
        'message' => 'Success',
        'property' => $newProperties,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdetalis($id)
    {
      

        $property = Property::with('property_details', 'images', 'facilities', 'user','catogery')->find($id);

        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }
    
        return response()->json(
        [
      
            'status_code' => 200,
            'message' => 'Success',
            'property' => $property,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     
    }
}
