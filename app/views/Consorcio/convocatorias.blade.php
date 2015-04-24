@section('css')
      @parent
      <!-- Tabla CSS -->
      {{ HTML::style('/css/table.css') }}
@show

@section('convocatorias')
      class="active"
@stop

@section('encabezado')
      <div class="full_page_photo" style="background-image: url({{url('images/about_us.jpg')}});">
            <div class="container">
                  <div class="hgroup">
                        <div class="hgroup_title animated bounceInUp skincolored">
                              <div class="container">
                                   <h1>Convocatorias</h1>
                              </div>
                        </div>
                  </div>
            </div>
       </div>
@stop
@section('contenido')
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <section class="with_right_sidebar" >
        <div class="table-responsive" style="width: 90%; padding-left: 10%;">
            <table class="table2 table-bordered " style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col" abbr="Starter" >Convocatoria</th>
                        <th scope="col" abbr="Medium">Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($convocatorias as $convocatoria)
                        <tr>
                            <td>{{ HTML::link('convocatorias/'.substr(strip_tags(trim(str_replace('/', '-',str_replace(' ', '-', $convocatoria->nombre)), '-')), 0, 100).'/'.$convocatoria->id, $convocatoria->nombre) }}</td>
                            @if($convocatoria->estatus==1)
                                <td><span class="check"></span></td>
                            @else
                                <td><span class="equis"></span></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$convocatorias->links();}}
        </div>
    </section>
@stop