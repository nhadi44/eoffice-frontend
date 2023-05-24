 <x-modal modalId="delete-master-employee" modalHeaderBackground="bg-danger" modalTitleColor="text-light"
     modalSize="''">
     <x-slot:modalTitle>
         Hapus Master Karyawan
     </x-slot:modalTitle>
     <x-slot:modalBody>
         <form action="">
             @csrf
             <input type="text" id="id" name="id" hidden>
             <span>Apakah anda yakin ingin menghapus data karyawan <strong><span id="nama_karyawan"></span></strong>
                 ?</span>
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
