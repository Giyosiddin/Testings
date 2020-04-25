<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function parseFile(Request $request)
    {   

         // $path = $request->file('csv_file')->getRealPath();
         // $data = array_map('str_getcsv', file($path));
         // $csv_data = array_slice($data,2,1);
         // $json_data = json_encode($csv_data);
         // dump($data);

         // dump($csv_data);


         // $csv = array_map('str_getcsv', file($path));

// $locations ="array (<br>";
// foreach($csv as $location => $data)
// {
//     dd($data);
//   $locations .=" array (<br>";
//   $locations .='  "id" => "' . $data[1] . '",<br>';
//   $locations .='  "name" => "' . $data[2] . '",<br>';
//   $locations .='  "category" => "' . $data[3] . '",<br>';
//   $locations .='  "price" => "' . $data[4] . '",<br>';
//   $locations .=" ),<br>";
// }
// $locations .=");";

// // dd($locations);

        $input = [
            'products' => [
                'product_'.$request->id =>[
                    'id' => $request->id,
                    'name'=>$request->name,
                    'category'=>$request->category,
                    'price'=>$request->price,
                    ]
                
            ],
        ];

        $value = Yaml::dump($input);
        // $parse = Yaml::parseFile('parse.yml');
        $parse = Yaml::parse(file_put_contents(public_path('/parse'.$request->id.'.yml'),$value));
        // $par = file_put_contents('/parse.yml', $parse);

       return "Success";
    }

    public function getFile(Request $request, $id)
    {
        $put_parce = public_path('parse'.$id.'.yml');


        return $put_parce;
    }
}
