<!--Send href to nav link component-->
<a {{$attributes}}
   class="{{request()->is('/')? 'bg-gray-700' :'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium'}}"
   aria-current="page">{{$slot}}
</a>
