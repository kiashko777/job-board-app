<h2>{{ $job->title }}</h2>

<p>Congratulations! You have successfully posted a job!</p>

<p>
    <a href="{{ url('/jobs/'. $job->id) }}">View Job</a>
</p>
