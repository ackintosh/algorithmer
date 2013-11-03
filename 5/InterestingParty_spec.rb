require './InterestingParty'

describe InterestCount do
  context "#up with 'fishing'" do
    before do
      @ic = InterestCount.new
      @ic.up("fishing")
    end

    it "@interest has :fishing key" do
      @ic.interest.should have_key(:fishing)
    end

    it "@interest[:fishing] is 1" do
      @ic.interest[:fishing].should == 1
    end
  end

  context "#up with 'fishing' 2times and with 'programming' 4times'" do
    before do
      @ic = InterestCount.new
      2.times { @ic.up('fishing') }
      4.times { @ic.up('programming') }
    end

    it "#best should 4" do
      @ic.best.should == 4
    end
  end
end
