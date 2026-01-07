@props(['job'])
<div class="p-4 bg-white/5 flex flex-col text-center rounded-xl border border-transparent hover:border-blue-800 transition-colors duration-300 group ">
    <div class="self-start text-sm"></div>
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-600 transition-colors duration-200">{{$job->title}}</h3>
        <p> {{$job->salary}}</p>

    </div>
    <div class="flex justify-between items-center mt-auto  grow">
        <div class="space-x-2">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <x-employer-logo :width="30"></x-employer-logo>
    </div>
</div>
