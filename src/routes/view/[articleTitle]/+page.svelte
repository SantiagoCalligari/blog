<script lang="ts">
  import type { PageData } from "./$types";
  export let data: PageData;
  let article = data.props.article;
  console.log(article);
  import { Marked } from "marked";

  import { markedHighlight } from "marked-highlight";
  import hljs from "highlight.js";

  let markdown = article.content;
  const marked = new Marked(
    markedHighlight({
      langPrefix: "hljs language-",
      highlight(code, lang, _) {
        const language = hljs.getLanguage(lang) ? lang : "plaintext";
        return hljs.highlight(code, { language }).value;
      },
    }),
  );
  marked.use({ gfm: true });
</script>

<svelte:head>
  <title>./view {article.title} | [Santiago Calligari]</title>
</svelte:head>
<link
  href="
https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/base16/one-light.min.css
"
  rel="stylesheet"
/>
<link
  href="
https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.5.0/github-markdown-light.css
"
  rel="stylesheet"
/>
<div style="margin-left:25%; margin-right:25%; padding-bottom: 20rem">
  <div class="preview">
    {@html marked.parse(markdown)}
  </div>
</div>
