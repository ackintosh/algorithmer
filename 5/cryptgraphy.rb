class Cryptgraphy
  def encrypt(numbers)
    n = numbers.sort
    n[0] = n[0] + 1
    n.inject(1) { |result, num| result *= num }
  end
end
