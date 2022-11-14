function countNumber($number):int{
    return $number < 10 ? ($number < 5) : ($number % 10 < 5) + countNumber($number/10);
}
echo countNumber(413893);
