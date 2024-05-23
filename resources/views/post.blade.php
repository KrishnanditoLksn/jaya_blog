<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <!--Get author of Blog -->
    <article class="py-8 max-w-screen-md border-amber-700">
        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">{{$post['title']}}</h5>
                </a>
                <a href="">
                    <h5 class="text-white">{{$post['author']}}</h5>
                    <br>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{Str::limit($post['body'],100)}}</p>
                <!--Back to all blog posts-->
                <a href="/posts">
                    <h5 class="text-white">Back to ALl Blogs</h5>
                    <br>
                </a>
            </div>
        </div>
    </article>
</x-layout>
