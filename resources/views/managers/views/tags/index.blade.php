@extends('layouts.managers')

@section('content')

      <div class="content ">


        <div class="jumbotron" data-pages="parallax">
          <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
              <!-- START BREADCRUMB -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tags</li>
              </ol>
              <!-- END BREADCRUMB -->
            </div>
          </div>
        </div>


          <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">
                </div>
                <div class="pull-right row">
                   <div class="col-xs-2">
                        <a  href="{{ route('manager.tags.create') }}" class="btn btn-complete btn-add" data-toggle="button">+</a>
                  </div>
                  <div class="col-xs-10">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Busqueda">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-body">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $tag)
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>{{ $tag->label }}</p>
                      </td>
                      <td class="v-align-middle">
                        @if($tag->available == 1)
                            <a href="#" class="btn btn-tag-available">Activo</a>
                        @else
                            <a href="#" class="btn btn-tag-disabled">Inactivo</a>
                        @endif
                      </td>
                      <td class="v-align-middle">
                        <p>{{ humanize_date($tag->created_at) }}</p>
                      </td>
                      <td class="v-align-middle">
                        <div class="dropdown dropdown-default dropup">
                          <button aria-label="" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-asset material-icons ng-star-inserted" style="">more_horiz</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('manager.tags.edit', $tag->slack) }}">Editar</a>
                            <a class="dropdown-item observerDestroy-{{ $tag->slack }}">
                            <input name="slack" type="hidden" value="{{ $tag->slack }}">Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <script src="{{ url('managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>

                                          <script type="text/javascript">
                                             $(document).ready(function() {

                                             $('.observerDestroy-{{$tag->slack}}').on('click', function(e){

                                                      var slack = $(this).find("input[name='slack']").val();
                                                      var url = "/manager/tags/destroy/"+slack;

                                                      $("#buttonDestroy").prop('href',url);
                                                      $("#modalDestroy").modal("show");

                                                });

                                             });

                                          </script>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>


@endsection


