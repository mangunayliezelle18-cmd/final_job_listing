<h1>{{ $job->title }}</h1>

<p><strong>Company:</strong> {{ $job->company }}</p>

<p><strong>Location:</strong> {{ $job->location }}</p>

<p><strong>Salary:</strong> {{ $job->salary }}</p>

<p><strong>Description:</strong></p>
<p>{{ $job->description }}</p>

<br>

<a href="/jobs">← Back to Job List</a>