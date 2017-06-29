
// Wrapper function
module.exports = function(grunt) {

    // Configure tasks
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // Delete all previous CSS and JS files
        clean: {
            dist: ['dist/*.css', 'dist/*.js', 'dist/css/*.css', 'dist/js/*.js']
        },

        // Copy already minified CSS and JS files into dist
        copy: {
            css: {
                expand: true,
                cwd: '../assets/css',
                src: ['*.min.css'],
                dest: 'dist/css'
            },
            js: {
                expand: true,
                cwd: '../assets/js',
                src: ['*.min.js'],
                dest: 'dist/js'
            }
        },

        // Minify the non-minified CSS files and move to dist
        cssmin: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '../assets/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'dist/css',
                    ext: '.min.css',
                    extDot: 'last'
                }]
            }
        },

        // Minify the non-minified JS files and move to dist
        uglify: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '../assets/js',
                    src: ['*.js', '!*.min.js', '!matchMedia*'],
                    dest: 'dist/js',
                    ext: '.min.js',
                    extDot: 'last'
                }]
            }
        },

        // Concatenate all CSS files into one and all JS files into one
        concat: {
            options: {
                process: function(src, filepath) {
                    return '/*! Source: ' + filepath + ' */' + '\n' + src + '\n\n';
                }
            },
            css: {
                src: ['dist/css/*.css'],
                dest: 'dist/<%= pkg.name %>.min.css'
            },
            js: {
                src: ['dist/js/*.js'],
                dest: 'dist/<%= pkg.name %>.min.js'
            }
        }

    });

    // Load plug-ins
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Register a task called 'dist'
    // List tasks in order of operation
    grunt.registerTask('dist', ['clean', 'copy', 'cssmin', 'uglify', 'concat']);

};
