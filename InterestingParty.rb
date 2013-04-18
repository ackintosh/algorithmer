class InterestingParty

  def initialize
    @invitation_count = {}
  end

  def bestInvitation(first, second)
    countup(first + second)
    k, v = @invitation_count.max { |a, b| a[1] <=> b[1] }
    v
  end

  def countup(invitations)
    invitations.each do |i|
      @invitation_count[i] = 0 if @invitation_count[i] == nil
      @invitation_count[i] += 1
    end
  end
end
