module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    "style" : "expanded",
                    "sourcemap" : true,
                    "unixNewlines" : true,
                    "noCache" : true
                },
                files: {
                    './src/_res/css/styles.css': './src/_res/sass/styles.scss'
                }
            }
        },
        copy: {
            resources: {
                expand: true,
                cwd: './src/_res/',
                src: ['**/*', '!**/sass/**'],
                dest: './dist/_res/'
            },
            themeCss: {
                expand: true,
                cwd: './src/',
                src: ['*.css'],
                dest: './dist/'
            },
            php: {
                expand: true,
                cwd: './src/',
                src: ['*.html'],
                dest: './dist/',
                ext: '.php',
                extDot: 'last'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-sass');

    grunt.registerTask('default', ['sass', 'copy']);
};