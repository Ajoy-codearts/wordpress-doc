<!-- basic modal -->
<div class="modal fade custom-modal" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Convert to STRATO[SC]</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">        
            <div class="form-group">
              <label for="formGroupExampleInput">Amount</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
              <!-- <span class="inside-input-text">STRATO[GC]</span> -->
            </div>
            <div class="available-balance-content justify-content-end d-flex">
              <p>Available Balance : <span class="available-balance"></span>324,330</p>
              <button type="submit" class="btn custom-btn-fill">MAX</button>        
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-group m-0">
              <label>Gas Fee</label>
            </div>
            <div class="slider-range">
              <input type="range" class="form-range" min="0" max="0.01" step="0.0011" id="customRange3"
                onchange="updateTextInput(this.value)">
              <label for="customRange3" class="form-label"><span id="rangeValEth">0.0044</span> ETH (US $<span
                  id="rangeValueUsd">23.42</span>)</label>
              <span class="range-text-left">Slower</span>
              <span class="range-text-right">Very Fast</span>
            </div>        
            <button type="button" class="cs-button custom-btn-fill m-0">Convert</button>
          </div>
        </form>        
      </div>
    </div>
  </div>

 