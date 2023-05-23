 <x-modal modalId="delete-master-division" modalHeaderBackground="bg-danger" modalTitleColor="text-light" modalSize="''">
     <x-slot:modalTitle>
         Hapus Master Divisi
     </x-slot:modalTitle>
     <x-slot:modalBody>
         <form action="">
             @csrf
             <input type="text" name="id" id="id" hidden>
             <p>Apakah anda yakin ingin menghapus data <strong><span id="nama_divisi"></span></strong>?</p>
     </x-slot:modalBody>
     <x-slot:modalFooter>
         <div class="modal-footer">
             <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                 <i class="bx bx-x d-block d-sm-none"></i>
                 <span class="d-none d-sm-block">Batal</span>
             </button>
             <button type="button" class="btn btn-danger ms-1" data-bs-dismiss="modal">
                 <i class="bx bx-check d-block d-sm-none"></i>
                 <span class="d-none d-sm-block">Hapus</span>
             </button>
         </div>
     </x-slot:modalFooter>
     </form>
 </x-modal>
