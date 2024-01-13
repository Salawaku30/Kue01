<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bakerilstik Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="mb-1 mt-4 text-dark fs-3 text-center">
        <bold>
            <strong class="mb-2 text-dark fs-3 text-center">
                REGISTRATION
            </strong>
        </bold>
    </h1>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control border-primary" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control border-primary" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control border-primary" id="password" placeholder="Enter your confirm password">
            </div>
            <div class="mb-3 form-check">
                <p class="mt-3 text-start">Sudah memiliki akun ?</p>
                <p class="mt-3 text-start">
                    <a href="{{ route('login') }}" class="text-start text-primary">Masuk</a>
                </p>
            </div>
            <button type="submit" class="btn btn-primary bg-primary text-light" style="align-items: center; margin-left:35%;">Sign Up</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-Zhu7JqGKV+/N1RUcBlk6gSbDpD62dU5m/iTwYxKCq1CqU5Qm3aEI0/z8DyMxG+AA8h" crossorigin="anonymous"></script>

</html>
