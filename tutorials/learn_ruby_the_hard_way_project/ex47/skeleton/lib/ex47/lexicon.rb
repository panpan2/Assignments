module Lexicon

    def Lexicon.convert_to_number(n)
        begin
            return Integer(n)
        rescue
            return nil
        end
    end

    def Lexicon.scan(sentence)
        words = sentence.split(' ')
        parsed = []
        directions = ['north', 'south', 'east', 'west', 'up', 'down', 'left', 'right', 'back']
        verbs = ['go', 'stop', 'kill', 'eat']
        stop = ['the', 'in', 'of', 'from', 'at', 'it']
        nouns = ['door', 'bear', 'princess', 'cabinet']
        words.each do |word|
            if (directions.include?(word))
                parsed.push(['direction', word])
            elsif (verbs.include?(word))
                parsed.push(['verb', word])
            elsif (stop.include?(word))
                parsed.push(['stop', word])
            elsif (nouns.include?(word))
                parsed.push(['noun', word])
            else
                num = convert_to_number(word)
                if (num == nil)
                    # error
                    parsed.push(['error', word])
                else
                    #number
                    parsed.push(['number', num])
                end
            end
        end
        return parsed
    end
end
