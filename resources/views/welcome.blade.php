<x-layout>
<div class="space-y-10">

    <section>
        <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
        </div>
    </section>

    <section >
        <x-section-heading>Tags</x-section-heading>
        <div class="space-x-1 mt-6">
            <x-tag>Laravel</x-tag>
            <x-tag>PHP</x-tag>
            <x-tag>JavaScript</x-tag>
            <x-tag>Remote</x-tag>
            <x-tag>Full-Time</x-tag>
            <x-tag>Part-Time</x-tag>
            <x-tag>Vue.js</x-tag>
            <x-tag>React</x-tag>
        </div>
    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
    </section>

</div>
</x-layout>
