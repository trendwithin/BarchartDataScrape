require 'active_record'

ActiveRecord::Base.logger = Logger.new(STDERR)

ActiveRecord::Base.establish_connection(
  :adapter => 'sqlite3',
  :database => 'barchart_example'
)

ActiveRecord::Schema.define do
  unless ActiveRecord::Base.connection.tables.include? "all_time_highs"
    create_table :all_time_highs do |table|
      table.column :symbol, :string
      table.column :saved_on, :datetime
    end
    add_index :all_time_highs, [:symbol, :saved_on], :unique => true
  end

  unless ActiveRecord::Base.connection.tables.include? "new_highs"
    create_table :new_highs do |table|
      table.column :symbol, :string
      table.column :saved_on, :datetime
    end
    add_index :new_highs, [:symbol, :saved_on], :unique => true
  end

  unless ActiveRecord::Base.connection.tables.include? "new_lows"
    create_table :new_lows do |table|
      table.column :symbol, :string
      table.column :saved_on, :datetime
    end
  add_index :new_lows, [:symbol, :saved_on], :unique => true
  end
end


# Currently here for testing validation purposes- remove from code base
# class AllTimeHigh < ActiveRecord::Base
# end

# AllTimeHigh.create(symbol: "ABC", saved_on: Time.now.to_date)
# AllTimeHigh.create(symbol: "ABC", saved_on: Time.now.to_date)
