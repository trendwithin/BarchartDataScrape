require 'active_record'
require 'active_record_connection'

class AllTimeHigh < ActiveRecord::Base
  include ActiveRecordConnection
  validates :symbol, :saved_on, presence: true
  # validates_uniqueness_of :symbol, conditions: -> { where.not(saved_on: Time.now.to_date)}

  def insert(page)
    current_date = Time.now.to_date.to_s
    page.each do |ticker|
      AllTimeHigh.create(symbol: ticker, saved_on: current_date)
    end
  end
end

