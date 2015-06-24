require './test/minitest_helper'

class NewHighTest < ActiveSupport::TestCase
  def setup
    @nh ||= NewHigh.new(symbol: 'ZZZ', saved_on: Time.now.to_date.to_s)
  end

  def test_validity
    assert @nh.valid?
  end
end
