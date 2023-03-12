
    <div class="row text-center">

        <!--Distance-->
        <div class="col">
            <div class="card mb-5 bshadow" style="width: 24rem;">
                <div class="card-body">
                    <h5 class="card-title">Avstånd</h5>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertCmIn()" type="radio" name="distanceCheck" id="cmInRadio" checked="true">
                        <label class="form-check-label" for="cmInRadio">in</label>
                    </div>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertMFt()" type="radio" name="distanceCheck" id="mFtRadio">
                        <label class="form-check-label" for="mFtRadio">ft</label>
                    </div>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertKmNm()" type="radio" name="distanceCheck" id="kmNmRadio">
                        <label class="form-check-label" for="mFtRadio">nm</label>
                    </div>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertCmIn()" type="radio" name="distanceCheck" id="inCmRadio">
                        <label class="form-check-label" for="inCmRadio">cm</label>
                    </div>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertMFt()" type="radio" name="distanceCheck" id="ftMRadio">
                        <label class="form-check-label" for="ftMRadio">m</label>
                    </div>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertKmNm()" type="radio" name="distanceCheck" id="nmKmRadio">
                        <label class="form-check-label" for="mFtRadio">km</label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" id="distanceFrom"></span>
                        <input type="number" class="form-control" id="distanceValue" onchange="convertDistance()">
                        <span class="input-group-text" id="distanceResult"></span>
                        <span class="input-group-text" id="distanceUnit"></span>
                    </div>
                </div>
            </div>
        </div>

        <!--Weight-->
        <div class="col">
            <div class="card mb-5 bshadow" style="width: 24rem;">
                <div class="card-body">
                    <h5 class="card-title">Vikt</h5>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertKgLbs()" type="radio" name="weightCheck" id="lbsKgRadio" checked="true">
                        <label class="form-check-label" for="cmInRadio">lbs</label>
                    </div>
                    <div class="form-check form-check-inline m-1">
                        <input class="form-check-input" onclick="convertKgLbs()" type="radio" name="weightCheck" id="kgLbsRadio">
                        <label class="form-check-label" for="mFtRadio">Kg</label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" id="weightFrom"></span>
                        <input type="number" class="form-control" id="weightValue" onchange="convertKgLbs()">
                        <span class="input-group-text" id="weightResult"></span>
                        <span class="input-group-text" id="weightUnit"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
