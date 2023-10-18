<section style="padding: 20px 1px">
              <div class="row justify-content-center form-business">
                <!-- col -->
                <div class="col-lg-7 col-md-8">
                    <div class="single-booking">
                        <h3>Shhpping Information</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Reserve Place</label>
                                        <select id="slelectID" wire:model="place">
                                            <option selected >Select</option>
                                            <option value="1">From the branch</option>
                                         
                                        </select>
                                    </p>
                                           @error('place')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Branch name</label>
                                        <select wire:model="branch">
                                            <option selected >Select</option>

                                          <option value="1">From the branch</option>

                                        </select>

                                    </p>
                                           @error('branch')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Address</label>
                                        <input type="text" wire:model="Address"/>
                                    </p>
                                           @error('Address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                        </form>
                    </div>

                  <button type="button" class="next elgazal-theme-btn" wire:click='secondSubmit'>Next</button>

                    <!-- /NEXT BUTTON-->
                </div>
                <!-- /col -->
            </div>
</section>