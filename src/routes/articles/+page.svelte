<script lang="ts">
  import ArticleTerminal from "../../components/Article/ArticleTerminal.svelte";
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

<div class="d-flex">
  <ArticleTerminal {articles}></ArticleTerminal>/>
</div>
