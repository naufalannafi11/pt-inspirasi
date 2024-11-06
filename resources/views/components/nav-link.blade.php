@props ([
    'active' => false
])

<a {{$attributes}} 
class="{{ $active ? ' text-green-500 underline underline-offset-4' : 'text-black  hover:text-green-500' }}
    rounded-md px-3 py-2 text-sm  font-bold" aria-current="{{$active ? 'page' : false}}">
    {{$slot}}
</a>