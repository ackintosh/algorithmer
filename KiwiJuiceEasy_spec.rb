require './KiwiJuiceEasy'

describe KiwiJuiceEasy do
  before :each do
    @kiwiJuiceEasy = KiwiJuiceEasy.new
  end

  describe '#thePouring' do
    context 'with ex0' do
      it 'returns [0, 13]' do
        capacities = [20, 20]
        bottles = [5, 8]
        from_id = [0]
        to_id = [1]
        expect = [0, 13]

        @kiwiJuiceEasy.thePouring(capacities, bottles, from_id, to_id).should eq expect
      end
    end

    context 'with ex1' do
      it 'returns [3, 10]' do
        capacities = [10, 10]
        bottles = [5, 8]
        from_id = [0]
        to_id = [1]
        expect = [3, 10]

        @kiwiJuiceEasy.thePouring(capacities, bottles, from_id, to_id).should eq expect
      end
    end

    context 'with ex2' do
      it 'returns [10, 10, 0]' do
        capacities = [30, 20, 10]
        bottles = [10, 5, 5]
        from_id = [0, 1, 2]
        to_id = [1, 2, 0]
        expect = [10, 10, 0]

        @kiwiJuiceEasy.thePouring(capacities, bottles, from_id, to_id).should eq expect
      end
    end

    context 'with ex3' do
      it 'returns [0, 14, 65, 35, 25, 35]' do
        capacities = [14, 35, 86, 58, 25, 62]
        bottles = [6, 34, 27, 38, 9, 60]
        from_id = [1, 2, 4, 5, 3, 3, 1, 0]
        to_id = [0, 1, 2, 4, 2, 5, 3, 1]
        expect = [0, 14, 65, 35, 25, 35]

        @kiwiJuiceEasy.thePouring(capacities, bottles, from_id, to_id).should eq expect
      end
    end

    context 'with ex4' do
      it 'returns [0, 156956, 900000, 856956]' do
        capacities = [700000, 800000, 900000, 1000000]
        bottles = [478478, 478478, 478478, 478478]
        from_id = [2, 3, 2, 0, 1]
        to_id = [0, 1, 1, 3, 2]
        expect = [0, 156956, 900000, 856956]

        @kiwiJuiceEasy.thePouring(capacities, bottles, from_id, to_id).should eq expect
      end
    end
  end
end
