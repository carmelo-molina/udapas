<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card p-4" style="width: 100%; max-width: 400px;">
    <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>

    <form action="<?= base_url('ingresar'); ?>" method="POST">
        <?= csrf_field(); ?>
      <div class="mb-3">
        <label for="emailInput" class="form-label">Dirección de Email</label>
        <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Ingresa tu email" required>
      </div>
      <div class="mb-3">
        <label for="passwordInput" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="passwordInput" placeholder="Contraseña" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Recordarme</label>
      </div>
      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
    
    <div class="text-center mt-3">
      <a href="#">¿Olvidaste tu contraseña?</a>
      <p class="mt-2">¿No tienes cuenta? <a href="<?= base_url('registrar'); ?>">Regístrate</a></p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>

