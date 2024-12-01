<x-layouts>

    <h1 class="title">Registerd New Account</h1>

    <div class="main">

        <div class="form">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                {{-- username --}}
                <div class="mb-4">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="input">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>

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

                {{-- Confirm passwod --}}
                <div class="mb-4">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="input">
                    @error('pasword')
                        {{ $message }}
                    @enderror

                    {{-- button --}}
                
                    <button class="btn">Register</button>

                </div>
            </form>
        </div>
    </div>
</x-layouts>
