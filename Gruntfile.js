module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jade: {
            compile: {
                options: {
                    pretty:true,
                    data: {
                        debug: false
                    }
                },
                files: {
                    "index.php": ["index.jade"]
                }
            }
        },

        sass: {
            options: {
                includePaths: ['bower_components/foundation/scss']
            },
            dev: {
                options: {
                    outputStyle: 'expanded',
                    sourceMap: true
                },
                files: {
                    'css/uthsc.css': 'scss/uthsc.scss'
                }
            },
            dist: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    'css/uthsc.css': 'scss/uthsc.min.scss'
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

            css: {
                src: ['css/uthsc.css'],
                dest: '_resources/2015/css/uthsc.css'
            },
            images: {
                expand: true,
                src: ['images/**'],
                dest: '_resources/2015/images/',
                flatten: true,
                filter: 'isFile'
            },
            js: {
                files: [
                    {src: ['js/uthsc.foundation.min.js'], dest: '_resources/2015/js/uthsc.foundation.min.js'},
                    {src: ['js/uthsc.min.js'], dest: '_resources/2015/js/uthsc.min.js'},
                    {src: ['bower_components/modernizr/modernizr.js'], dest: '_resources/2015/js/modernizr.js'},
                    {src: ['bower_components/jquery/dist/jquery.min.js'], dest: '_resources/2015/js/jquery.min.js'}
                ]
            },
            fonts: {
                files: [
                    {src: ['bower_components/fontawesome/css/font-awesome.min.css'], dest: '_resources/2015/css/font-awesome.min.css'},
                    {expand: true, src: ['bower_components/fontawesome/fonts/**'], dest: '_resources/2015/fonts/', flatten: true, filter: 'isFile' }
                ]
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
            },
            jade: {
                files: '*.jade',
                tasks: ['jade']
            }
        }
    });

    //load tasks
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jade');


    //copy files to resources
    grunt.registerTask('copyResources',['copy:css','copy:js','copy:images','copy:fonts']);

    //foundation
    grunt.registerTask('foundationConcatenate', ['concat:foundation']);
    grunt.registerTask('foundationMinify', ['uglify:foundation']);
    grunt.registerTask('foundation', ['foundationConcatenate','foundationMinify']);


    //dev
    grunt.registerTask('concatenate', ['concat:dist']);
    grunt.registerTask('minify', ['uglify:dist']);
    grunt.registerTask('dev', ['sass:dev', 'concatenate', 'minify', 'jade']);

    //build
    grunt.registerTask('build', ['foundation','copyResources', 'dev' ]);

    //default
    grunt.registerTask('default', ['dev', 'watch']);
};