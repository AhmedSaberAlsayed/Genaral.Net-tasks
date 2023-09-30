<?php 
//task-1
function reverseNumber($number) {
    $reversed = 0;

    while ($number > 0) {
        $remainder = $number % 10;
        $reversed = ($reversed * 10) + $remainder;
        $number = (int)($number / 10);
    }
    return $reversed;
}

$x = 32243;
$reversedNumber = reverseNumber($x);
echo "Reversed number: " . $reversedNumber;


//task-2

function sortStringAlphabetically($string) {
    $length = strlen($string);

    // Convert the string to an array of characters
    $characters = [];
    for ($i = 0; $i < $length; $i++) {
        $characters[] = $string[$i];
    }

    // Sort the characters using bubble sort algorithm
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($characters[$j] > $characters[$j + 1]) {
                // Swap characters
                $temp = $characters[$j];
                $characters[$j] = $characters[$j + 1];
                $characters[$j + 1] = $temp;
            }
        }
    }

    // Convert the sorted array back to a string
    $sortedString = implode('', $characters);

    return $sortedString;
}

// Example usage
$inputString = 'webmaster';
$sortedString = sortStringAlphabetically($inputString);
echo "Sorted string: " . $sortedString;


// task-3
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $string = strtolower($string);

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// Example usage
$inputString = 'The quick brown fox';
$vowelCount = countVowels($inputString);
echo "Number of vowels: " . $vowelCount;




// task-4 

function capitalizeFirstLetter($string) {
    $words = explode(' ', $string);
    $capitalizedWords = [];

    foreach ($words as $word) {
        $firstLetter = $word[0];
        $restOfWord = substr($word, 1);

        $capitalizedWord = strtoupper($firstLetter) . $restOfWord;
        $capitalizedWords[] = $capitalizedWord;
    }

    $result = implode(' ', $capitalizedWords);
    return $result;
}

// Example usage
$inputString = 'the quick brown fox';
$capitalizedString = capitalizeFirstLetter($inputString);
echo "Capitalized string: " . $capitalizedString;


//task-5

function findLargestNumber($numbers) {
    $largest = $numbers[0];

    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $largest) {
            $largest = $numbers[$i];
        }
    }

    return $largest;
}

// Example usage
$numbers = [-5, -2, -6, 0, -1];
$largestNumber = findLargestNumber($numbers);
echo "Largest number: " . $largestNumber;

//task-6

function bubbleSort($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap elements
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

// Example usage
$unsortedArray = [5, 2, 8, 1, 3];
$sortedArray = bubbleSort($unsortedArray);
echo "Sorted array: " . implode(", ", $sortedArray);

//task-7
    

function isPalindrome($word) {
    $length = strlen($word);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($word[$i] !== $word[$length - $i - 1]) {
            return false;
        }
    }

    return true;
}

// Example usage
$word1 = 'noon';
$word2 = 'exe';
$word3 = 'teet';
$word4 = 'exex';
$word5 = 'test';
$word6 = 'tete';
$word7 = 'Emad';

echo "Is '$word1' a palindrome? " . (isPalindrome($word1) ? "Yes" : "No") . "\n";
echo "Is '$word2' a palindrome? " . (isPalindrome($word2) ? "Yes" : "No") . "\n";
echo "Is '$word3' a palindrome? " . (isPalindrome($word3) ? "Yes" : "No") . "\n";
echo "Is '$word4' a palindrome? " . (isPalindrome($word4) ? "Yes" : "No") . "\n";
echo "Is '$word5' a palindrome? " . (isPalindrome($word5) ? "Yes" : "No") . "\n";
echo "Is '$word6' a palindrome? " . (isPalindrome($word6) ? "Yes" : "No") . "\n";
echo "Is '$word7' a palindrome? " . (isPalindrome($word7) ? "Yes" : "No") . "\n";


//task-8

function calculateFactorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

// Example usage
$number = 4;
$factorial = calculateFactorial($number);
echo "Factorial of $number: " . $factorial;


?>