<div class="row">
  <div class="col-md-8">
    <div class="w3-card-4">
      <!-- Modal -->
      <div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title w3-teal text-white" id="addModalLabel">Novo Setor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label>Setor</label>
                  <input type="text" class="form-control" wire:model="name" >
                </div>

                <div class="form-group">
                  <label>Descrição</label>
                  <input type="text" class="form-control" wire:model="description" >
                </div>

                <div class="form-group">
                  <label>Descrição Longa</label>
                  <textarea name="" id="" cols="100" rows="5" wire:model="body"></textarea>
                  <input type="text" class="form-control"  >
                </div>

                <div class="form-group">
                  <label>Ordem</label>
                  <input type="number" class="form-control" wire:model="position" >
                </div>

                <div class="form-group">
                  <label>Imagem</label>
                  <input type="file" class="form-control" wire:model="image" >
                </div>
                
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="active">
                  <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary"wire:click.prevent="store()">Salvar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


