module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                includePaths: ['bower_components/foundation/scss']
            },
            dist: {
                options: {
                    outputStyle: 'expanded',
                    sourceMap: true
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

        copy: {
            main: {
                files: [
                    {src: ['js/uthsc.foundation.min.js'], dest: '_resources/2015/js/uthsc.foundation.min.js'},
                    {src: ['js/uthsc.min.js'], dest: '_resources/2015/js/uthsc.min.js'},
                    {src: ['bower_components/modernizr/modernizr.js'], dest: '_resources/2015/js/modernizr.js'},
                    {src: ['bower_components/jquery/dist/jquery.min.js'], dest: '_resources/2015/js/jquery.min.js'},
                    {src: ['bower_components/fontawesome/css/font-awesome.min.css'], dest: '_resources/2015/css/font-awesome.min.css'},
                    {src: ['css/uthsc.css'], dest: '_resources/2015/css/uthsc.css'},
                    {expand: true, src: ['bower_components/fontawesome/fonts/**'], dest: '_resources/2015/fonts/', flatten: true, filter: 'isFile' },
                    {expand: true, src: ['images/**'], dest: '_resources/2015/images/', flatten: true, filter: 'isFile' }
                ]
            }
        },

        watch: {
            grunt: {files: ['Gruntfile.js']},

            sass: {
                files: 'scss/**/*.scss',
                tasks: ['sass', 'copy']
            },

            uglify: {
                files: 'js/scripts/**/*.js',
                tasks: ['concat','uglify', 'copy']
            }
        }
    });

    //load tasks
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('copyResources',['copy']);

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