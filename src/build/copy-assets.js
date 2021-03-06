const { promises: fs } = require("fs")
const path = require("path")

async function copyDir(src, dest) {
    await fs.mkdir(dest, { recursive: true });
    let entries = await fs.readdir(src, { withFileTypes: true });

    for (let entry of entries) {
        let srcPath = path.join(src, entry.name);
        let destPath = path.join(dest, entry.name);

        entry.isDirectory() ?
            await copyDir(srcPath, destPath) :
            await fs.copyFile(srcPath, destPath);
    }
}

// Copy all Bootstrap SCSS files.
copyDir('./node_modules/@worldskills/bootstrap', './src/sass/assets/bootstrap4');
// Copy all Font Awesome SCSS files.
copyDir('./node_modules/font-awesome/scss', './src/sass/assets/fontawesome');
// Copy all Understrap SCSS files.
copyDir('./node_modules/understrap/src/sass/theme', './src/sass/assets/understrap/theme');
