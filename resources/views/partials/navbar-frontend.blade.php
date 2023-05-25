<nav class="navbar navbar-expand-lg bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">RENTAL MOBIL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/home-frontend">Home</a>
          <a class="nav-link {{ ($title === "Katalog Mobil") ? 'active' : ''}}" href="/katalog">Katalog Mobil</a>
          <a class="nav-link {{ ($title === "Rincian Pesanan") ? 'active' : ''}}" href="/pesanan">Pesanan</a>
          <a class="nav-link {{ ($title === "Akun") ? 'active' : ''}}" href="/akun">Akun</a>
          <a class="nav-link disabled me-auto d-flex">Disabled</a>
        </div>
      </div>
    </div>
  </nav>