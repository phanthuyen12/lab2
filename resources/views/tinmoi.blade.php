<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin mới nhất</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tin mới nhất</h1>
        <div class="row mt-3">
            <div class="col">
                <div class="list-group">
                    @foreach($data as $tin)
                        <a href="{{ url('/tin/' . $tin->id) }}" class="list-group-item list-group-item-action">
                            <h5 class="mb-1">{{ $tin->title }}</h5>
                            <small>{{ $tin->created_at }}</small>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
