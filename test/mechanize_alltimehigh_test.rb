require './test/minitest_helper'

class MechanizeAllTimeHighTest < Minitest::Test

  def setup
    @mb = MechanizeAllTimeHigh.new
  end

  def test_it_instantiates_mechanize_barchart
    assert_instance_of MechanizeAllTimeHigh, @mb
  end

  def test_url
    assert_equal "http://www.barchart.com/stocks/athigh.php?_dtp1-0", @mb.url
  end

  def test_agent
    assert_instance_of Mechanize, @mb.agent
  end

  def test_agent_returns_nodeset
    assert_instance_of Nokogiri::XML::NodeSet, @mb.parse_url
  end

  def test_agent_is_converted_to_string
    assert_instance_of String, @mb.parse_url.to_s
  end

  def test_symbols_include_expected_values
    agent = @mb.parse_url[6].to_s
    strip_tickers = agent.scan(/[A-Z]+,[^a-z]+[A-Z]/)
    symbols = strip_tickers[0].split(',')
    assert_instance_of Array, symbols
    expected = ['AAT', 'LOPE', 'ZMH']
    expected.each do |e|
      assert_includes symbols, e
    end
  end
end
