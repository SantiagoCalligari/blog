<script lang="ts">
  import Article from "./Article.svelte";
  import Closetags from "./Closetags.svelte";
  //im gonna write a list of articles here
  let articles = [
    {
      size: 715,
      date: "Dec 24 2023",
      name: "Aventuras en el Espacio Sideral",
    },
    {
      size: 820,
      date: "Dec 24 2023",
      name: "Misterios de la Tierra Media",
    },
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
        <li class="list-inline-item text-warning">ls</li>
        <li class="list-inline-item text-secondary">/etc</li>
        <li class="list-inline-item">|</li>
        <li class="list-inline-item text-warning">more</li>
      </ul>
    </div>
    {#each articles as article}
      <Article {...article} />
    {/each}
    {#each articles as article}
      <Article {...article} />
    {/each}
  </div>
</div>
