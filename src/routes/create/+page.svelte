<script>
  // Import markdown conversion library
  import { Marked } from "marked";

  import { enhance } from "$app/forms";
  // Declare a variable to store the markdown data
  import { markedHighlight } from "marked-highlight";
  import hljs from "highlight.js";

  let markdown = "# hola \0";
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
  <title>./create Article | [Santiago Calligari]</title>
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
<form method="POST" use:enhance>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  <div class="grid" style="margin-left:25%; margin-right:25%">
    <div class="col">
      <div class="mb-3 form-control">
        <label for="title" class="form-label">Title</label>
        <input
          type="text"
          class="form-control"
          name="title"
          id="title"
          value="hola"
        />
      </div>
      <div class="form-outline">
        <textarea
          class="form-control"
          name="body"
          id="textAreaExample1"
          bind:value={markdown}
          placeholder="Enter markdown here"
          style="min-height: 500px"
          rows="4"
        ></textarea>
      </div>
      <div class="preview" style="min-height: 500px">
        {@html marked.parse(markdown)}
      </div>
    </div>
  </div>
</form>
