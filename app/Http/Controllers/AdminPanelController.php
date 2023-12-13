<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;
use Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

use App\Models\User;

class AdminPanelController extends Controller
{
    public function addPost( Request $request)
    {
        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
        //retriving values from user table


        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;

        $post->post_status = 'active'; //by default we are keeping it acitve, everytime admin uploads an image

        //adding values form user table to post table
        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $image = $request->image;

        if($image) //if there exists any image only then uplaod it 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('UploadedImages', $imagename);
    
            $post->image = $imagename;
        }


        if($post->save()){

            return redirect()->back()->with('success', 'Post successfully added.');
        }

    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post successfully deleted.');
    }

    public function myPostDel($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post successfully deleted.');
    }
    
    public function postDetails($id)
    {
        $post = Post::find($id);
    
        // Retrieve comments related to the specific post
        $data = $post->comments()->select('user_name', 'comment')->limit(3)->get();
    
        $otherPosts = Post::inRandomOrder()->limit(3)->get();
    
        return view('blog.post_details', compact('post', 'otherPosts', 'data'));
    }
    

    public function userPost(){
        return view('blog.user_post');
    }

    public function myPosts(){
        $user = Auth::user();
    
        $userid = $user->id;
        $data = Post::where('post_status', 'active')
        ->where('user_id', $userid)
        ->get();

        return view('blog.my_posts', compact('data'));
    }

    public function userCreatePost(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg', // Max size in kilobytes
        ]);
        
        
        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
        //retriving values from user table
        
        // dd($request->all());
        // die;

        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $post->post_status = 'pending';

        $image = $request->image;

        if($image) //if there exists any image only then uplaod it 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('UploadedImages', $imagename);
    
            $post->image = $imagename;
        }

        if($post->save()){

            FacadesAlert::success('Congrats','You have added the data successfully');

            return redirect()->back()->with('success', 'Post successfully added.');
        }
    }

    public function acceptPost($id){
        $data = Post::find($id);
        $data->post_status = 'active';
        $data->save();
        return redirect()->back()->with('success', 'Post is Accepted now');
    }

    public function rejectPost($id){
        $data = Post::find($id);
        $data->post_status = 'rejected';
        $data->save();
        return redirect()->back()->with('error', 'Post is Rejected now.');
    }

   // In your controller
   public function getFullDescription($id)
{
    $post = Post::find($id);

    if ($post) {
        return response()->json([
            'description' => $post->description,
            'button_text' => 'Read Less',
        ]);
    } else {
        return response()->json([
            'description' => 'Post not found.',
            'button_text' => 'Learn More',
        ]);
    }
}




public function submitComment(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'comment' => 'required',
    ]);

    // Assuming you have the authenticated user
    $user = auth()->user();

    // Fetch the username using the user_id
    $username = User::where('id', $user->id)->value('name');

    // Create a new comment
    $comment = new Comments();
    $comment->post_id = $id; // Make sure you have the post_id in the form
    $comment->user_id = $user->id;
    $comment->comment_status = 'pending';
    $comment->comment = $request->input('comment');
    $comment->user_name = $username; // Store the fetched username
    $comment->save();

    // You can add any other logic or redirection after storing the comment

    return redirect()->back()->with('success', 'Comment added successfully!');
}


}
