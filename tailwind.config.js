module.exports = {
  content: [
    "./*.php", // Top-level PHP files
    "./**/*.php", // Any nested PHP files (optional but safe)
    "./scripts/**/*.js", // JavaScript inside the /scripts folder
    "./src/**/*.html", // If you have any HTML in /src
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
