<script lang="ts">
  import Repository from "./Repository.svelte";
  import Closetags from "../Closetags.svelte";
  let repositories = [
    {
      link: "https://github.com/SantiagoCalligari/blog",
      description:
        " blog.calligari.ar inspired on https://blog.falconindy.com/",
    },
    {
      link: "https://github.com/SantiagoCalligari/GarchLinux",
      description: "Mi propia distribucion de linux, creada con alci.",
    },
    {
      link: "https://github.com/SantiagoCalligari/gitget",
      description:
        "gitget it's a cli tool that shows every github repo that a user has",
    },
    {
      link: "https://github.com/SantiagoCalligari/http_server",
      description:
        "A project to learn routing, security, parsing and compressing algorithms.",
    },
    {
      link: "https://github.com/SantiagoCalligari/multimove",
      description:
        "Optimize file transfers with Multimove, a fast and efficient tool.",
    },
  ];
</script>

<div
  class="bg-dark text-light m-auto px-3 py-2 mb-5 rounded"
  style="min-width: 1000px; min-height: 500px;"
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
