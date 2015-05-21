/**
 * Created by tkorays on 2015/1/15.
 */

module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /* ---------------------------------------------------------- */
        less:{
            /* 1) less文件编译 */
            build:{
                files:{
                    /* target:source */
                    "less/utils.css":"less/utils.less",
                    "less/page.css":"less/page.less"
                },
                modifyVars:{
                }
            }
        },
        /* ---------------------------------------------------------- */
        concat:{
            /* 2) [可选]部分css放到一个文件中 */
            csscat:{
                src: ["less/utils.css","less/page.css"],
                dest: 'less/all.css'
            }
        },
        /* ---------------------------------------------------------- */
        cssmin:{
            options:{
                banner: '/*! Created By <%= pkg.author %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            /* 3) 压缩css文件 */
            build:{
                src: "less/all.css",
                dest: "css/all.min.css"
            }
        },
        /* ---------------------------------------------------------- */
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> by <%= pkg.author %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'jsx/all.js',
                dest: 'js/all.min.js'
            }
        },
        /* ---------------------------------------------------------- */
        watch:{
            options:{
                livereload: true
                // default port 35729(livereload: portNum/true)
            },
            less:{
                files:['less/*.less'],
                tasks:['less','concat','cssmin']
            },
            page:{
                files:['page/*.html','../template/*.tpl'],
                tasks:[]
            },
            js: {
                files: ['js/*.js'],
                tasks: []
            }
        },

    });


    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-css');


    /*
     * 默认只处理css
     */
    grunt.registerTask('default', ['less','concat','cssmin']);
    /*
     * 最后release版本
     * 需要压缩（uglify）javascript文件，编译less、压缩（cssmin）css文件
     */
    grunt.registerTask('release',['less','concat','cssmin','uglify']);

};