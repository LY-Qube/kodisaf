<!-- contact -->
<section class="lg:flex w-full">
    <article class="relative w-11/12 mx-auto py-14 lg:w-3/6 flex flex-col sm:justify-center items-center"
             id="contact">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-900 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
            <div class="relative w-full rounded-3xl px-6 py-4 bg-blue-200 shadow-md">
                <label for="input-name" class="block text-normal text-gray-700 text-center font-semibold">
                    Nous contacter
                </label>
                <form action="{{ route('contact') }}" method="POST" class="mt-10">
                    @csrf
                    <div>
                        <label for="input-name" class="hidden"></label>
                        <input type="text"
                               name="name"
                               placeholder="Nom et Prénom"
                               id="input-name"
                               class="pl-3 mt-1 block w-full border-none bg-gray-100
                            h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"
                               value="{{ old('name') }}" required >
                        @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-7">
                        <label for="input-email" class="hidden"></label>
                        <input type="email"
                               name="email"
                               id="input-email"
                               placeholder="Adresse E-mail"
                               value="{{ old('email') }}"
                               class="pl-3 mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg
                               hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" required>
                        @error('email')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-7">
                        <label for="input-phone" class="hidden"></label>
                        <input type="text" name="phone"
                               placeholder="Téléphone"
                               id="input-phone"
                               value="{{ old('phone') }}"
                               class="pl-3 mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg
                               hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" >
                        @error('phone')
                        <span class="text-red-700">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mt-7">
                        <button
                            class="bg-blue-900 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner
                                focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Contact
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <figure class="w-full lg:w-3/6">
        <img src="{{ asset('images/contact.png') }}" class="w-full h-full" alt="Contact" title="Contact">
    </figure>
</section>
