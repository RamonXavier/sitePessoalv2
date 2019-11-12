<?php 
include '../structure/header.php';
include '../structure/footer.php';
?>
<div class="uk-container">
    <div class="uk-child-width-1-2@s" uk-grid>
        <div>
            <div class="uk-panel uk-panel-box uk-text-truncate">
                <div class="uk-tile uk-tile-primary uk-padding-small">
                    <p class="uk-h4">Dados do Curso:</p>
                </div>
                <div class="uk-margin">
                    <div>Nome do Curso</div>
                    <input type="text" name="nome_curso" id="nome_curso" class="uk-input uk-form-width-large" placeholder="Ex: Lógica de Programação" require="">
                </div>
                <div class="uk-margin">
                    <div>Instituição de ensino</div>
                    <input type="text" name="instituicao" id="instituicao" class="uk-input uk-form-width-large" placeholder="Ex: Alura, Udemy..." require="">
                </div>
                <div class="uk-margin">
                    <div>Endereço</div>
                    <input type="text" name="link_curso" id="link_curso" class="uk-input uk-form-width-large" placeholder="Ex: www.cursosEX.com" require="">
                </div>
                <div class="uk-margin">
                    <div>Categoria</div>
                    <select type="text" name="categoria_curso" id="categoria_curso" class="uk-select uk-form-width-large" require="">
                        <option>Programação</option>
                        <option>UI and UX</option>
                    </select>
                </div>
                <div class="uk-margin">
                    <div>Descrição do curso</div>
                    <textarea class="uk-textarea" rows="2" id="desc_curso" name="desc_curso" class="uk-textarea uk-form-width-large" placeholder="Descrição..."></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-panel uk-panel-box uk-text-break">
                <div class="uk-tile uk-tile-secondary uk-padding-small">
                    <p class="uk-h4">Informações do Aluno:</p>
                </div>
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                     <div>Curso concluído?</div>
                    <label><input class="uk-radio" type="radio" name="radio2" checked> Sim</label>
                    <label><input class="uk-radio" type="radio" name="radio2"> Não</label>
                </div>
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                     <div>Gostou do curso?</div>
                    <label><input class="uk-radio" type="radio" name="radio2" checked> Pouco</label>
                    <label><input class="uk-radio" type="radio" name="radio2"> Não Muito</label>
                    <label><input class="uk-radio" type="radio" name="radio2"> Muito</label>
                </div>
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                     <div>Criou Alguma aplicação?</div>
                    <label><input class="uk-radio" type="radio" name="radio2" checked> Não Terminada</label>
                    <label><input class="uk-radio" type="radio" name="radio2"> Não</label>
                    <label><input class="uk-radio" type="radio" name="radio2"> Sim</label>
                </div>
                <div class="uk-margin">
                     <div>Endereço da aplicação</div>
                    <input type="text" name="link_app" id="link_app" class="uk-input uk-form-width-large" placeholder="Ex: github.com/app" require="">
                </div>
                <div class="uk-margin">
                    <div>Comente sobre o curso</div>
                    <textarea class="uk-textarea" rows="2" id="coment_curso" name="coment_curso" class="uk-textarea uk-form-width-large" placeholder="Comentário..."></textarea>
                </div>
                <div class="uk-margin" uk-margin>
                    <div uk-form-custom="target: true">
                        <input type="file">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecione o Certificado" disabled>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <p uk-margin><center><button class="uk-button uk-button-large bt-safe" id="salvar">Salvar Certificado</button></center></p>
</div>