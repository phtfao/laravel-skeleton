<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgendaRequest;
use GuzzleHttp\Client as HttpClient;
use Phtfao\Feegow\Core\Agenda\AgendaService;
use Phtfao\Feegow\Support\Service\FeegowApiService;



class AgendaController extends Controller
{
    public function __construct(
        private AgendaService $agendaService,
        private FeegowApiService $feegowApiService
    ) {}
    public function store(AgendaRequest $request)
    {
        $data = $request->all();
        $this->agendaService->store($data);

        return redirect()->route('agenda.especialidades')->with('success','Agendamento realizado com sucesso!');
    }

    public function especialidades()
    {
        $arrEspecialidades = $this->feegowApiService->getEspecialidades();
        return view('agenda.especialidades', compact('arrEspecialidades'));
    }

    public function especialistas(Request $request)
    {
        $request->validate([
            'specialty_id' => 'required|integer'
        ]);

        $arrEspecialistas = $this->feegowApiService->getEspecialistas($request->specialty_id);

        return view('agenda.especialistas', [
            'arrEspecialistas' => $arrEspecialistas,
            'specialty_id' => $request->specialty_id
        ]);

    }

    public function agendamento(Request $request)
    {
        $request->validate([
            'profissional_id' => 'required|integer',
            'specialty_id' => 'required|integer'
        ]);

        $arrFonteConhecimento = $this->feegowApiService->getFonteConhecimento();

        return view('agenda.agendamento', [
            'arrFonteConhecimento' => $arrFonteConhecimento,
            'specialty_id' => $request->specialty_id,
            'profissional_id' => $request->profissional_id
        ]);
    }


}
