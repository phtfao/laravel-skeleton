@include('layouts.header')
@include('includes.validations-form')
                    <div class="card-header">
                        <h3 class="card-title">Especialidades</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('agenda.especialistas') }}" method="POST">
                                <div class="input-group mb-3">
                                @csrf
                                <div class="input-group-prepend">
                                <label class="input-group-text" for="specialty_id">Consulta de</label>
                                </div>
                                <select name='specialty_id' class="custom-select" id="specialty_id">
                                    <option selected>Selecione a agenda...</option>
                                    @foreach ($arrEspecialidades as $especialidade)
                                        <option value="{{ $especialidade->especialidade_id }}">{{ $especialidade->nome }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-success justify-content-center">Agendar</button>
                            </div>
                        </form>
                    </div>
@include('layouts.footer')
