@props(['post' => $post])

<div class="mb-5">
                        <a href="{{route('users.posts', $post->user)}}" class="p-text">
                        {{$post->user->username}}</a><span class="p-text1">
                        {{$post->created_at->diffForHumans()}}</span>

                        <p class="mb-2">{{$post->body}}</p>

                            @can('delete', $post)
                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="text-blue-500">Delete</button>
                                </form>
                            @endcan

                            

                        <div class="flex items-center">
                            @auth
                                @if (!$post->likedBy(auth()->user()))
                                    <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-1">
                                        @csrf
                                        <button type="submit" class="text-blue-500">Like</button>
                                    </form>
                                @else
                                    <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-500">Unlike</button>
                                    </form>
                                @endif
                                   
                            @endauth

                            <span class="pb-4">{{ $post->likes->count() }} {{Str::plural('like', $post->likes->count())}}</span>


                        </div>

 </div>