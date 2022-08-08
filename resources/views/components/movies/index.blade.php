@props(['populars', 'genres', 'trending', 'comedies', 'action', 'western', 'horror', 'thriller', 'animation'])

<div class="container px-4 my-6 mx-auto space-y-8">
    <!-- Popular Movies -->
    <x-movies :movies='$populars'>
        <x-slot:category>
            <div class="flex items-center">
                Popular on Netflix
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Popular Movies -->

    <!-- Trending Movies -->
    <x-movies :movies='$trending'>
        <x-slot:category>
            <div class="flex items-center">
                Trending on Netflix
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Trending Movies -->

    <!-- Comedies Movies -->
    <x-movies :movies='$comedies'>
        <x-slot:category>
            <div class="flex items-center">
                Comedies
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Comedies Movies -->

    <!-- Action Movies -->
    <x-movies :movies='$action'>
        <x-slot:category>
            <div class="flex items-center">
                Action
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Action Movies -->

    <!-- Western Movies -->
    <x-movies :movies='$western'>
        <x-slot:category>
            <div class="flex items-center">
                Western
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Wester Movies -->

    <!-- Horror Movies -->
    <x-movies :movies=$horror>
        <x-slot:category>
            <div class="flex items-center">
                Horror
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Horror Movies -->

    <!-- Animation Movies -->
    <x-movies :movies='$animation'>
        <x-slot:category>
            <div class="flex items-center">
                Animation
                <x-icons name="chevron-right" class="scale-75" />
            </div>
        </x-slot:category>
    </x-movies>
    <!-- End Animation Movies -->
</div>
