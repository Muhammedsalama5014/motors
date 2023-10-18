<section style="padding: 20px 1px">
       <div class="row justify-content-center" id="cardSection">
                <!-- col -->
                <div class="col-lg-7 col-md-8">
                    <!-- cards -->
                    <div class="single-booking">
                        <h3>Personal Information </h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <label>ID Number</label>
                                        <input type="number" placeholder="ID Number" wire:model="ID_Number"  />
                                    </p>
                                         @error('ID_Name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <label>ID Name</label>
                                        <input type="text" placeholder="ID Name" wire:model="ID_Name" />
                                    </p>
                                     @error('ID_Name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <label>Birthday</label>
                                        <input type="date" wire:model="Birthday"/>
                                    </p>
                                         @error('Birthday')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <label>License Expiry Date</label>
                                        <input type="datetime-local" wire:model="Expiry_Date"/>
                                    </p>
                                         @error('Expiry_Date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <label>Job</label>
                                        <input type="text" placeholder="Job" wire:model="Job"/>
                                    </p>
                                         @error('Job')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <label>Work Address</label>
                                        <input type="text" placeholder="Work Address" wire:model="Work_Address" />
                                    </p>
                                         @error('Work_Address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Home Address</label>
                                        <input type="text" placeholder="Home Address" wire:model="Home_Address" />
                                    </p>
                                         @error('Home_Address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /cards -->
                    <!-- NEXT BUTTON-->
                    <button type="button" class="next elgazal-theme-btn" wire:click='firstSubmit'>Next</button>
                    <!-- /NEXT BUTTON-->
                </div>
                <!-- /col -->
            </div>
</section>