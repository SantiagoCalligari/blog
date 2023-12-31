<script lang="ts">
  import Article from "./Article.svelte";
  import Closetags from "../Closetags.svelte";
  export let user: any;
  export let articles: {
    id: number;
    title: string;
    content: string;
    createdAt: Date;
    updatedAt: Date;
    published: boolean;
  }[] = [];
  function formatDate(date: any) {
    const opt = { month: "short", day: "numeric", year: "numeric" };
    return new Intl.DateTimeFormat("en-US", opt).format(date);
  }
  export let title: string = "/etc";
</script>

<svelte:head>
  <title>ls {title} | more [Santiago Calligari]</title>
</svelte:head>
<div
  class="bg-dark text-light m-auto px-3 py-2 mb-5 rounded"
  style="min-width: 800px; min-height: 600px;"
>
  <Closetags />
  <div class="col">
    <div class="row mx-1 inline-block">
      <ul class="list-inline">
        <li class="list-inline-item text-secondary">❯</li>
        <li class="list-inline-item text-warning">ls</li>
        <li class="list-inline-item text-secondary">{title}</li>
        <li class="list-inline-item">|</li>
        <li class="list-inline-item text-warning">more</li>
      </ul>
    </div>
    {#each articles as article}
      <Article
        {user}
        id={article.id}
        name={article.title}
        size={article.content.length}
        date={formatDate(article.updatedAt).replace(",", "")}
      />
    {/each}
  </div>
</div>
