<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>File Upload Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<header class="hero is-info">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                This is an example.
            </h1>
            <h2 class="subtitle">
                by laracoding.com
            </h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container">
        <div class="columns">
            @if(session()->has('success'))
            <div class="column">
                <div class="alert alert-success">
                    <div class="notification is-success is-light">
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="columns">

            <div class="column">
                <h2 class="title">
                    Uploads
                </h2>
                <table class="table is-striped">
                    <thead>
                    <tr>
                        <th>Filename</th>
                        <th>Uploaded at</th>
                        <th>Download</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($uploadedFiles as $uploadedFile)
                        <tr>
                            <td>
                                {{ $uploadedFile->original_name }}
                            </td>
                            <td>
                                {{ $uploadedFile->created_at }}
                            </td>
                            <td>
                                <a href="{{ \Illuminate\Support\Facades\Storage::url($uploadedFile->file_path) }}" target="_blank" class="button is-link is-small">
                                    <span class="icon is-small">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </span>
                                    <span>download</span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No uploads found</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
                <a href="{{ route('uploads.create') }}" class="button is-primary is-small">
                    <span class="icon is-small">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                    </span>
                    <span>Upload a file</span>
                </a>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="content has-text-centered is-flex-align-items-flex-end mt-auto">
        <p>
            Made with ❤ by laracoding.com
        </p>
    </div>
</footer>

</body>
</html>