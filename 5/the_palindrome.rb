class ThePalindrome
  def find(s)
    original_size = s.size
    s.size.upto(s.size * 2) do |i|
      size_diff = i - original_size
      s_index = 0 + size_diff
      e_index = (i - 1) - size_diff

      return i if s_index == e_index

      while (s_index != e_index) do
        break if s[s_index] != s[e_index]
        s_index += 1
        e_index -= 1
        return i if s_index == e_index
        return i if s_index == original_size
      end
    end
  end
end

