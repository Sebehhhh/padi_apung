<!-- Header Start -->
<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>

    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <li class="nav-item dropdown">
          <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="Foto Profil" width="35" height="35"
              class="rounded-circle">
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body">
              {{-- <a href="{{ route('student-profile') }}" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-user fs-6"></i>
                <p class="mb-0 fs-3">Profil Saya</p>
              </a> --}}
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              <button type="button" class="btn btn-outline-primary mx-3 mt-2 d-block" id="logout-btn">
                Logout
              </button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Header End -->

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const logoutBtn = document.getElementById('logout-btn');
    if (logoutBtn) {
      logoutBtn.addEventListener('click', function () {
        Swal.fire({
          title: 'Yakin ingin logout?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya, logout!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
          }
        });
      });
    }
  });
</script>