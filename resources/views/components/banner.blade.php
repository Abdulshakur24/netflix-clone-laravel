@props(['popular'])


<section class="relative w-full h-screen max-h-[1000px] bg-black">
    <div style="background-image: url({{ 'https://image.tmdb.org/t/p/original/' . $popular->backdrop_path }}); background-repeat: no-repeat; background-size: cover; background-position: top center;"
        class="max-w-[1440px] h-full mx-auto bg-gradient-to-t from-black flex justify-start items-center">
        <div class="flex items-center justify-start z-10 m-4">
            <div class="flex-col flex p-6 bg-black/60 rounded max-w-[700px]">
                <h1 class="text-6xl font-semibold text-yellow-300 ">
                    {{ $popular->title }}
                </h1>
                <p class="text-lg font-semibold text-white">
                    {{ $popular->overview }}
                </p>
                <div class="flex flex-row w-full space-x-4">
                    <button
                        class="flex items-center justify-center px-2 py-2 mt-5 space-x-2 bg-white hover:bg-white/80 rounded shadow-md bg-gradient w-28 duration-200 transition-all ease-in-out">
                        <x-bi-caret-right-fill class="w-6 h-6" />
                        <span class="font-semibold text-gray-800">
                            <a href="{{ route('movies.show', $popular->id) }}">Play</a>
                        </span>
                    </button>
                    <button
                        class="flex items-center justify-center px-3 py-2 mt-5 space-x-2 font-semibold bg-gray-500 hover:bg-gray-500/80 bg-opacity-50 rounded shadow-md w-36 duration-200 transition-all ease-in-out">
                        <x-bi-info-circle class="w-5 h-5 font-bold text-white" />
                        <span class="font-semibold text-white">
                            <a href="{{ route('movies.show', $popular->id) }}">More Info</a>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
