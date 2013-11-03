require 'pry'

class InterestingParty
  def best_invitation(first, second)
    count = InterestCount.new
    (0...(first.size)).each do |i|
      count.up(first[i])
      count.up(second[i])
    end

    count.best
  end
end

class InterestCount
  attr_reader :interest
  def initialize
    @interest = {}
  end

  def up(interest)
    key = interest.to_sym
    @interest[key] = 0 if @interest[key] == nil
    @interest[key] += 1
  end

  def best
    @interest.inject(0) do |result, n|
      result = n[1] if result < n[1]
      result
    end
  end
end

if $0 == __FILE__ then
  i = InterestingParty.new
  first = ["fishing", "gardening", "swimming", "fishing"]
  second = ["hunting", "fishing", "fishing", "biting"]
  p i.best_invitation(first, second)
end
