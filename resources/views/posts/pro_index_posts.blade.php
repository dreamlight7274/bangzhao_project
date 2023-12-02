<x-layout_pro>

    <main class="mx-auto max-w-6xl">
        <x-pro_posts_grid :posts="$posts_in_html"/>


        {{ $posts_in_html->links() }}
    </main>
</x-layout_pro>