<script lang="ts">
  import "../app.scss";
  import Navbar from "../components/Navbar.svelte";
  import Logo from "../components/Logo.svelte";

  import type { PageData } from "./$types";
  export let data: PageData;
</script>

<Navbar />
<Logo />
<slot />
