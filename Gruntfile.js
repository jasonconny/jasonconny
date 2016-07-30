// Grunt tasks require Node v6.2.*

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
        uglify: {
            options: {
                mangle: true,
                compress: true
            },
            my_target: {
                files: {
                    './dist/_res/js/scripts.min.js' : ['./src/_res/js/scripts.js']
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
        clean: {
            build: ['./dist/*']
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
            themeCss: {
                expand: true,
                cwd: './src/',
                src: ['*.css'],
                dest: './dist/'
            },
            php: {
                expand: true,
                cwd: './src/',
                src: ['*.html', '!header.html', '!footer.html'],
                dest: './dist/',
                ext: '.php',
                extDot: 'last'
            },
            devResources: {
                expand: true,
                cwd: './src/_res/',
                src: ['**/*', '!**/sass/**'],
                dest: './dist/_res/'
            },
            prodResources: {
                expand: true,
                cwd: './src/_res/',
                src: ['**/*', '!**/sass/**', '!**/js/scripts.js'],
                dest: './dist/_res/'
            }
        },
        targethtml: {
            dev: {
                options: {
                    curlyTags: {
                        domain: 'dev.jasonconny.com',
                        gaid: 'UA-2569982-9',
                        version: '<%= pkg.version %>'
                    }
                },
                files: {
                    './dist/header.php' : './src/header.html',
                    './dist/footer.php' : './src/footer.html'
                }
            },
            prod: {
                options: {
                    curlyTags: {
                        domain: 'www.jasonconny.com',
                        gaid: 'UA-2569982-1',
                        version: '<%= pkg.version %>'
                    }
                },
                files: {
                    './dist/header.php' : './src/header.html',
                    './dist/footer.php' : './src/footer.html'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-targethtml');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build-dev', ['sass', 'clean:build', 'copy:themeCss', 'copy:php', 'copy:devResources', 'targethtml:dev']);
    grunt.registerTask('build-prod', ['sass', 'clean:build', 'copy:themeCss', 'copy:php', 'copy:prodResources', 'uglify', 'targethtml:prod']);
};