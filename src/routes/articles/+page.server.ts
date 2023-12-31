import prisma from "$lib/prisma";
import type { Actions, PageServerLoad } from "./$types";
export const load: PageServerLoad = async ({ locals }) => {
  const session = await locals.auth.validate();
  let user;
  if (session) {
    user = {
      userId: session.user.userId,
      username: session.user.username
    };
  } else {
    user = {
      userId: null,
      username: null
    }
  }
  const posts = await prisma.post.findMany({
    orderBy: {
      updatedAt: "desc", // Ordenar por updatedAt en orden descendente
    },
  });
  return {
    props: {
      posts,
      user,
    },
  };
}
export const actions: Actions = {
  destroy: async ({ request, locals }) => {
    console.log(request);
  }
};
