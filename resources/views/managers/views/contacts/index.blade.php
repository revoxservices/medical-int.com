@extends('layouts.managers')


@section('content')




      <div class="content ">

        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Contactenos</li>
                </ol>
                <!-- END BREADCRUMB -->
            </div>
            </div>
        </div>

          <div class=" container-fluid   container-fixed-lg bg-white">
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">
                </div>
                <div class="pull-right row">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right ." placeholder="Busqueda">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-body">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th style="width: 30%">Cliente</th>
                      <th style="width: 30%">Estado</th>
                      <th style="width: 30%">Fecha</th>
                      <th style="width: 10%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>{{ $contact->names }}</p>
                      </td>
                      <td class="v-align-middle">
                        @if($contact->reviewed == 1)
                            <a href="#" class="btn btn-tag-available">Revisado</a>
                        @else
                            <a href="#" class="btn btn-tag-disabled">Pendiente</a>
                        @endif
                      </td>
                      <td class="v-align-middle">
                        <p>{{ humanize_date($contact->created_at) }}</p>
                      </td>
                      <td class="v-align-middle">
                        <div class="dropdown dropdown-default dropup">
                          <button aria-label="" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-asset material-icons ng-star-inserted" style="">more_horiz</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('manager.contacts.edit', $contact->slack) }}">Editar</a>
                            <a class="dropdown-item observerDestroy-{{ $contact->slack }}">
                            <input name="slack" type="hidden" value="{{ $contact->slack }}">Eliminar</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                    
                    <script src="{{ url('managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>

                        <script type="text/javascript">
                          $(document).ready(function() {


                          $('.observerDestroy-{{$contact->slack}}').on('click', function(e){

                                    var slack = $(this).find("input[name='slack']").val();
                                    var url = "/manager/contacts/destroy/"+slack;

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
          </div>


@endsection


