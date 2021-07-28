<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    protected $fillable = ['nome_projeto', 'utm_campaign', 'tipo_lancamento', 'data_inicio', 'data_fim', 'projecao_investimento_trafego', 'projecao_captacao_leads', 'projecao_grupo_whatsapp', 'posicao', 'icone'];
}
