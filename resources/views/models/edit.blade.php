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
                     <form action="{{ route('modal_update',$vehiclemodel->id) }}" method="Post">
                         @csrf
                        
                           <div class="row">
                                <div class="bd-example">
                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                        
                                            <input type="text" name="modal_name" class="form-control" value="{{ $vehiclemodel->modal_name }}"  id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.model_name') }}</label>

                                        </div>
                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                            
                                            <input type="text" name="seating_capacity"  value="{{ $vehiclemodel->seating_capacity }}" class="form-control" id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.seating_capacity') }}</label>
                                        </div>

                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                        
                                            <input type="text" name="length" class="form-control"  value="{{ $vehiclemodel->length }}"  id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.length') }}</label>
                                        </div>
                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                            
                                            <input type="text"  name="width" class="form-control"  value="{{ $vehiclemodel->width }}" id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.width') }}</label>
                                        </div>

                             
                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                        
                                            <input type="text" name="delivery_support" class="form-control"  value="{{ $vehiclemodel->delivery_support }}"  id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.delivery_support') }}</label>
                                        </div>
                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                            
                                            <input type="text"  name="delivery_price" class="form-control"  value="{{ $vehiclemodel->delivery_price }}" id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.delivery_price') }}</label>
                                        </div>

                               
                                        <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                        
                                            <input type="text" name="maximum_capacity" class="form-control"  value="{{ $vehiclemodel->maximum_capacity }}"  id="floatingInput"  placeholder="Place Holder">
                                            <label for="floatingInput">{{ __('view.maximum_capacity') }}</label>
                                        </div>
                                        
                                        <!-- <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                        
                                        <input type="text" name="minimum_fare_km" class="form-control"  id="floatingInput"  placeholder="Place Holder">
                                        <label for="floatingInput">{{ __('view.minimum_fare_km') }}</label>
                                    </div>
                                    <div class="form-floating custom-form-floating custom-form-floating-sm form-group col-md-6 mb-3">
                                        
                                        <input type="text" name="minimum_fare_bdt" class="form-control"  id="floatingInput"  placeholder="Place Holder">
                                        <label for="floatingInput">{{ __('view.minimum_fare_bdt') }}</label>
                                    </div> -->

                                        <div class="form-group col-sm-6">
                                            <label class="form-label">{{ __('view.status') }}</label>
                                            <select name="status" class="selectpicker form-control" data-style="py-0">
                                                <option>Select Status</option>
                                                <option value="1" >Active</option>
                                                <option value="0">Decline</option>
                                            </select>
                                         </div>


                                </div>
                                <div class="form-group col-md-3" >
                                        <button type="submit" class="btn btn-primary" >{{ __('view.model_add') }}</button>
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