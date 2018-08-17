<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\degree_of_hazard;
use App\Product;
use App\ProductPhoto;
use App\Rate;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comment;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
class ProductController extends Controller
{
    protected $rate;

    public function __construct(Rate $rate)
    {
        $this->rate = $rate;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        $categories = Category::all();
        $randoms = Product::where('slug', '!=', $products)->get()->random(1);
        $news = Product::latest()->paginate(6);
        return view('user.index', ['products' => $products, 'randoms' => $randoms, 'news' => $news, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $countries = Country::all();
        $degree_of_hazards = degree_of_hazard::all();

        return view('user.addProduct', ['categories' => $categories, 'countries' => $countries, 'degree_of_hazards' => $degree_of_hazards]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photos' => 'required',
            'title' => 'required',
            'details' => 'required',
            'degree_of_hazard' => 'required',
            'save_conditions' => 'required',
            'danger' => 'required',
            'danger_type' => 'required',
            'buy_place' => 'required',
            'found_date' => 'required',
            'date_born' => 'required',
            'country_id' => 'required',
            'category_id' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);
        if ($request->hasFile('photos') && count('photos') <= 5) {

            $slug = SlugService::createSlug(Product::class, 'slug', $request->title);

            $category = $request->get('category_id');
            $country = $request->get('country_id');
            $date_death_name = $request->get('date_death_name');

            $product = new Product();
            $product->title = $request->title;
            $product->slug = $slug;
            $product->details = $request->details;
            $product->save_conditions = $request->save_conditions;
            $product->danger = $request->danger;
            $product->danger_type = $request->danger_type;
            $product->buy_place = $request->buy_place;
            $product->found_date = $request->found_date;
            $product->date_born = $request->date_born;
            $product->date_death = $request->date_death;
            $product->date_death_name = $date_death_name;
            $product->country_id = $country;
            $product->category_id = $category;
            $product->user_id = Auth::id();
            $product->degree_of_hazard_id = $request->get('degree_of_hazard');
            $product->save();


            foreach ($request->photos as $photo) {

                $filename = $photo->store('photos', 'public');

                ProductPhoto::create([
                    'product_id' => $product->id,

                    'filename' => $filename

                ]);

            }

            if ($product) {
                alert()->success('Product Created', 'Successfully');
                return redirect()->route('product.index');
            }

        } else {

            alert()->error('Oops...', 'Something went wrong!');
            return redirect()->route('add.product');

        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $i = $product->views;
        $product->update([
            'views' => $i = $i + 1,
        ]);
        $comments = Comment::all();
        $rates = Rate::all();
        $count = count($rates);

        if (Auth::check())
        {
            $ratingUser = Rate::where('user_id', '=', Auth::id())->where('product_id', '=', $product->id)->first();

            if ($ratingUser) {
                $ratingUser = 1 * $ratingUser->rates;
            }
            else {
                $ratingUser = 0;
            }
        }
        else {
            $ratingUser = 0;
        }
        $rate5 = DB::table('rates')->where('rates', '=', 5)->where('product_id', '=', $product->id)->count();
        $rate4 = DB::table('rates')->where('rates', '=', 4)->where('product_id', '=', $product->id)->count();
        $rate3 = DB::table('rates')->where('rates', '=', 3)->where('product_id', '=', $product->id)->count();
        $rate2 = DB::table('rates')->where('rates', '=', 2)->where('product_id', '=', $product->id)->count();
        $rate1 = DB::table('rates')->where('rates', '=', 1)->where('product_id', '=', $product->id)->count();

        $summa = Rate::where('product_id', '=', $product->id)->sum('rates');
        $rating = round($summa/$count,1);
        $voteAll = Rate::where('product_id', '=', $product->id)->count('rates');

        return view('user.show', ['product' => $product, 'comments' => $comments, 'rate5' => $rate5, 'rate4'=>$rate4, 'rate3'=>$rate3, 'rate2'=> $rate2, 'rate1'=>$rate1, 'summa'=>$summa, 'count'=>$count, 'rating' => $rating, 'rates' => $rates, 'voteAll' => $voteAll, 'ratingUser' => $ratingUser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function search(Request $request)
    {
        $searchString = $request->input('search');

        $product_column = $request->get('search_category');

        $result = DB::table('products')->where('title', 'LIKE', '%' . $request->input('search') . '%')->get();

        return response()->json($result);
    }

    /*Comments read*/
    public function comments()
    {
        $comments = DB::table('comments')->join('users', 'comments.user_id', '=', 'users.id')->select('comments', 'product_id', 'comments.created_at', 'users.name')->get();

        return response()->json($comments);
    }

    /*End comment read*/

    public function commentCreate(Request $request, Product $product)
    {
        $request->validate([
            'comment' => 'required'
        ]);
        $comment = new Comment();
        $comment->comments = $request->comment;
        $comment->product_id = $product->id;
        $comment->user_id = Auth::id();
        $comment->save();
        return response()->json($comment);

    }

    public function rates(Request $request)
    {
        $good_id = $request->id;
        $user_id = $request->user_id;
        $rating = $request->rating;


        $rates = Rate::where('user_id', $user_id)->where('product_id', $good_id)->first();


        if ($rates) {
            $rates->update(
                [
                    'rates' => $rating,
                ]);
        } else {
            $model = new Rate();
            $model->product_id = $good_id;
            $model->user_id = $user_id;
            $model->rates = $rating;
            $model->save();
        }
        return 'ok';
    }
}
