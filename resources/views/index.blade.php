<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym-Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <h1 class="fw-bold">Members</h1>
        <br>
        <a href="{{ route('addmember') }}" class="btn btn-primary btn-sm">+ Add Member</a>
        @if (session('success'))
            <div class="alert alert-success my-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table mt-3">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Membership Type</th>
                <th>Membership Expiration</th>
                <th>Actions</th>
            </tr>
            @if(count($members)>0)
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->membership_type }}</td>
                    <td>{{ $member->membership_expiration }}</td>
                    <td>
                        <a class="btn btn-sm btn-light" href="{{ route('editmember', $member->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('destroy', $member->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center p-5 m-5">
                There are currently no Members
                </td>
            </tr>
            @endif

        </table>
    </div>
    
</body>
</html>