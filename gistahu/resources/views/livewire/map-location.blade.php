<div>
<h1>ini map</h1>
<div id='map' style='width: 400px; height: 300px;'></div>

</div>
@push('scripts')
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2VnZWFjdCIsImEiOiJja2p2bTVmcGswNThxMnNyMTlpaG5taWplIn0.MZfGu5aONrhhzt85vvH4QQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>


@endpush