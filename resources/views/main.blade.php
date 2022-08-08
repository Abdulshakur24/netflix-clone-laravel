<x-layout>
    <x-header />

    <x-banner :popular='$popular' />

    <x-movies.index :populars='$populars' :genres='$genres' :trending='$trending' :comedies='$comedies' :action='$action'
        :western='$western' :horror='$horror' :thriller='$thriller' :animation='$animation' />

    <x-footer />
</x-layout>
