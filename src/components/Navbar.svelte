<script lang="ts">
  import { page } from "$app/stores";
  let links = ["/", "/code", "/articles"];
  let selected = $page.url.pathname;
</script>

<nav class="navbar navbar-expand bg-body-tertiary sticky-top" style="margin:0;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {#each links as link}
          <li class="nav-item">
            <a
              style="border-right: 2px solid gray;"
              class=" px-5 nav-link {selected === link ? 'active' : ''}"
              aria-current="page"
              href={link}
              on:click={() => (selected = link)}
            >
              {link}
            </a>
          </li>
        {/each}
        <li class="nav-item">
          <a
            class="nav-link px-5 {selected === './create' ? 'active' : ''}"
            aria-current="page"
            href={"./create"}
            on:click={() => (selected = "./create")}
          >
            ./create
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  a:hover {
    background-color: #e8e8e8;
    color: #000;
  }
  .active {
    background-color: #e8e8e8;
    color: #000;
  }
</style>
