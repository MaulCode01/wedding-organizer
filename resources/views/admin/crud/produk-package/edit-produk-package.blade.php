<x-admin-layout>
<x-slot:title>Buat Data Produk - DiaryProject_ia</x-slot:title>

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        {{ $errors->first('kategori') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



</x-admin-layout>
