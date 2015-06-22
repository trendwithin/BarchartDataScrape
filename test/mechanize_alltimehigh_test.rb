require './test/minitest_helper'

class MechanizeAllTimeHighTest < Minitest::Test

  def test_it_instantiates_mechanize_barchart
    @mb = MechanizeAllTimeHigh.new
    assert_instance_of MechanizeAllTimeHigh, @mb
  end
end
