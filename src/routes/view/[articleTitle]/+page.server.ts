import prisma from '$lib/prisma';
import type { PageServerLoad } from './$types';

export const load: PageServerLoad = async ({ params }) => {
  const title = params.articleTitle.replace(/-/g, ' ');
  const article = await prisma.post.findUnique({
    where: {
      title: title,
    },
  });
  console.log(article)
  return {
    props: {
      article,
    },
  };

};
