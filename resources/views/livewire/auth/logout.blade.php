<div x-data>
<button
@click="Swal.fire({
            title: 'Yakin mau logout?',
            text: 'Sesi kamu akan diakhiri.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.logout()
            }
        })"
         class="btn btn-outline-danger">
    <i class="ti ti-logout"></i> Logout
</button>
</div>
{{-- 
@push('scripts')
<script>
    document.addEventListener('livewire:load', () => {
        window.livewire.on('confirm-logout', () => {
            Swal.fire({
                title: 'Yakin mau keluar?',
                text: "Sesi kamu akan diakhiri.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.dispatch('logoutConfirmed')
                }
            });
        });
    });
</script>
@endpush --}}
