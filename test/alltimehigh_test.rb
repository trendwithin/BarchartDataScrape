require './test/minitest_helper'

class AllTimeHighTest < ActiveSupport::TestCase
  def setup
    @ath ||= AllTimeHigh.new(symbol: 'ZZZ', saved_on: Time.now.to_date.to_s)
  end

  def test_validity
    assert @ath.valid?
  end

  # def test_duped_record_invalid
  #   duplicate_record = AllTimeHigh.first
  #   @ath.save
  #   assert_not duplicate_record.valid?
  # end
end





