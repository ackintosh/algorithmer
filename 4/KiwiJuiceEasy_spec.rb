require './KiwiJuiceEasy'

describe Bottle do
  context "when initialized with 10, 3" do
    subject { Bottle.new(10, 3) }

    its(:amount) { should == 3 }
    its(:free) { should == 7 }
  end

  context "when initialized with 10, 3 and #in with 5" do
    before do
      @bottle = Bottle.new(10, 3)
      @bottle.in(5)
    end
    subject { @bottle }

    its(:amount) { should == 8 }
    its(:free) { should == 2 }
  end

  context "when initialized with 10, 3 and #out with 2" do
    before do
      @bottle = Bottle.new(10, 3)
      @bottle.out(2)
    end
    subject { @bottle }

    its(:amount) { should == 1 }
    its(:free) { should == 9 }
  end
end

describe KiwiJuiceEasy do
  context "#the_pouring" do
    before do
      @k = KiwiJuiceEasy.new
    end

    context "with example0" do
      it "should return [0, 13]" do
        capacities = [20, 20]
        bottles    = [5, 8]
        from_id    = [0]
        to_id      = [1]
        @k.the_pouring(capacities, bottles, from_id, to_id).should == [0, 13]
      end
    end

    context "with example1" do
      it "should return [3, 10]" do
        capacities = [10, 10]
        bottles    = [5, 8]
        from_id    = [0]
        to_id      = [1]
        @k.the_pouring(capacities, bottles, from_id, to_id).should == [3, 10]
      end
    end

    context "with example2" do
      it "should return [10, 10, 0]" do
        capacities = [30, 20, 10]
        bottles    = [10, 5, 5]
        from_id    = [0, 1, 2]
        to_id      = [1, 2, 0]
        @k.the_pouring(capacities, bottles, from_id, to_id).should == [10, 10, 0]
      end
    end

    context "with example3" do
      it "should return [0, 14, 65, 35, 25, 35]" do
        capacities = [14, 35, 86, 58, 25, 62]
        bottles    = [6, 34, 27, 38, 9, 60]
        from_id    = [1, 2, 4, 5, 3, 3, 1, 0]
        to_id      = [0, 1, 2, 4, 2, 5, 3, 1]
        @k.the_pouring(capacities, bottles, from_id, to_id).should == [0, 14, 65, 35, 25, 35]
      end
    end

    context "with example4" do
      it "should return [0, 156956, 900000, 856956]" do
        capacities = [700000, 800000, 900000, 1000000]
        bottles    = [478478, 478478, 478478, 478478]
        from_id    = [2, 3, 2, 0, 1]
        to_id      = [0, 1, 1, 3, 2]
        @k.the_pouring(capacities, bottles, from_id, to_id).should == [0, 156956, 900000, 856956]
      end
    end
  end
end
