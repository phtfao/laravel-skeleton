@include('layouts.header')
@include('includes.validations-form')
<div class="card-header">
  <h3 class="card-title">Preencha Seus Dados</h3>
</div>
<div class="card-body">
<form action="{{ route('agenda.store') }}" method="POST">
    @csrf
    <input type="hidden" name="profissional_id" value="{{$profissional_id}}">
    <input type="hidden" name="specialty_id" value="{{$specialty_id}}">
    <div class="row">
      <div class="col">
        <input type="text" name="name" class="form-control" placeholder="Nome completo">
      </div>
      <div class="col">
        <div class="input-group">
          <select class="custom-select" name="source_id" id="source_id" aria-label="Como conheceu?">
            <option selected>Como conheceu...</option>
            @foreach ($arrFonteConhecimento as $source)
                <option value="{{ $source->origem_id }}">{{ $source->nome_origem }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div><br>
    <div class="row">
      <div class="col">
        <input type="date" name="birthdate" class="form-control" placeholder="Nascimento">
      </div>
      <div class="col">
        <input type="cpf" name="cpf" class="form-control" placeholder="CPF">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success justify-content-right float-right">Solicitar Horários</button>
  </form>
</div>