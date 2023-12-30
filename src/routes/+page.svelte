<script lang="ts">
  import ArticleTerminal from "../components/Article/ArticleTerminal.svelte";
  import { enhance } from "$app/forms";
  import type { PageData } from "./$types";
  export let data: PageData;
  let articles = data.props.posts;
  let user = data.props.user;
</script>

<div class="d-flex">
  <ArticleTerminal {articles} {user} />
</div>
{#if user.username !== null}
  <p>Hello {user.username}</p>
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
