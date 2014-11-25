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
                separator: ''
            },
            dist: {
                src: ['js/scripts/uthsc.js','js/scripts/classie.js', 'js/scripts/nav.js'],
                dest: 'js/scripts/uthsc-concat.js'
            }
        },

        uglify: {
            options: {
                mangle: {
                    except: ['jQuery', 'Backbone']
                }
            },
            my_target: {
                files: {
                    'js/uthsc.min.js': ['js/scripts/uthsc-concat.js']
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

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('concatenate', ['concat']);
    grunt.registerTask('minify', ['uglify']);
    grunt.registerTask('build', ['sass', 'concat', 'uglify']);
    grunt.registerTask('default', ['build', 'watch']);
}