require 'mechanize'
require 'fakeweb'
class MechanizeAllTimeHigh
  attr_reader :url, :agent

  def initialize
    @url = "http://www.barchart.com/stocks/athigh.php?_dtp1-0"
    @agent = Mechanize.new
  end

  def parse_url
    page = Object
    stream_array = Array.new

    # for current testing purposes use FakeWeb
    stream = "test/athigh.php"
    FakeWeb.register_uri(:get, @url, :body => stream, :content_type => 'text/html')
    page = @agent.get(@url).search("input")
  end
end
