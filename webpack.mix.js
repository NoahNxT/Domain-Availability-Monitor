const mix = require('laravel-mix');
let WebpackRTLPlugin = require('webpack-rtl-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sourceMaps(true, 'source-map')
  .webpackConfig({
    plugins: [
      new WebpackRTLPlugin()
    ]
  })
  .browserSync({
    proxy: '127.0.0.1:8000',
    port: 3100,
    ghostMode: false,
    notify: false
  })


  
  // Copy plugin files to public folder
  .copyDirectory('node_modules/feather-icons/dist', 'public/assets/plugins/feather-icons')
  .copyDirectory('node_modules/flag-icon-css', 'public/assets/plugins/flag-icon-css')
  .copyDirectory('node_modules/@mdi/font', 'public/assets/plugins/@mdi')
  .copyDirectory(['node_modules/perfect-scrollbar/dist', 'node_modules/perfect-scrollbar/css'] , 
    'public/assets/plugins/perfect-scrollbar')
  .copyDirectory(['node_modules/prismjs/prism.js', 'node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js', 'node_modules/prismjs/themes/prism.css'] , 
    'public/assets/plugins/prismjs')
  .copyDirectory('node_modules/clipboard/dist/clipboard.min.js', 'public/assets/plugins/clipboard/clipboard.min.js')

  .copyDirectory(['node_modules/cropperjs/dist/cropper.min.js', 'node_modules/cropperjs/dist/cropper.min.css'] , 
    'public/assets/plugins/cropperjs')
  .copyDirectory('node_modules/owl.carousel/dist', 'public/assets/plugins/owl-carousel')
  .copyDirectory('node_modules/jquery-mousewheel/jquery.mousewheel.js', 'public/assets/plugins/jquery-mousewheel/jquery.mousewheel.js')
  .copyDirectory('node_modules/animate.css/animate.min.css', 'public/assets/plugins/animate-css/animate.min.css')
  .copyDirectory(['node_modules/sweetalert2/dist/sweetalert2.min.js', 'node_modules/sweetalert2/dist/sweetalert2.min.css'] , 
    'public/assets/plugins/sweetalert2')

  .copyDirectory('node_modules/chart.js/dist/chart.min.js', 'public/assets/plugins/chartjs/chart.min.js')
  .copyDirectory('node_modules/jquery.flot', 'public/assets/plugins')
  .copyDirectory('node_modules/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js', 'public/assets/plugins/jquery-flot-tooltip/jquery.flot.tooltip.min.js')
  .copyDirectory('node_modules/apexcharts/dist/apexcharts.min.js', 'public/assets/plugins/apexcharts/apexcharts.min.js')
  .copyDirectory(['node_modules/morris.js/morris.min.js', 'node_modules/morris.js/morris.css'] , 
    'public/assets/plugins/morrisjs')
  .copyDirectory('node_modules/raphael/raphael.min.js', 'public/assets/plugins/raphael/raphael.min.js')
  .copyDirectory('node_modules/peity/jquery.peity.min.js', 'public/assets/plugins/peity/jquery.peity.min.js')
  .copyDirectory('node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')

  .copyDirectory(['node_modules/datatables.net/js/jquery.dataTables.js', 'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'] , 
    'public/assets/plugins/datatables-net')
  .copyDirectory('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js', 'public/assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js')

  .copyDirectory('node_modules/bootstrap-datepicker/dist', 'public/assets/plugins/bootstrap-datepicker')
  .copyDirectory('node_modules/progressbar.js/dist/progressbar.min.js', 'public/assets/plugins/progressbar-js/progressbar.min.js')
  // .copyDirectory('node_modules/select2/dist', 'public/assets/plugins/select2')
  .copyDirectory(['node_modules/select2/dist/js/select2.min.js', 'node_modules/select2/dist/css/select2.min.css'] , 
    'public/assets/plugins/select2')
  .copyDirectory(['node_modules/simplemde/dist/simplemde.min.js', 'node_modules/simplemde/dist/simplemde.min.css'] , 
    'public/assets/plugins/simplemde')
  .copyDirectory('node_modules/jquery-tags-input/dist', 'public/assets/plugins/jquery-tags-input')
  .copyDirectory(['node_modules/dropzone/dist/min/dropzone.min.js', 'node_modules/dropzone/dist/min/dropzone.min.css'] , 
    'public/assets/plugins/dropzone')
  .copyDirectory('node_modules/dropify/dist', 'public/assets/plugins/dropify')
  .copyDirectory(['node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js', 'node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'] , 
    'public/assets/plugins/bootstrap-colorpicker')
  .copyDirectory(['node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'] , 
    'public/assets/plugins/bootstrap-datepicker')
  .copyDirectory(['node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js', 'node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'] , 
    'public/assets/plugins/tempusdominus-bootstrap-4')
  .copyDirectory('node_modules/jquery-validation/dist/jquery.validate.min.js', 'public/assets/plugins/jquery-validation/jquery.validate.min.js')
  .copyDirectory('node_modules/bootstrap-maxlength/dist/bootstrap-maxlength.min.js', 'public/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')
  .copyDirectory('node_modules/inputmask/dist/jquery.inputmask.min.js', 'public/assets/plugins/inputmask/jquery.inputmask.bundle.min.js')
  .copyDirectory('node_modules/typeahead.js/dist/typeahead.bundle.min.js', 'public/assets/plugins/typeahead-js/typeahead.bundle.min.js')
  .copyDirectory('node_modules/tinymce', 'public/assets/plugins/tinymce')
  .copyDirectory('node_modules/ace-builds/src-min', 'public/assets/plugins/ace-builds')
  .copyDirectory(['node_modules/jquery-steps/build/jquery.steps.min.js', 'node_modules/jquery-steps/demo/css/jquery.steps.css'] , 
    'public/assets/plugins/jquery-steps')

  .copyDirectory('node_modules/font-awesome', 'public/assets/plugins/font-awesome')

  .copyDirectory(['node_modules/fullcalendar/main.min.js', 'node_modules/fullcalendar/main.min.css'] , 
    'public/assets/plugins/fullcalendar')
  .copyDirectory('node_modules/moment/min/moment.min.js', 'public/assets/plugins/moment/moment.min.js')
