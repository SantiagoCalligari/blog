import { fail, redirect } from "@sveltejs/kit";

import { PrismaClient } from "@prisma/client";

import type { PageServerLoad, Actions } from "./$types";
export const load: PageServerLoad = async ({ locals }) => {
  const session = await locals.auth.validate();
  if (!session) throw redirect(302, "/");
  return {
    userId: session.user.userId,
    username: session.user.username
  };
};

export const actions: Actions = {
  default: async ({ request, locals }) => {
    const prisma = new PrismaClient();
    const session = await locals.auth.validate();
    if (session) {
      const formData = await request.formData();
      const title: string = formData.get("title") as string;
      const body: string = formData.get("body") as string;
      const published = true;
      await prisma.post.create({
        data: {
          title: title,
          content: body,
          size: body.size,
          published: published,
          createdAt: new Date(),
          updatedAt: new Date(),
        },
      }
      );

    }
  }
};

