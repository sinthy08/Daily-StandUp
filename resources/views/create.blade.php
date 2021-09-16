<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/register.css">
<!------ Include the above in your HEAD tag ---------->

<h3 style="text-align: center; margin-top: 3%; margin-bottom: 20px;"> Daily Standup</h3>
<div class="container register-form"  style="margin-top: 0px;">
    <div class="form">
        <div class="note">
            <p>REGISTER</p>
        </div>

        <div class="form-content">
            <div class="row">
                <form method="POST" action="/register" class="form-group">
                @csrf
                    <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       placeholder="Your Name *"
                                       value="{{ old('name') }}"
                                       required
                                >

                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror

                            </div>

                            <div class="form-group">
                                <input class="form-control"
                                       type="text"
                                       name="username"
                                       id="username"
                                       placeholder="User Name *"
                                       value="{{ old('username') }}"
                                       required
                                >

                                @error('username')
                                     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control"
                                       type="email"
                                       name="email"
                                       id="email"
                                       value="{{ old('email') }}"
                                       placeholder="Your E-mail *"
                                       required
                                >
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control"
                                       type="password"
                                       name="password"
                                       id="password"
                                       placeholder="Your Password *"
                                       required
                                >
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                    </div>
                            <button type="submit"
                                    class="btnSubmit">
                                Submit
                            </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name">
                        name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                    >

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username">
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           value="{{ old('username') }}"
                           required
                    >

                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email">
                        email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password">
                        password
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>

            </form>

        </main>

    </section>
-->
