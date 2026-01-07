@props(['job'])

<div class="p-8 bg-white/5 flex gap-x-6 text-center rounded-xl border border-transparent hover:border-blue-800 transition-colors duration-300 group  ">
    <div>
        <x-employer-logo></x-employer-logo>
    </div>
    <div class="flex-1 text-left flex flex-col gap-y-2">
        <a href="#" class="self-start text-sm text-gray-500 group-hover:text-blue-600 transition-colors duration-200">{{$job->employer->name}}</a>
        <h3 class="text-xl font-bold mt-3">{{$job->title}}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>

    <div class="space-x-2   ">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</div>
