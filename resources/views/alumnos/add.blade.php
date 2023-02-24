@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <div>
                    <div class="dropdown">
                        <button class="btn btn-secondary d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            New
                        </button>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                                Document
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path></svg>
                                Message
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path><path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>                            
                                Product
                            </a>
                            <div role="separator" class="dropdown-divider my-1"></div>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                                My Plan
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-gray-800 d-inline-flex align-items-center me-2">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </button>
                    <button class="btn btn-gray-800 d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                        Reports
                        <svg class="icon icon-xs ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            Products
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>                            
                            Customers
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            Orders
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" clip-rule="evenodd"></path></svg>
                            Console
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-800 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            All Reports
                        </a>
                    </div>
                </div>
            </div>


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">REGISTRAR NUEVO ALUMNO <hr></h2>
        
        <form class="forms-sample" method="post" action="{{ route('alumno.store') }}" enctype="multipart/form-data">
            @csrf

            
                
                    
            <h2 class="h5 mb-4">Información General</h2>
            <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Foto del Alumno</label>
                    <div class="col-sm-9">
                      <input type="file" name="foto_estudiante" class="form-control" />
                    </div>
                </div>
                

            <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre(s)</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" required placeholder="Nombre"/>
                     
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Apellido paterno</label>
                    <div class="col-sm-12">
                      <input type="text" name="primer_apellido" class="form-control" placeholder="Apellido paterno" />
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Apellido materno</label>
                    <div class="col-sm-12">
                      <input type="text" name="segundo_apellido" class="form-control" placeholder="Apellido materno" />
                    </div>
                </div>
              

              <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Genero</label>
                    <select name="sexo" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div>

               

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Fecha Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="number" name="fecha_nacimiento" class="form-control" placeholder="Fecha nacimiento"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">CURP</label>
                    <div class="col-sm-12">
                      <input type="text" name="curp" class="form-control" placeholder="CURP" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Edad</label>
                    <div class="col-sm-12">
                      <input type="number" name="edad" class="form-control" required placeholder="Edad" />
                    </div>
                </div>

                
                

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tipo de sangre</label>
                    <select name="tipo_sangre" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                    </select>
                </div>



                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Nivel escolar </label>
                    <select name="nivel_escolar" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Primaria</option>
                            <option>Prescolar</option>
                    </select>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Grado</label>
                    <div class="col-sm-12">
                      <input type="number" name="grado" class="form-control" required placeholder="Grado" />
                    </div>
                </div>

              
            
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Grupo</label>
                    <div class="col-sm-12">
                      <input type="text" name="grupo" class="form-control" placeholder="Grupo"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Periodo escolar</label>
                    <select name="periodo_escolar" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>2022-2023</option>
                            <option>2021-2022</option>
                    </select>
                </div>

                <h2 class="h5 my-4">Datos Domicilio</h2>
                            
                
               

                


                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Domicilio</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio" class="form-control" placeholder="Domicilio"/>
                    </div>
                </div>

                

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">En caso de emergencia hablar a</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre_emergencia" class="form-control" placeholder="Nombre"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. Emergencia</label>
                    <div class="col-sm-12">
                      <input type="number" name="tel_emergencia" class="form-control" placeholder="Teléfono"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Persona autorizada</label>
                    <div class="col-sm-12">
                      <input type="text" name="persona_autorizada" class="form-control" placeholder="Nombre persona autorizada"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Parentesco</label>
                    <div class="col-sm-12">
                      <input type="text" name="parentesco" class="form-control" placeholder="Parentesco"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. 1 Autorizada</label>
                    <div class="col-sm-12">
                      <input type="number" name="tel1_autorizada" class="form-control" placeholder="Teléfono"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. 2 Autorizada</label>
                    <div class="col-sm-12">
                      <input type="number" name="tel2_autorizada" class="form-control" placeholder="Teléfono"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Domicilio persona autorizada</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio_autorizada" class="form-control" placeholder="Domicilio"/>
                    </div>
                </div>

                <!-- <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Persona autorizada 2</label>
                    <div class="col-sm-12">
                      <input type="text" name="persona_autorizada2" class="form-control"placeholder="Teléfono"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Parentesco 2</label>
                    <div class="col-sm-12">
                      <input type="text" name="parentesco2" class="form-control" placeholder="Nombre persona autorizada"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. 1 Autorizada 2</label>
                    <div class="col-sm-12">
                      <input type="text" name="tel1_autorizada2" class="form-control" placeholder="Teléfono"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. 2 Autorizada 2</label>
                    <div class="col-sm-12">
                      <input type="text" name="tel2_autorizada2" class="form-control" placeholder="Teléfono"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Domicilio persona autorizada 2</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio_autorizada2" class="form-control" placeholder="Domicilio"/>
                    </div>
                </div>-->




            
                
               
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Observación</label>
                    <textarea name="observ" class="form-control" rows="4" cols="50"></textarea>
                </div>
            </div>
             
            
          
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Registrar Alumno</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection