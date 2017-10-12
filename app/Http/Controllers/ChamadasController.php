<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamada;
use App\Models\Turma;

class ChamadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mes = request()->segment(2);
        $ano = request()->segment(3);
        $mesExtenso = $this->mesExtenso($mes);
        $mesAnterior = $this->mesAnterior($mes);
        $mesPosterior = $this->mesPosterior($mes);
        $anoMesAnterior = $this->anoMesAnterior($mes, $ano);
        $anoMesPosterior = $this->anoMesPosterior($mes, $ano);
        $title = 'Chamadas';
        $subtitle = "{$mesExtenso}/{$ano}";
        $chamadas = [];
        $turmas = Turma::get();

        // echo "<pre>";
        // print_r($mesPosterior);
        // die('---');

        return view('chamadas', compact('title', 'chamadas', 'turmas', 'subtitle', 'mesAnterior', 'anoMesAnterior', 'mesPosterior', 'anoMesPosterior'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($turma, $data)
    {
        return 'Create';
        // $title = 'Chamada';
        // $subtitle = 'XX/XX/XXXX';
        //
        // print_r($turma);
        // print_r('<br>');
        // print_r($data);
        // die('---');
        //
        // return view('chamada-lancar', compact('title', 'subtitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function mesExtenso($mes)
    {
        switch ($mes) {
            case 1:
                return 'Janeiro';
                break;
            case 2:
                return 'Fevereiro';
                break;
            case 3:
                return 'Março';
                break;
            case 4:
                return 'Abril';
                break;
            case 5:
                return 'Maio';
                break;
            case 6:
                return 'Junho';
                break;
            case 7:
                return 'Julho';
                break;
            case 8:
                return 'Agosto';
                break;
            case 9:
                return 'Setembro';
                break;
            case 10:
                return 'Outubro';
                break;
            case 11:
                return 'Novembro';
                break;
            case 12:
                return 'Dezembro';
                break;

            default:
                throw new Exception('Mês inválido');
                break;
        }
    }

    private function mesAnterior($mes)
    {
        switch ($mes) {
            case 1:
                $mesAnterior['texto'] = 'Dez';
                $mesAnterior['numero'] = '12';
                break;
            case 2:
                $mesAnterior['texto'] = 'Jan';
                $mesAnterior['numero'] = '01';
                break;
            case 3:
                $mesAnterior['texto'] = 'Fev';
                $mesAnterior['numero'] = '02';
                break;
            case 4:
                $mesAnterior['texto'] = 'Mar';
                $mesAnterior['numero'] = '03';
                break;
            case 5:
                $mesAnterior['texto'] = 'Abr';
                $mesAnterior['numero'] = '04';
                break;
            case 6:
                $mesAnterior['texto'] = 'Mai';
                $mesAnterior['numero'] = '05';
                break;
            case 7:
                $mesAnterior['texto'] = 'Jun';
                $mesAnterior['numero'] = '06';
                break;
            case 8:
                $mesAnterior['texto'] = 'Jul';
                $mesAnterior['numero'] = '07';
                break;
            case 9:
                $mesAnterior['texto'] = 'Ago';
                $mesAnterior['numero'] = '08';
                break;
            case 10:
                $mesAnterior['texto'] = 'Set';
                $mesAnterior['numero'] = '09';
                break;
            case 11:
                $mesAnterior['texto'] = 'Out';
                $mesAnterior['numero'] = '10';
                break;
            case 12:
                $mesAnterior['texto'] = 'Nov';
                $mesAnterior['numero'] = '11';
                break;

            default:
                throw new Exception('Mês inválido');
                break;
        }

        return $mesAnterior;
    }

    private function mesPosterior($mes)
    {
        switch ($mes) {
            case 1:
                $mesPosterior['texto'] = 'Fev';
                $mesPosterior['numero'] = '02';
                break;
            case 2:
                $mesPosterior['texto'] = 'Mar';
                $mesPosterior['numero'] = '03';
                break;
            case 3:
                $mesPosterior['texto'] = 'Abr';
                $mesPosterior['numero'] = '04';
                break;
            case 4:
                $mesPosterior['texto'] = 'Mai';
                $mesPosterior['numero'] = '05';
                break;
            case 5:
                $mesPosterior['texto'] = 'Jun';
                $mesPosterior['numero'] = '06';
                break;
            case 6:
                $mesPosterior['texto'] = 'Jul';
                $mesPosterior['numero'] = '07';
                break;
            case 7:
                $mesPosterior['texto'] = 'Ago';
                $mesPosterior['numero'] = '08';
                break;
            case 8:
                $mesPosterior['texto'] = 'Set';
                $mesPosterior['numero'] = '09';
                break;
            case 9:
                $mesPosterior['texto'] = 'Out';
                $mesPosterior['numero'] = '10';
                break;
            case 10:
                $mesPosterior['texto'] = 'Nov';
                $mesPosterior['numero'] = '11';
                break;
            case 11:
                $mesPosterior['texto'] = 'Dez';
                $mesPosterior['numero'] = '12';
                break;
            case 12:
                $mesPosterior['texto'] = 'Jan';
                $mesPosterior['numero'] = '01';
                break;

            default:
                throw new Exception('Mês inválido');
                break;
        }

        return $mesPosterior;
    }

    private function anoMesAnterior($mes, $ano)
    {
        if($mes == 1)
            return $ano - 1;
        else
            return $ano;
    }

    private function anoMesPosterior($mes, $ano)
    {
        if($mes == 12)
            return $ano + 1;
        else
            return $ano;
    }
}
