
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Add New Member</h1>
        <form method="POST" action="/addmember" class="mt-10">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="name">
                    Full Name
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="full_name"
                       id="full_name"
                       value="{{ old('name') }}"
                       required
                >

                @error('full_name')
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
                       name="member_username"
                       id="member_username"
                       value="{{ old('username') }}"
                       required
                >

                @error('member_username')
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
