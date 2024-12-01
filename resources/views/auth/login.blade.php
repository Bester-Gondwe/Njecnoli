<x-layouts>

    <h1 class="title">Welcome Back</h1>

    <div class="main">

        <div class="form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                {{-- Email --}}
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('name') }}" class="input">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

                {{-- pasword --}}
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="input">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>


                {{-- Remember check box --}}
                <input type="checkbox" name="remember" id="box">
                <label for="remember">Remember Me!</label>

                {{-- login error message --}}
                @error('failed')
                    {{ $message }}
                @enderror

                {{-- button --}}
                <button class="btn">Login</button>

        </div>
        </form>
    </div>
    </div>

</x-layouts>
