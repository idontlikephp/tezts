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
            <div class="column">
                <h1 class="title">Upload file</h1>
                @if ($errors->any())
                    <div class="notification is-danger is-light">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="is-block mb-4">
                        <span class="is-block mb-2">Choose a file to upload</span>
                        <span class="file has-name is-fullwidth">
                            <label class="file-label">
                                <input type="file" name="file_upload"/>
                            </label>
                        </span>
                    </label>
                    <div class="field is-grouped mt-3">
                        <div class="control">
                            <button type="submit" class="button is-info">Upload</button>
                        </div>
                        <div class="control">
                            <a href="{{ route('uploads.index') }}" class="button is-light">Cancel</a>
                        </div>
                    </div>
                </form>
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