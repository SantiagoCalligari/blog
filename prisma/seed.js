// prisma/seed.ts
import { PrismaClient } from "@prisma/client";
import { generateLuciaPasswordHash } from "lucia/utils";

const prisma = new PrismaClient();

async function main() {
  const adminUsername = process.env.USERNAME || "admin";
  const adminPlainTextPassword = process.env.PASSWORD || "adminpassword";

  try {
    const hashedPassword = await generateLuciaPasswordHash(
      adminPlainTextPassword,
    );

    await prisma.user.create({
      data: {
        id: "admin",
        username: adminUsername,
        auth_session: undefined,
        key: undefined,
      },
    });

    await prisma.session.create({
      data: {
        id: "admin_session",
        user_id: "admin",
        active_expires: BigInt(Date.now() + 3600000),
        idle_expires: BigInt(Date.now() + 1800000),
      },
    });

    await prisma.key.create({
      data: {
        id: "admin_key",
        hashed_password: hashedPassword,
        user_id: "admin",
      },
    });

    console.log("Datos del administrador insertados con éxito.");
  } catch (error) {
    console.error("Error al insertar datos del administrador:", error);
    throw error;
  } finally {
    await prisma.$disconnect();
  }
}

main().catch((error) => {
  console.error("Error en la función principal:", error);
});
