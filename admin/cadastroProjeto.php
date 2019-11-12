<?php 
include '../structure/header.php';
?>
<div class="uk-container">
<div class="uk-tile uk-tile-primary uk-padding-small">
    <p class="uk-h4">Dados do Projeto:</p>
</div>
    <div class="uk-column-1-2">
        <div>
            <div class="uk-panel uk-panel-box uk-text-truncate">
                <div class="uk-margin">
                    <div>Nome do Projeto</div>
                    <input type="text" name="proj_nome" id="proj_nome" class="uk-input uk-form-width-large" placeholder="Ex: Crud Java Spring" require="">
                </div>                
                <div class="uk-margin">
                    <div>Categoria</div>
                    <select type="text" name="cat_proj" id="cat_proj" class="uk-select uk-form-width-large" require="">
                        <option>Programação</option>
                        <option>UI and UX</option>
                    </select>
                </div>
                <div class="uk-margin">
                    <div>Endereço Web</div>
                    <input type="text" name="proj_desc" id="proj_desc" class="uk-input uk-form-width-large" placeholder="Ex: www.Github.com/projeto" require="">
                </div>
                <div class="uk-margin">
                    <div>Descrição do Projeto</div>
                    <textarea class="uk-textarea" rows="2" id="proj_desc" name="proj_desc" class="uk-textarea uk-form-width-large" placeholder="Descrição..."></textarea>
                </div>
                </div>
            </div>
            <div>
                as opposed to using 'Content here, 
                content here', making it look like
                readable English. Many desktop pub
                lishing packages and web page edito
                rs now use Lorem Ipsum as their de
                fault model text, and a search for 
                'lorem ipsum' will uncover many we
                b sites still in their infancy. Va
                rious versions have evolved over th
                years, sometimes by accident, some
                times on purpose (injected humour a
                nd the like).
                <p uk-margin><center><button class="uk-button uk-button-large bt-safe" id="salvar">Salvar Projeto</button></center></p>
            </div>
        </div>
    </div>
</div>
<?php include '../structure/footer.php'; ?>