<script lang="ts">
  import ArticleTerminal from "../components/Article/ArticleTerminal.svelte";
  let articles = [
    {
      size: 600,
      date: "Dec 24 2023",
      name: "Epicidad Galáctica",
    },
    {
      size: 500,
      date: "Dec 24 2023",
      name: "Risas Subatómicas",
    },
    {
      size: 900,
      date: "Dec 24 2023",
      name: "Odisea Cibernética",
    },
  ];
  import { enhance } from "$app/forms";
  import type { PageData } from "./$types";

  export let data: PageData;
</script>

<div class="d-flex">
  <ArticleTerminal {articles} />
</div>
{#if data.username !== null}
  <p>Hello {data.username}</p>
  <div style="position:absolute; right:0; bottom:0">
    <form method="post" action="?/logout" use:enhance>
      <input type="submit" value="Sign out" />
    </form>
  </div>
{:else}
  <div style="position:absolute; right:0; bottom:0">
    <a href="/login">Log In</a>
  </div>
{/if}
