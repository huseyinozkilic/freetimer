<?php $this->layout('template') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Garden App</div>

                <div class="card-body" id="step1">
                    <form id="gardenForm">
                        <h5 class="card-title mb-4 text-center">How many bags of topsoil needed for my garden?</h5>

                        <div class="alert alert-danger d-none alertbox" role="alert">
                            All fields are required!
                        </div>

                        <fieldset class="form-group">
                            <div class="row mb-4">
                                <legend class="col-form-label col-sm-2 pt-0">Measurement Unit</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="measurementunit" id="MeasurementUnitMeter" value="meter" checked>
                                        <label class="form-check-label" for="MeasurementUnitMeter">
                                            Meters
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="measurementunit" id="MeasurementUnitFeet" value="meter">
                                        <label class="form-check-label" for="MeasurementUnitFeet">
                                            Feets
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="measurementunit" id="MeasurementUnitYard" value="meter">
                                        <label class="form-check-label" for="MeasurementUnitYard">
                                            Yards
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="row mb-4">
                                <legend class="col-form-label col-sm-2 pt-0">Depth Unit</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="depthmeasurementunit" id="MeasurementUnitCentimeter" value="centimeter" checked>
                                        <label class="form-check-label" for="MeasurementUnitCentimeter">
                                            Centimeters
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="depthmeasurementunit" id="MeasurementUnitInch" value="inch">
                                        <label class="form-check-label" for="MeasurementUnitInch">
                                            Inches
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row mb-4">
                            <label for="gardenwidth" class="col-sm-2 col-form-label">Garden Width</label>
                            <div class="col-sm-10">
                                <input type="number" name="width" class="form-control" id="gardenwidth" placeholder="150">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="gardenlength" class="col-sm-2 col-form-label">Garden Length</label>
                            <div class="col-sm-10">
                                <input type="number" name="length" class="form-control" id="gardenlength" placeholder="150">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-primary" id="subitform">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-body d-none" id="step2">
                    <div class="container mt-5 mb-5 d-flex justify-content-center">
                        <div class="card px-1 py-4">
                            <form>
                                <div class="card-body">
                                    <h4 class="card-title mb-4 text-center">Results:</h4>
                                    <hr>
                                    <h5 class="card-title mb-3 text-center">You need</h5>
                                    <h2 class="card-title mb-4 text-center" id="bags"></h2>
                                    <h5 class="card-title mb-3 text-center">bags of topsoil</h5>
                                    <hr>
                                    <h2 class="card-title mb-1 mt-5 text-center">£ <font id="price"></font></h2>
                                    <h6 class="card-title mb-5 text-center">(inc VAT)</h6>
                                    <button type="button" class="btn btn-primary btn-block confirm-button addtobasket">Add to Basket</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body d-none" id="step3">
                    <div class="container mt-5 mb-5 d-flex justify-content-center">
                        <div class="card px-1 py-4">
                            <div class="card-body">
                                <h4 class="card-title mb-4 text-center">Congrats, your order submited.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
