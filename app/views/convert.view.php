<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Avstånd</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" onclick="convertCmIn()" type="radio" name="cmInCheck" id="cmInRadio" value="option1" checked="true">
                        <label class="form-check-label" for="cmInRadio">cm-in</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" onclick="convertCmIn()" type="radio" name="cmInCheck" id="inCmRadio" value="option2">
                        <label class="form-check-label" for="inCmRadio">in-cm</label>
                    </div>
                    <div class="input-group">
                        <input type="number" class="form-control" id="cmInValue" onchange="convertCmIn()">
                        <span class="input-group-text" id="cmInResult"></span>
                        <span class="input-group-text" id="cmInUnit"></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
