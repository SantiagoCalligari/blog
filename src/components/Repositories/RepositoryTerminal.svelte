<script lang="ts">
  import Repository from "./Repository.svelte";
  import Closetags from "../Closetags.svelte";
  export let repositories: { link: string; description: string }[] = [];
</script>

<svelte:head>
  <title>ls /code | more [Santiago Calligari]</title>
</svelte:head>
<div
  class="bg-dark text-light m-auto px-3 py-2 mb-5 rounded"
  style="min-width: 1000px; min-height: 550px;"
>
  <Closetags />
  <div class="col">
    <div class="row mx-1 inline-block">
      <ul class="list-inline">
        <li class="list-inline-item text-secondary">❯</li>
        <li class="list-inline-item text-warning">gitget</li>
        <li class="list-inline-item text-secondary">SantiagoCalligari</li>
      </ul>
    </div>
    <div class="mx-5">
      <div
        class="text-monospace text-info"
        style="padding: 0; margin:0; height:24px"
      >
        SantiagoCalligari
      </div>
      <div class="text-monospace" style="padding: 0; margin:0; height:24px">
        <span class="text-white">│</span>
      </div>

      {#each repositories as repository, i}
        {#if i > 0}<div style="padding: 0; margin:0; height:24px">
            <span class="text-white">│</span>
          </div>
        {/if}
        <Repository {...repository} />
      {/each}
    </div>
  </div>
</div>
