module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    'outputStyle': 'compressed',
                    'sourceMap': true,
                    'outFile': './dist/_res/css/'
                },
                files: {
                    './src/_res/css/styles.css': './src/_res/sass/styles.scss'
                }
            }
        },
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass', 'copy:css']
            },
            js: {
                files: '**/*.js',
                tasks: ['copy:js']
            },
            html: {
                files: '**/*.html',
                tasks: ['copy:php']
            }
        },
        copy: {
            css: {
                expand: true,
                cwd: './src/_res/css/',
                src: ['*.css*'],
                dest: './dist/_res/css/'
            },
            js: {
                expand: true,
                cwd: './src/_res/js/',
                src: ['*.js'],
                dest: './dist/_res/js/'
            },
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

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-sass');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['sass', 'copy:themeCss', 'copy:php', 'copy:resources']);
};