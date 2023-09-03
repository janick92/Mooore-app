<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\stock;

class ProductController extends Controller
{
    public function index()
    {
        $items = DB::table('stock')->get();
        return view('mooore', ['items' => $items]);
    }

    public function edit($id)
    {
        $item = stock::find($id);
        return view('edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = stock::find($id);
        $item->stock = $request->input('stock');
        $item->save();

        return redirect()->route('index');
    }
}
