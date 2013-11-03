class Bottle
  attr_reader :amount

  def initialize(capacity, amount)
    @capacity = capacity
    @amount   = amount
  end

  def free
    @capacity - @amount
  end

  def in(amount)
    @amount += amount
  end

  def out(amount)
    @amount -= amount
  end
end

class KiwiJuiceEasy
  def the_pouring(capacities, bottles, from_id, to_id)
    b = []
    (0...(bottles.size)).each do |i|
      b << Bottle.new(capacities[i], bottles[i])
    end
p b
    (0...(from_id.size)).each do |i|
      from = b[from_id[i]]
      to = b[to_id[i]]
      move = [from.amount, to.free].min

      from.out(move)
      to.in(move)
    end

    b.inject([]) { |answer, bottle| answer << bottle.amount }
  end
end
