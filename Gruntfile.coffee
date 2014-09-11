module.exports = ->

  # Initialize the configuration.
  @initConfig

  # Specify source files to the JSHint task.
    jshint:
      files: ["backbone.layoutmanager.js",
              "node/index.js"]
    watch:
      options:
        livereload: true
      files: ["bower_components/bootstrap/less*.less"]
    copy:
      main:
        files: [
          {
            expand: true
            flatten: true
            src: 'bower_components/bootstrap/dist/css/bootstrap.min.css'
            dest: 'assets/css/'
          }
          {
            expand: true
            flatten: true
            src: 'bower_components/bootstrap/dist/js/bootstrap.min.js'
            dest: 'assets/js/'
          }
        ]
    less:
      dist:
        files:
          'assets/css/bootstrap.min.css': [
            'bower_components/bootstrap/less/bootstrap.less'
          ]
        options:
          compress: true,
          sourceMap: false,
          sourceMapFilename: 'assets/css/main.min.css.map',
          sourceMapRootpath: '/app/themes/roots/'

    # Allow certain options.
      options:
        browser: true
        boss: true

  # Load external Grunt task plugins.
  @loadNpmTasks "grunt-contrib-jshint"
  @loadNpmTasks "grunt-contrib-less"
  @loadNpmTasks "grunt-contrib-uglify"
  @loadNpmTasks "grunt-contrib-cssmin"
  @loadNpmTasks "grunt-contrib-watch"
  @loadNpmTasks "grunt-contrib-copy"

  # Default task.
  @registerTask "default", ["jshint", "copy"]
  @registerTask "less", ["less"]