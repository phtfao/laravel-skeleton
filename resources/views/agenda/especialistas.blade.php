@include('layouts.header')
@include('includes.validations-form')
<link rel="stylesheet" href="layout.css">
<br>
      <div class="container">
        <div class="row">
            @foreach ($arrEspecialistas as $especialista)
            <div class="col-lg-4">
                <div class="card card-margin">
                    <div class="card-doc">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <br>
                                <div class="widget-49-date-primary">
                                    <img 
                                    class="rounded-circle"
                                    width=64 height=64
                                    src="{{$especialista->foto}}"
                                    alt="{{$especialista->tratamento}} {{$especialista->nome}}">
                                </div>
                                <div class="widget-49-meeting-info">
                                    <span class="widget-49-pro-title">
                                        {{$especialista->tratamento}} {{$especialista->nome}}
                                    </span>
                                    <span class="widget-49-meeting-time">
                                        {{$especialista->conselho}} {{$especialista->documento_conselho}}</span>
                                </div>
                            </div>
                            <form method="POST" name="especialista_{{$especialista->profissional_id}}" action="{{ route('agenda.agendamento') }}">
                                @csrf
                                <input type="hidden" name="profissional_id" value="{{$especialista->profissional_id}}">
                                <input type="hidden" name="specialty_id" value="{{$specialty_id}}">
                                <div class="widget-49-meeting-action">
                                    <input type="submit" class="btn btn-success justify-content-center" value="Agendar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>