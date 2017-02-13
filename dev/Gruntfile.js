module.exports = function (grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json')

    // compiling sass
    // , sass: {
    //   dist: {
    //     options: {
    //       style: 'compressed'
    //     },
    //     files: [{
    //       expand: true,
    //       cwd: 'scss',
    //       src: ['**/*.scss'],
    //       dest: '../',
    //       ext: '.css'
    //     }]
    //   }
    // }

    // uglifying scripts
    // , uglify: {
    //   app: {
    //     options: {
    //       beautify: true
    //       ,compress: false
    //     },
    //     files: {
    //       '../js/all.js': [
    //         // 'node_modules/tether/dist/js/tether.js',
    //         // 'node_modules/bootstrap/dist/js/bootstrap.js',
    //         'js-src/**/*.js'
    //       ]
    //     }
    //   }
    // }

    // copying files
    // , copy: {
    //   fontawesome: {
    //     expand: true,
    //     src: 'node_modules/font-awesome/fonts/*',
    //     dest: '../fonts/',
    //     flatten: true,
    //     filter: 'isFile'
    //   }
    // }

    // defining watchers
    // , watch: {
    //   options: {
    //     livereload: false
    //   }

    //   // SASS
    //   // , sass: {
    //   //   files: ['scss/**/*.scss'],
    //   //   tasks: ['sass']
    //   // }

    //   // JS
    //   // , javascript: {
    //   //   files: ['javascript-source/**/*.js'],
    //   //   tasks: ['uglify']
    //   // }

    //   // PHP
    //   , php: {
    //     files: ['../**/*.php'],
    //     tasks: []
    //   }
    // }

  });

  // grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-contrib-sass');
  // grunt.loadNpmTasks('grunt-contrib-watch');
  // grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', 'Log some stuff.', function() {
    grunt.log.write('Logging some stuff...').ok();
  });

};
