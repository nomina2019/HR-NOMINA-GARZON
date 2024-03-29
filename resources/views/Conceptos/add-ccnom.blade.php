@extends('layouts.app')

@section('content')

                <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                  <h4 class="page-title">Nuevo Concepto</h4>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                          <div class="card-box">
                              <form action="#">
                                  <div class="form-group row">
                                      <label class="col-form-label col-md-2">Código</label>
                                      <div class="col-md-2" >
                                      <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-form-label col-md-2">Descripción</label>
                                      <div class="col-md-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tipo</label>
                                            <div class="col-md-10">
                                                <select class="select">
                                                    <option>--Selecione--</option>
                                                    <option value="01">ASIGNACION</option>
                                                    <option value="02">DEDUCCION</option>
                                                    <option value="03">PATRONAL</option>
                                                </select>
                                            </div>
                                  </div>


                                  <div class="form-group row">
                                      <label class="col-form-label col-md-2">Small Input</label>
                                      <div class="col-md-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea cols="30" rows="4" class="form-control"></textarea>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-form-label col-md-2">Tipo</label>
                                      <div class="col-md-10">
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="radio"> Asignación
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="radio"> Deducción
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="radio"> Patronal
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                        <label class="display-block">Estatus</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
                                <label class="form-check-label" for="product_active">
                                Activo
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
                                <label class="form-check-label" for="product_inactive">
                                Inactivo
                                </label>
                                </div>
                                    </div>
                                    <div class="m-t-20 text-center">
                                        <button class="btn btn-primary submit-btn">Crear Concepto</button>
                                    </div>

                              </form>
                          </div>

                        </form>
                    </div>
                </div>


                <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="card-title">Basic Inputs</h4>
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Text Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Disabled Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Readonly Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="readonly" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Placeholder</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Placeholder">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">File input</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Default select</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>-- Select --</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Radio</label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Option 1
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Option 2
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Option 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Checkbox</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Option 1
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Option 2
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Option 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Textarea</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Input Addons</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div>
                                            <input class="form-control" type="text">
											<div class="input-group-append">
													<button class="btn btn-primary" type="button">Button</button>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                  </div>

@endsection
