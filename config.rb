# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "css"
images_dir = "img"
javascripts_dir = "js"

require 'ruby_gntp'
require 'fileutils'

# output_style = :expanded or :nested or :compact or :compressed
output_style = :compressed

# http://css-tricks.com/compass-compiling-and-wordpress-themes/
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end

  GNTP.notify({
      :app_name => "Compass",
      :title     => "#{File.basename(file)} updated!"
   })
end

on_stylesheet_error do |file, message|
  GNTP.notify({
    :app_name => "Compass",
    :title    => "#{File.basename(file)} FAILED",
    :text     => message
  })
end

