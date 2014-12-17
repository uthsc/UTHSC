module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                includePaths: ['bower_components/foundation/scss']
            },
            dist: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    'css/uthsc.css': 'scss/uthsc.scss'
                }
            }
        },

        concat: {
            options: {
                separator: '\n'
            },

            dist: {
                src: ['js/scripts/*.js'],
                dest: 'js/uthsc.js'
            },

            foundation: {
                src: ['bower_components/foundation/js/foundation.js','js/scripts/uthsc.equalizer.js'],
                dest: 'js/uthsc.foundation.js'
            }
        },

        uglify: {
            options: {
                mangle: {
                    except: ['jQuery', 'Backbone']
                }
            },

            dist: {
                files: {
                    'js/uthsc.min.js': ['js/uthsc.js']
                }
            },

            foundation: {
                files: {
                    'js/uthsc.foundation.min.js': ['js/uthsc.foundation.js']
                }
            }
        },

        watch: {
            grunt: {files: ['Gruntfile.js']},

            sass: {
                files: 'scss/**/*.scss',
                tasks: ['sass']
            },

            uglify: {
                files: 'js/scripts/**/*.js',
                tasks: ['concat','uglify']
            }
        }
    });

    //load tasks
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    //foundation
    grunt.registerTask('foundationConcatenate', ['concat:foundation']);
    grunt.registerTask('foundationMinify', ['uglify:foundation']);
    grunt.registerTask('foundation', ['foundationConcatenate','foundationMinify']);

    //default
    grunt.registerTask('concatenate', ['concat:dist']);
    grunt.registerTask('minify', ['uglify:dist']);
    grunt.registerTask('build', ['sass', 'concatenate', 'minify']);
    grunt.registerTask('default', ['build', 'watch']);
};