<div class="login-form">

    <style>
        .login-form{
    width: 400px !important;
    height: 500px !important;
    background: white;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    gap: 15px;
}

.login-form input{
    width: 100%;
    height: 40px;
    border-radius: 10px;
    border: 1px solid rgb(121, 121, 121);
}

.login-btn{
    width: 100%;
    height: 40px;
    border-radius: 10px;
    background: green;
    color: white;
    border: none;
}

.login-form p{
    font-size: 28px;
    color: rgb(32, 32, 32);
    font-weight: bold;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
    </style>

    <form wire:submit.prevent='login' style="width: 100%">
        <p>Login</p>
        <div style="width: 100%; height: 80px">
            <label>Email</label>
            <input type="text" wire:model='email'>
            @error('email')
                <p style="font-size: 14px; color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div style="width: 100%; height: 80px">
            <label>Password</label>
            <input type="password" wire:model='password'>
            @error('password')
                <p style="font-size: 14px; color: red;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="login-btn">Login</button>
        <p style="font-size: 14px; color: red;">{{ $loginMessage }}</p>
        <a href="/register">Don't have an account?</a>
    </form>

</div>