<script lang="ts">
  import ArticleTerminal from "../../components/Article/ArticleTerminal.svelte";
  import type { PageData } from "./$types";

  export let data: PageData;
  let posts = data.props.posts;
  let user = data.props.user;

  let articles = posts;
</script>

<div class="d-flex">
  <ArticleTerminal {articles} {user}></ArticleTerminal>/>
</div>
