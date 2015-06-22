# coding: utf-8
lib = File.expand_path('../lib', __FILE__)
$LOAD_PATH.unshift(lib) unless $LOAD_PATH.include?(lib)
require 'barchart_data_scrape/version'

Gem::Specification.new do |spec|
  spec.name          = "barchart_data_scrape"
  spec.version       = BarchartDataScrape::VERSION
  spec.authors       = ["Michael Becco"]
  spec.email         = ["e4e6d4d5@gmail.com"]

  spec.summary       = %q{A simple gem to capture financial data from BarChart.com.}
  spec.description   = %q{Scrape and store EOD data from BarChart.com.  NB: Flesh out--}
  spec.homepage      = "github.com/trendiwithin/BarchartDataScrape"

  # Prevent pushing this gem to RubyGems.org by setting 'allowed_push_host', or
  # delete this section to allow pushing this gem to any host.
  if spec.respond_to?(:metadata)
    spec.metadata['allowed_push_host'] = "TODO: Set to 'http://mygemserver.com'"
  else
    raise "RubyGems 2.0 or newer is required to protect against public gem pushes."
  end

  spec.files         = `git ls-files -z`.split("\x0").reject { |f| f.match(%r{^(test|spec|features)/}) }
  spec.bindir        = "exe"
  spec.executables   = spec.files.grep(%r{^exe/}) { |f| File.basename(f) }
  spec.require_paths = ["lib"]

  spec.add_development_dependency "bundler", "~> 1.9"
  spec.add_development_dependency "rake", "~> 10.0"
end
