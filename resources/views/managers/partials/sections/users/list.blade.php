  <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                            <thead>
                                <tr>
                                    <th style="width: 25%">Usuario</th>
                                    <th style="width: 10%">Email</th>
                                    <th style="width: 10%">Estado</th>
                                    <th style="width: 15%">Fecha</th>
                                    <th style="width: 5%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $user->firstname }} {{ $user->lastname }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $user->email }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            @if ($user->available == 1)
                                                <a href="#" class="btn btn-tag-available">Activo</a>
                                            @else
                                                <a href="#" class="btn btn-tag-disabled">Inactivo</a>
                                            @endif
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{ humanize_date($user->created_at) }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <div class="dropdown dropdown-default dropup">
                                                <button aria-label="" class="btn dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="icon-asset material-icons ng-star-inserted"
                                                        style="">more_horiz</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   
                                                   <a
                                                        class="dropdown-item"
                                                        href="{{ route('manager.users.edit', $user->slack) }}">Editar</a>
                                                    <a class="dropdown-item observerDestroy-{{ $user->slack }}">
                                                        <input name="slack" type="hidden" value="{{ $user->slack }}">
                                                        Eliminar
                                                   </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <script src="{{ url('managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>

                                          <script type="text/javascript">
                                             $(document).ready(function() {


                                             $('.observerDestroy-{{$user->slack}}').on('click', function(e){

                                                      var slack = $(this).find("input[name='slack']").val();
                                                      var url = "/manager/users/destroy/"+slack;

                                                      $("#buttonDestroy").prop('href',url);
                                                      $("#modalDestroy").modal("show");

                                                });

                                             });

                                          </script>
                                          
                                @endforeach
                            </tbody>
                        </table>



       

