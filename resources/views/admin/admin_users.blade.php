<x-layout_pro>
    @include('admin._admin_header')
    <section class="px-6 py-8">
        <table class="border border-black w-full divide-y divide-x divide-black table-fixed rounded-xl">
            <thead>
                <tr class="border border-black">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users_in_html as $user)
                    
                
                <tr>
                    <td class="border border-black">{{ $user->id }}</td>
                    <td class="border border-black">{{ $user->username }}</td>
                    <td class="border border-black">{{ $user->level }}</td>
                    <td class="border border-black text-center">
                        <div>
                        
                        <a href="/admin/user/{{ $user->id }}/edit" class="bg-blue-300">Edit</a>
                        </div>
                            <div>
                        <form method="POST" action="/admin/user/delete/{{ $user->id }}">
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