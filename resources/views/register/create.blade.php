<div>
    <form action="/reg" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}"><br><br>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}"><br><br>

        <input type="submit" value="Submit">

        @error('name')
        <p>{{ $message }}</p>
        @enderror
        @error('username')
        <p>{{ $message }}</p>
        @enderror
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        @error('password')
        <p>{{ $message }}</p>
        @enderror
    </form>
</div>
