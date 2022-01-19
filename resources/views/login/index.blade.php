<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet" />
    <title>Log In</title>
</head>

<body>
    <br><br><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal">Please log in</h1>

                <form method="POST" action="{{ route('dashboard.store') }}">
                    @csrf

                    <div class="form-floating">
                        <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror"
                            name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}"
                            autofocus>
                        <label for="email">Email address</label>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password">
                        <label for="password">Password</label>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="w-100 btn btn-lg btn-success rounded">Log In</button>
                </form>
            </main>
        </div>
    </div>

</body>

</html>
