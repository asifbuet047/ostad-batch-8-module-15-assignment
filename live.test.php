Task 1:

Route::get('/user', function (Request $request) {
    $name = $request->query('name');
    $email = $request->query('email');

    Session::put('last_action', ['name' => $name, 'email' => $email]);

    Log::info('user data stored', ['name' => $name, 'email' => $email]);

    return response()->json(['status' => 'success', 'message' => 'User data stored in session and logged.', 'code' => 201]);
});


Task 2:

// Users Table
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});

// Categories Table
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});

// Posts Table
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('content');
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
    $table->timestamps();
});

// Comments Table
Schema::create('comments', function (Blueprint $table) {
    $table->id();
    $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
    $table->string('name');
    $table->text('comment');
    $table->timestamps();
});

Task 3:

@extends('layouts.app')

@section('content')

    {{-- Show session value last_action --}}
    @if(session('last_action'))
        <div class="message">
            Last Action: name: <span>{{session('last_action')['name']</span>. email: <span>{{session('last_action')['email']</span>
        </div>
    @endif

    {{-- Show posts in table using foreach --}}
    @if($posts->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        {{-- Show message if no posts --}}
        <p>No Posts Found</p>
    @endif

@endsection
