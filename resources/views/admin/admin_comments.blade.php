<x-layout_pro>
    @include('admin._admin_header')
    <section class="px-6 py-8">
        <table class="border border-black w-full divide-y divide-x divide-black table-fixed rounded-xl">
            <thead>
                <tr class="border border-black">
                    <th>Post</th>
                    <th>User</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($comments_in_html as $comment)
                    
                
                <tr>
                    <td class="border border-black">
                        <a href="/post/{{ $comment->post->id }}">
                        {{ $comment->post->title }}
                    </td>
                    <td class="border border-black">{{ $comment->user->username }}</td>
                    <td class="border border-black">{{ $comment->body }}</td>
                    <td class="border border-black text-center">
                        {{-- <div>
                        
                        <a href="/admin/action/{{ $post->id }}/edit" class="bg-blue-300">Edit</a>
                        </div> --}}
                            <div>
                        <form method="POST" action="/admin/comment/delete/{{ $comment->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500">Delete</button>

                        </form>
                            </div>
                        {{-- <a href="" class="bg-red-500">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
    </section>

</x-layout_pro >