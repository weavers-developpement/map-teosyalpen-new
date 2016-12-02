module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('bower.json'),
        // Concat les fichiers JS min des libs (source: bower)
        concat: {
            libs_init: {
                src: [
					'_dev/js/libs/modernizr-respond.min.js',
					'bower_components/jquery/dist/jquery.min.js',
				 ],
                dest: 'html/files/themes/<%= pkg.name %>/js/libs/pkgd-libs-init.min.js',
            },
            libs: {
                src: [
					/** Bootstrap & Customs **/
					'bower_components/bootstrap/dist/js/bootstrap.min.js',

					/** Imageloaded control **/
					'bower_components/imagesloaded/imagesloaded.pkgd.min.js',

					/** Modal **/
					'bower_components/magnific-popup/dist/jquery.magnific-popup.min.js',

				 ],
                dest: 'html/files/themes/<%= pkg.name %>/js/libs/pkgd-libs.min.js',
            },
            libs_css: {

                src: [
					'bower_components/magnific-popup/dist/magnific-popup.css',
				 ],
                dest: '_dev/css/pkgd-libs.css',
            },
        },
        // Vérifie la validité du code JS
        jshint: {
            all: ['_dev/js/ajax.js', '_dev/js/forms.js', '_dev/js/plugins.js', '_dev/js/main.js', '_dev/js/admin.js']
        },
        // Min. les fichiers JS propres à Weavers
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> | <%= grunt.template.today("yyyy-mm-dd") %> */\n',
                mangle: true
            },
            my_target: {
                files: {
                    'html/files/themes/<%= pkg.name %>/js/pkgd.min.js': ['_dev/js/ajax.js', '_dev/js/forms.js', '_dev/js/plugins.js', '_dev/js/main.js'],
                    'html/files/themes/<%= pkg.name %>/js/pkgd.admin.min.js': ['_dev/js/admin.js'],
                }
            }
        },
        // On compile les fichiers LESS en CSS
        less: {
            development: {
                options: {
                    paths: ["assets/css"],
                    strictMath: true,
                },
                files: {
                    "_dev/css/pkgd.css": ["_dev/less/styles.less"],
                    "_dev/css/pkgd.admin.css": ["_dev/less/styles-admin.less"],
                }
            },
        },
        //Min. les fichiers CSS
        cssmin: {
            options: {
                banner: '/*! <%= pkg.name %> | <%= grunt.template.today("yyyy-mm-dd") %> */'
            },
            target: {
                files: {
                    'html/files/themes/<%= pkg.name %>/css/pkgd.min.css': ['_dev/css/pkgd-libs.css', '_dev/css/pkgd.css'],
                    'html/files/themes/<%= pkg.name %>/css/pkgd.admin.min.css': ['_dev/css/pkgd.admin.css'],
                }
            }
        },
        // Observer les fichiers et lancer les taches si nécessaire
        watch: {
            js: {
                files: ['_dev/js/*.js', '_dev/js/app/**/*.js'],
                tasks: ['jshint', 'uglify'],
                options: {
                    spawn: false
                },
            },
            css: {
                files: ['_dev/less/**/*.less'],
                tasks: ['less', 'cssmin'],
                options: {
                    spawn: false
                },
            }
        }
    });

    grunt.registerTask('default', ['concat', 'jshint', 'uglify', 'less', 'cssmin']);
}
