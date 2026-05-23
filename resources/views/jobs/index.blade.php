<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listing</title>
</head>
<body>

    @if(isset($singleJob))
        
        <h1>Job Details</h1>
        <hr>
        <h2>{{ $singleJob->title }}</h2>
        <p><strong>Company:</strong> {{ $singleJob->company }}</p>
        <p><strong>Location:</strong> {{ $singleJob->location }}</p>
        <p><strong>Salary:</strong> ₱{{ number_format($singleJob->salary, 2) }}</p>
        
        <p><strong>Description:</strong></p>
        <p style="line-height: 1.6; max-width: 600px;">{{ $singleJob->description }}</p>
        
        <br>
        <a href="/jobs" style="padding: 10px 15px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; font-weight: bold;">
            ← Back to Job List
        </a>

    @else
        
        <h1>Job Listing</h1>

        @foreach($jobs as $job)
            <div style="margin-bottom: 20px;">
                <h2><a href="/jobs/{{ $job->id }}">{{ $job->title }}</a></h2>
                
                <p><strong>Company:</strong> {{ $job->company }}</p>
                <p><strong>Location:</strong> {{ $job->location }}</p>
                <p><strong>Salary:</strong> ₱{{ number_format($job->salary, 2) }}</p>
                
                <hr>
            </div>
        @endforeach

    @endif

</body>
</html>