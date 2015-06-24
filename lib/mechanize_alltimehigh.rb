require 'mechanize'
require 'fakeweb'
require 'alltimehigh'
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
    @agent.get(@url).search("input")
  end

  def strip_symbols(page)
    symbols = page[6].to_s
    strip_symbols = symbols.scan(/[A-Z]+,[^a-z]+[A-Z]/)
    tickers = strip_symbols[0].split(',')
  end

  def insert(symbols)
    a = AllTimeHigh.new
    a.insert(symbols)
  end
end
