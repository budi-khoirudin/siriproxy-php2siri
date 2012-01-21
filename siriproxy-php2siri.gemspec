# -*- encoding: utf-8 -*-
$:.push File.expand_path("../lib", __FILE__)

Gem::Specification.new do |s|
  s.name        = "siriproxy-php2siri"
  s.version     = "0.0.1" 
  s.authors     = ["nightwing9695"]
  s.email       = [""]
  s.homepage    = ""
  s.summary     = %q{PHP to Siri communication plugin}
  s.description = %q{a plugin that allows siri to communitcate with a php file to run certain commands.}

  s.rubyforge_project = "thatswhatshesaid"

  s.files         = `git ls-files`.split("\n")
  s.test_files    = `git ls-files -- {test,spec,features}/*`.split("\n")
  s.executables   = `git ls-files -- bin/*`.split("\n").map{ |f| File.basename(f) }
  s.require_paths = ["lib"]

  # specify any dependencies here; for example:
  # s.add_development_dependency "rspec"
   s.add_runtime_dependency "url_escape"
end
