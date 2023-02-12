<div class="widget mb-40 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
    <div class="widget-title-box mb-30">
        <span class="animate-border"></span>
        <h3 class="widget-title">Buscar</h3>
    </div>
    {!! Form::open(['route' => ['blogs.filters'], 'class' => 'search-form', 'id' => 'formFilter', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <input type="search" id="search" name="search" autocomplete="off" class="search-field" placeholder="Buscar...">
    <button type="submit"><i class="fas fa-search"></i></button>
    {!! Form::close() !!}
</div>


@push('scripts')

<script>
    $(document).ready(function() {

        $("#search").keypress(function(e) {
            if (e.which == 13) {

                $('#formFilter').submit();
            }
        });


        $("#searchButton").click(function() {
            $('#formFilter').submit();
        });

    });

</script>

@endpush
