@csrf

<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Dados</legend>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome_projeto">Nome do projeto</label>
                        <input value="{{ $projeto->nome_projeto ?? '' }}" type="text" class="form-control" name="nome_projeto" id="nome_projeto" required placeholder="Nome do projeto">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="utm_campaign">Nome da campanha</label>
                        <input value="{{ $projeto->utm_campaign ?? '' }}" type="text" class="form-control" name="utm_campaign" id="utm_campaign" required placeholder="Digite a campanha">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="tipo_lancamento">Tipo de lançamento</label>
                    <select class="form-control" name="tipo_lancamento" id="tipo_lancamento">
                        <option selected>Escolha</option>
                        <option value="Semente">Semente</option>
                        <option value="Relâmpago">Relâmpago</option>
                        <option value="Meteórico">Meteórico</option>
                        <option value="Interno">Interno</option>
                      </select>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Período</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="data_inicio">Data de início</label>
                        <input value="{{ $projeto->data_inicio ?? ''}}" type="date" class="form-control" name="data_inicio" id="data_inicio" required placeholder="Data inicial">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="data_fim">Data final</label>
                        <input value="{{ $projeto->data_fim ?? '' }}" type="date" class="form-control" name="data_fim" id="data_fim" required placeholder="Data final">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="projecao_grupo_whatsapp">Projeção de grupos Whatsapp</label>
                        <input value="{{ $projeto->projecao_grupo_whatsapp ?? '' }}" type="input" class="form-control" name="projecao_grupo_whatsapp" id="projecao_grupo_whatsapp" required placeholder="Digite a quantidade">
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Tráfego</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="projecao_investimento_trafego">Projeção de Investimento</label>
                        <input value="{{ $projeto->projecao_investimento_trafego ?? '' }}" type="input" class="form-control" name="projecao_investimento_trafego" id="projecao_investimento_trafego" required placeholder="Valor em R$">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="projecao_captacao_leads">Projeção de captação</label>
                        <input value="{{ $projeto->projecao_captacao_leads ?? '' }}" type="input" class="form-control" name="projecao_captacao_leads" id="projecao_captacao_leads" required placeholder="Número de leads">
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                     <button class="btn btn-success" type="submit">Atualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>