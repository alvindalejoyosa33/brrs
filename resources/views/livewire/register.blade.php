<div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

    body {
        margin: 0;
        font-family: "Roboto", serif;
        font-optical-sizing: auto;
    }

    .landing-banner{
        width: 100%;
        height: 100vh;
        background-image: url('/images/landingpagebg.jpg');
        background-image: cover;
        background-repeat: no-repeat;
        background-position: center;
        display: flex;
    }

    .landing-banner div{
        width: 50%;
        height: 100%;
    }

    .banner-left,
    .banner-right{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-left h1{
        font-size: 50px;
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
    }

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

    .login-form label{
        padding-left: 5px;
        color: rgb(54, 54, 54);
    }

    .login-form p{
        font-size: 28px;
        color: rgb(32, 32, 32);
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .input{
        display: flex;
        flex-direction: column ;
    }
</style>

    <div class="landing-banner">
        <div class="banner-left">
            <h1>
                Welcome to <br>
                Sanaol Shopping
            </h1>
        </div>
        <div class="banner-right">
            <div class="login-form">
                <p>Register</p>

                <form wire:submit.prevent='register' style="width: 100%">
                    <div class="input" style="width: 100%; height: 80px">
                        <label for="">Email</label>
                        <input type="email" wire:model.live='email'>
                        @error('email')
                            <p style="font-size: 14px; color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input" style="width: 100%; height: 80px;">
                        <label for="">Password</label>
                        <input type="password" wire:model.live='password'>
                        @error('password')
                            <p style="font-size: 14px; color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input"  style="width: 100%; height: 80px">
                        <label for="">Confirm Password</label>
                        <input type="password" wire:model.live='cpassword'>
                        @error('cpassword')
                            <p style="font-size: 14px; color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="login-btn">Register</button>
                </form>

                <a href="/">Already have an account?</a>
            </div>
        </div>
    </div>


</div>


@livewireScripts