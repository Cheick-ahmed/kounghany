@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-12 w-auto" src="/img/logos/workflow-mark-on-white.svg" alt="Workflow" />
    <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
      Sign in to your account
  </h2>
  <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
      Or
      <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
        start your 14-day free trial
    </a>
</p>
</div> --}}
<div class="flex items-center justify-center min-h-screen text-white font-medium">

    <div class="w-full max-w-xl bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full">
            <div>
                <h2 class="mt-6 text-center text-5xl leading-9 font-extrabold">
                    Bienvenue
                </h2>
                <p class="mt-4 text-center text-sm leading-5">
                  <a href="#" class="font-medium tracking-wide text-white focus:outline-none focus:underline transition ease-in-out duration-150">
                     Connexion à votre espace administrateur Kounghany Nafa.
                 </a>
             </p>
         </div>
         <form class="mt-10">
            <div class="rounded-md shadow-sm">
                <div>
                    <input aria-label="Email address" type="email"  class="appearance-none rounded relative block w-full px-3 py-3 text-gray-100 sm:text-sm sm:leading-5 border-2 border-gray-900 bg-gray-700 shadow focus:outline-none focus:shadow-outline-indigo" placeholder="Email" />
                        {{-- <template>
                            <div class="text-sm text-red-600 mt-1" v-if="validation.email">
                                {{ validation.email[0] }}
                            </div>
                        </template> --}}
                    </div>
                    <div class="mt-4">
                        <input aria-label="Mot de passe" type="password"  class="appearance-none rounded relative block w-full px-3 py-3 text-gray-100 sm:text-sm sm:leading-5 border-2 border-gray-900 bg-gray-700 shadow focus:outline-none focus:shadow-outline-indigo" placeholder="Mot de passe" />
                      {{--   <template>
                            <div class="text-sm text-red-600 mt-1" v-if="validation.password">
                                {{ validation.password[0] }}
                            </div>
                        </template> --}}
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-between">
                  <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-blue-500 transition duration-150 ease-in-out" />
                    <label for="remember_me" class="ml-2 block text-sm leading-5">
                      Se souvenir de moi
                  </label>
              </div>

              <div class="text-sm leading-5">
                <a href="#" class="font-medium text-blue-400 hover:text-blue-300 focus:outline-none focus:underline transition ease-in-out duration-150">
                 Mot de passe oublié ?
             </a>
         </div>
     </div>

     <div class="mt-8">
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-700 hover:bg-gray-800 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue transition duration-500 ease-in-out">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-gray-600 group-hover:text-gray-700 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
          </span>
          Connexion
      </button>
  </div>
</form>
</div>
</div>
</div>
@endsection
