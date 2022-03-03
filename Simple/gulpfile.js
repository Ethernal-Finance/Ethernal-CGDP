var del = require("del");
var gulp = require("gulp");
var sass = require("gulp-sass");
var concat = require("gulp-concat");
var minify = require("gulp-minify");
var copyfiles = require("copyfiles");

gulp.task("sass", async function () {
  return gulp
    .src("themes/default/assets/css/**/*.sass")
    .pipe(sass({ outputStyle: "compressed" }))
    .on("error", sass.logError)
    .pipe(gulp.dest("themes/default/assets/css"));
});
// function sass(done) {
//   return gulp
//     .src("themes/default/assets/css/**/*.sass")
//     .pipe(sass({ outputStyle: "compressed" }))
//     .on("error", sass.logError)
//     .pipe(gulp.dest("themes/default/assets/css"));
//   done();
// }
// exports.sass = sass;

function minifyScript() {
  return gulp
    .src("themes/default/assets/js/main.js")
    .pipe(minify({ ext: { min: ".min.js" } }))
    .pipe(gulp.dest("themes/default/assets/js/"));
}
exports.ms = minifyScript;

function watch() {
  gulp.watch(
    ["themes/default/assets/css/**/*.sass", "themes/default/assets/js/main.js"],
    gulp.parallel(sass, minifyScript)
  );
}
exports.watch = watch;
exports.default = watch;

function scripts() {
  return gulp
    .src([
      "themes/default/assets/components/jquery/dist/jquery.min.js",
      "themes/default/assets/components/bootstrap/dist/js/bootstrap.min.js",
      "themes/default/assets/components/bootstrap-datetimepicker/js/moment.min.js",
      "themes/default/assets/components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js",
      "themes/default/assets/components/formvalidation/js/formValidation.min.js",
      "themes/default/assets/components/formvalidation/js/framework/bootstrap.min.js",
      "themes/default/assets/components/select2/dist/js/select2.min.js",
      "themes/default/assets/components/fitvids/jquery.fitvids.js",
      "themes/default/assets/components/rrssb/js/rrssb.min.js",
      "themes/default/assets/components/toastr/toastr.min.js",
      "themes/default/assets/components/randomcolor/randomColor.min.js",
      "themes/default/assets/components/bootstrap-star-rating/js/star-rating.min.js",
      "themes/default/assets/components/prism/prism.js",
    ])
    .pipe(concat("all.js"))
    .pipe(gulp.dest("themes/default/assets/js/"));
}
exports.scripts = scripts;

function styles() {
  return gulp
    .src([
      "themes/default/assets/components/rrssb/css/rrssb.css",
      "themes/default/assets/components/bootstrap/dist/css/bootstrap.min.css",
      "themes/default/assets/components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css",
      "themes/default/assets/components/font-awesome/css/font-awesome.min.css",
      "themes/default/assets/components/formvalidation/css/formValidation.min.css",
      "themes/default/assets/components/select2/dist/css/select2.min.css",
      "themes/default/assets/components/toastr/toastr.min.css",
      "themes/default/assets/components/bootstrap-star-rating/css/star-rating.min.css",
      "themes/default/assets/components/prism/prism.css",
      "themes/default/assets/css/style.css",
    ])
    .pipe(concat("all.css"))
    .pipe(gulp.dest("themes/default/assets/css/"));
}
exports.styles = styles;

// Get paths
const build_paths = require("./build_paths.js");

// Build Task
exports.build = gulp.series(copyApp, buildAppDel, buildAppConfig);

async function copyApp() {
  return await new Promise(function (resolve, reject) {
    copyfiles(build_paths.sf, false, (err) => {
      if (err) {
        console.error(err);
      }
      resolve(true);
    });
  });
}

async function buildAppDel() {
  await del(build_paths.sf_del, { force: true }).then((del_paths) => {
    console.log("File Deleted:\n", del_paths.join("\n"));
  });
}

async function buildAppConfig() {
  await gulp
    .src(build_paths.sf_config[0])
    .pipe(gulp.dest(build_paths.sf_config[1]));
}
