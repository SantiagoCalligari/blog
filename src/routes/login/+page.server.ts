import type { PageServerLoad, Actions } from './$types';
import { createHash } from 'crypto';
import prisma from '$lib/prisma';
import { warn } from 'console';


export const actions = {
  login: async ({ cookies, request }) => {
    const data = await request.formData();
    const email = data.get('email');
    const password = createHash("sha256").update(data.get('password')).digest("hex");
    const user = await prisma.user.findFirst({
      where: {
        AND: [
          { email: email },
          { password: password },
        ],
      },
    });
    if (user !== null) {
    }


    const q = cookies.getAll();
    console.log(email, password, user, q);
    return { success: true };
  },
} satisfies Actions;
