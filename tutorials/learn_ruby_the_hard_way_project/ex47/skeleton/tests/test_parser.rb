require 'ex47/parser.rb'
require 'test/unit'

class TestParser < Test::Unit::TestCase

    def test_parse_no_player()
        action = parse_sentence([['verb', 'run'], ['direction', 'north']])
        assert_equal(action.subject, 'player')
        assert_equal(action.verb, 'run')
        assert_equal(action.object, 'north')
    end

    def test_parse_skip_stop()
        action = parse_sentence([['noun', 'bear'], ['verb', 'eat'],                         ['stop', 'the'], ['noun', 'honey']])
        assert_equal(action.subject, 'bear')
        assert_equal(action.verb, 'eat')
        assert_equal(action.object, 'honey')
    end

    def test_parse_error()
        sentence = [['stop', 'is'],['direction', 'south']]
        assert_raise(ParserError.new("Expected verb")) do
            parse_sentence(sentence)
        end
    end

end

