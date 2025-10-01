<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunityCommentRequest;
use App\Http\Requests\CommunityCreateRequest;
use App\Models\CommunityCategory;
use App\Models\CommunityPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selectedCategory = $request->query('category') ?? null;

        $query = CommunityPost::orderBy('created_at', 'DESC');

        if ($selectedCategory) {
            $query->where('category_id', $selectedCategory);
        }

        $posts = $query->simplePaginate(5)->appends(['category' => $selectedCategory]);

        $categories = CommunityCategory::get();

        return view('community.index', [
            'posts' => $posts,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CommunityCategory::pluck('name', 'id')->toArray();


        return view('community.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommunityCreateRequest $request)
    {
        $data = $request->validated();

        $image = $data['image'];
        // unset($data['image']);
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($data['title']);

        $imagePath = $image->store('posts', 'public');
        $data['image'] = $imagePath;

        CommunityPost::create($data);

        return redirect()->route('community.index')->with('toast', [
            'title' => 'Post Created Successfully!',
            'type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = CommunityPost::with(['user', 'category', 'likes'])
            ->findOrFail($id);

        return view('community.show', ['post' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function followUnfollow(User $user)
    {
        $authUser = auth()->user();

        if ($user->followers()->where('follower_id', $authUser->id)->exists()) {
            $user->followers()->detach($authUser->id);
        } else {
            $user->followers()->attach($authUser->id, [
                'id' => \Str::uuid()->toString(),
            ]);
        }

        return response()->json([
            'followersCount' => $user->followers()->count(),
        ]);
    }

    public function like(CommunityPost $post)
    {
        $hasLiked = auth()->user()->hasLiked($post);

        if ($hasLiked) {
            $post->likes()->where('user_id', auth()->id())->delete();
        } else {
            $post->likes()->create([
                'user_id' => auth()->id()
            ]);
        }

        return response()->json([
            'likesCount' => $post->likes()->count(),
        ]);
    }

    public function comment(CommunityCommentRequest $request, CommunityPost $post)
    {
        try {
            $data = $request->validated();

            $comment = $post->comments()->create([
                'body' => $data['body'],
                'user_id' => auth()->id(),
            ]);

            // If request is AJAX, return JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Comment added successfully',
                    'comment' => [
                        'id' => $comment->id,
                        'body' => $comment->body,
                        'user' => $comment->user->only('id', 'name'),
                        'created_at' => $comment->created_at->diffForHumans(),
                    ],
                    'commentsCount' => $post->comments()->count(),
                ], 201);
            }

            // Normal form request
            return redirect()->back()->with('toast', [
                'title' => 'Comment added!',
                'type' => 'success',
            ]);

        } catch (\Throwable $e) {
            // Log error for debugging
            \Log::error('Comment failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Something went wrong while adding the comment.',
                    'error' => $e->getMessage(),
                ], 500);
            }

            return redirect()->back()->with('toast', [
                'title' => 'Failed to add comment',
                'type' => 'error',
                'description' => [$e->getMessage()],
            ]);
        }
    }

}
