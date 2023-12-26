<script lang="ts">
  import Article from "./Article.svelte";
  import Closetags from "../Closetags.svelte";
  export let articles: { size: number; date: string; name: string }[] = [];
</script>

<svelte:head>
  <title>ls /etc | more [Santiago Calligari]</title>
</svelte:head>
<div
  class="bg-dark text-light m-auto px-3 py-2 mb-5 rounded"
  style="min-width: 1000px; min-height: 500px;"
>
  <Closetags />
  <div class="col">
    <div class="row mx-1 inline-block">
      <ul class="list-inline">
        <li class="list-inline-item text-secondary">❯</li>
        <li class="list-inline-item text-warning">ls</li>
        <li class="list-inline-item text-secondary">/etc</li>
        <li class="list-inline-item">|</li>
        <li class="list-inline-item text-warning">more</li>
      </ul>
    </div>
    {#each articles as article}
      <Article {...article} />
    {/each}
  </div>
</div>
