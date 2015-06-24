require "barchart_data_scrape/version"
require 'mechanize_alltimehigh'
module BarchartDataScrape
  # Your code goes here...
  ath = MechanizeAllTimeHigh.new
  page = ath.parse_url
  tickers = ath.strip_symbols(page)
  ath.insert(tickers)
end
