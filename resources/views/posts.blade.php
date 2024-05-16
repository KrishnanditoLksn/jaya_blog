<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <!--Get author of Blog -->
    @foreach($posts as $post)
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
                    <a href="/posts/ {{$post['id']}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white
                   bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600
                   dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                        Read more
                    </a>
                </div>
            </div>
        </article>
    @endforeach
</x-layout>
