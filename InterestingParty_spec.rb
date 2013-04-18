require './InterestingParty'

describe InterestingParty do
  before :each do
    @interestingParty = InterestingParty.new
  end

  describe '#bestInvitation' do
    context 'with ex0' do
      it 'returns 4' do
        first = ["fishing", "gardening", "swimming", "fishing"]
        second = ["hunting", "fishing", "fishing", "biting"]
        expect = 4

        @interestingParty.bestInvitation(first, second).should eq 4
      end
    end

    context 'with ex1' do
      it 'returns 1' do
        first = ["variety", "diversity", "loquacity", "courtesy"]
        second = ["talking", "speaking", "discussion", "meeting"]
        expect = 1

        @interestingParty.bestInvitation(first, second).should eq 1
      end
    end

    context 'with ex2' do
      it 'returns 3' do
        first = ["snakes", "programming", "cobra", "monty"]
        second = ["python", "python", "anaconda", "python"]
        expect = 3

        @interestingParty.bestInvitation(first, second).should eq 3
      end
    end

    context 'with ex3' do
      it 'returns 6' do
        first = ["t", "o", "p", "c", "o", "d", "e", "r", "s", "i", "n", "g", "l",
                                "e", "r", "o", "u", "n", "d", "m", "a", "t", "c", "h", "f", "o",
                                "u", "r", "n", "i"]
        second = ["n", "e", "f", "o", "u", "r", "j", "a", "n", "u", "a", "r", "y",
                                "t", "w", "e", "n", "t", "y", "t", "w", "o", "s", "a", "t", "u",
                                "r", "d", "a", "y"]
        expect = 6

        @interestingParty.bestInvitation(first, second).should eq 6
      end
    end
  end
end
