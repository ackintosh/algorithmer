require './cryptgraphy'

describe Cryptgraphy do
  examples = []
  examples << {numbers: [1, 2, 3], returns: 12}
  examples << {numbers: [1, 3, 2, 1, 1, 3], returns: 36}
  examples << {numbers: [1000, 999, 998, 997, 996, 995], returns: 986074810223904000}
  examples << {numbers: [1, 1, 1, 1], returns: 2}

  before do
    @c = Cryptgraphy.new
  end
  examples.each_with_index do |ex, index|
    context "#encrypt with example #{index}" do
      it { @c.encrypt(ex[:numbers]).should == ex[:returns] }
    end
  end
end
