const { PrismaClient } = require('@prisma/client');
const { dotenv } = require('dotenv');
const { createHash } = require('crypto')


const prisma = new PrismaClient()

async function main() {
  console.log(`Start seeding ...`)

  const user = await prisma.user.create({
    data: {
      name: process.env.NAME || "",
      email: process.env.EMAIL || "",
      password: createHash("sha256").update(process.env.PASSWORD || "").digest("hex"),
    },
  })
  console.log(`Created user with id: ${user.id}`)
  console.log(`Seeding finished.`)
}

main()
  .then(async () => {
    await prisma.$disconnect()
  })
  .catch(async (e) => {
    console.error(e)
    await prisma.$disconnect()
    process.exit(1)
  })
