<div>

<div class="row">
    <div class="col-md-8">
    <div wire:ignore id='map' style='width: 400px; height: 300px;'></div>
    </div>
    <div class="col-md-4">
        <h1>Form</h1>
    </div>


</div>




</div>

@push('scripts')
<script>
    mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>
@endpush