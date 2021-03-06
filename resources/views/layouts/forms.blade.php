@csrf

<div class="mb-3">
    <label for="nome_completo"
           class="form-label">Nome Completo</label>
    <input type="text"
           class="form-control"
           id="nome_completo"
           name="nome_completo"
           value="{{ $diarista->nome_completo ?? old('nome_completo') }}"
           required
           maxlength="100">
</div>
<div class="mb-3">
    <label for="cpf"
           class="form-label">CPF</label>
    <input type="text"
           class="form-control"
           id="cpf"
           name="cpf"
           value="{{ $diarista->cpf ?? old('cpf') }}"
           required
           maxlength="14">
</div>
<div class="mb-3">
    <label for="email"
           class="form-label">Email</label>
    <input type="email"
           class="form-control"
           id="email"
           name="email"
           value="{{ $diarista->email ?? old('email') }}"
           required
           maxlength="100">
</div>
<div class="mb-3">
    <label for="telefone"
           class="form-label">Telefone</label>
    <input type="text"
           class="form-control"
           id="telefone"
           name="telefone"
           value="{{ $diarista->telefone ?? old('telefone') }}"
           required
           maxlength="15">
</div>
<div class="mb-3">
    <label for="cep"
           class="form-label">Cep</label>
    <input type="text"
           class="form-control"
           id="cep"
           name="cep"
           value="{{ $diarista->cep ?? old('cep') }}"
           required
           maxlength="255">
</div>
<div class="mb-3">
    <label for="logradouro"
           class="form-label">Logradouro</label>
    <input type="text"
           class="form-control"
           id="logradouro"
           name="logradouro"
           value="{{ $diarista->logradouro ?? old('logradouro') }}"
           required
           maxlength="255">
</div>
<div class="mb-3">
    <label for="numero"
           class="form-label">Número</label>
    <input type="text"
           class="form-control"
           id="numero"
           name="numero"
           value="{{ $diarista->numero ?? old('numero') }}"
           required
           maxlength="20">
</div>
<div class="mb-3">
    <label for="complemento"
           class="form-label">Complemento</label>
    <input type="text"
           class="form-control"
           id="complemento"
           name="complemento"
           value="{{ $diarista->complemento ?? old('complemento') }}"
           maxlength="50">
</div>
<div class="mb-3">
    <label for="bairro"
           class="form-label">Bairro</label>
    <input type="text"
           class="form-control"
           id="bairro"
           name="bairro"
           value="{{ $diarista->bairro ?? old('bairro') }}"
           required
           maxlength="50">
</div>
<div class="mb-3">
    <label for="cidade"
           class="form-label">Cidade</label>
    <input type="text"
           class="form-control"
           id="cidade"
           name="cidade"
           value="{{ $diarista->cidade ?? old('cidade') }}"
           required
           maxlength="50">
</div>
<div class="mb-3">
    <label for="estado"
           class="form-label">Estado</label>
    <input type="text"
           class="form-control"
           id="estado"
           name="estado"
           value="{{ $diarista->estado ?? old('estado') }}"
           required
           maxlength="2">
</div>
<div class="mb-3">
    <label for="codigo_ibge"
           class="form-label">Código IBGE</label>
    <input type="text"
           class="form-control"
           id="codigo_ibge"
           name="codigo_ibge"
           value="{{ $diarista->codigo_ibge ?? old('codigo_ibge') }}"
           required>
</div>
<div class="mb-3">
    <label for="foto_usuario"
           class="form-label">Foto</label>
    <input type="file"
           class="form-control"
           id="foto_usuario"
           name="foto_usuario">
</div>

<button type="submit"
        class="btn btn-primary">Salvar</button>
