
@if($currentStep == 1 )
   @include('livewire.personal') 
@endif
@if($currentStep == 2 )
   @include('livewire.bussiness') 
    
@endif
@if($currentStep == 3 )
   @include('livewire.payment') 
    
@endif

@if($currentStep == 4 )
   @include('livewire.submitform') 
    
@endif
@if($currentStep == 5 )
   @include('livewire.finish') 
    
@endif

