                    @props(['comment'])

                    {{-- col-start-3 --}}
                    <article class="flex bg-blue-100 px-2 py-2 border border-black rounded-xl space-x-3">
                        <div>
                            <img src="https://i.pravatar.cc/50?u={{ $comment->user_id }}" alt="pravatar" width="50" height="50">
                        </div>

                        <div>
                            <header>
                            <h3 class="font-bold text-lg">{{ $comment->user->username }}</h3>
                            <p class="text-xs">Posted <time>{{ $comment->created_at->diffForHumans() }}</time></p>
                            </header>

                            <p class="mt-4">

                            {{ $comment->body }}


                            </p>
                        </div>
                        

                    </article>