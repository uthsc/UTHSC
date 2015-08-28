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
                    "template.php": ["template.jade"],
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
                    'css/uthsc.min.css': 'scss/uthsc.scss'
                }
            }
        },

        concat: {
            options: {
                separator: '\n'
            },

            dist: {
                src: ['bower_components/foundation/js/foundation.js','js/src/*.js'],
                dest: 'js/dist/uthsc.foundation.js'
            },
        },

        uglify: {
            options: {
                mangle: {
                    except: ['jQuery', 'Backbone']
                }
            },

            dist: {
                files: {
                    'js/dist/uthsc.foundation.min.js': ['js/dist/uthsc.foundation.js']
                }
            },
        },

        copy: {

            css: {
                expand: true,
                cwd: 'css/',
                src: ['**'],
                dest: '_resources/2015/css/'
            },

            images: {
                expand: true,
                cwd: 'images/',
                src: ['**'],
                dest: '_resources/2015/images/',
                flatten: true,
                filter: 'isFile'
            },

            js: {
                files: [
                    {
                        src: ['bower_components/jquery/dist/jquery.min.js'],
                        dest: '_resources/2015/js/jquery.min.js'
                    },

                    {
                        src: ['bower_components/modernizr/modernizr.js'],
                        dest: '_resources/2015/js/modernizr.js'
                    },

                    {
                        src: ['js/dist/uthsc.foundation.min.js'],
                        dest: '_resources/2015/js/uthsc.foundation.min.js'
                    }
                ]
            },

            fonts: {
                files: [

                    {
                        src: ['bower_components/fontawesome/css/font-awesome.min.css'],
                        dest: '_resources/2015/css/font-awesome.min.css'
                    },

                    {
                        expand: true,
                        src: ['bower_components/fontawesome/fonts/**'],
                        dest: '_resources/2015/fonts/',
                        flatten: true,
                        filter: 'isFile'
                    }
                ]
            }

        },

        watch: {
            grunt: {files: ['Gruntfile.js']},

            sass: {
                files: 'scss/**/*.scss',
                tasks: ['sass','copy:css']
            },
            uglify: {
                files: 'js/src/**/*.js',
                tasks: ['concat','uglify','copy:js']
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
    //grunt.registerTask('copyResources',['copy:css','copy:js','copy:images','copy:fonts']);

    grunt.registerTask('build',['jade', 'sass', 'concat','uglify','copy']);

    //default
    grunt.registerTask('default', ['build', 'watch']);
};