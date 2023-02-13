
    {{-- MAP --}}
    <svg  class="world-map " xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
        xmlns="http://www.w3.org/2000/svg" mapsvg:geoViewBox="-169.110266 83.600842 190.486279 -58.508473" width="1009.6727"
        height="665.96301">

        @foreach ($svgPaths as $path)
            <path d="{{ $path->path }}" title="{{ $path->title }}" id="{{ $path->id }}" ></path>
        @endforeach
    </svg>