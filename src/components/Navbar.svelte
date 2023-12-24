<script lang="ts">
  import { page } from "$app/stores";
  let links = ["/", "/code", "/articles", "./create", "./logout"];
  let selected = $page.url.pathname;
</script>

<nav class="navbar navbar-expand bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {#each links as link}
          <li class="nav-item px-5">
            <a
              class="nav-link {selected === link ? 'active' : ''}"
              aria-current="page"
              href={link}
              on:click={() => (selected = link)}
            >
              {link}
            </a>
          </li>
        {/each}
      </ul>
    </div>
  </div>
</nav>
