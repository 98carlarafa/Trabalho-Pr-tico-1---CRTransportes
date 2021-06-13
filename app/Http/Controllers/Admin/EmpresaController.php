<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function empresa(){

        $subtitulo = 'A Empresa';

        $sobre = 'A CR Transportes é uma empresa dedicada ao transporte rodoviário de Produtos Sólidos, Líquidos e Gases a Granel, exercendo esta atividade há mais de três décadas. Faz transportes intermunicipais e interestaduais, atuando principalmente na região sudeste do país, tendo demonstrado ser uma empresa sólida e eficiente.

        Constituída de forma a atender toda a e qualquer legislação pertinente ao transporte de cargas em geral, e empresa prima pelo treinamento e capacitação de seu pessoal com programas de segurança, meio ambiente, adequação do transporte em parceria com o cliente e renovação de frota, proporcionando um atendimento de qualidade.';

        return view('admin.empresa.index', compact('subtitulo', 'sobre'));
    }
}
