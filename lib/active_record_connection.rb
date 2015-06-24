require 'active_record'

module ActiveRecordConnection
  ActiveRecord::Base.establish_connection(
    :adapter => "sqlite3",
    :database  => "barchart_example"
  )
end
