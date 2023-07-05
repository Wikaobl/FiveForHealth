const cron = require("node-cron");
const { exec } = require("child_process");

cron.schedule("0 0 * * *", () => {
  exec("php server.php", (error, stdout, stderr) => {
    if (error) {
      console.error(`Wystąpił błąd: ${error}`);
      return;
    }
    console.log(`Wykonano zadanie cron: ${stdout}`);
  });
});
