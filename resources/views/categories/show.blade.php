<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add category</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <header class="bg-dark text-white text-center py-2">
        <h1>add new category</h1>
    </header>

    <!-- Content -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Form -->
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Enter category name">
                    <input type="text" name="description" placeholder="Enter description">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, but required for some features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>