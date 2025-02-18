<?php

namespace App\Http\Controllers;

use App\Models\LGA;
use App\Models\Blog;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller {
    
    /**
     * Display dashbnoard demo one of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Dashboard Demo One";
        $description = "Some description for the page";
        $lgas = LGA::all();

        $lga = request()->query('lga');
       switch ($lga) {
        case 'all':
            $blogs = Blog::all();
            break;
        case 'mine':
            $blogs = Blog::where('lga_id',auth()->user()->lga_id)->get();
            break;
        case null:
            $blogs = Blog::all();
            break;
        default:
            $blogs = Blog::where('lga_id',$lga)->get();
            break;
       }
        return view('pages.index',compact('title','description','blogs','lgas'));
    }

    /**
     * Display dashbnoard demo two of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function show(Blog $blog){
        $title = $blog->title;
        $description = $blog->description;
        return view('pages.blog-details',compact('title','description','blog'));
    }

    /**
     * Display dashbnoard demo three of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function addComment(Blog $blog){
        $request = request()->validate([
            'comment' => 'required'
        ]);
        // create a comment
        $blog->comments()->create([
            'comment' => $request['comment'],
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success','Comment added successfully');
    }

   public function create(){
        $title = "Create Blog";
        $description = "Some description for the page";
        $lgas = LGA::all();
        return view('pages.create-blog',compact('title','description','lgas'));
   }

   public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'content' => 'required',
            'lga_id' => 'required|exists:lgas,id',
        ]);
        // save image to local storage
        $image = $request->file('image');
        $image_name = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('images'),$image_name);
        $url = asset('images/'.$image_name);
        // create a comment
        $blog = Blog::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $url,
            'content' => $request['content'],
            'lga_id' => $request['lga_id'],
            'author_id' => auth()->user()->id,
            'status' => 'published'
        ]);

        return redirect()->route('blog.show',$blog->id)->with('success','Blog created successfully');
   }

   public function deleteBlog(Blog $blog){
        if (auth()->user()->is_admin == false) {
            abort(403);
        }
        $blog->delete();
        return redirect()->route('home')->with('success','Blog deleted successfully');
   }

   public function reports(){
    $title = "View Reports";
    $description = "Some description for the page";
    $reports = Report::with('blog')->get();
    return view('pages.create-blog',compact('title','description','reports'));
}
}