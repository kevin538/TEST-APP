<?php

namespace App\Http\Controllers;
use App\Policies\StockPolicy;
use App\Models\Stock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Http\Requests\StockRequest;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class StockController extends Controller
{
    public function search()
    {
        $search = $_GET['search'];
        $articles = Stock::where('nom_article', 'LIKE', '%' . $search . '%')->paginate(2);
        if ($articles != "NULL") {
            $section = "Search";
            return view('dashboard.search', compact('section', 'articles'));
        }else{
        $section = "Search";
        return redirect()->back()->with('message', 'Pas en stock');
        }
    }
    public function index()
    {
        $articles = DB::table('stocks')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        $section = "Stock";
        return view('dashboard.stock.index', compact('section','articles'));
    }
    public function add()
    {
        $section = "Add";
        return view('dashboard.stock.store', compact('section'));
    }
    public function store(StockRequest $request)
    {
        $projet = new Stock();
        $projet->nom_article = ucfirst($request->nomarticle);
        $projet->quantite = $request->quantité;
        $projet->prix_vente = $request->pri_ve_min;
        $projet->save();
        return redirect()->route('stock');
    }
    public function edit(Stock $id)
    {
        $users = DB::table('stocks')->get();
        $section = "Edit Stock";

        return view('dashboard.stock.edit', ['id' => $id], compact('users', 'section'));
    }
    public function update(Request $request, Stock $Stock, $id)
    {
        $this->validate($request, [
            'quantité' => ['required'],
            'pri_ve_min' => ['required'],
            'nomarticle' => 'required|unique:stocks,nom_article,' . $id
        ]);
        $projet = Stock::findOrFail($id);
        $projet->nom_article = ucfirst($request->nomarticle);
        $projet->quantite = $request->quantité;
        $projet->prix_vente = $request->pri_ve_min;
        $projet->save();
        return redirect()->route('stock');
    }
    public function destroy(Stock $id, User $user)
    {
        // Gate::authorize('edit', $id);
        /* $this->authorize('delete', User::class, Stock::class); */
        $id->delete();
        return redirect()->back();
    }
}
