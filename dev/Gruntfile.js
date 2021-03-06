module.exports = function (grunt) {

    grunt.initConfig({
        uglify: {
            options: {
                mangle: true
            },
            vendorScripts: {},
            customScripts: {
                src: ['js-src/**/*.js'],
                dest: '../js/all.js'
            }
        },

        watch: {
            options: {
                livereload: true
            },
            javascript: {
                files: ['js-src/**/*.js'],
                tasks: ['uglify:customScripts']
            },
            sass: {
                files: ['sass/**/*.sass'],
                tasks: ['sass:custom']
            },
            php: {
                files: ['../**/*.php']
            }
        },

        sass: {
            options: {
                sourcemap: 'none',
                style: 'compact'
            },
            custom: {
                files: {
                    '../css/all.css': 'sass/style.sass'
                }
            }
        },

        copy: {
            hamburgers: {
                cwd: 'node_modules/hamburgers/_sass/',
                expand: true,
                src: 'hamburgers/**',
                dest: 'sass',
            },
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
};
