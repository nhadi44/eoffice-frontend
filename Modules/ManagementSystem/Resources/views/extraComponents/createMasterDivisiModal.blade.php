 <x-modal modalId="create-master-division" modalHeaderBackground="bg-primary" modalTitleColor="" modalSize="''">
     <x-slot:modalTitle>
         Form Tambah Master Divisi
     </x-slot:modalTitle>
     <x-slot:modalBody>
         <form action="">

             @csrf
             <div class="form-group mb-3">
                 <label for="kode_divisi" class="form-label">Kode Divisi</label>
                 <input type="text" class="form-control" name="kode_divisi" id="kode_divisi" placeholder="Kode Divisi">
             </div>
             <div class="form-group">
                 <label for="nama_divisi" class="form-label">Nama Divisi</label>
                 <input type="text" class="form-control" name="nama_divisi" id="nama_divisi"
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
