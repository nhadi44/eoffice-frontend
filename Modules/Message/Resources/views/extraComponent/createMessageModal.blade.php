 <x-modal modalId="border-less" modalHeaderBackground="bg-primary" modalTitleColor="" modalSize="''">
     <x-slot:modalTitle>
         Buat Surat Baru
     </x-slot:modalTitle>
     <x-slot:modalBody>
         <div class="row">
             <div class="col-md-6">
                 <a href="{{ route('eoffice.surat.surat-baru-internal') }}"
                     class="btn btn-success d-flex flex-column align-items-center justify-center">
                     <i class="bi bi-envelope mb-3" style="font-size: 20px"></i>
                     <span>Surat Internal (BIT)</span>
                 </a>
             </div>
             <div class="col-md-6">
                 <a href="{{ route('eoffice.surat.surat-baru-external') }}"
                     class="btn btn-danger d-flex flex-column align-items-center justify-center">
                     <i class="bi bi-envelope mb-3" style="font-size: 20px"></i>
                     <span>Surat External (Non BIT)</span>
                 </a>
             </div>
         </div>
     </x-slot:modalBody>
     <x-slot:modalFooter>
     </x-slot:modalFooter>
 </x-modal>
