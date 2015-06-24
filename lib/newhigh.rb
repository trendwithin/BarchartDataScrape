require 'active_record'

class NewHigh < ActiveRecord::Base
  validates :symbol, :saved_on, presence: true
end
