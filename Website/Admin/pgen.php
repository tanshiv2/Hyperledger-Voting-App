<?php

function random_str($length = 8, $charset = 'abcdefghijklmnopqrstuvwxyz')
			    {
			        // Type checks:
			        if (!is_numeric($length)) {
			            throw new InvalidArgumentException(
			                'random_str - Argument 1 - expected an integer'
			            );
			        }
			        if (!is_string($charset)) {
			            throw new InvalidArgumentException(
			                'random_str - Argument 2 - expected a string'
			            );
			        }

			        if ($length < 1) {
			            // Just return an empty string. Any value < 1 is meaningless.
			            return '';
			        }
			        
			        // Remove duplicate characters from $charset
			        $split = str_split($charset);
			        $charset = implode('', array_unique($split));
			        
			        // This is the maximum index for all of the characters in the string $charset
			        $charset_max = strlen($charset) - 1;
			        if ($charset_max < 1) {
			            // Avoid letting users do: random_str($int, 'a'); -> 'aaaaa...'
			            throw new LogicException(
			                'random_str - Argument 2 - expected a string that contains at least 2 distinct characters'
			            );
			        }
			        // Now that we have good data, this is the meat of our function:
			        $random_str = '';
			        for ($i = 0; $i < $length; ++$i) {
			            $r = random_int(0, $charset_max);
			            $random_str .= $charset[$r];
			        }
			        return $random_str;
			    }
?>