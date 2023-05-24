 <x-modal modalId="edit-master-positions" modalHeaderBackground="bg-warning" modalTitleColor="text-dark" modalSize="''">
     <x-slot:modalTitle>
         Form Edit Master Jabatan
     </x-slot:modalTitle>
     <x-slot:modalBody>
         <form action="">
             @csrf
             <input type="text" id="id" name="id" hidden>
             <div class="form-group mb-3">
                 <label for="kode_jabatan" class="form-label">Kode Divisi</label>
                 <input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan"
                     placeholder="Kode Divisi">
             </div>
             <div class="form-group">
                 <label for="nama_jabatan" class="form-label">Nama Divisi</label>
                 <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan"
                     placeholder="Nama Divisi">
             </div>
     </x-slot:modalBody>
     <x-slot:modalFooter>
         <div class="modal-footer">
             <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                 <i class="bx bx-x d-block d-sm-none"></i>
                 <span class="d-none d-sm-block">Batal</span>
             </button>
             <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                 <i class="bx bx-check d-block d-sm-none"></i>
                 <span class="d-none d-sm-block">Simpan</span>
             </button>
         </div>
     </x-slot:modalFooter>
     </form>
 </x-modal>
