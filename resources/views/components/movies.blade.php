@props(['movies'])

<div class="">
    <div class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
        {{ $category }}
    </div>

    <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }' class="flex carousel flex-nowrap">
        @foreach ($movies as $movie)
            <div @click="open = true"
                class="flex flex-col mr-3 overflow-hidden rounded-md w-full max-w-[250px] md:max-w-[350px]"
                style="background-color:  #181818">
                <div @click="open = true">
                    <a class="relative" href="{{ route('movies.show', $movie['id']) }}">
                        <img class="cursor-pointer hover:scale-105" loading="lazy"
                            src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['backdrop_path'] }}"
                            alt="{{ $movie['title'] }}">
                        <div class="absolute inset-0">
                            <div
                                class="bg-primary/60 w-full h-full rounded opacity-0 hover:opacity-100 transition-all duration-200 ease-in-out flex i">
                                <p class="text-white font-bold">{{ $movie['title'] }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
