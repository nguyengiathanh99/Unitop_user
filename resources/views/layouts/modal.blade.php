<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="hapo-form d-flex justify-content-center align-items-center">
                    <div class="hapo-form-main hapo-login">
                        <div class="form-header">
                            <div class="row flex-row-reverse">
                                <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-login header-reg">
                                    REGISTER
                                </div>
                                <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-reg header-login">
                                    LOGIN
                                </div>
                            </div>
                            <div class="form-header-xmark close-icon">
                                <i class="fas fa-times" data-dismiss="modal"></i>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="container">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    @if(session()->has('success'))
                                        <div class="alert alert-success reg-success" id="message">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->has('message_login'))
                                        <div class="message_login" id="message_log"></div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="error_login" id="error_log"></div>
                                    @endif
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text"
                                               class="form-control @error('login_username') is-invalid form-login @enderror"
                                               id="username" name="login_username">
                                        @if ($errors->has('login_username'))
                                            <p class="text-danger errors-login">{{ $errors->first('login_username') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password"
                                               class="form-control @error('login_password') is-invalid form-login @enderror"
                                               id="password" name="login_password">
                                        @if ($errors->has('login_password'))
                                            <p class="text-danger errors-login">{{ $errors->first('login_password') }}</p>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check mb-2 mr-sm-2">
                                            <input class="form-check-input" type="checkbox" id="remember-me">
                                            <label class="form-check-label" for="remember-me">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="{{ route('password.request') }}" class="forgot-psw">Forgot password</a>
                                    </div>
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger login-error" id="error">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <button type="submit" class="btn-submit">LOGIN</button>
                                </form>
                            </div>
                            <p class="login-diff"><span>Login with</span></p>
                            <div class="container login-social">
                                <div class="login-google">
                                    <a href="{{ url('/google') }}" class="login-special"><i
                                                class="fab fa-google-plus-g login-icon"></i>Google</a>
                                </div>
                                <div class="login-facebook">
                                    <a href="#" class="login-special"><i
                                                class="fab fa-facebook-f login-icon"></i>Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hapo-form d-flex justify-content-center align-items-center ">
                    <div class="hapo-form-main hapo-reg">
                        <div class="form-header">
                            <div class="row">
                                <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-login header-login">
                                    LOGIN
                                </div>
                                <div
                                        class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-reg header-reg">
                                    REGISTER
                                </div>
                            </div>
                            <div class="form-header-xmark close-icon">
                                <i class="fas fa-times" data-dismiss="modal"></i>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="container">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text"
                                               class="form-control @error('register_username') is-invalid form-reg @enderror"
                                               id="username" name="register_username">
                                        @if ($errors->has('register_username'))
                                            <p class="text-danger errors-register">{{ $errors->first('register_username') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email"
                                               class="form-control @error('email') is-invalid form-reg @enderror"
                                               id="email" name="email">
                                        @if ($errors->has('email'))
                                            <p class="text-danger errors-register">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password"
                                               class="form-control @error('register_password') is-invalid form-reg @enderror"
                                               id="password" name="register_password">
                                        @if ($errors->has('register_password'))
                                            <p class="text-danger errors-register">{{ $errors->first('register_password') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Repeat Password:</label>
                                        <input type="password"
                                               class="form-control @error('password') is-invalid form-reg @enderror"
                                               id="confirm-password" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <p class="text-danger errors-register">{{ $errors->first('password_confirmation') }}</p>
                                        @endif
                                    </div>
                                    <button type="submit" id="btn-reg" class="btn-submit">REGISTER</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
