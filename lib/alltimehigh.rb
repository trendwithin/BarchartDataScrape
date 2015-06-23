require 'active_record'

ActiveRecord::Base.establish_connection(
  :adapter => "sqlite3",
  :database  => "barchart_example"
)

class AllTimeHigh < ActiveRecord::Base
  validates :symbol, :saved_on, presence: true
  # validates_uniqueness_of :symbol, conditions: -> { where.not(saved_on: Time.now.to_date)}
end

