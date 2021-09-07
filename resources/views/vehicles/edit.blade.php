@extends('theme.header')

@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <div>
                                  <h1>{{ __('view.model_edit') }}</h1>
                                
                              </div>
                              <div>
                                  <a href="{{ url('models')  }}" class="btn btn-link btn-soft-light">
                                  {{ __('view.model_list') }}
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="{{ asset('/assets/images/dashboard/top-header.png') }}" alt="header" class="img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
      <div>
         <div class="row">
        
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <!-- <h4 class="card-title">New User Information</h4> -->
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <form>
                           <div class="row">
                           <div class="bd-example">
                                <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                 
                                 <input type="text" class="form-control"  id="floatingInput"  placeholder="Place Holder">
                                 <label for="floatingInput">{{ __('view.field') }}</label>
                              </div>
                              <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                
                                 <input type="text" class="form-control" id="floatingInput"  placeholder="Place Holder">
                                 <label for="floatingInput">{{ __('view.field') }}</label>
                              </div>
                              <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                
                                 <input type="text" class="form-control"  id="floatingInput"  placeholder="Place Holder">
                                 <label for="floatingInput">{{ __('view.field') }}</label>
                              </div>
                              <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                <input type="email" class="form-control" id="floatingInput"  placeholder="Place Holder">
                                <label for="floatingInput">{{ __('view.field') }}</label>
                            </div>
                            </div>
                            
                            
                                <fieldset class="mb-3">
                                    <legend>Radios buttons</legend>
                                    <div class="form-check">
                                        <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
                                        <label class="form-check-label" for="exampleRadio1">{{ __('view.field') }}</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
                                        <label class="form-check-label" for="exampleRadio2">{{ __('view.field') }}</label>
                                    </div>
                                </fieldset>
                                <div class="form-group col-sm-6 mb-3">
                                    <label class="form-label" for="customFile">{{ __('view.field') }}</label>
                                    <input type="file" class="form-control" id="customFile">
                                </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="add2">{{ __('view.field') }}</label>
                                 <input type="text" class="form-control" id="add2" placeholder="Street Address 2">
                              </div>
                              
                              <div class="form-group col-sm-6">
                                 <label class="form-label">{{ __('view.field') }}</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select Country</option>
                                    <option>Caneda</option>
                                    <option>Noida</option>
                                    <option >USA</option>
                                    <option>India</option>
                                    <option>Africa</option>
                                 </select>
                              </div>
                              
                                    <div class="bd-example form-group col-md-6 ">
                                       
                                        <label class="form-label" for="add2">{{ __('view.field') }}</label>
                                            <input type="text" class="form-control vanila-datepicker" placeholder="Date Picker">
                                       
                                    </div> 
                                  
                                   <div class="form-group col-sm-6 mb-3">
                                   
                                   </div>
                                   <div class="form-group col-md-3" >
                                       
                                   </div>
                                    <div class="form-group col-md-3" >
                                    <button type="submit" class="btn btn-primary" >{{ __('view.model_update') }}</button>
                                   </div>
    
                           </div>
                           
                           
                          
                        </form>
                     </div>
                  </div>
               </div>
           
         </div>
      </div>
      </div>
      

      @endsection