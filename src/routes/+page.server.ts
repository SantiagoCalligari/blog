import { fail, redirect } from "@sveltejs/kit";

import type { Actions, PageServerLoad } from "./$types";

import { auth } from "$lib/server/lucia";
import prisma from "$lib/prisma";

export const load: PageServerLoad = async ({ locals }) => {
  const session = await locals.auth.validate();
  let user;
  if (session) {
    user = {
      userId: session.user.userId,
      username: session.user.username
    };
  }
  else {
    user = {
      userId: null,
      username: null
    }
  }
  const posts = await prisma.post.findMany({
    take: 5,
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
  logout: async ({ locals }) => {
    const session = await locals.auth.validate();
    if (session) {

      await auth.invalidateSession(session.sessionId); // invalidate session
      locals.auth.setSession(null); // remove cookie
      throw redirect(302, "/login"); // redirect to login page
    }
  }
};
