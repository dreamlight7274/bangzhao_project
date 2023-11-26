<x-layoutc>
    
    <section class="px-6 py-8">
        <table class="border border-black w-full divide-y divide-x divide-black table-fixed rounded-xl">
            <thead>
                <tr class="border border-black">
                    <th>Title</th>
                    <th>User</th>
                    <th>Excerpt</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts_in_html as $post)
                    
                
                <tr>
                    <td class="border border-black">
                        <a href="/post/{{ $post->id }}">
                        {{ $post->title }}
                    </td>
                    <td class="border border-black">{{ $post->user->name }}</td>
                    <td class="border border-black">{{ $post->excerpt }}</td>
                    <td class="border border-black text-center">
                        <div>
                        
                        <a href="/admin/action/{{ $post->id }}/edit" class="bg-blue-300">Edit</a>
                        </div>
                            <div>
                        <form method="POST" action="/admin/delete/{{ $post->id }}">
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

</x-layoutc >