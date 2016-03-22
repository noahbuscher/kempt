module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      dist: {
        files: {
          'style.css' : 'scss/i.scss'
        }
      }
    },
    watch: {
      css: {
        files: '*/*.scss',
        tasks: ['sass'],
        options: {
          livereload: true
        }
      }
    },
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask('default', ['watch']);
}