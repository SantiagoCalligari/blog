<script lang="ts">
  import { enhance } from "$app/forms";
</script>

<div class="card mx-auto" style="max-width: 500px; min-height: 300px;">
  <div class="card-header text-center">
    <h3>Sign in</h3>
  </div>
  <div class="card-body">
    <form method="post" use:enhance>
      <div class="form-floating mb-3">
        <input
          type="text"
          name="username"
          class="form-control"
          id="username"
          placeholder="Username"
        />
        <label for="username" class="form-label">Username</label>
      </div>

      <div class="form-floating mb-3">
        <input
          name="password"
          type="password"
          class="form-control"
          id="password"
          placeholder="Password"
        />
        <label for="password" class="form-label">Password</label>
      </div>
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-danger">Sign in</button>
      </div>
    </form>
  </div>
</div>
