<?php

    function getPws($lng) {

        $charSet = "";
        for ($x=ord('a');$x<=ord('z');$x++) {

            $charSet .= chr($x);
        }
        for ($x=ord('A');$x<=ord('Z');$x++) {

            $charSet .= chr($x);
        }
        for ($x=ord('0');$x<=ord('9');$x++) {

            $charSet .= chr($x);
        }
        for ($x=ord('!');$x<=ord('/');$x++) {

            $charSet .= chr($x);
        }

        $pws = "";
        for ($x=0;$x<$lng;$x++) {

            $rndCharIndex = rand(0, strlen($charSet)-1);
            $rndChar = $charSet[$rndCharIndex];

            $pws .= $rndChar;
        }

        return $pws;
    }

    function getAdvPws($lng, $number, $letter, $symbol, $duplicate) {

        $charSet = "";
        if ($number) {

            for ($x=ord('0');$x<=ord('9');$x++) {

                $charSet .= chr($x);
            }
        }

        if ($letter) {

            for ($x=ord('a');$x<=ord('z');$x++) {

                $charSet .= chr($x);
            }
            for ($x=ord('A');$x<=ord('Z');$x++) {
    
                $charSet .= chr($x);
            }
        }

        if ($symbol) {

            for ($x=ord('!');$x<=ord('/');$x++) {

                $charSet .= chr($x);
            }
        }

        $pws = "";
        while(strlen($pws) < $lng) {

            $rndCharIndex = rand(0, strlen($charSet)-1);
            $rndChar = $charSet[$rndCharIndex];

            if (
                strpos($pws, $rndChar) !== false 
                && !$duplicate
            ) {

                continue;
            }

            $pws .= $rndChar;
        }

        return $pws;
    }