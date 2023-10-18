<section style="padding: 20px 1px">
   <div class="container">
         <div class="row justify-content-center form-business">
                <!-- col -->
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="small pb-5">Please select payment method</p>
                            <!-- cards -->
                            <div class="row row-cols-1 row-cols-lg-3 g-4 pb-1">
                                <div class="col">
                                    <div class="card text-center h-100 py-5">
                                        <img style="width: 100%" src="{{asset('assetscar/img/mada.png')}}">
                                        <div class="card-body px-0">
                                            <h5 class="card-title title-binding">Mada Payment Method</h5>
                                            <p class="card-text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-center h-100 py-5">
                                        <img style="width: 100%" src="{{asset('assetscar/img/master-card.jpg')}}">
                                        <div class="card-body px-0">
                                            <h5 class="card-title title-binding">Master Card Payment Method</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-center h-100 py-5">
                                        <img style="width: 100%" src="{{asset('assetscar//img/cash.png')}}">
                                        <div class="card-body px-0 pt-4">
                                            <h5 class="card-title title-binding">Cash On Delivery</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-booking">
                                <h3>Card Information</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <label>Card Name</label>
                                                <input type="text" placeholder="Your Card Name" wire:model="card_name" />
                                            </p>
                                             @error('card_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <label>Card Number</label>
                                                <input wire:model="card_number" type="text" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19" />
                                            </p>
                                             @error('card_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <label>Expiry Date</label>
                                                <input type="text" wire:model="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5" />
                                            </p>
                                             @error('exp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <label>CVV</label>
                                                <input type="text" wire:model="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3" />
                                            </p>
                                             @error('cvcpwd')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="order-summury-box">
                                <h3>Order Summury</h3>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>$270</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handling</td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td>Order Total</td>
                                        <td>$270</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /cards -->
                    <!-- NEXT BUTTON-->
                                 <button type="button" class="next elgazal-theme-btn" wire:click='thirdSubmit'>Next</button>

                    <!-- /NEXT BUTTON-->
                </div>
                <!-- /col -->
            </div>
   </div>
        
</section>