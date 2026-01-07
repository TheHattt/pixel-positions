<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase; // Add this

// This trait runs migrations before each test
uses(RefreshDatabase::class);

it('job belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});



// check if a job has atleast 1 tag associated with it
it("job can have tags : for this case one ", function () {
    // AAA
    $job = Job::factory()->create([]);

    // Act
    $job->tag('Frontend');

    // expect
    expect($job->tags)->toHaveCount(1);

});
