<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function viewHome()
    {
        // Lay du lieu
        $animals = DB::table('animals')->get();

        // Tra du lieu ve view
        return view('product.home', ['animals' => $animals]);

    }

    // Xu ly viec nhap du lieu vao db
    function create(Request $request)
    {
        $name = $request->get('animalName');
        $url = $request->get('animalUrl');
        $description = $request->get('animalDescription');

        // Them vao db
        DB::table('animals')->insert([
            "name" => $name,
            "url" => $url,
            "description" => $description
        ]);
        // Tao thong bao thanh cong (De sau nhe)

        // Chuyen huong ve home. dua thong bao
        flash()->addSuccess('Thêm thành công');
        return redirect('/home');
    }

    // View nhap tin con vat
    function viewFormCreate()
    {
        return view('product.create');
    }
}
