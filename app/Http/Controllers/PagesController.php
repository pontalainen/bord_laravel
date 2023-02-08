<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageFormRequest;
use App\Models\Page;
use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only([
            'index',
            'air',
            'fruit',
            'create',
            'edit',
            'update',
            'destroy',
            'cards',
            'update_cards'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->is_admin === 'false') {
            return view('bord.air', [
                'page' => Page::where('name', 'Start')->first(),
                'pages' => Page::all()
            ]);
        }

        return view('bord.index', [
            'pages' => Page::orderBy('updated_at', 'desc')
        ]);
    }

    /**
     * air the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('bord.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageFormRequest $request)
    {
        $request->validated();

        $pageData = [
            'user_id' => $request->user_id,
            'group_id' => $request->user_id,
            'name' => $request->name,
            'content' => $request->checkbox === "on" ? Str::markdown($request->content) : $request->content,
            'image' => $request->image !== null ? $this->storeImage($request) : null
        ];

        Page::create($pageData);

        return redirect(route('bord.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function air($id)
    {
        return view('bord.air', [
            'page' => Page::findOrFail($id),
            'pages' => Page::all()
        ]);
    }

    public function fruit()
    {
        return view('bord.fruit', [
            'fruits' => Fruit::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bord.edit', [
            'page' => Page::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageFormRequest $request, $id)
    {
        $request->validated();

        // Needed to delete the old page and create a new one, since the storing of the image
        // went nuts with the update method

        Page::where('id', $id)->delete();

        $pageData = [
            'user_id' => $request->user_id,
            'group_id' => $request->user_id,
            'name' => $request->name,
            'content' => $request->checkbox === "on" ? Str::markdown($request->content) : $request->content,
            'image' => $request->image !== null ? $this->storeImage($request) : null,
            'primary_card' => $request->primary_card,
            'secondary_card' => $request->secondary_card
        ];

        Page::create($pageData);

        return redirect(route('bord.index'));
        // ___________________________________

        $request->validated();

        Page::where('id', $id)->update($request->except(
            [
                '_token', '_method'
            ]
        ));

        return redirect(route('bord.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);

        return redirect(route('bord.index'))
            ->with('message', 'Page ' . $id . ' has been deleted');
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        return $newImageName;
    }

    // Functions for the "cards"-page
    public function cards_air()
    {
        return view('bord.cards_air', [
            'pages' => Page::orderBy('updated_at', 'desc')
        ]);
    }

    public function cards_fruit()
    {
        return view('bord.cards_fruit', [
            'fruits' => Fruit::all()
        ]);
    }

    public function update_air(Request $request, $id)
    {
        DB::table('pages')->where('id', $id)->update([
            'primary_card' => $request->primary_card,
            'secondary_card' => $request->secondary_card
        ]);

        return redirect(route('bord.cards_air'))
            ->with('message', 'Cards for page' . " \"" . $request->name . "\" " . 'has been updated');
    }

    public function update_fruit(Request $request, $id)
    {
        DB::table('fruits')->where('id', $id)->update([
            'primary_card' => $request->primary_card,
            'secondary_card' => $request->secondary_card
        ]);

        return redirect(route('bord.cards_fruit'))
            ->with('message', 'Cards for page' . " \"" . $request->name . "\" " . 'has been updated');
    }
}
