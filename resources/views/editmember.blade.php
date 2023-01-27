<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container p-5">
        <h1 class="fw-bold">Member</h1>
        <p>Edit a Member Info.</p>
        <a href="{{ route('index') }}" class="btn btn-light btn-sm">← Go back</a>
        <div class="card py-5 px-4 mt-3">
            <form method="POST" action="{{ route('updatemember', $member->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Member Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Membership Expiration</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $member->membership_expiration }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</body>

</html>