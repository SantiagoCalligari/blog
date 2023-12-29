<script>
  // Import markdown conversion library
  import { Marked } from "marked";

  // Declare a variable to store the markdown data
  import { markedHighlight } from "marked-highlight";
  import hljs from "highlight.js";

  let markdown = "";
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
<div class="grid">
  <div class="row">
    <div class="col">
      <div class="form-outline">
        <textarea
          class="form-control"
          id="textAreaExample1"
          bind:value={markdown}
          placeholder="Enter markdown here"
          style="min-height: 500px"
          rows="4"
        ></textarea>
      </div>
    </div>
    <div class="col">
      <div class="preview">
        {@html marked.parse(markdown)}
      </div>
    </div>
  </div>
</div>
