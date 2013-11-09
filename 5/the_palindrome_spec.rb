require './the_palindrome'

describe ThePalindrome do
  examples = [
    { s: "abab",    expect: 5},
    { s: "abacaba", expect: 7},
    { s: "qwerty",  expect: 11},
    { s: "abdfhdyrbdbsdfghjkllkjhgfds", expect: 38},
  ]

  before do
    @tp = ThePalindrome.new
  end

  examples.each_with_index do |ex, idx|
    context "#find with example #{idx}" do
      it { @tp.find(examples[idx][:s]).should == examples[idx][:expect] }
    end
  end
end
