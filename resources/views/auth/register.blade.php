<x-head css="" js="">
    <div class="auth-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-xs-12">
                    <h1 class="text-xs-center">Sign up</h1>
                    <p class="text-xs-center">
                        <a href="/login">Have an account?</a>
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="name" name="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </fieldset>
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="email" name="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </fieldset>
                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="password" placeholder="password" name="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </fieldset>

                        <fieldset class="form-group">
                            <input class="form-control form-control-lg" type="password" placeholder="password" name="password_confirmation" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </fieldset>
                        <button class="btn btn-lg btn-primary pull-xs-right">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-head>