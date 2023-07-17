<nav class="navbar navbar-expand-lg bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">PANEL ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === "Home Admin") ? 'active' : ''}}" href="/home">Home</a>
        <a class="nav-link {{ ($title === "Kendaraan Mobil") ? 'active' : ''}}" href="/mobil">Mobil</a>
        <a class="nav-link {{ ($title === "Data Sewa") ? 'active' : ''}}" href="/sewa">Data Sewa</a>
        <a class="nav-link {{ ($title === "Data User") ? 'active' : ''}}" href="/user">Data User</a>
        <a class="nav-link disabled me-auto d-flex">Disabled</a>
      </div>
      <div class="navbar-nav ms-auto">
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-secondary"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
      </div>
    </div>
  </div>
</nav>