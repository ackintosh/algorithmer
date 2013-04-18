class KiwiJuiceEasy
  def thePouring(capacities, bottles, from_id, to_id)
    from_id.each_with_index do |v, k|
      diff = [(capacities[to_id[k]] - bottles[to_id[k]]), bottles[from_id[k]]].min
      next if diff == 0
      bottles[from_id[k]] -= diff
      bottles[to_id[k]] += diff
    end
    bottles
  end
end
